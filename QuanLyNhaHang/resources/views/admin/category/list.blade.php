@extends('layouts.admin')
@section('title', 'List Category')

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
                            <div class="card-header flex-wrap border-0">
                                <div>
                                    <a href="{{ route('category.add') }}"> <button class="btn btn-primary">Thêm danh
                                            mục</button></a>
                                    <h2 class="mt-4 card-title">Danh sách danh mục</h2>

                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th style="width:200px;"><strong>#</strong></th>
                                                <th><strong>Tên danh mục</strong></th>
                                                <th><strong>Hình ảnh</strong></th>

                                                <th></th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $category)
                                                <tr>

                                                    <td><strong>{{ $category->id }}</strong></td>
                                                    <td>{{ $category->name }}</td>
                                                    <td><img width="200px" height="100px" class="img-fluid"
                                                            src="{{ asset('storage/images/' . $category->image) }}"
                                                            alt=""></td>

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
                                                                <a class="dropdown-item"
                                                                    href="{{ route('category.update', $category->slug) }}">Chỉnh
                                                                    sửa</a>
                                                                <a class="dropdown-item" data-bs-toggle="modal"
                                                                    data-bs-target="#deleteModal{{ $category->id }}">Xóa</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- Form ẩn để gửi DELETE request -->
                                                    <form id="delete-form-{{ $category->id }}"
                                                        action="{{ route('category.delete', $category->id) }}"
                                                        method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    {{-- <form action="{{ route('category.processUpdate', ['id' => $category->id]) }}" method="POST">
                                                        @csrf
                                                        <!-- Các trường nhập liệu để cập nhật thông tin danh mục -->
                                                    </form> --}}
                                                </tr>
                                                <div class="modal fade" id="deleteModal{{ $category->id }}" tabindex="-1"
                                                    aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="deleteModalLabel">Xóa danh mục
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Bạn có chắc chắn muốn xóa danh mục này không?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Hủy</button>
                                                                <form
                                                                    action="{{ route('category.delete', $category->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Xóa</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
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
