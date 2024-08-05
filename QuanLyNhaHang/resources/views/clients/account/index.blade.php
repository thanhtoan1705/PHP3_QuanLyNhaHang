@extends('layouts.clients')

@section('title', 'Tài Khoản')
@section('content')
    <!-- breadcrumb-area -->
    <div class="banner-area breadcrumb-area padding-top-120 padding-bottom-90">
        <div class="bread-shapes">
            <span class="b-shape-1 item-bounce"><img src="assets/images/img/5.png" alt=""></span>
            <span class="b-shape-2"><img src="assets/images/img/6.png" alt=""></span>
            <span class="b-shape-3"><img src="assets/images/img/7.png" alt=""></span>
            <span class="b-shape-4"><img src="assets/images/img/9.png" alt=""></span>
            <span class="b-shape-5"><img src="assets/images/shapes/18.png" alt=""></span>
            <span class="b-shape-6 item-animateOne"><img src="assets/images/img/7.png" alt=""></span>
        </div>
        <div class="container padding-top-120">
            <div class="row justify-content-center">
                <nav aria-label="breadcrumb">
                    <h2 class="page-title">Tài khoản</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a> / <a href="{{ route('account') }}"> Tài
                                khoản</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="profile-area padding-top-120 padding-bottom-120">
        <div class="container">
            <div class="row align-items-start">
                <!-- tab-buttons -->
                <div class="col-md-4 col-lg-3">
                    <div class="profile-tabs nav flex-column nav-pills me-3" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active text-start" id="dahoboard-tab" data-bs-toggle="pill"
                            data-bs-target="#dahoboard" type="button" role="tab" aria-controls="dahoboard"
                            aria-selected="true">
                            <i class="fa-solid fa-sliders inline-block"></i>
                            Bảng điều khiển
                        </button>
                        <button class="nav-link text-start" id="order-tab" data-bs-toggle="pill" data-bs-target="#order"
                            type="button" role="tab" aria-controls="order" aria-selected="false">
                            <i class="fa-solid fa-cart-plus"></i>
                            Đơn hàng
                        </button>
                        <button class="nav-link text-start" id="track-order-tab" data-bs-toggle="pill"
                            data-bs-target="#track-order" type="button" role="tab" aria-controls="track-order"
                            aria-selected="false">
                            <i class="fa-solid fa-cart-shopping"></i>
                            Mã khuyến mãi
                        </button>
                        <button class="nav-link text-start" id="address-tab" data-bs-toggle="pill" data-bs-target="#address"
                            type="button" role="tab" aria-controls="address" aria-selected="false">
                            <i class="fa-solid fa-location-dot"></i>
                            Địa chỉ của tôi
                        </button>
                        <button class="nav-link text-start" id="account-details-tab" data-bs-toggle="pill"
                            data-bs-target="#account-details" type="button" role="tab" aria-controls="account-details"
                            aria-selected="false">
                            <i class="fa-regular fa-user"></i>
                            Chi tiết tài khoản
                        </button>
                    </div>
                </div>
                <!-- tab-content -->
                <div class="col-md-8 col-lg-9">
                    <div class="tab-content">
                        <!-- dahoboard-tab -->
                        <div class="tab-pane fade show active" id="dahoboard" role="tabpanel"
                            aria-labelledby="dahoboard-tab" tabindex="0">
                            <h5 class="tab-title">Hello <span>{{ $user->name }}!</span> </h5>
                            <p>
                                Từ bảng điều khiển tài khoản của bạn. bạn có thể dễ dàng kiểm tra &amp; xem gần đây của bạn
                                đơn đặt hàng,<br> quản lý địa chỉ giao hàng và thanh toán của bạn cũng như chỉnh sửa mật
                                khẩu và
                                Chi tiết tài khoản.
                            </p>
                            <div class="recent-orders margin-top-40">
                                <h5 class="margin-bottom-30">Những đơn đặt hàng gần đây</h5>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Sản phẩm</th>
                                                <th>Ngày</th>
                                                <th>Trạng thái</th>
                                                <th>Bàn</th>
                                                <th>Tổng cộng</th>
                                                <th>Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Sữa lắc hoàng gia Kesar</td>
                                                <td>Ngày 45 tháng 3 năm 2020</td>
                                                <td>Đang xử lý</td>
                                                <td>Bàn 2</td>
                                                <td>$125,00</td>
                                                <td><a href="#" class="btn-small d-block">Hủy đơn hàng</a></td>
                                            </tr>
                                            <tr>
                                                <td>Pizza phô mai đôi</td>
                                                <td>Ngày 29 tháng 6 năm 2020</td>
                                                <td>Đã hoàn thành</td>
                                                <td>Bàn 3</td>
                                                <td>$364,00</td>
                                                <td><a href="#" class="btn-small d-block">Hủy đơn hàng</a></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <div class="pagination order-pagination">
                                    <ul>
                                        <li class="prev"><a href="#">Prev</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li class="pagination-dot">...</li>
                                        <li><a href="#">10</a></li>
                                        <li class="next"><a href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- order-tab -->
                        <div class="tab-pane fade" id="order" role="tabpanel" aria-labelledby="order-tab"
                            tabindex="0">
                            <h5 class="margin-bottom-30">Đơn hàng của bạn</h5>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Sản phẩm</th>
                                            <th>Ngày</th>
                                            <th>Trạng thái</th>
                                            <th>Bàn</th>
                                            <th>Tổng cộng</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Sữa lắc hoàng gia Kesar</td>
                                            <td>Ngày 45 tháng 3 năm 2020</td>
                                            <td>Đang xử lý</td>
                                            <td>Bàn 2</td>
                                            <td>$125,00</td>
                                            <td><a href="#" class="btn-small d-block">Hủy đơn hàng</a></td>
                                        </tr>
                                        <tr>
                                            <td>Pizza phô mai đôi</td>
                                            <td>Ngày 29 tháng 6 năm 2020</td>
                                            <td>Đã hoàn thành</td>
                                            <td>Bàn 3</td>
                                            <td>$364,00</td>
                                            <td><a href="#" class="btn-small d-block">Hủy đơn hàng</a></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class="pagination order-pagination">
                                <ul>
                                    <li class="prev"><a href="#">Trở lại</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="pagination-dot">...</li>
                                    <li><a href="#">10</a></li>
                                    <li class="next"><a href="#">Tiếp</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- track-order-tab -->
                        <div class="tab-pane fade" id="track-order" role="tabpanel" aria-labelledby="track-order-tab" tabindex="0">
                            <h5 class="tab-title">Mã khuyến mãi</h5>
                                <div class="mb-3">
                                    <div class="row">
                                        @foreach($promotions as $promotion)
                                        <div class="col-lg-4 mb-3">
                                            <div class="card h-100">
                                                <div class="card-body">
                                                    <h6 class="card-title">Mã khuyến mãi: <span id="promo-code-{{ $promotion->id }}">{{ $promotion->code }}</span></h6>
                                                    <p class="card-text">Số lần sử dụng: {{ $promotion->number_use }}</p>
                                                    <button type="button" class="btn btn-primary" onclick="copyToClipboard('promo-code-{{ $promotion->id }}')">Copy</button>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    {{ $promotions->links() }}
                                </div>
                            
                        </div>
                        <!-- address-tab -->
                        <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab"
                            tabindex="0">
                            <div class="front-address" id="front-address">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h5 class="tab-title">Địa chỉ cửa hàng</h5>
                                        <ul>
                                            <li>Việt Nam</li>
                                            <li>Ninh Kiều Cần Thơ</li>
                                            <li>Hoàng Quốc Việt</li>
                                            <li>123</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5 class="tab-title">Địa chỉ của tôi</h5>
                                        <ul>
                                            <li>{{$user->address}}</li>
                                            <li>{{$user->phone}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- account-details -->
                        <div class="tab-pane fade" id="account-details" role="tabpanel"
                            aria-labelledby="account-details-tab" tabindex="0">

                            <h5 class="tab-title">Chi tiết tài khoản</h5>
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                            <form action="{{ route('account.update', $user->id) }}" method="POST">
                                <!-- account-details -->
                                @csrf
                                @method('PUT')
                                <div class="account-details">    
                                    <div class="mb-3">
                                        <label for="userName" class="form-label">Tên</label>
                                        <input type="text" name="name" class="form-control" id="userName" value="{{ old('name', $user->name) }}">
                                        @error('name') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="userPhone" class="form-label">Số điện thoại</label>
                                        <input type="text" name="phone" class="form-control" id="userPhone" value="{{ old('phone', $user->phone) }}">
                                        @error('phone') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="email" value="{{ old('email', $user->email) }}">
                                        @error('email') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Địa chỉ</label>
                                        <input type="text" name="address" class="form-control" id="address" value="{{ old('address', $user->address) }}">
                                        @error('address') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                                <!-- password-change -->
                                <div class="password-change">
                                    <h5 class="tab-title">Thay đổi mật khẩu</h5>
                                    <div class="mb-3">
                                        <label for="currentPass" class="form-label">Mật khẩu cũ</label>
                                        <input type="password" name="current_password" class="form-control" id="currentPass">
                                        @error('current_password') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="newPass" class="form-label">Mật khẩu mới</label>
                                        <input type="password" name="new_password" class="form-control" id="newPass">
                                        @error('new_password') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="conPass" class="form-label">Xác nhận mật khẩu mới</label>
                                        <input type="password" name="new_password_confirmation" class="form-control" id="conPass">
                                        @error('new_password_confirmation') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<script>
    function copyToClipboard(elementId) {
        const copyText = document.getElementById(elementId).innerText;
        const textarea = document.createElement('textarea');
        textarea.value = copyText;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand('copy');
        document.body.removeChild(textarea);
        alert('Copied: ' + copyText);
    }
    </script>