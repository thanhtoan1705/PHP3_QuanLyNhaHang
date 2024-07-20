@extends('layouts.admin')

@section('title', 'Add Dish')

@section('content')
    <div class="content-body">
        <div class="container">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Thêm món ăn</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form>
                                <div class="row">
                                    <div class="mb-3">
                                        <label class="form-label">Chọn danh mục:</label>
                                        <select class="default-select  form-control wide">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Tên món ăn</label>
                                        <input type="text" class="form-control" placeholder="Bánh mì">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Giá</label>
                                        <input type="email" class="form-control" placeholder="200.000">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Mô tả</label>
                                        <textarea class="form-txtarea form-control" rows="8" id="comment"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Chọn hình ảnh</label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Chọn trạng thái:</label>
                                        <select class="default-select  form-control wide">
                                            <option>Còn món</option>
                                            <option>Hết Món</option>
                                            <option>Đang chuẩn bị</option>
                                        </select>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Thêm món ăn</button>
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
