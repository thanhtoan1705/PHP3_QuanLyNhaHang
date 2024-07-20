@extends('layouts.admin')
@section('title','add staff')
@section('content')	
        <!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
            <div class="container">
				
                <!-- row -->
                <div class="row">
					<div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Thêm nhân viên</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">ID</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Tên</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control">
                                            </div>
                                        </div>
										<div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Hình ảnh</label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Số điện thoại</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" >
                                            </div>
                                        </div>
										<div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Địa chỉ</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" >
                                            </div>
                                        </div>
										<div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Chức vị</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" >
                                            </div>
                                        </div>
										<div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Lương</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" >
                                            </div>
                                        </div>
										<div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Thời gian tạo</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" >
                                            </div>
                                        </div>
										<div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Thời gian cập nhật</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Thêm</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
	</div>
</div>
</div>
@endsection