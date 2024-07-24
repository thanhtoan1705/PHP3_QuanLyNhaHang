@extends('layouts.clients')
@section('title', 'Giỏ hàng')

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
                <nav aria-label="breadcrumb text-center">
                    <h2 class="page-title">Giỏ hàng</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="/">Trang chủ </a>/<a href="{{ route('cart') }}"> Giỏ hàng</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- shopping-cart -->
    <div class="portfolio-info shopping-cart padding-top-120 padding-bottom-90">
        <div class="shopping-shapes">
            <span class="ps1"><img src="{{ asset('assets/client/images/shapes/12.png') }}" alt=""></span>
            <span class="pss2 item-bounce"><img src="{{ asset('assets/client/images/shapes/26.png') }}"
                    alt=""></span>
            <span class="ps3 item-bounce"><img src="{{ asset('assets/client/images/shapes/7.png') }}" alt=""></span>
            <span class="ps4"><img src="{{ asset('assets/client/images/img/32.png') }}" alt=""></span>
            <span class="pss5"><img src="{{ asset('assets/client/images/shapes/16.png') }}" alt=""></span>
            <span class="ps6"><img src="{{ asset('assets/client/images/shapes/13.png') }}" alt=""></span>
        </div>
        <div class="container">
            <form action="#">
                <!-- upper table -->
                <div class="upper-table margin-bottom-30">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 margin-bottom-30">
                            <div class="upper-t-left d-flex justify-content-between">
                                <input type="text" placeholder="Nhập mã giảm giá">
                                <span><a class="btn" href="#"> áp dụng ngay bây giờ</a></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="upper-t-right d-flex justify-content-between">
                                <a class="btn" href="#">Làm sạch</a>
                                <a class="btn" href="#">Cập nhật giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table -->
                <div style="overflow-x:auto;">
                    <table class="table-one">
                        <thead class="table-one-head">
                            <tr class="table-one-tr">
                                <th class="table-one-th" style="width:50%">Tên sản phẩm</th>
                                <th class="table-one-th" style="width:10%">Giá</th>
                                <th class="table-one-th" style="width:8%">Số lượng</th>
                                <th class="table-one-th text-center" style="width:22%">Tổng phụ</th>
                                <th class="table-one-th" style="width:10%"></th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- row 1 -->
                            <tr>
                                <td>
                                    <!--data-th="Product"-->
                                    <div class="d-flex align-items-center">
                                        <!--class="row"-->
                                        <div class=" d-none d-md-block col-md-4">
                                            <div class="table-img"><img
                                                    src="{{ asset('assets/client/images/menu-item/c1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-8">
                                            <h5>bánh burger</h5>
                                        </div>
                                    </div>
                                </td>
                                <td>10.000vnđ</td>
                                <!--data-th="Price"-->
                                <td>
                                    <!-- data-th="Quantity"-->
                                    <input type="number" class="form-control text-center" value="1">
                                </td>
                                <td class="text-center">10.000</td>
                                <!--data-th="Subtotal" -->
                                <td>
                                    <!--class="actions" data-th=""-->
                                    <span class="remove"><a href="#"><i class="fas fa-plus"></i></a></span>
                                </td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--class="row"-->
                                        <div class="d-none d-md-block col-md-4">
                                            <div class="table-img"><img
                                                    src="{{ asset('assets/client/images/menu-item/c2.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12">
                                            <h5>Bánh Pizza ngon nhất </h5>
                                        </div>
                                    </div>
                                </td>
                                <td>10.000vnđ</td>

                                <td>

                                    <input type="number" class="form-control text-center" value="1">
                                </td>
                                <td class="text-center">10.000</td>

                                <td>

                                    <span class="remove"><a href="#"><i class="fas fa-plus"></i></a></span>
                                </td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-none d-md-block col-md-4">
                                            <div class="table-img"><img
                                                    src="{{ asset('assets/client/images/menu-item/c3.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-8">
                                            <h5>bánh mì kẹp thịt</h5>
                                        </div>
                                    </div>
                                </td>
                                <td>10.000vnđ</td>
                                <!--data-th="Price"-->
                                <td>
                                    <!-- data-th="Quantity"-->
                                    <input type="number" class="form-control text-center" value="1">
                                </td>
                                <td class="text-center">10.000</td>
                                <!--data-th="Subtotal" -->
                                <td>
                                    <!--class="actions" data-th=""-->
                                    <span class="remove"><a href="#"><i class="fas fa-plus"></i></a></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- lower table -->

                <div class="row margin-top-60">
                    <div class="col-lg-5">
                        <div class="lower-table">
                            <h6>Tiến hành thanh toán</h6>
                            <div class="lower-table-info">
                                <ul class="d-flex justify-content-between">
                                    <li class="sub">TỔNG PHỤ</li>
                                    <li>30.000</li>
                                </ul>
                                <hr>
                                <ul class="d-flex justify-content-between">
                                    <li>Tổng cộng</li>
                                    <li>30.000</li>
                                </ul>
                                    <a href="{{ route('checkout') }}" class="btn btn-danger mt-3">Tiến hành thanh toán</a>
                            </div>
                        </div>


                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
