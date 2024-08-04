@extends('layouts.admin')
@section('title', 'List User')

@section('content')
    <div class="content-body">
        @if (session('success'))
            <script>
                toastr.success("{{ session('success') }}");
            </script>
        @endif
        <div class="container">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="#">Trang chủ<i class="icon-angle-right m-1"></i></a></li>
                        <li class=""><a href="#">Người dùng</a></li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex justify-content-between mb-4 flex-wrap">
                <ul class="revnue-tab nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="users-tab" data-bs-toggle="tab" data-bs-target="#users-tab-pane"
                            type="button" role="tab" aria-controls="users-tab-pane" aria-selected="true">Người
                            dùng</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="staff-tab" data-bs-toggle="tab" data-bs-target="#staff-tab-pane"
                            type="button" role="tab" aria-controls="staff-tab-pane" aria-selected="false">Nhân
                            viên</button>
                    </li>
                </ul>
                <div>
                    <a href="{{ route('user.create') }}" class="btn btn-primary me-1">Thêm Người Dùng</a>
                    <select class="default-select h-select ms-1" aria-label="Default select example">
                        <option selected>Tuần</option>
                        <option value="1">Tháng</option>
                        <option value="2">Ngày</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="tab-content" id="myTabContent">
                        <!-- Users Tab -->
                        <div class="tab-pane fade show active" id="users-tab-pane" role="tabpanel"
                            aria-labelledby="users-tab" tabindex="0">
                            <div class="card mt-2">
                                <div class="card-body p-0">
                                    <div class="table-responsive active-projects style-1 ItemsCheckboxSec shorting ">
                                        <table id="users-tbl" class="table">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Tên</th>
                                                    <th>Email</th>
                                                    <th>Điện Thoại</th>
                                                    <th>Địa Chỉ</th>
                                                    <th>Quyền</th>
                                                    <th>Hành Động</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $index => $item)
                                                    <tr>
                                                        <td><span>{{ $users->firstItem() + $index }}</span></td>
                                                        <td><span>{{ $item->name }}</span></td>
                                                        <td><span>{{ $item->email }}</span></td>
                                                        <td><span>{{ $item->phone }}</span></td>
                                                        <td><span>{{ $item->address }}</span></td>
                                                        <td><span>{{ $item->role }}</span></td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
                                                                            stroke="#737B8B" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round">
                                                                        </path>
                                                                        <path
                                                                            d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
                                                                            stroke="#737B8B" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round">
                                                                        </path>
                                                                        <path
                                                                            d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
                                                                            stroke="#737B8B" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    style="">
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('user.edit', $item->id) }}">Chỉnh
                                                                        sửa</a>
                                                                    <form action="{{ route('user.destroy', $item->id) }}"
                                                                        method="POST" style="display: inline;">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="dropdown-item"
                                                                            onclick="return confirm('Are you sure you want to delete this user?')">Xóa</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{ $users->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Staff Tab -->
                        <div class="tab-pane fade" id="staff-tab-pane" role="tabpanel" aria-labelledby="staff-tab"
                            tabindex="0">
                            <div class="card mt-2">
                                <div class="card-body p-0">
                                    <div class="table-responsive active-projects style-1 ItemsCheckboxSec shorting ">
                                        <table id="staff-tbl" class="table">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Tên</th>
                                                    <th>Email</th>
                                                    <th>Điện Thoại</th>
                                                    <th>Địa Chỉ</th>
                                                    <th>Quyền</th>
                                                    <th>Hành Động</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($staff as $index => $item)
                                                    <tr>
                                                        <td><span>{{ $staff->firstItem() + $index }}</span></td>
                                                        <td><span>{{ $item->name }}</span></td>
                                                        <td><span>{{ $item->email }}</span></td>
                                                        <td><span>{{ $item->phone }}</span></td>
                                                        <td><span>{{ $item->address }}</span></td>
                                                        <td><span>{{ $item->role }}</span></td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
                                                                            stroke="#737B8B" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                        </path>
                                                                        <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.447
                                                                                stroke="#737B8B" stroke-width="2"
                                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                            </path>
                                                                            <path
                                                                                d=" M4 12C4 12.5523 4.44772 13 5 13C5.55228
                                                                            13 6 12.5523 6 12C6 11.4477 5.55228 11 5
                                                                            11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('user.edit', $item->id) }}">Chỉnh
                                                                        sửa</a>
                                                                    <form action="{{ route('user.destroy', $item->id) }}"
                                                                        method="POST" style="display: inline;">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="dropdown-item"
                                                                            onclick="return confirm('Bạn có chắc chắn muốn xóa người dùng này?')">Xóa</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{ $staff->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Staff Tab -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
