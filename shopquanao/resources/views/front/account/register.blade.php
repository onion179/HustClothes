

@extends('front.layout.master')

@section('title', 'Register')

@section('body')

    <!--Breadcrumb section begin-->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="../index.blade.php"><i class="fa fa-home"></i> Home</a>
                        <span>Đăng ký</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb section end-->

    <!--Register section begin-->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Đăng Ký</h2>

                        @if(session('notification'))
                            <div class="alert alert-warning" role="alert">
                                {{session('notification')}}
                            </div>
                        @endif

                        <form action="" method="post">
                            @csrf
                            <div class="group-input">
                                <label for="name">Họ Tên *</label>
                                <input type="text" id="name" name="name">
                            </div>
                            <div class="group-input">
                                <label for="email">Email *</label>
                                <input type="email" id="email" name="email">
                            </div>
                            <div class="group-input">
                                <label for="pass">Mật khẩu *</label>
                                <input type="password" id="pass" name="password">
                            </div>
                            <div class="group-input">
                                <label for="con-pass">Xác nhận mật khẩu *</label>
                                <input type="password" id="con-pass" name="password_confirmation">
                            </div>
                            <button type="submit" class="site-btn login-btn">Đăng Ký</button>
                        </form>
                        <div class="switch-login">
                            <a href="./account/login" class="or-login">Bạn đã có tài khoản? Đăng nhập</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Register section end-->

@endsection

