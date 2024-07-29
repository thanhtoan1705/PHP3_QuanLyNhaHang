@extends('layouts.admin')
@section('title', 'List Table')

@section('content')
    <div class="content-body">
        @if (session('success'))
            <script>
                toastr.success("{{ session('success') }}");
            </script>
        @endif
        <div class="container">
            <div class="col-xl-12">
                <div class="card dz-card" id="bootstrap-table1">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="Preview" role="tabpanel" aria-labelledby="home-tab">
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <div class="card-header flex-wrap border-0">
                                        <div>
                                            <h3 class="card-title">Danh sách bàn ăn</h3>
                                        </div>
                                    </div>
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th style="width:80px;"><strong>#</strong></th>
                                                <th><strong>Người đặt bàn</strong></th>
                                                <th><strong>Số lượng</strong></th>
                                                <th><strong>Chỗ ngồi</strong></th>
                                                <th><strong>Món ăn</strong></th>
                                                <th><strong>Tổng tiền</strong></th>
                                                <th><strong>Trạng thái</strong></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>01</strong></td>
                                                <td>Đoàn Tào</td>
                                                <td>5</td>
                                                <td>Bàn 4</td>
                                                <td>Lẫu thái kim chi</td>
                                                <td>1 tỷ</td>
                                                <td><span class="badge light badge-success">Đã thanh toán</span></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-success light sharp"
                                                            data-bs-toggle="dropdown">
                                                            <svg width="20px" height="20px" viewBox="0 0 24 24"
                                                                version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <circle fill="#000000" cx="5" cy="12"
                                                                        r="2" />
                                                                    <circle fill="#000000" cx="12" cy="12"
                                                                        r="2" />
                                                                    <circle fill="#000000" cx="19" cy="12"
                                                                        r="2" />
                                                                </g>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Chỉnh sửa</a>
                                                            <a class="dropdown-item" href="#">xóa</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>02</strong></td>
                                                <td>Đoàn Tào</td>
                                                <td>5</td>
                                                <td>Bàn 4</td>
                                                <td>Lẫu thái kim chi</td>
                                                <td>1 tỷ</td>
                                                <td><span class="badge light badge-danger">Chưa thanh toán</span></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-danger light sharp"
                                                            data-bs-toggle="dropdown">
                                                            <svg width="20px" height="20px" viewBox="0 0 24 24"
                                                                version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <circle fill="#000000" cx="5" cy="12"
                                                                        r="2" />
                                                                    <circle fill="#000000" cx="12" cy="12"
                                                                        r="2" />
                                                                    <circle fill="#000000" cx="19" cy="12"
                                                                        r="2" />
                                                                </g>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Chỉnh sửa</a>
                                                            <a class="dropdown-item" href="#">Xóa</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>03</strong></td>
                                                <td>Đoàn Tào</td>
                                                <td>5</td>
                                                <td>Bàn 4</td>
                                                <td>Lẫu thái kim chi</td>
                                                <td>1 tỷ</td>
                                                <td><span class="badge light badge-warning">Đã thanh toán</span></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-warning light sharp"
                                                            data-bs-toggle="dropdown">
                                                            <svg width="20px" height="20px" viewBox="0 0 24 24"
                                                                version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <circle fill="#000000" cx="5" cy="12"
                                                                        r="2" />
                                                                    <circle fill="#000000" cx="12" cy="12"
                                                                        r="2" />
                                                                    <circle fill="#000000" cx="19" cy="12"
                                                                        r="2" />
                                                                </g>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Chỉnh sửa</a>
                                                            <a class="dropdown-item" href="#">Xóa</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
