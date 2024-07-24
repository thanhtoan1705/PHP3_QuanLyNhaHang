@extends('layouts.clients')
@section('title','Đặt bàn')
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
                <h2 class="page-title">Trang đặt bàn</h2>
                <ol class="breadcrumb text-center">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a> / <a href="{{ route('table') }}">Đặt bàn</a></li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- contact-form-area -->
<section class="about-area about-area2 writeto-us login-area signup-area padding-top-120 padding-bottom-120">
    <div class="container">
        <form>
            <h4 class="mb-3 text-center text-danger text-bold">Đặt bàn giữ chỗ</h4>
            <div class="mb-3">
                <label for="adults" class="form-label">Người lớn:</label>
                <select id="adults" class="form-select">
                    <option value="1">1</option>
                    <option value="2" selected>2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="children" class="form-label">Trẻ em:</label>
                <select id="children" class="form-select">
                    <option value="0" selected>0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="table" class="form-label">Chọn bàn:</label>
                <select id="table" class="form-select">
                    <option value="1">Bàn 1</option>
                    <option value="2">Bàn 2</option>
                    <option value="3">Bàn 3</option>
                    <option value="4">Bàn 4</option>
                    <option value="5">Bàn 5</option>
                    <option value="6">Bàn 6</option>
                    <option value="7">Bàn 7</option>
                    <option value="8">Bàn 8</option>
                    <option value="9">Bàn 9</option>
                    <option value="10">Bàn 10</option>
                    <option value="11">Bàn 11</option>
                    <option value="12">Bàn 12</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Thời gian đến:</label>
                <div class="input-group">
                    <input type="date" id="date" class="form-control" value="2024-07-24">
                    <input type="time" id="time" class="form-control" value="10:15">
                </div>
            </div>
            <button type="submit" class="btn btn-book-now">Đặt chỗ ngay</button>
        </form>
    </div>
</section>
@endsection
