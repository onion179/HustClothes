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
                        <li class="active"><a href="blog.html">Blog</a></li>
                        <li><a href="contact.blade.php">Liên hệ</a></li>
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
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb section end-->

    <!--Blog section begin-->
    <section clas="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                    <div class="blog-sidebar">
                        <div class="search-form">
                            <h4>Tìm Kiếm</h4>
                            <form action="#">
                                <input type="text" placeholder="Tìm kiếm...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="blog-catagory">
                            <ul>
                                <li><a href="">Hust</a></li>
                                <li><a href="">Du lịch</a></li>
                                <li><a href="">Cắm trại</a></li>
                                <li><a href="">Model</a></li>
                            </ul>
                        </div>
                        <div class="recent-post">
                            <h4>Bài Viết Gần Đây</h4>
                            <div class="recent-blog">
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="front/img/blog/recent-1.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>Thời trang là đỉnh cao...</h6>
                                        <p>Hoàng Anh <span>- 7/7/2023</span></p>
                                    </div>
                                </a>
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="front/img/blog/recent-2.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>Thời trang là đỉnh cao...</h6>
                                        <p>Hoàng Anh <span>- 7/7/2023</span></p>
                                    </div>
                                </a>
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="front/img/blog/recent-3.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>Thời trang là đỉnh cao...</h6>
                                        <p>Hoàng Anh <span>- 7/7/2023</span></p>
                                    </div>
                                </a>
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="front/img/blog/recent-4.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>Thời trang là đỉnh cao...</h6>
                                        <p>Hoàng Anh <span>- 7/7/2023</span></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="blog-tags">
                            <h4>Tags</h4>
                            <div class="tag-item">
                                <a href="#">Quần Thể Thao</a>
                                <a href="#">Áo Khoác</a>
                                <a href="#">Giày</a>
                                <a href="#">Váy</a>
                                <a href="#">Mũ</a>
                                <a href="#">Cặp Sách</a>
                                <a href="#">Áo Thun</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="front/img/blog/blog-1.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="blog-details.blade.php">
                                        <h4>Thời trang là đỉnh cao của nghệ thuật</h4>
                                    </a>
                                    <p>Du lịch <span>- 7/7/2023</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="front/img/blog/blog-2.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="blog-details.blade.php">
                                        <h4>Thời trang là đỉnh cao của nghệ thuật</h4>
                                    </a>
                                    <p>Du lịch <span>- 7/7/2023</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="front/img/blog/blog-3.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="blog-details.blade.php">
                                        <h4>Thời trang là đỉnh cao của nghệ thuật</h4>
                                    </a>
                                    <p>Du lịch <span>- 7/7/2023</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="front/img/blog/blog-4.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="blog-details.blade.php">
                                        <h4>Thời trang là đỉnh cao của nghệ thuật</h4>
                                    </a>
                                    <p>Du lịch <span>- 7/7/2023</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="front/img/blog/blog-5.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="blog-details.blade.php">
                                        <h4>Thời trang là đỉnh cao của nghệ thuật</h4>
                                    </a>
                                    <p>Du lịch <span>- 7/7/2023</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="front/img/blog/blog-6.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="blog-details.blade.php">
                                        <h4>Thời trang là đỉnh cao của nghệ thuật</h4>
                                    </a>
                                    <p>Du lịch <span>- 7/7/2023</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="loading-more">
                                <i class="icon_loading"></i>
                                <a href="#">Loading More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog section end-->

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
