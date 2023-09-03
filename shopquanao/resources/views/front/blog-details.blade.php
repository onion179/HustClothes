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
                        <li class="active"><a href="blog.blade.php">Blog</a></li>
                        <li><a href="contact.blade.php">Liên hệ</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="blog-details.html">Blog</a></li>
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

    <!--Blog Details section begin-->
    <div class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-inner">
                        <div class="blog-detail-title">
                            <h2>Thời trang là đỉnh cao của nghệ thuật</h2>
                            <p>Thời Trang <span>- 7/7/2023</span></p>
                        </div>
                        <div class="blog-large-pic">
                            <img src="front/img/blog/blog-detail.jpg" alt="">
                        </div>
                        <div class="blog-detail-desc">
                            <p>COTTON ON và TYPO là 02 thương hiệu thuộc tập đoàn bán lẻ Cotton On Group đến từ Úc và
                                được phân phối tại Việt Nam bởi Nhà phân phối thương hiệu quốc tế hàng đầu - ACFC từ
                                cuối năm 2019. Với sự phát triển ngày càng lớn mạnh, Cotton On và TYPO sẽ chính thức
                                khai trương thêm 02 cửa hàng mới toanh tại TTTM The Loop IPH từ ngày 15/06/2023.</p>
                        </div>
                        <div class="blog-quote">
                            <p>“Đừng chạy theo xu hướng. Đừng khiến bản thân lệ thuộc vào thời trang. Hãy để chính mình
                                là người quyết định bản thân sẽ mặc gì cũng như sẽ sống ra sao.” <span>- Gianni Versace</span></p>
                        </div>
                        <div class="blog-more">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="front/img/blog/blog-detail-1.jpg" alt="">
                                </div>
                                <div class="col-sm-4">
                                    <img src="front/img/blog/blog-detail-2.jpg" alt="">
                                </div>
                                <div class="col-sm-4">
                                    <img src="front/img/blog/blog-detail-3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tag-share">
                            <div class="details-tag">
                                <ul>
                                    <li><i class="fa fa-fa-tag"></i></li>
                                    <li>Du Lịch</li>
                                    <li>Làm Đẹp</li>
                                    <li>Hust</li>
                                </ul>
                            </div>
                            <div class="blog-share">
                                <span>Chia sẻ:</span>
                                <div class="social-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post">
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <a href="#" class="prev-blog">
                                        <div class="pb-pic">
                                            <i class="ti-arrow-left"></i>
                                            <img src="front/img/blog/prev-blog.png" alt="">
                                        </div>
                                        <div class="pb-text">
                                            <span>Bài Viết Trước Đây:</span>
                                            <h5>Xu hướng thời trang "tiền cũ" trỗi dậy</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-5 col-md-6 offset-lg-2">
                                    <a href="#" class="next-blog">
                                        <div class="nb-pic">
                                            <img src="front/img/blog/next-blog.png" alt="">
                                            <i class="ti-arrow-right"></i>
                                        </div>
                                        <div class="nb-text">
                                          <span>Bài Viết Tiếp Theo:</span>
                                          <h5>Thời trang sao Việt khi đi xem show Blackpink</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="posted-by">
                            <div class="pb-pic">
                                <img src="front/img/blog/post-by.png" alt="">
                            </div>
                            <div class="pb-text">
                                <a href="#">
                                    <h5>Trà My</h5>
                                </a>
                                <p>Trưa 7/7, nhiều người không ăn nghỉ, canh mua vé xem concert của Blackpink - lần đầu
                                    diễn ra ở Việt Nam vào ngày 29 và 30/7. Mở bán từ 12h, webiste liên tục lỗi, mất vài
                                    phút mới truy cập được. Sau một tiếng, vé hạng 1,2 triệu đồng, 1,8 triệu đồng và 3,8
                                    triệu đồng "cháy hàng".</p>
                            </div>
                        </div>
                        <div class="leave-comment">
                            <h4>Để Lại Bình Luận</h4>
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Tên">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Tin Nhắn"></textarea>
                                        <button type="submit" class="site-btn">Gửi Tin Nhắn</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Blog Details section end-->

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
