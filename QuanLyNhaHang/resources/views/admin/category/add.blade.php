@extends('layouts.admin')
@section('content')
    <div class="content-body">
        <div class="container">
            <div class="col-xl-12">
                <div class="card dz-card" id="bootstrap-table1">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="Preview" role="tabpanel" aria-labelledby="home-tab">
                            <div class="card-header flex-wrap border-0">
                                <div>
                                    <h2 class="card-title">Thêm danh mục</h2>

                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-lg-6">

                                        <div class="mb-3">
                                            <label for="" class="form-label">Tên danh mục</label>
                                            <input type="text" class="form-control" name="" id=""
                                                placeholder="Nhập tên danh mục" />

                                        </div>

                                    </div>

                                    <div class="col-lg-6">

                                        <div class="mb-3">
                                            <label for="" class="form-label">Hình ảnh</label>
                                            <input type="file" class="form-control" name="" id=""
                                                />

                                        </div>
                                    </div>
									
                                </div>
								<button class="btn btn-primary">Thêm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
