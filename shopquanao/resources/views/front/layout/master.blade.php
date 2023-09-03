<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="{{asset('/')}}">
    <meta charset="UTF-8">
    <meta name="description" content="Hust clothes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | HUST CLOTHES</title>

    {{--  Google Font --}}
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    {{--  Css Styles --}}
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="front/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="front/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/style.css" type="text/css">
</head>

<body>

<!--Load trang-->
<div id="preloader">
    <div class="loader"></div>
</div>

<!--Header section begin-->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class="fa fa-envelope"></i>
                    anh.nnh198160@sis.hust.edu.vn
                </div>
                <div class="phone-service">
                    <i clas="fa fa-phone"></i>
                    +84 336004626
                </div>
            </div>

            <div class="ht-right">

                @if(Auth::check())
                    <a href="./account/logout" class="login-panel">
                        <i class="fa fa-user"></i>
                        {{Auth::user()->name}} - Logout
                    </a>
                @else
                <a href="./account/login" class="login-panel"><i class="fa fa-user"></i>Đăng nhập</a>
                @endif

                <div class="lan-selector">
                    <select class="language_drop" name="countries" id="countries" style="width:380px;">
                        <option value="yu" data-image="front/img/flag-vn.jpg" data-imagecss="flag yu"
                                data-title="Viet Nam">Tiếng Việt</option>
                        <option value="yt" data-image="front/img/flag-1.jpg" data-imagecss="flag yt"
                                data-title="English">English</option>
                    </select>
                </div>
                <div class="top-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-instagram"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                </div>

            </div>
        </div>
    </div>

    <div clas="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="/">
                            <img src="front/img/logo-hust.png" height="80" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">

                    <form action="shop">
                    <div class="advanced-search">
                        <button type="button" class="category-btn">Thể loại</button>
                        <div class="input-group">
                            <input name="search" value="{{request('search')}}" type="text" placeholder="Tìm Kiếm">
                            <button type="submit"><i class="ti-search"></i></button>
                        </div>
                    </div>
                    </form>

                </div>
                <div class="col-lg-3 col-md-3 text-right">
                    <ul class="nav-right">
                        <li class="heart-icon">
                            <a href="#">
                                <i class="icon_heart_alt"></i>
                                <span>1</span>
                            </a>
                        </li>
                        <li class="cart-icon">
                            <a href="./cart">
                                <i class="icon_bag_alt"></i>
                                <span class="cart-count">{{ Cart::count()}}</span>
                            </a>
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody>

                                        @foreach(Cart::content() as $cart)
                                            <tr data-rowId="{{$cart->rowId}}">
                                                <td class="si-pic">
                                                    <img style="height: 70px;"
                                                         src="front/img/products/{{$cart->options->images[0]->path}}" alt=""></td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>${{$cart->price}} x {{$cart->qty}}</p>
                                                        <h6>{{$cart->name}}</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i onclick="removeCart('{{$cart->rowId}}')" class="ti-close"></i>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-total">
                                    <span>Tổng:</span>
                                    <h5 >${{Cart::total()}}</h5>
                                </div>
                                <div class="select-button">
                                    <a href="./cart" class="primary-btn view-card">GIỎ HÀNG</a>
                                    <a href="./checkout" class="primary-btn checkout-btn">THANH TOÁN</a>
                                </div>
                            </div>
                        </li>
                        <li class="cart-price">${{Cart::total()}}</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="nav-item">
        <div class="container">
            <div class="nav-depart">
                <div class="depart-btn">
                    <i class="ti-menu"></i>
                    <span>Danh mục sản phẩm</span>
                    <ul class="depart-hover">
                        <li class="active"><a href="#">Hust Brand</a></li>
                        <li><a href="#">Quần Áo Nam</a></li>
                        <li><a href="#">Quần Áo Nữ</a></li>
                        <li><a href="#">Quần Áo Trẻ Em</a></li>
                        <li><a href="#">Underwear</a></li>
                        <li><a href="#">Giày/ Dép</a></li>
                        <li><a href="#">Thời Trang Công Sở</a></li>
                        <li><a href="#">Thời Trang Luxury</a></li>
                    </ul>
                </div>
            </div>
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li class="{{(request()->segment(1) == '') ? 'active' : ''}}"><a href="./">Home</a></li>
                    <li class="{{(request()->segment(1) == 'shop') ? 'active' : ''}}"><a href="./shop">Shop</a></li>
                    <li><a href="#">Bộ Sưu Tập</a>
                        <ul class="dropdown">
                            <li><a href="">Nam</a></li>
                            <li><a href="">Nữ</a></li>
                            <li><a href="">Trẻ Em</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Liên hệ</a></li>
                    <li><a href="#">Pages</a>
                        <ul class="dropdown">
                            <li><a href="./account/my-order">Đơn Hàng</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="./cart">Giỏ Hàng</a></li>
                            <li><a href="./checkout">Thanh Toán</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Đăng Ký</a></li>
                            <li><a href="./account/login">Đăng Nhập</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="moblie-menu-wrap"></div>
        </div>

    </div>

</header>
<!--Header end-->

{{--Body here--}}
@yield('body')

<!--Partner logo section begin-->
<div class="partner-logo">
    <div class="container">
        <div class="logo-carousel owl-carousel">
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-adidas.png">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-nike.png">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-puma.png">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-fila.png">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-vcorp.png">
                </div>
            </div>
        </div>
    </div>
</div>
<!--Partner logo section end-->

<!--Footer section begin-->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-left">
                    <div class="footer-logo">
                        <a href="index.html">
                            <img src="front/img/logo-hust.png" height="25" alt="">
                        </a>
                    </div>
                    <ul>
                        <li>Số 1 Đại Cồ Việt, Hai Bà Trưng, Hà Nội</li>
                        <li>Điện thoại: +84 336004626</li>
                        <li>Email: anh.nnh198160@sis.hust.edu.vn</li>
                    </ul>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1">
                <div class="footer-widget">
                    <h5>Thông tin</h5>
                    <ul>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Thanh Toán</a></li>
                        <li><a href="">Liên Hệ</a></li>
                        <li><a href="">Dịch Vụ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-widget">
                    <h5>Tài Khoản</h5>
                    <ul>
                        <li><a href="">Tài Khoản Của Tôi</a></li>
                        <li><a href="">Liên Hệ</a></li>
                        <li><a href="">Giỏ Hàng</a></li>
                        <li><a href="">Gian Hàng</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="newslatter-item">
                    <h5>Tham Gia Cùng Chúng Tôi Ngay</h5>
                    <p>Nhận E-mail về những sản phẩm mới và những ưu đãi khác</p>
                    <form action="#" class="subscribe-form">
                        <input type="text" placeholder="Nhập E-mail Của Bạn">
                        <button type="button">Gửi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer section end-->

<!--Js Plugins-->
<script src="front/js/jquery-3.3.1.min.js"></script>
<script src="front/js/bootstrap.min.js"></script>
<script src="front/js/jquery-ui.min.js"></script>
<script src="front/js/jquery.countdown.min.js"></script>
<script src="front/js/jquery.nice-select.min.js"></script>
<script src="front/js/jquery.zoom.min.js"></script>
<script src="front/js/jquery.dd.min.js"></script>
<script src="front/js/jquery.slicknav.js"></script>
<script src="front/js/owl.carousel.min.js"></script>
<script src="front/js/owlcarousel2-filter.min.js"></script>
<script src="front/js/main.js"></script>
</body>

</html>
