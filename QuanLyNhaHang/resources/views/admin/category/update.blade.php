@extends('layouts.admin')

@section('content')
    <div class="content-body">
        <div class="container">
            <div class="col-xl-12">
                <div class="card dz-card" id="bootstrap-table1">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="Preview" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="card-header flex-wrap border-0">
                                <div>
                                    <h2 class="card-title">Cập nhật danh mục</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form action="{{ route('category.processUpdate', ['slug' => $category->slug]) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <!-- Tên danh mục -->
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Tên danh mục</label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="Nhập tên danh mục" value="{{ $category->name }}" />
                                            </div>

                                            <!-- Hình ảnh -->
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Hình ảnh</label>
                                                <input type="file" class="form-control" name="image" id="image" />
                                            </div>

                                            <!-- Nút cập nhật -->
                                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
