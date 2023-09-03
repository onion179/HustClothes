
@extends('front.layout.master')

@section('title', 'Cart')

@section('body')

    <!--Shopping cart section begin-->
    <div class="shopping-cart spad">
        <div class="container">
            <div class="row">

                @if(Cart::count() > 0)
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Ảnh</th>
                                    <th class="p-name">Tên Sản Phẩm</th>
                                    <th>Giá</th>
                                    <th>Số Lượng</th>
                                    <th>Tổng</th>
                                    <th>
                                        <i onclick="confirm('Bạn muốn xóa toàn bỏ giỏ hàng?') === true ? destroyCart() : ''"
                                           style="cursor: pointer" class="ti-close"></i>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($carts as $cart)
                                <tr data-rowid="{{$cart->rowId}}">
                                    <td class="cart-pic first-row">
                                        <img style="height: 170px;"
                                            src="front/img/products/{{$cart->options->images[0]->path}}" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5>{{$cart->name}}</h5>
                                    </td>
                                    <td class="p-price first-row">${{number_format($cart->price, 2)}}</td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="{{$cart->qty}}" data-rowId="{{$cart->rowId}}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price first-row">${{number_format($cart->price * $cart->qty, 2)}}</td>
                                    <td class="close-td first-row">
                                        <i onclick="removeCart('{{$cart->rowId}}')" class="ti-close"></i>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="#" class="primary-btn continue-shop">Shop</a>
                                <a href="#" class="primary-btn up-cart">Cập Nhật Giỏ Hàng</a>
                            </div>
                            <div class="discount-coupon">
                                <h6>Mã Khuyến Mãi</h6>
                                <form action="#" class="coupon-form">
                                    <input type="text" placeholder="Nhập mã khuyến mãi">
                                    <button type="submit" class="site-btn coupon-btn">Áp Dụng</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Tổng<span>${{$total}}</span></li>
                                    <li class="cart-total">Tổng Cộng <span>${{$subtotal}}</span></li>
                                </ul>
                                <a href="./checkout" class="proceed-btn">Thanh Toán</a>
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
        </div>
    </div>
    <!--Shopping cart section begin-->

@endsection
