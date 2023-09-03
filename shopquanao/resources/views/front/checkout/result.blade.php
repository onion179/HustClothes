

@extends('front.layout.master')

@section('title', 'Result')

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

    <!--Section begin-->
    <section class="checkout-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 style="padding-bottom: 20px;">
                        {{ $notification }}
                    </h4>

                    <a href="./" class="primary-btn">Tiếp tục mua hàng</a>
                </div>
            </div>
        </div>
    </section>
    <!--Section end-->

@endsection

