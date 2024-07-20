@extends('layouts.clients')
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
                    <h2 class="page-title">Danh sách món ăn</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="/">Trang chủ </a> / <a href="{{ route('menu') }}">Danh
                                sách món ăn </a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- food-items countdown -->
    <div class="foods-counter menus-area">
        <div class="container">
            <div class="row foods-wrapper menus-wrapper">
                <div class="col-lg-3 col-md-6">
                    <div class="single-food single-menus">
                        <img src="{{ asset('assets/client/images/menu-item/menu2.png') }}" alt="">
                        <h6>Giao hàng siêu nhanh</h6>
                        <p>Giao hàng miễn phí tại địa điểm của bạn</p>
                        <a href="shopping-cart.html">Đặt hàng ngay</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-food single-menus">
                        <img src="{{ asset('assets/client/images/menu-item/menu1.png') }}" alt="">
                        <h6>Chất lượng tốt nhất 100%</h6>
                        <p>Chúng tôi cung cấp thực phẩm chất lượng tốt nhất</p>
                        <a href="shopping-cart.html">Đặt hàng ngay</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-food single-menus">
                        <img src="{{ asset('assets/client/images/menu-item/menu3.png') }}" alt="">
                        <h6>Đảm bảo hoàn tiền</h6>
                        <p>Đảm bảo hoàn tiền 100%</p>
                        <a href="shopping-cart.html">Đặt hàng ngay</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-food single-menus">
                        <img src="{{ asset('assets/client/images/menu-item/menu4.png') }}" alt="">
                        <h6>Thực đơn món ăn ngon</h6>
                        <p>Thực phẩm Khan cung cấp thực phẩm tốt nhất</p>
                        <a href="shopping-cart.html">Đặt hàng ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- chicken tab-area -->
    <section class="menu-area  pizza-area burger-area chicken-area padding-top-40">
        <div class="menu-i-shapes">
            <span class="bleft"><img src="{{ asset('assets/client/images/menu-item/bleft.png') }}" alt=""></span>
        </div>
        <div class="container">
            <div class="common-title-area text-center padding-40">
                <h3>món ăn</h3>
                <h2>thực đơn gà <span></span> </h2>
            </div>
            <!-- menu-nav-wrapper -->
            <div class="menu-nav-wrapper">
                <div class="container">
                    <div class="row">
                        <ul class="nav" id="myTab" role="tablist">
                            <!-- menu-nav-1 -->
                            <li class="nav-item" role="presentation">
                                <div class="nav-link active" id="nav-chicken-1" data-bs-toggle="tab"
                                    data-bs-target="#chicken-1" role="tab" aria-controls="chicken-1"
                                    aria-selected="true">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="{{ asset('assets/client/images/menu-item/tc1.png') }}"
                                                alt="">
                                        </div>
                                        <h6>Spicy Chicken</h6>
                                        <span class="g-s-4"><img src="{{ asset('assets/client/images/shapes/10.png') }}"
                                                alt=""></span>
                                        <span class="g-s-5"><img src="{{ asset('assets/client/images/shapes/14.png') }}"
                                                alt=""></span>
                                    </div>
                                </div>
                            </li>
                            <!-- menu-nav-2 -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nav-chicken-2" data-bs-toggle="tab" data-bs-target="#chicken-2"
                                    type="button" role="tab" aria-controls="chicken-2" aria-selected="false">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="{{ asset('assets/client/images/menu-item/tc2.png') }}"
                                                alt="">
                                        </div>
                                        <h6>Chicken Fry</h6>
                                        <span class="g-s-4"><img src="{{ asset('assets/client/images/shapes/10.png') }}"
                                                alt=""></span>
                                        <span class="g-s-5"><img src="{{ asset('assets/client/images/shapes/14.png') }}"
                                                alt=""></span>
                                    </div>
                                </button>
                            </li>
                            <!-- menu-nav-3 -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nav-chicken-3" data-bs-toggle="tab"
                                    data-bs-target="#chicken-3" type="button" role="tab" aria-controls="chicken-3"
                                    aria-selected="false">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="{{ asset('assets/client/images/menu-item/tc3.png') }}"
                                                alt="">
                                        </div>
                                        <h6>Chicken Stick</h6>
                                        <span class="g-s-4"><img src="{{ asset('assets/client/images/shapes/10.png') }}"
                                                alt=""></span>
                                        <span class="g-s-5"><img src="{{ asset('assets/client/images/shapes/14.png') }}"
                                                alt=""></span>
                                    </div>
                                </button>
                            </li>
                            <!-- menu-nav-4 -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nav-chicken-4" data-bs-toggle="tab"
                                    data-bs-target="#chicken-4" type="button" role="tab" aria-controls="chicken-4"
                                    aria-selected="false">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="{{ asset('assets/client/images/menu-item/tc4.png') }}"
                                                alt="">
                                        </div>
                                        <h6>Chicken Bites</h6>
                                        <span class="g-s-4"><img src="{{ asset('assets/client/images/shapes/10.png') }}"
                                                alt=""></span>
                                        <span class="g-s-5"><img src="{{ asset('assets/client/images/shapes/14.png') }}"
                                                alt=""></span>
                                    </div>
                                </button>
                            </li>
                            <!-- menu-nav-5 -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nav-chicken-5" data-bs-toggle="tab"
                                    data-bs-target="#chicken-5" type="button" role="tab" aria-controls="chicken-5"
                                    aria-selected="false">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="{{ asset('assets/client/images/menu-item/tc5.png') }}"
                                                alt="">
                                        </div>
                                        <h6>Crispy Strips</h6>
                                        <span class="g-s-4"><img src="{{ asset('assets/client/images/shapes/10.png') }}"
                                                alt=""></span>
                                        <span class="g-s-5"><img src="{{ asset('assets/client/images/shapes/14.png') }}"
                                                alt=""></span>
                                    </div>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- menu-items-wrapper -->
            <div class="tab-content" id="nav-tabContent">
                <!-- menu-items-1 -->
                <div class="tab-pane fade show active" id="chicken-1" role="tabpanel" aria-labelledby="nav-chicken-1">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/client/images/menu-item/tc6.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Gà rán</a></h6>
                                                <p>tôm. mực, dứa</p>
                                                <span>giá :10.000vnđ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/client/images/menu-item/tc7.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Gà rán</a></h6>
                                                <p>tôm. mực, dứa</p>
                                                <span>giá :10.000vnđ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/client/images/menu-item/tc8.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Gà rán</a></h6>
                                                <p>tôm. mực, dứa</p>
                                                <span>giá :10.000vnđ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/client/images/menu-item/tc9.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Gà rán</a></h6>
                                                <p>tôm. mực, dứa</p>
                                                <span>giá :10.000vnđ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="chicken-tab-content">
                                    <h5>Combo <br>Siêu phẩm
                                        Bánh mì kẹp thịt</h5>
                                    <p>Tôm, mực</p>
                                    <a href="shopping-cart.html">Đặt hàng ngay</a>
                                    <span class='main-img'><img
                                            src="{{ asset('assets/client/images/menu-item/chicken-banner.png') }}"
                                            alt=""></span>
                                    <span class="gprice-2">$15</span>
                                    <span class="gshape1"><img src="{{ asset('assets/client/images/shapes/38.png') }}"
                                            alt=""></span>
                                    <span class="gshape2"><img src="{{ asset('assets/client/images/shapes/39.png') }}"
                                            alt=""></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu-items-2 -->
                <div class="tab-pane fade" id="chicken-2" role="tabpanel" aria-labelledby="nav-chicken-2">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/client/images/menu-item/tc6.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html"> Gà Chiên</a></h6>
                                                <p>tôm. mực, dứa</p>
                                                <span>giá :10.000vnđ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/client/images/menu-item/tc6.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Gà nướng </a></h6>
                                                <p>tôm. mực, dứa</p>
                                                <span>giá :$15,00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/client/images/menu-item/tc6.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Gà nướng </a></h6>
                                                <p>tôm. mực, dứa</p>
                                                <span>giá :$15,00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/client/images/menu-item/tc6.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Gà nướng </a></h6>
                                                <p>tôm. mực, dứa</p>
                                                <span>giá :$15,00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="chicken-tab-content">
                                    <h5>Combo <br>Siêu phẩm
                                        Bánh mì kẹp thịt</h5>
                                    <p>Tôm, mực</p>
                                    <a href="shopping-cart.html">Đặt hàng ngay</a>
                                    <span class='main-img'><img
                                            src="{{ asset('assets/client/images/menu-item/chicken-banner.png') }}"
                                            alt=""></span>
                                    <span class="gprice-2">$15</span>
                                    <span class="gshape1"><img src="{{ asset('assets/client/images/shapes/38.png') }}"
                                            alt=""></span>
                                    <span class="gshape2"><img src="{{ asset('assets/client/images/shapes/39.png') }}"
                                            alt=""></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu-items-3 -->
                <div class="tab-pane fade" id="chicken-3" role="tabpanel" aria-labelledby="nav-chicken-3">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/client/images/menu-item/tc9.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Gà rán</a></h6>
                                                <p>tôm. mực, dứa</p>
                                                <span>giá :10.000vnđ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/client/images/menu-item/tc9.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Gà rán</a></h6>
                                                <p>tôm. mực, dứa</p>
                                                <span>giá :10.000vnđ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/client/images/menu-item/tc9.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Gà rán</a></h6>
                                                <p>tôm. mực, dứa</p>
                                                <span>giá :10.000vnđ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/client/images/menu-item/tc9.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Gà rán</a></h6>
                                                <p>tôm. mực, dứa</p>
                                                <span>giá :10.000vnđ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="chicken-tab-content">
                                    <h5>Combo <br>Siêu phẩm
                                        Bánh mì kẹp thịt</h5>
                                    <p>Tôm, mực</p>
                                    <a href="shopping-cart.html">Đặt hàng ngay</a>
                                    <span class='main-img'><img
                                            src="{{ asset('assets/client/images/menu-item/chicken-banner.png') }}"
                                            alt=""></span>
                                    <span class="gprice-2">$15</span>
                                    <span class="gshape1"><img src="{{ asset('assets/client/images/shapes/38.png') }}"
                                            alt=""></span>
                                    <span class="gshape2"><img src="{{ asset('assets/client/images/shapes/39.png') }}"
                                            alt=""></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu-items-4 -->
                <div class="tab-pane fade" id="chicken-4" role="tabpanel" aria-labelledby="nav-chicken-4">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/client/images/menu-item/tc7.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Gà rán</a></h6>
                                                <p>tôm. mực, dứa</p>
                                                <span>giá :10.000vnđ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/client/images/menu-item/tc7.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Gà rán</a></h6>
                                                <p>tôm. mực, dứa</p>
                                                <span>giá :10.000vnđ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/client/images/menu-item/tc7.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Gà rán</a></h6>
                                                <p>tôm. mực, dứa</p>
                                                <span>giá :10.000vnđ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/client/images/menu-item/tc7.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Gà rán</a></h6>
                                                <p>tôm. mực, dứa</p>
                                                <span>giá :10.000vnđ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="chicken-tab-content">
                                    <h5>Super <br>Combo
                                        Burger</h5>
                                    <p>Shrimp, Squid</p>
                                    <a href="shopping-cart.html">Order Now</a>
                                    <span class='main-img'><img
                                            src="{{ asset('assets/client/images/menu-item/chicken-banner.png') }}"
                                            alt=""></span>
                                    <span class="gprice-2">$15</span>
                                    <span class="gshape1"><img src="{{ asset('assets/client/images/shapes/38.png') }}"
                                            alt=""></span>
                                    <span class="gshape2"><img src="{{ asset('assets/client/images/shapes/39.png') }}"
                                            alt=""></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu-items-5 -->
                <div class="tab-pane fade" id="chicken-5" role="tabpanel" aria-labelledby="nav-chicken-5">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/client/images/menu-item/tc8.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Fried Chicken</a></h6>
                                                <p>Tôm. Mực, dứa</p>
                                                <span>Giá :10.000vnđ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/client/images/menu-item/tc8.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Roast Chicken</a></h6>
                                                <p>Tôm. Mực, dứa</p>
                                                <span>Giá :10.000vnđ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/client/images/menu-item/tc8.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Crispy Fry</a></h6>
                                                <p>Tôm. Mực, dứa</p>
                                                <span>Giá :10.000vnđ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-menu-item d-flex justify-content-between">
                                            <div class="menu-img">
                                                <img src="{{ asset('assets/client/images/menu-item/tc8.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="menu-content">
                                                <h6><a href="single-dish.html">Baked Roast</a></h6>
                                                <p>Tôm. Mực, dứa</p>
                                                <span>Giá :10.000vnđ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="chicken-tab-content">
                                    <h5>Super <br>Combo
                                        Burger</h5>
                                    <p>Shrimp, Squid</p>
                                    <a href="shopping-cart.html">Order Now</a>
                                    <span class='main-img'><img
                                            src="{{ asset('assets/client/images/menu-item/chicken-banner.png') }}"
                                            alt=""></span>
                                    <span class="gprice-2">$15</span>
                                    <span class="gshape1"><img src="{{ asset('assets/client/images/shapes/38.png') }}"
                                            alt=""></span>
                                    <span class="gshape2"><img src="{{ asset('assets/client/images/shapes/39.png') }}"
                                            alt=""></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- burger tab-area -->
    <section class="menu-area  pizza-area burger-area padding-top-40">
        <div class="menu-i-shapes">
            <span class="brs"><img src="{{ asset('assets/client/images/shapes/34.png') }}" alt=""></span>
        </div>
        <div class="container">
            <div class="common-title-area text-center padding-40">
                <h3>food items</h3>
                <h2>Delicious <span>burger</span> </h2>
            </div>
            <!-- menu-nav-wrapper -->
            <div class="menu-nav-wrapper">
                <div class="container">
                    <div class="row">
                        <ul class="nav" id="myTab" role="tablist">
                            <!-- menu-nav-1 -->
                            <li class="nav-item" role="presentation">
                                <div class="nav-link active" id="nav-burger-1" data-bs-toggle="tab"
                                    data-bs-target="#burger-1" role="tab" aria-controls="burger-1"
                                    aria-selected="true">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="{{ asset('assets/client/images/menu-item/bn1.png') }}"
                                                alt="">
                                        </div>
                                        <h6>Classic Burger</h6>
                                        <span class="g-s-4"><img src="{{ asset('assets/client/images/shapes/10.png') }}"
                                                alt=""></span>
                                        <span class="g-s-5"><img src="{{ asset('assets/client/images/shapes/14.png') }}"
                                                alt=""></span>
                                    </div>
                                </div>
                            </li>
                            <!-- menu-nav-2 -->
                            <li class="nav-item" role="presentation">
                                <div class="nav-link" id="nav-burger-2" data-bs-toggle="tab" data-bs-target="#burger-2"
                                    role="tab" aria-controls="burger-2" aria-selected="false">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="{{ asset('assets/client/images/menu-item/bn2.png') }}"
                                                alt="">
                                        </div>
                                        <h6>Mushroom Burger</h6>
                                        <span class="g-s-4"><img src="{{ asset('assets/client/images/shapes/10.png') }}"
                                                alt=""></span>
                                        <span class="g-s-5"><img src="{{ asset('assets/client/images/shapes/14.png') }}"
                                                alt=""></span>
                                    </div>
                                </div>
                            </li>
                            <!-- menu-nav-3 -->
                            <li class="nav-item" role="presentation">
                                <div class="nav-link" id="nav-burger-3" data-bs-toggle="tab" data-bs-target="#burger-3"
                                    role="tab" aria-controls="burger-3" aria-selected="false">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="{{ asset('assets/client/images/menu-item/pn3.png') }}"
                                                alt="">
                                        </div>
                                        <h6>Beef Burger</h6>
                                        <span class="g-s-4"><img src="{{ asset('assets/client/images/shapes/10.png') }}"
                                                alt=""></span>
                                        <span class="g-s-5"><img src="{{ asset('assets/client/images/shapes/14.png') }}"
                                                alt=""></span>
                                    </div>
                                </div>
                            </li>
                            <!-- menu-nav-4 -->
                            <li class="nav-item" role="presentation">
                                <div class="nav-link" id="nav-burger-4" data-bs-toggle="tab" data-bs-target="#burger-4"
                                    role="tab" aria-controls="burger-4" aria-selected="false">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="{{ asset('assets/client/images/menu-item/pn4.png') }}"
                                                alt="">
                                        </div>
                                        <h6>Chicken Burger</h6>
                                        <span class="g-s-4"><img src="{{ asset('assets/client/images/shapes/10.png') }}"
                                                alt=""></span>
                                        <span class="g-s-5"><img src="{{ asset('assets/client/images/shapes/14.png') }}"
                                                alt=""></span>
                                    </div>
                                </div>
                            </li>
                            <!-- menu-nav-5 -->
                            <li class="nav-item" role="presentation">
                                <div class="nav-link" id="nav-burger-5" data-bs-toggle="tab" data-bs-target="#burger-5"
                                    role="tab" aria-controls="burger-5" aria-selected="false">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="{{ asset('assets/client/images/menu-item/pn5.png') }}"
                                                alt="">
                                        </div>
                                        <h6>Vegetable Burger</h6>
                                        <span class="g-s-4"><img src="{{ asset('assets/client/images/shapes/10.png') }}"
                                                alt=""></span>
                                        <span class="g-s-5"><img src="{{ asset('assets/client/images/shapes/14.png') }}"
                                                alt=""></span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- menu-items-wrapper -->
            <div class="tab-content" id="nav-tabContent1">
                <!-- menu-items-1 -->
                <div class="tab-pane fade show active" id="burger-1" role="tabpanel" aria-labelledby="nav-burger-1">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br2.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Beef Burger</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br1.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Crispy Fried Chicken</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br3.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">BBQ Burger</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br4.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Crispy Burger</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br5.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Chicken Burger</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br6.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Chicken grill Fry</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu-items-2 -->
                <div class="tab-pane fade" id="burger-2" role="tabpanel" aria-labelledby="nav-burger-2">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br5.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">BBQ Burger</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br5.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Crispy Fried Chicken</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br5.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Beef Burger</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br5.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Crispy Burger</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br5.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Chicken Burger</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br5.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Chicken grill Fry</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu-items-3 -->
                <div class="tab-pane fade" id="burger-3" role="tabpanel" aria-labelledby="nav-burger-3">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br2.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Crispy Fried Chicken</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br2.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Beef Burger</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br2.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">BBQ Burger</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br2.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Crispy Burger</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br2.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Chicken Burger</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br2.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Chicken grill Fry</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu-items-4 -->
                <div class="tab-pane fade" id="burger-4" role="tabpanel" aria-labelledby="nav-burger-4">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br3.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Beef Burger</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br3.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Crispy Fried Chicken</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br3.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">BBQ Burger</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br3.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Crispy Burger</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br3.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Chicken Burger</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br3.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Chicken grill Fry</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu-items-5 -->
                <div class="tab-pane fade" id="burger-5" role="tabpanel" aria-labelledby="nav-burger-5">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br1.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Crispy Fried Chicken</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br1.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Beef Burger</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br1.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">BBQ Burger</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br1.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Crispy Burger</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br1.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Chicken Burger</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/br1.png') }}" alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Chicken grill Fry</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- pizza banner -->
    <section class="banner-gallery pizza-banner padding-top-90 padding-bottom-30">
        <div class="pizza-shapes">
            <span class="ps1"><img src="{{ asset('assets/client/images/shapes/35.png') }}" alt=""></span>
            <span class="ps2"><img src="{{ asset('assets/client/images/shapes/26.png') }}" alt=""></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 margin-bottom-30 wow fadeInLeft">
                            <div class="gallery-img-1">
                                <h3 class="margin-bottom-10">Buzzed Burger</h3>
                                <p>Sale off 50% chỉ trong tuần này</p>
                                <a href="shopping-cart.html" class="btn">order now</a>
                                <img src="{{ asset('assets/client/images/gallery/24.png') }}" alt="">
                                <span class="gs"><img src="{{ asset('assets/client/images/shapes/bbr.png') }}"
                                        alt=""></span>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 wow fadeInRight">
                            <div class="gallery-img-1 gallery-img-01">
                                <h5 class="margin-bottom-10">Chicken Combo<br>
                                    Burger</h5>
                                <p>Sale off 50% chỉ trong tuần này</p>
                                <a href="shopping-cart.html" class="btn">order now</a>
                                <img src="{{ asset('assets/client/images/menu-item/mg2.png') }}" alt="">
                                <span class="yellow"><img src="{{ asset('assets/client/images/shapes/37.png') }}"
                                        alt=""></span>
                                <span class="gs1"><img src="{{ asset('assets/client/images/shapes/bbs.png') }}"
                                        alt=""></span>
                                <span class="pbadge"><img src="{{ asset('assets/client/images/icons/pbadge.png') }}"
                                        alt=""></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- pizza-tab-area -->
    <section class="menu-area  pizza-area">
        <div class="menu-i-shapes">
            <span class="mis-1"><img src="{{ asset('assets/client/images/shapes/36.png') }}" alt=""></span>
            <span class="mis-2"><img src="{{ asset('assets/client/images/shapes/6.png') }}" alt=""></span>
        </div>
        <div class="container">
            <div class="common-title-area text-center padding-40">
                <h3>food items</h3>
                <h2>Delicious <span>Pizza</span> </h2>
            </div>
            <!-- menu-nav-wrapper -->
            <div class="menu-nav-wrapper">
                <div class="container">
                    <div class="row">
                        <ul class="nav" id="pizzaTab2" role="tablist">
                            <!-- menu-nav-1 -->
                            <li class="nav-item" role="presentation">
                                <div class="nav-link active" id="nav-pizza-1" data-bs-toggle="tab"
                                    data-bs-target="#pizza-1" role="tab" aria-controls="pizza-1"
                                    aria-selected="true">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="{{ asset('assets/client/images/menu-item/pm1.png') }}"
                                                alt="">
                                        </div>
                                        <h6>pizza</h6>
                                        <span class="g-s-4"><img
                                                src="{{ asset('assets/client/images/shapes/10.png') }}"
                                                alt=""></span>
                                        <span class="g-s-5"><img
                                                src="{{ asset('assets/client/images/shapes/14.png') }}"
                                                alt=""></span>
                                    </div>
                                </div>
                            </li>
                            <!-- menu-nav-2 -->
                            <li class="nav-item" role="presentation">
                                <div class="nav-link" id="nav-pizza-2" data-bs-toggle="tab" data-bs-target="#pizza-2"
                                    role="tab" aria-controls="pizza-2" aria-selected="false">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="{{ asset('assets/client/images/menu-item/pm2.png') }}"
                                                alt="">
                                        </div>
                                        <h6>pizza</h6>
                                        <span class="g-s-4"><img
                                                src="{{ asset('assets/client/images/shapes/10.png') }}"
                                                alt=""></span>
                                        <span class="g-s-5"><img
                                                src="{{ asset('assets/client/images/shapes/14.png') }}"
                                                alt=""></span>
                                    </div>
                                </div>
                            </li>
                            <!-- menu-nav-3 -->
                            <li class="nav-item" role="presentation">
                                <div class="nav-link" id="nav-pizza-3" data-bs-toggle="tab" data-bs-target="#pizza-3"
                                    role="tab" aria-controls="pizza-3" aria-selected="false">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="{{ asset('assets/client/images/menu-item/pm3.png') }}"
                                                alt="">
                                        </div>
                                        <h6>pizza</h6>
                                        <span class="g-s-4"><img
                                                src="{{ asset('assets/client/images/shapes/10.png') }}"
                                                alt=""></span>
                                        <span class="g-s-5"><img
                                                src="{{ asset('assets/client/images/shapes/14.png') }}"
                                                alt=""></span>
                                    </div>
                                </div>
                            </li>
                            <!-- menu-nav-4 -->
                            <li class="nav-item" role="presentation">
                                <div class="nav-link" id="nav-pizza-4" data-bs-toggle="tab" data-bs-target="#pizza-4"
                                    role="tab" aria-controls="pizza-4" aria-selected="false">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="{{ asset('assets/client/images/menu-item/pm4.png') }}"
                                                alt="">
                                        </div>
                                        <h6>pizza</h6>
                                        <span class="g-s-4"><img
                                                src="{{ asset('assets/client/images/shapes/10.png') }}"
                                                alt=""></span>
                                        <span class="g-s-5"><img
                                                src="{{ asset('assets/client/images/shapes/14.png') }}"
                                                alt=""></span>
                                    </div>
                                </div>
                            </li>
                            <!-- menu-nav-5 -->
                            <li class="nav-item" role="presentation">
                                <div class="nav-link" id="nav-pizza-5" data-bs-toggle="tab" data-bs-target="#pizza-5"
                                    role="tab" aria-controls="pizza-5" aria-selected="false">
                                    <div class="single-menu-nav pizza-single-menu-nav  text-center">
                                        <div class="menu-img margin-bottom-10">
                                            <img src="{{ asset('assets/client/images/menu-item/pm5.png') }}"
                                                alt="">
                                        </div>
                                        <h6>pizza</h6>
                                        <span class="g-s-4"><img
                                                src="{{ asset('assets/client/images/shapes/10.png') }}"
                                                alt=""></span>
                                        <span class="g-s-5"><img
                                                src="{{ asset('assets/client/images/shapes/14.png') }}"
                                                alt=""></span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- menu-items-wrapper -->
            <div class="tab-content" id="nav-tabContent2">
                <!-- menu-items-1 -->
                <div class="tab-pane fade show active" id="pizza-1" role="tabpanel" aria-labelledby="nav-pizza-1">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz1.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Margherita Pizza</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz2.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Tomato sauce</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz3.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Marinara Pizza</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz4.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Frutti di Mare</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz5.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Americana Pizza</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz6.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Pizza al Pesto</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu-items-2 -->
                <div class="tab-pane fade" id="pizza-2" role="tabpanel" aria-labelledby="nav-pizza-2">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz1.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Margherita Pizza</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz2.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Tomato sauce</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz3.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Marinara Pizza</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz4.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Frutti di Mare</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz5.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Americana Pizza</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz6.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Pizza al Pesto</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu-items-3 -->
                <div class="tab-pane fade" id="pizza-3" role="tabpanel" aria-labelledby="nav-pizza-3">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz1.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Margherita Pizza</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz2.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Tomato sauce</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz3.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Marinara Pizza</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz4.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Frutti di Mare</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz5.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Americana Pizza</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz6.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Pizza al Pesto</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu-items-4 -->
                <div class="tab-pane fade" id="pizza-4" role="tabpanel" aria-labelledby="nav-pizza-4">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz1.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Margherita Pizza</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz2.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Tomato sauce</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz3.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Marinara Pizza</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz4.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Frutti di Mare</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz5.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Americana Pizza</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz6.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Pizza al Pesto</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu-items-5 -->
                <div class="tab-pane fade" id="pizza-5" role="tabpanel" aria-labelledby="nav-pizza-5">
                    <div class="menu-items-wrapper pizza-items-wrapper  margin-top-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz1.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Margherita Pizza</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz2.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Tomato sauce</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz3.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Marinara Pizza</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz4.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Frutti di Mare</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz5.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Americana Pizza</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-menu-item d-flex justify-content-between">
                                    <div class="menu-img">
                                        <img src="{{ asset('assets/client/images/menu-item/piz6.png') }}"
                                            alt="">
                                    </div>
                                    <div class="menu-content">
                                        <h6><a href="single-dish.html">Pizza al Pesto</a></h6>
                                        <p>Tôm. Mực, dứa</p>
                                        <span>Giá :10.000vnđ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonial -->
    <section class="testimonial padding-bottom-120 padding-top-80">
        <div class="container">
            <div class="testi-shapes">
                <span class="ts-1"><img src="{{ asset('assets/client/images/img/31.png') }}"
                        alt=""></span>
                <span class="ts-2"><img src="{{ asset('assets/client/images/img/32.png') }}"
                        alt=""></span>
                <span class="ts-3"><img src="{{ asset('assets/client/images/shapes/7.png') }}"
                        alt=""></span>
            </div>
            <div class="common-title-area text-center padding-bottom-50">
                <h3>testimonial</h3>
                <h2>client <span>feedback</span></h2>
            </div>
            <div class="testimonial-active">
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="{{ asset('assets/client/images/shapes/33.png') }}"
                                    alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="{{ asset('assets/client/images/testimonial/testi-1.png') }}" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>

                    </div>
                    <p>Food Khan là một nhà hàng tuyệt vời của Đại học Texas ở Austin đã được nghiên cứu lợi ích của việc
                        kiểm tra thường xuyên và phản hồi dẫn đến. Ông giải thích điều đó trong lịch sử nghiên cứu.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="{{ asset('assets/client/images/shapes/33.png') }}"
                                    alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="{{ asset('assets/client/images/testimonial/testi-2.png') }}" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan là một nhà hàng tuyệt vời của Đại học Texas ở Austin đã được nghiên cứu lợi ích của việc
                        kiểm tra thường xuyên và phản hồi dẫn đến. Ông giải thích điều đó trong lịch sử nghiên cứu.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="{{ asset('assets/client/images/shapes/33.png') }}"
                                    alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="{{ asset('assets/client/images/testimonial/testi-1.png') }}" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan là một nhà hàng tuyệt vời của Đại học Texas ở Austin đã được nghiên cứu lợi ích của việc
                        kiểm tra thường xuyên và phản hồi dẫn đến. Ông giải thích điều đó trong lịch sử nghiên cứu.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="{{ asset('assets/client/images/shapes/33.png') }}"
                                    alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="{{ asset('assets/client/images/testimonial/testi-2.png') }}" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan là một nhà hàng tuyệt vời của Đại học Texas ở Austin đã được nghiên cứu lợi ích của việc
                        kiểm tra thường xuyên và phản hồi dẫn đến. Ông giải thích điều đó trong lịch sử nghiên cứu.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="{{ asset('assets/client/images/shapes/33.png') }}"
                                    alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="{{ asset('assets/client/images/testimonial/testi-1.png') }}" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan là một nhà hàng tuyệt vời của Đại học Texas ở Austin đã được nghiên cứu lợi ích của việc
                        kiểm tra thường xuyên và phản hồi dẫn đến. Ông giải thích điều đó trong lịch sử nghiên cứu.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="{{ asset('assets/client/images/shapes/33.png') }}"
                                    alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="{{ asset('assets/client/images/testimonial/testi-2.png') }}" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan là một nhà hàng tuyệt vời của Đại học Texas ở Austin đã được nghiên cứu lợi ích của việc
                        kiểm tra thường xuyên và phản hồi dẫn đến. Ông giải thích điều đó trong lịch sử nghiên cứu.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="{{ asset('assets/client/images/shapes/33.png') }}"
                                    alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="{{ asset('assets/client/images/testimonial/testi-1.png') }}" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan là một nhà hàng tuyệt vời của Đại học Texas ở Austin đã được nghiên cứu lợi ích của việc
                        kiểm tra thường xuyên và phản hồi dẫn đến. Ông giải thích điều đó trong lịch sử nghiên cứu.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="{{ asset('assets/client/images/shapes/33.png') }}"
                                    alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="{{ asset('assets/client/images/testimonial/testi-2.png') }}" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan là một nhà hàng tuyệt vời của Đại học Texas ở Austin đã được nghiên cứu lợi ích của việc
                        kiểm tra thường xuyên và phản hồi dẫn đến. Ông giải thích điều đó trong lịch sử nghiên cứu.</p>
                </div>
            </div>

        </div>
    </section>
@endsection
