@extends('layouts.clients')
@section('title','dangky')
@section('content')
<!-- breadcrumb-area -->
<div class="banner-area breadcrumb-area padding-top-120 padding-bottom-90">
    <div class="bread-shapes">
        <span class="b-shape-1 item-bounce"><img src="{{ asset('assets/client/images/img/5.png') }}" alt=""></span>
        <span class="b-shape-2"><img src="{{ asset('assets/client/images/img/6.png') }}" alt=""></span>
        <span class="b-shape-3"><img src="{{ asset('assets/client/images/img/7.png') }}" alt=""></span>
        <span class="b-shape-4"><img src="{{ asset('assets/client/images/img/9.png') }}" alt=""></span>
        <span class="b-shape-5"><img src="{{ asset('assets/client/images/shapes/18.png') }}" alt=""></span>
        <span class="b-shape-6 item-animateOne"><img src="{{ asset('assets/client/images/img/7.png') }}"
                alt=""></span>
    </div>
    <div class="container padding-top-120">
        <div class="row justify-content-center">
            <nav aria-label="breadcrumb">
                <h2 class="page-title">Trang đăng ký</h2>
                <ol class="breadcrumb text-center">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a> / <a href="{{ route('register') }}">Đăng ký</a></li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- contact-form-area -->
<section class="about-area about-area2 writeto-us login-area signup-area padding-top-120 padding-bottom-120">
    <div class="form-shapes">
        <span class="fs1 item-animateOne"><img src="{{ asset('assets/client/images/shapes/1.png') }}"  alt=""></span>
        <span class="fs2 item-bounce"><img src="{{ asset('assets/client/images/shapes/12.png') }}" alt=""></span>
        <span class="fs3"><img src="{{ asset('assets/client/images/shapes/13.png') }}" alt=""></span>
        <span class="fs4 item-bounce"><img src="{{ asset('assets/client/images/shapes/26.png') }}" alt=""></span>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12  wow fadeInUp">
                <div class="about-left">
                    <div class="about-l-shapes">
                        <span class="als-1"><img src="{{ asset('assets/client/images/shapes/2.png') }}" alt=""></span>
                    </div>
                    <div class="row">
                        <div
                            class="col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-end justify-content-end margin-bottom-20">
                            <div class="about-gallery-1">
                                <img src="{{ asset('assets/client/images/gallery/1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-8 margin-bottom-20">
                            <div class="about-gallery-2">
                                <img src="{{ asset('assets/client/images/gallery/2.jpg') }}" alt="">

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="about-gallery-3">
                                <img src="{{ asset('assets/client/images/gallery/3.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-5 d-flex align-items-stretch ">
                            <div class="about-gallery-5 text-center">
                                <img src="{{ asset('assets/client/images/gallery/5.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 wow fadeInUp">
                <div class="contact-form-area login-form-area signup-form-area">
                    <h3>Đăng ký <span>ngay</span></h3>
                    <form action="#">
                        <div class="google-button">
                            <a href="#" class="btn"><span><i class="fab fa-google"></i></span> google</a>
                        </div>
                        <input type="text" placeholder="name">
                        <input type="email" placeholder="email">
                        <input type="password" placeholder="password">
                        <input type="password" placeholder="confirm password">
                        <div class="checkbox-area">
                            <div class="checkbox-part">
                                <input type="checkbox" id="remember">
                                <label for="remember">Ghi nhớ tôi</label>
                            </div>
                            <div class="forgot-pas">
                                <a href="#">Quên mật khẩu?</a>
                            </div>
                        </div>
                        <div class="login-btn">
                            <button type="submit" class="btn">Đăng ký</button>
                            <span>Bạn đã có tài khoản? <a href="login.html">Đăng nhập</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
