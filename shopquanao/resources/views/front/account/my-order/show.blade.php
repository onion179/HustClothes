@extends('front.layout.master')

@section('title', 'Order Detail')

@section('body')
    <!--Breadcrumb section begin-->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span>Đơn hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb section end-->

    <!--Order Detail section begin-->
    <section class="checkout-section spad">
        <div class="container">
            <form action="#" class="checkout-form">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <a href="#" class="content-btn">
                                ID đơn hàng:
                                <b>#{{$order->id}}</b>
                            </a>
                        </div>
                        <h4>Chi Tiết Đơn Hàng</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="fir">Họ</label>
                                <input disabled type="text" id="fir" value="{{$order->first_name}}">
                            </div>
                            <div class="col-lg-6">
                                <label for="last">Tên</label>
                                <input disabled type="text" id="last" value="{{$order->last_name}}">
                            </div>
                            <div class="col-lg-12">
                                <label for="cun-name">Bí Danh</label>
                                <input disabled type="text" id="cun-name" value="{{$order->company_name}}">
                            </div>
                            <div class="col-lg-12">
                                <label for="cun">Quốc Tịch</label>
                                <input disabled type="text" id="cun" value="{{$order->country}}">
                            </div>
                            <div class="col-lg-12">
                                <label for="street">Địa Chỉ</label>
                                <input disabled type="text" id="street" value="{{$order->street_address}}">
                            </div>
                            <div class="col-lg-12">
                                <label for="zip">Postcode / ZIP</label>
                                <input disabled type="text" id="zip" value="{{$order->postcode_zip}}">
                            </div>
                            <div class="col-lg-12">
                                <label for="town">Tỉnh / Thành Phố</label>
                                <input disabled type="text" id="town" value="{{$order->town_city}}">
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Email</label>
                                <input disabled type="text" id="email" value="{{$order->email}}">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone">Điện Thoại</label>
                                <input disabled type="text" id="phone" value="{{$order->phone}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <a href="#" class="content-btn">
                                Trạng thái:
                                <b>{{\App\Utilities\Constant::$order_status[$order->status]}}</b>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="place-order">
                            <h4>Đơn Hàng Của Bạn</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Sản phẩm <span>Tổng</span></li>

                                    @foreach($order->orderDetails as $orderDetail)
                                        <li class="fw-normal">
                                            {{$orderDetail->product->name}} * {{$orderDetail->qty}}
                                            <span>${{$orderDetail->total}}</span>
                                        </li>
                                    @endforeach

                                    <li class="total-price">
                                        Tổng
                                        <span>${{ array_sum(array_column($order->orderDetails->toArray(), 'total')) }}</span>
                                    </li>
                                </ul>
                                <div class="payment-check">
                                    <div class="pc-item">
                                        <label for="pc-check">
                                            Thanh toán khi nhận hàng
                                            <input disabled type="radio" name="payment_type" value="pay_later" id="pc-check" ư
                                                {{$order->payment_type == 'pay_later' ? 'checked' : ''}}>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="pc-item">
                                        <label for="pc-paypal">
                                            Thanh toán online
                                            <input disabled type="radio" name="payment_type" value="online_payment" id="pc-paypal"
                                                {{$order->payment_type == 'online_payment' ? 'checked' : ''}}>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!--Order Detail section end-->

@endsection
