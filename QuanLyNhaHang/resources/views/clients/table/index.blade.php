@extends('layouts.clients')
@section('title', 'Đặt bàn')
@section('content')
    @push('css')
        <style>
            .banghe {
                background-color: white;
                border: 1px solid #DC3545;
                color: #DC3545;
                transition: background-color 0.3s, color 0.3s;
            }

            .banghe.booked {
                background-color: white;
                color: #DC3545;
                pointer-events: none;
            }

            .banghe.selected {
                background-color: #DC3545;
                color: white;
            }
        </style>
    @endpush
    <!-- breadcrumb-area -->
    <div class="banner-area breadcrumb-area padding-top-120 padding-bottom-90">
        <div class="bread-shapes">
            <span class="b-shape-1 item-bounce"><img src="{{ asset('assets/client/images/img/5.png') }}" alt=""></span>
            <span class="b-shape-2"><img src="{{ asset('assets/client/images/img/6.png') }}" alt=""></span>
            <span class="b-shape-3"><img src="{{ asset('assets/client/images/img/7.png') }}" alt=""></span>
            <span class="b-shape-4"><img src="{{ asset('assets/client/images/img/9.png') }}" alt=""></span>
            <span class="b-shape-5"><img src="{{ asset('assets/client/images/shapes/18.png') }}" alt=""></span>
            <span class="b-shape-6 item-animateOne"><img src="{{ asset('assets/client/images/img/7.png') }}"
                    alt=""></span>
        </div>
        <div class="container padding-top-120">
            <div class="row justify-content-center">
                <nav aria-label="breadcrumb">
                    <h2 class="page-title">Trang đặt bàn</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a> / <a
                                href="{{ route('tableClient') }}">Đặt bàn</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- contact-form-area -->
    <section class="about-area about-area2 writeto-us login-area signup-area padding-top-120 padding-bottom-120">
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('tableClient.store') }}" method="POST">
                @csrf
                <h4 class="mb-3 text-center text-danger text-bold">Đặt bàn giữ chỗ</h4>
                <div class="row">
                    <div class="mb-3 col-6">
                        <label class="form-label">Tên người đặt bàn</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}"
                            placeholder="Nhập tên người đặt bàn">
                    </div>
                    <div class="mb-3 col-6">
                        <label class="form-label">Số điện thoại</label>
                        <input type="text" name="phone" class="form-control" id="phone"
                            value="{{ old('phone') }}" placeholder="Nhập tên người đặt bàn">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Chọn bàn</label>
                    <div class="row g-2">
                        @foreach ($tables as $table)
                            <div class="col-4">
                                <button type="button" class="banghe btn btn-outline-danger w-100 table-select-btn"
                                    data-table-id="{{ $table->id }}" data-table-seats="{{ $table->seats }}">Bàn
                                    {{ $table->number }} - {{ $table->seats }} ghế</button>
                            </div>
                        @endforeach
                    </div>
                    <input type="hidden" name="table_id" id="selected-table-id">
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Ngày đặt</label>
                        <input type="date" name="reservation_date" class="form-control"
                            value="{{ old('reservation_date') }}">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Giờ đặt</label>
                        <input type="time" name="reservation_time" class="form-control"
                            value="{{ old('reservation_time') }}">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Chọn món</label>
                    <button type="button" class="btn form-control" data-bs-toggle="modal" data-bs-target="#dishModal">
                        Chọn món ăn
                    </button>
                    <div id="selected-dishes" class="mt-3"></div>
                </div>
                <div class="modal fade" id="dishModal" tabindex="-1" aria-labelledby="dishModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="dishModalLabel">Chọn món ăn</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body container">
                                @foreach ($categories as $category)
                                    <h5>{{ $category->name }}</h5>
                                    <div class="row">
                                        @foreach ($category->dishes as $dish)
                                            <div class="col-md-4">
                                                <div class="card mb-5">
                                                    <img src="{{ asset('storage/images/' . $dish->image) }}"
                                                        width="232px" height="174px" class="card-img-top"
                                                        alt="{{ $dish->name }}">
                                                    <div class="">
                                                        <h5 class="card-title mb-0">{{ $dish->name }}
                                                        </h5>
                                                        <span
                                                            class="mb-0">{{ number_format($dish->price, 0, ',', '.') }}
                                                            VNĐ</span>
                                                        <p>Còn lại: {{ $dish->quantity }} món</p>
                                                    </div>
                                                    <button type="button" class="btn btn-primary select-dish"
                                                        data-id="{{ $dish->id }}" data-name="{{ $dish->name }}"
                                                        data-image="{{ asset('storage/images/' . $dish->image) }}">
                                                        Chọn
                                                    </button>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row" id="dish-quantity-container">
                    @foreach (old('dish_id', []) as $dishId)
                        @php
                            $dish = $dishes->find($dishId);
                        @endphp
                        @if ($dish)
                            <div class="mb-3 col-md-4">
                                <label class="form-label">{{ $dish->name }} - Số lượng</label>
                                <input type="number" name="quantities[{{ $dishId }}]" class="form-control"
                                    min="1" value="{{ old('quantities.' . $dishId) }}" placeholder="Số lượng">
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="mb-3 col-md-12">
                    <label class="form-label">Ghi chú</label>
                    <textarea name="note" class="form-control" placeholder="Ghi chú">{{ old('note') }}</textarea>
                </div>
                <button type="submit" class="btn btn-book-now">Đặt chỗ ngay</button>
            </form>
        </div>
    </section>
    @push('script')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
    const selectedDishesContainer = document.getElementById('selected-dishes');
    const selectDishButtons = document.querySelectorAll('.select-dish');

    function addRemoveButtonListener(dishRow) {
        dishRow.querySelector('.remove-dish').addEventListener('click', function() {
            dishRow.remove();
        });
    }

    // Attach event listeners to any pre-existing selected dish items
    document.querySelectorAll('.selected-dish-item').forEach(dishRow => {
        addRemoveButtonListener(dishRow);
    });

    selectDishButtons.forEach(button => {
        button.addEventListener('click', function() {
            const dishId = this.getAttribute('data-id');
            const dishName = this.getAttribute('data-name');
            const dishImage = this.getAttribute('data-image');

            // Check if the dish is already selected
            if (!document.querySelector(`#dish-${dishId}`)) {
                // Add dish to the selected dishes list
                const dishRow = document.createElement('div');
                dishRow.className = 'row selected-dish-item mb-3';
                dishRow.id = `dish-${dishId}`;
                dishRow.innerHTML = `
                    <div class="col-md-3">
                        <img src="${dishImage}" alt="${dishName}" class="img-thumbnail" style="width: 150px;">
                    </div>
                    <div class="col-md-3">
                        <input type="hidden" name="dish_id[]" value="${dishId}">
                        <span>${dishName}</span>
                    </div>
                    <div class="col-md-3">
                        <input type="number" name="quantities[${dishId}]" class="form-control" min="1" value="1" placeholder="Số lượng">
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-danger remove-dish" aria-label="Remove dish">
                            &times;
                        </button>
                    </div>
                `;
                selectedDishesContainer.appendChild(dishRow);
                addRemoveButtonListener(dishRow); // Attach event listener to the new remove button
            }
        });
    });

    const tableSelectButtons = document.querySelectorAll('.table-select-btn');
    const selectedTableIdInput = document.getElementById('selected-table-id');

    tableSelectButtons.forEach(button => {
        button.addEventListener('click', function() {
            tableSelectButtons.forEach(btn => btn.classList.remove('selected'));
            this.classList.add('selected');
            selectedTableIdInput.value = this.getAttribute('data-table-id');
        });
    });
});

        </script>
    @endpush


@endsection
