@extends('front.layout.master')

@section('title', 'Home')

@section('body')
    <!--Hero section begin-->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="front/img/hero1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Quần áo, giày dép</span>
                            <h1>Black Friday</h1>
                            <p>Phong cách thoải mái? Hay bắt trend thật đỉnh?</p>
                            <a href="#" class="primary-btn">Mua Ngay</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="front/img/hero2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Quần áo, giày dép</span>
                            <h1>Black Friday</h1>
                            <p>Phong cách thoải mái? Hay bắt trend thật đỉnh?</p>
                            <a href="#" class="primary-btn">Mua Ngay</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Hero section end-->

    <!--Banner section begin-->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                <div class="single-banner">
                    <img src="front/img/banner-men.jpg" alt="">
                    <div class="inner-text">
                        <h4>Men's</h4>
                    </div>
                </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-women.jpg" alt="">
                        <div class="inner-text">
                            <h4>Women's</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-kid.jpg" alt="">
                        <div class="inner-text">
                            <h4>Kid's</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Banner section end-->

    <!--Women banner section begin-->
    <div class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="front/img/products/women-large.jpg">
                        <h2>Women's</h2>
                        <a href="#">Khám Phá Thêm</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active item" data-tag="*" data-category="women">Tất Cả</li>
                            <li class="item" data-tag=".Clothing" data-category="women">Quần Áo</li>
                            <li class="item" data-tag=".HandBag" data-category="women">Túi Xách</li>
                            <li class="item" data-tag=".Shoes" data-category="women">Giày Dép</li>
                            <li class="item" data-tag=".Accessories" data-category="women">Phụ Kiện</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel women">

                        @foreach($featuredProducts['women'] as $product)
                            @include('front.components.product-item')
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Women banner section end-->

    <!--Deal of the week section begin-->
    <section class="deal-of-week set-bg spad" data-setbg="front/img/time-bg.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Khuyến Mãi Tuần</h2>
                    <p>Đăng Nhập Liền Tay - Nhận Ngay Ưu Đãi</p>
                    <div class="product-price">
                        $25.00
                        <span>/ Túi xách</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>17</span>
                        <p>Ngày</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Giờ</p>
                    </div>
                    <div class="cd-item">
                        <span>31</span>
                        <p>Phút</p>
                    </div>
                    <div class="cd-item">
                        <span>51</span>
                        <p>Giây</p>
                    </div>
                </div>
                <a href="" class="primary-btn">Mua Hàng Ngay</a>
            </div>
        </div>
    </section>
    <!--Deal of the week section end-->

    <!--Men banner section begin-->
    <div class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li class="active item" data-tag="*" data-category="men">Tất Cả</li>
                            <li class="item" data-tag=".Clothing" data-category="men">Quần Áo</li>
                            <li class="item" data-tag=".HandBag" data-category="men">Túi Xách</li>
                            <li class="item" data-tag=".Shoes" data-category="men">Giày Dép</li>
                            <li class="item" data-tag=".Accessories" data-category="men">Phụ Kiện</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel men">

                        @foreach($featuredProducts['men'] as $product)
                            @include('front.components.product-item')
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg" data-setbg="front/img/products/man-large.jpg">
                        <h2>Men's</h2>
                        <a href="#">Khám Phá Thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Men banner section end-->

    <!--Instagram section begin-->
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="front/img/insta-hust.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Hust Colothes Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-hust2.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Hust Colothes Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-3.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Hust Colothes Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-4.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Hust Colothes Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-5.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Hust Colothes Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-6.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Hust Colothes Collection</a></h5>
            </div>
        </div>
    </div>
    <!--Instagram section end-->

    <!--Latest blog section begin-->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($blogs as $blog)
                <div class="col-lg-4 col-md6">
                    <div class="single-latest-blog">
                        <img src="front/img/blog/{{$blog->image}}">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    {{date('M d, Y', strtotime($blog->created_at))}}
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    {{count($blog->blogComments)}}
                                </div>
                            </div>
                            <a href="#">
                                <h4>{{$blog->title}}</h4>
                            </a>
                            <p>{{$blog->subtitle}}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Free Shipping</h6>
                                <p>Cho Tất Cả Hóa Đơn Trên 99$ </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Giao Hàng Đúng Hẹn</h6>
                                <p>Nếu không có vấn đề xảy ra</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-3.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Bảo Mật Thanh Toán</h6>
                                <p>100% bảo mật thanh toán cho khách hàng</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Latest blog section end-->

@endsection
