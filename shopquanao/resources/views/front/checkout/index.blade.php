

@extends('front.layout.master')

@section('title', 'Check Out')

@section('body')

    <!--Breadcrumb section begin-->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <a href="#">Pages</a>
                        <span>Thanh toán</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb section end-->

    <!--Checkout section begin-->
    <section class="checkout-section spad">
        <div class="container">
            <form action="" method="post" class="checkout-form">
                @csrf
                <div class="row">

                    @if(Cart:: count() > 0)
                        <div class="col-lg-6">
                            <div class="checkout-content">
                                <a href="#" class="content-btn">Đăng Nhập</a>
                            </div>
                            <h4>Hóa Đơn Chi Tiết</h4>
                            <div class="row">

                                <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id ?? ''}}">

                                <div class="col-lg-6">
                                    <label for="fir">Họ<span>*</span></label>
                                    <input type="text" id="fir" name="first_name">
                                </div>
                                <div class="col-lg-6">
                                    <label for="last">Tên<span>*</span></label>
                                    <input type="text" id="last" name="last_name" >
                                </div>
                                <div class="col-lg-12">
                                    <label for="fir">Bí Danh</label>
                                    <input type="text" id="fir" name="company_name" value="{{Auth::user()->company_name ?? ''}}">
                                </div>
                                <div class="col-lg-12">
                                    <label for="cun">Quốc Tịch<span>*</span></label>
                                    <input type="text" id="cun" name="country" value="{{Auth::user()->country ?? ''}}">
                                </div>
                                <div class="col-lg-12">
                                    <label for="street">Địa Chỉ<span>*</span></label>
                                    <input type="text" id="street-first" name="street_address" class="street-first" value="{{Auth::user()->street_address ?? ''}}">
                                </div>
                                <div class="col-lg-12">
                                    <label for="zip">Postcode / ZIP<span>*</span></label>
                                    <input type="text" id="zip" name="postcode_zip" value="{{Auth::user()->postcode_zip ?? ''}}">
                                </div>
                                <div class="col-lg-12">
                                    <label for="town">Tỉnh / Thành Phố<span>*</span></label>
                                    <input type="text" id="town" name="town_city" value="{{Auth::user()->town_city ?? ''}}">
                                </div>
                                <div class="col-lg-6">
                                    <label for="email">Email<span>*</span></label>
                                    <input type="text" id="email" name="email" value="{{Auth::user()->email ?? ''}}">
                                </div>
                                <div class="col-lg-6">
                                    <label for="phone">Điện Thoại <span>*</span></label>
                                    <input type="text" id="phone" name="phone" value="{{Auth::user()->phone ?? ''}}">
                                </div>

                                <div class="col-lg-12">
                                    <div class="create-item">
                                        <label for="acc-create">
                                            Tạo Tài Khoản Mới?
                                            <input type="checkbox" id="acc-create">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="checkout-content">
                                <input type="text" placeholder="Nhập mã khuyến mãi">
                            </div>
                            <div class="place-order">
                                <h4>Đơn Hàng</h4>
                                <div class="order-total">
                                    <ul class="order-table">
                                        <li>Sản Phẩm <span>Tổng Cộng</span></li>

                                        @foreach($carts as $cart)
                                        <li class="fw-normal">
                                            {{$cart->name}} x {{$cart->qty}}
                                            <span>${{$cart->price * $cart->qty}}</span>
                                        </li>
                                        @endforeach

                                        <li class="fw-normal">Tổng <span>${{$subtotal}}</span></li>
                                        <li class="total-price">Tổng Cộng <span>${{$total}}</span></li>
                                    </ul>
                                    <div class="payment-check">
                                        <div class="pc-item">
                                            <label for="pc-check">
                                                Thanh Toán Khi Nhận Hàng
                                                <input type="radio" name="payment_type" value="pay_later" id="pc-check" checked>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="pc-item">
                                            <label for="pc-paypal">
                                                Thanh Toán Online
                                                <input type="radio" name="payment_type" value="online_payment" id="pc-paypal">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="order-btn">
                                        <button type="submit" class="site-btn place-btn">Đặt hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-12">
                            <h4>Giỏ hàng trống.</h4>
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </section>
    <!--Checkout section end-->

@endsection

