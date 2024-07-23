@extends('layouts.admin')

@section('title', 'Edit Dish')

@section('content')
    <div class="content-body">
        <div class="container">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cập nhật món ăn</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('dish.update', $dish->slug) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="mb-3">
                                        <label class="form-label">Chọn danh mục:</label>
                                        <select name="category_id" class="default-select form-control wide">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $category->id == $dish->category_id ? 'selected' : '' }}>
                                                    {{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Tên món ăn</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ $dish->name }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Giá</label>
                                        <input type="number" name="price" class="form-control"
                                            value="{{ $dish->price }}">
                                        @error('price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Mô tả</label>
                                        <textarea class="form-control" name="description" rows="8">{{ $dish->description }}</textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Chọn hình ảnh</label>
                                        <input class="form-control" type="file" name="image" id="formFile">
                                        @if ($dish->image)
                                        <div id="imagePreview" class="mt-3 position-relative">
                                            <button type="button" id="removeImage" class="btn btn-danger btn-sm position-absolute top-0 end-0" style="z-index: 1;">X</button>
                                            <img src="{{ asset('storage/images/' . $dish->image) }}" alt="{{ $dish->name }}" width="100" class="img-thumbnail">
                                        </div>
                                    @endif
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Chọn trạng thái:</label>
                                        <select name="status" class="default-select form-control wide">
                                            <option value="0" {{ $dish->status == '0' ? 'selected' : '' }}>Còn món
                                            </option>
                                            <option value="1" {{ $dish->status == '1' ? 'selected' : '' }}>Hết Món
                                            </option>
                                        </select>
                                        @error('status')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Cập nhật món ăn</button>
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

@push('script')
    <script>
        document.getElementById('formFile').addEventListener('change', function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('imagePreview');
                output.innerHTML = '<img src="' + reader.result +
                    '" width="100" class="mt-3"><button type="button" id="removeImage" class="btn btn-danger btn-sm">X</button>';
                document.getElementById('removeImage').addEventListener('click', function() {
                    output.innerHTML = '';
                    document.getElementById('formFile').value = '';
                });
            };
            reader.readAsDataURL(event.target.files[0]);
        });

        if (document.getElementById('removeImage')) {
            document.getElementById('removeImage').addEventListener('click', function() {
                document.getElementById('imagePreview').innerHTML = '';
                document.getElementById('formFile').value = '';
            });
        }
    </script>
@endpush
