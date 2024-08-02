@extends('layouts.clients')
@section('title', 'Đặt bàn')
@section('content')
@push('css')
<style>
    .banghe {
        background-color: white;
        border: 1px solid #DC3545;
        color: #DC3545;
    }

    .banghe.booked {
        background-color: #e0e0e0;
        color: #a0a0a0;
        pointer-events: none;
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

                <div class="mb-3">
                    <label class="form-label">Tên người đặt bàn</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}"
                        placeholder="Nhập tên người đặt bàn">
                </div>
                <div class="mb-3">
                    <label class="form-label">Chọn bàn</label>
                    <div class="row g-2">
                        @foreach ($tables as $table)
                            <div class="col-4">
                                <button type="button"
                                    class="banghe btn btn-outline-danger w-100 table-select-btn {{ in_array($table->id, $bookedTableIds) ? 'booked' : '' }}"
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
                        <input type="date" name="order_date" class="form-control" value="{{ old('order_date') }}">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Giờ đặt</label>
                        <input type="time" name="order_time" class="form-control" value="{{ old('order_time') }}">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Chọn món</label>
                    <select id="dish-select" name="dish_id[]" class="default-select form-control wide" multiple>
                        @foreach ($dishes as $dish)
                            <option value="{{ $dish->id }}"
                                {{ in_array($dish->id, old('dish_id', [])) ? 'selected' : '' }}>{{ $dish->name }}
                            </option>
                        @endforeach
                    </select>
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
                const dishSelect = document.getElementById('dish-select');
                const dishQuantityContainer = document.getElementById('dish-quantity-container');

                dishSelect.addEventListener('change', function() {
                    dishQuantityContainer.innerHTML = '';
                    Array.from(dishSelect.selectedOptions).forEach(option => {
                        const dishId = option.value;
                        const dishName = option.text;
                        const div = document.createElement('div');
                        div.className = 'mb-3 col-md-6';
                        div.innerHTML =
                            `<label class="form-label">${dishName} - Số lượng</label>
                             <input type="number" name="quantities[${dishId}]" class="form-control" min="1" value="1" placeholder="Số lượng">`;
                        dishQuantityContainer.appendChild(div);
                    });
                });

                const tableSelectButtons = document.querySelectorAll('.table-select-btn');
                const selectedTableIdInput = document.getElementById('selected-table-id');

                tableSelectButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        tableSelectButtons.forEach(btn => btn.classList.remove('btn-danger',
                            'active'));
                        this.classList.add('btn-danger', 'active');
                        selectedTableIdInput.value = this.getAttribute('data-table-id');
                    });
                });
            });
        </script>
    @endpush


@endsection
