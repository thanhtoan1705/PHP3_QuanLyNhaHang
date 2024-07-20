@extends('layouts.admin')
@section('title', 'Edit User')

@section('content')
    <div class="content-body">
        <div class="container">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sửa người dùng</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Tên <span class="text-danger">*</span> </label>
                                        <input type="text" class="form-control" placeholder="Tên">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Họ <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Họ">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Số điện thoại <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" placeholder="Số điện thoại">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Địa chỉ <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Địa chỉ">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Quyền:</label>
                                        <select class="default-select  form-control wide">
                                            <option value="supper-admin">Supper Admin</option>
                                            <option value="admin">Admin</option>
                                            <option value="user">Người Dùng</option>
                                        </select>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Thêm</button>
                                        <button type="submit" class="btn btn-danger">Hủy bỏ</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
