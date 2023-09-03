<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Order\OrderServiceInterface;
use App\Services\OrderDetail\OrderDetailServiceInterface;
use App\Utilities\Constant;
use App\Utilities\VNPay;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckOutController extends Controller
{
    private $orderService;
    private $orderDetailService;
    public function __construct(OrderServiceInterface $orderService,
                                OrderDetailServiceInterface $orderDetailService)
    {
        $this->orderService = $orderService;
        $this->orderDetailService = $orderDetailService;
    }

    public function index()
    {
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        return view('front.checkout.index', compact('carts', 'total', 'subtotal'));
    }

    public function addOrder(Request $request)
    {
        //Thêm đơn hàng
        $data = $request->all();
        $data['status'] = Constant::order_status_ReceiveOrders;
        $order = $this->orderService->create($data);

        //Thêm chi tiết đơn hàng
        $carts = Cart::content();

        foreach ($carts as $cart) {
            $data = [
                'order_id' => $order->id,
                'product_id' => $cart->id,
                'qty' => $cart->qty,
                'amount' => $cart->price,
                'total' => $cart->qty * $cart->price,
            ];

            $this->orderDetailService->create($data);
        }

        if ($request->payment_type == 'pay_later') {
            // Gửi email
            $total = Cart::total();
            $subtotal = Cart::subtotal();
            $this->sendEmail($order, $total, $subtotal);

            //Xóa giỏ hàng
            Cart::destroy();

            //Trả về kết quả thông báo
            return redirect('checkout/result')
                ->with('notification', 'Đặt hàng thành công! Đơn hàng được chuẩn bị để gửi đến bạn. Vui lòng kiểm tra email.');
        }

        if ($request->payment_type == 'online_payment') {
            // Lấy URL thanh toán VNPay
            $data_url = VNPay::vnpay_create_payment([
                'vnp_TxnRef' => $order->id, //ID của đơn hàng.
                'vnp_OrderInfo' => 'Mô tả đơn hàng...', //Mô tả đơn hàng.
                'vnp_Amount' => Cart::total(0, '', '') * 23654 , // Tổng giá đơn hàng
            ]);

            // Chuyển hướng URL lấy được
            return redirect()->to($data_url);
        }
    }

    public function vnPayCheck(Request $request)
    {
        // Lấy data từ URl (VNPay gửi về qua $vnp_Returnurl)
        $vnp_Amount = $request->get('vnp_Amount'); // Số tiền thanh toán
        $vnp_TxnRef = $request->get('vnp_TxnRef'); // order_id
        $vnp_ResponseCode = $request->get('vnp_ResponseCode'); // Mã phản hồi kq thanh toán. 00 = OK


        // Kiểm tra data, xem kết quả giao dịch trả về từ VNPay hợp lệ không
        if ($vnp_ResponseCode != null) {
            // Nếu thành công
            if ($vnp_ResponseCode == 00) {
                // Cập nhật trạng thái Order
                $this->orderService->update(['status' => Constant::order_status_Paid], $vnp_TxnRef);

                // Gửi email
                $order = $this->orderService->find($vnp_TxnRef); //order_id
                $total = Cart::total();
                $subtotal = Cart::subtotal();
                $this->sendEmail($order, $total, $subtotal);

                // Xóa giỏ hàng
                Cart::destroy();

                // Thông báo kq
                return redirect('checkout/result')
                    ->with('notification', 'Thanh toán thành công! Vui lòng kiểm tra email.');
            } else { // Nếu không thành công
                //Xóa đơn hàng đã thêm vào DB
                $this->orderService->delete($vnp_TxnRef);

                // Thông báo lỗi
                return redirect('checkout/result')
                    ->with('notification', 'LỖI: Thanh toán bị hủy bỏ.');
            }
        }
    }

    public function result()
    {
        $notification = session('notification');
        return view('front.checkout.result', compact('notification'));
    }

    private function sendEmail($order, $total, $subtotal)
    {
        $email_to = $order->email;

        Mail::send('front.checkout.email',
            compact('order', 'total', 'subtotal'),
            function ($message) use ($email_to) {
                $message->from('anh.nnh179@gmail.com', 'HustClothes eShop');
                $message->to($email_to, $email_to);
                $message->subject('Order Notification');
        });
    }
}
