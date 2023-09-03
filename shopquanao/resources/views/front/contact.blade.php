<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HUST CLOTHES">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HUST CLOTHES</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
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
    <!-- Start coding here -->
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
                    <a href="account/login.blade.php" class="login-panel"><i class="fa fa-user"></i>Đăng nhập</a>
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
                            <a href="index.blade.php">
                                <img src="front/img/logo-hust.png" height="80" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">Thể loại</button>
                            <div class="input-group">
                                <input type="text" placeholder="Bạn cần tìm gì">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
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
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>3</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td class="si-pic"><img src="front/img/select-product-1.jpg" alt=""></td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>$69.00 x 1</p>
                                                        <h6>Áo sơ mì tay dài</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-close"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="si-pic"><img src="front/img/select-product-2.jpg" alt=""></td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>$69.00 x 1</p>
                                                        <h6>Áo len nữ xẻ ngực</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-close"></i>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>Tổng:</span>
                                        <h5>$179.00</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="shop/cart.blade.php" class="primary-btn view-card">GIỎ HÀNG</a>
                                        <a href="checkout/index.blade.php" class="primary-btn checkout-btn">THANH TOÁN</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">$158.00</li>
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
                        <li><a href="index.blade.php">Home</a></li>
                        <li><a href="shop/index.blade.php">Shop</a></li>
                        <li><a href="#">Bộ Sưu Tập</a>
                            <ul class="dropdown">
                                <li><a href="">Nam</a></li>
                                <li><a href="">Nữ</a></li>
                                <li><a href="">Trẻ Em</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.blade.php">Blog</a></li>
                        <li class="active"><a href="contact.blade.php">Liên hệ</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="blog-details.blade.php">Blog</a></li>
                                <li><a href="shopping-cart-html">Giỏ Hàng</a></li>
                                <li><a href="checkout/index.blade.php">Thanh Toán</a></li>
                                <li><a href="faq.blade.php">FAQ</a></li>
                                <li><a href="account/register.blade.php">Đăng Ký</a></li>
                                <li><a href="account/login.blade.php">Đăng Nhập</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="moblie-menu-wrap"></div>
            </div>

        </div>

    </header>
    <!--Header section begin-->

    <!--Breadcrumb section begin-->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Liên hệ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb section end-->

    <!--Map section begin-->
    <div class="map spad">
        <div class="container">
            <div class="map-inner">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30725.05059820438!2d105.8163640811606!3d21.022738359978575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSMOgIE7hu5lpLCBIb8OgbiBLaeG6v20sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e1!3m2!1svi!2s!4v1688747789142!5m2!1svi!2s"
                        height="610" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <div class="icon">
                    <i class="fa fa-map-marker"></i>
                </div>
            </div>
        </div>
    </div>
    <!--Map section begin-->

    <!--Contact section begin-->
    <section class="contact-section spad">
        <section class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-title">
                        <h4>Liên Hệ Với Chúng Tôi</h4>
                        <p>Liên hệ qua các địa chỉ bên dưới hoặc gửi tin nhắn.</p>
                    </div>
                    <div class="contact-widget">
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="ci-text">
                                <span>Địa chỉ:</span>
                                <p>Số 1 Đại Cồ Việt, Hai Bà Trưng, Hà Nội</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="ci-text">
                                <span>Điện thoại:</span>
                                <p>+84 336004626</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-email"></i>
                            </div>
                            <div class="ci-text">
                                <span>Email:</span>
                                <p>anh.nnh198160@sis.hust.edu.vn</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="contact-form">
                        <div class="leave-comment">
                            <h4>Để lại bình luận</h4>
                            <p>Chúng tôi sẽ liên hệ và trả lời thắc mắc của bạn.</p>
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Tên của bạn">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Email của bạn">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Tin nhắn của bạn"></textarea>
                                        <button type="submit" class="site-btn">Gửi tin nhắn</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!--Contact section end-->

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
                            <a href="index.blade.php">
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

    <!-- Js Plugins -->
    <script src="front/js/jquery-3.3.1.min.js"></script>
    <script src="front/js/bootstrap.min.js"></script>
    <script src="front/js/jquery-ui.min.js"></script>
    <script src="front/js/jquery.countdown.min.js"></script>
    <script src="front/js/jquery.nice-select.min.js"></script>
    <script src="front/js/jquery.zoom.min.js"></script>
    <script src="front/js/jquery.dd.min.js"></script>
    <script src="front/js/jquery.slicknav.js"></script>
    <script src="front/js/owl.carousel.min.js"></script>
    <script src="front/js/main.js"></script>
</body>

</html>
