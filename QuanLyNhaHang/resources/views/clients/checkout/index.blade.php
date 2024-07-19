@extends('layouts.clients')
@section('title', 'Thanh toán')

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
                    <h2 class="page-title">Thanh toán</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="/">Trang chủ / </a> <a href="/checkout">
                                Thanh toán</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- checkout-area -->
    <div class="checkout-area padding-top-120 padding-bottom-120">
        <div class="cshapes">
            <span class="cs-1"><img src="{{ asset('assets/client/images/img/6.png') }}" alt=""></span>
            <span class="cs-2 item-bounce"><img src="{{ asset('assets/client/images/shapes/12.png') }}"
                    alt=""></span>
            <span class="cs-3"><img src="{{ asset('assets/client/images/shapes/13.png') }}" alt=""></span>
            <span class="cs-4"><img src="{{ asset('assets/client/images/shapes/14.png') }}" alt=""></span>
            <span class="cs-5"><img src="{{ asset('assets/client/images/img/32.png') }}" alt=""></span>
            <span class="cs-6"><img src="{{ asset('assets/client/images/shapes/16.png') }}" alt=""></span>
        </div>
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-lg-6  wow fadeInUp">
                        <div class="checkout-left">
                            <h4>Chi tiết thanh toán</h4>
                            <input type="text" placeholder="Tên" required>
                            <input type="text" placeholder="Họ" required>
                            <input type="text" placeholder="Công ty">
                            <select name="#" id="#">
                                <option value="#">Quốc gia</option>
                                <option value="#">Việt Nam</option>
                                <option value="#">Mỹ</option>
                                <option value="#">Pháp</option>
                            </select>
                            <input type="text" placeholder="địa chỉ đường phố">
                            <input type="text" placeholder="thị trấn/thành phố" required>
                            <input type="number" placeholder="zip">
                            <input type="tel" placeholder="Số điện thoại" required>
                            <input type="email" placeholder="email" required>
                            <input type="text" placeholder="ghi chú đặt hàng(không bắt buộc)">
                        </div>
                    </div>
                    <div class="col-lg-6  wow fadeInUp ">
                        <div class="checkout-right">
                            <h4>Đơn hàng của bạn</h4>
                            <div class="pricing-box">
                                <ul class="p-head">
                                    <li class="uppercase">sản phẩm</li>
                                    <li class="uppercase">tổng cộng</li>
                                </ul>
                                <div class="divider"></div>
                                <ul>
                                    <li>Đào tạo Photoshop cơ bản</li>
                                    <li>$1,699</li>
                                </ul>
                                <ul>
                                    <li>Nhà phân tích tài chính hoàn chỉnh</li>
                                    <li>$1,699</li>
                                </ul>
                                <ul>
                                    <li>WP nâng cao hoàn chỉnh</li>
                                    <li>$1,699</li>
                                </ul>
                                <ul>
                                    <li class="uppercase"><b>tổng phụ</b></li>
                                    <li><b>$5,699</b></li>
                                </ul>
                                <ul>
                                    <li class="uppercase"><b>đậu</b></li>
                                    <li>Tỷ giá cố định: $5.00</li>
                                    <li>Chuyển khoản ngân hàng</li>
                                    <li>miễn phí</li>
                                </ul>
                                <ul class="bg-white">
                                    <li class="uppercase">tổng cộng</li>
                                    <li class="total"><b>$5,699</b></li>
                                </ul>
                            </div>
                            <input type="radio" id="bank">
                            <label for="bank">CHUYỂN KHOẢN TRỰC TIẾP</label>
                            <br>
                            <input type="radio" id="check">
                            <label for="check">KIỂM TRA THANH TOÁN</label>
                            <br>
                            <div class="payment-img">
                                <a href="#"><img src="{{ asset('assets/client/images/img/payment.png') }}"
                                        alt=""></a>
                            </div>
                            <input type="radio" id="cash">
                            <label for="cash">THANH TOÁN KHI GIAO HÀNG</label>
                            <br>

                            <input type="radio" id="terms">
                            <label for="terms">Tôi đã đọc và chấp nhận <a href="#">Điều khoản và điều kiện
                                    *</a></label>
                            <br>
                            <button type="submit" class="btn">đặt hàng</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
