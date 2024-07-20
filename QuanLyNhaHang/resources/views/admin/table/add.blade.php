@extends('layouts.admin')
@section('content')
    <div class="content-body">
        <div class="container">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Thêm bàn</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Tên</label>
                                        <input type="text" class="form-control" placeholder="Bánh mì">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Số lượng</label>
                                        <input type="email" class="form-control" placeholder="200.000">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Vị trí bàn:</label>
                                        <select class="default-select  form-control wide">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Chón món:</label>
                                        <select class="default-select  form-control wide">
                                            <option>Bánh mì</option>
                                            <option>Mì cay</option>
                                            <option>Lẫu</option>
                                            <option>Nướng thịt bò</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Tổng tiền</label>
                                        <input type="email" class="form-control" placeholder="200.000">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Trang thái:</label>
                                        <select class="default-select  form-control wide">
                                            <option>Đã thanh toán</option>
                                            <option>Chưa thanh toán</option>
                                        </select>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Đặt bàn</button>
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
