@extends('layouts.clients')
@section('title', 'Đặt bàn')
@section('content')

<!-- breadcrumb-area -->
<div class="banner-area breadcrumb-area padding-top-120 padding-bottom-90">
    <div class="bread-shapes">
        <span class="b-shape-1 item-bounce"><img src="{{ asset('assets/client/images/img/5.png') }}" alt=""></span>
        <span class="b-shape-2"><img src="{{ asset('assets/client/images/img/6.png') }}" alt=""></span>
        <span class="b-shape-3"><img src="{{ asset('assets/client/images/img/7.png') }}" alt=""></span>
        <span class="b-shape-4"><img src="{{ asset('assets/client/images/img/9.png') }}" alt=""></span>
        <span class="b-shape-5"><img src="{{ asset('assets/client/images/shapes/18.png') }}" alt=""></span>
        <span class="b-shape-6 item-animateOne"><img src="{{ asset('assets/client/images/img/7.png') }}" alt=""></span>
    </div>
    <div class="container padding-top-120">
        <div class="row justify-content-center">
            <nav aria-label="breadcrumb">
                <h2 class="page-title">Trang đặt bàn</h2>
                <ol class="breadcrumb text-center">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a> / <a href="{{ route('tableClient') }}">Đặt bàn</a></li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- contact-form-area -->
<section class="about-area about-area2 writeto-us login-area signup-area padding-top-120 padding-bottom-120">
    <div class="container">
        <form action="{{ route('tableClient.store') }}" method="POST">
            @csrf
            <h4 class="mb-3 text-center text-danger text-bold">Đặt bàn giữ chỗ</h4>
            <div class="mb-3">
                <label for="adults" class="form-label">Số lượng người đến:</label>
                <select id="adults" name="adults" class="form-select">
                    <option value="1">1</option>
                    <option value="2" selected>2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Chọn bàn</label>
                <div class="row g-2">
                    @foreach($tables as $table)
                        <div class="col-4">
                            <button type="button" class="btn btn-outline-primary w-100 table-select-btn" data-table-id="{{ $table->id }}">Bàn {{ $table->number }}</button>
                        </div>
                    @endforeach
                </div>
                <input type="hidden" name="table_id" id="selected-table-id">
            </div>
            <div class="mb-3">
                <label class="form-label">Chọn món</label>
                <select id="dish-select" name="dish_id[]" class="default-select form-control wide" multiple>
                    @foreach($dishes as $dish)
                        <option value="{{ $dish->id }}" {{ in_array($dish->id, old('dish_id', [])) ? 'selected' : '' }}>{{ $dish->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3" id="dish-quantity-container">
                @foreach(old('dish_id', []) as $dishId)
                    @php
                        $dish = $dishes->find($dishId);
                    @endphp
                    @if($dish)
                        <div class="mb-3 col-md-6">
                            <label class="form-label">{{ $dish->name }} - Số lượng</label>
                            <input type="number" name="quantities[{{ $dishId }}]" class="form-control" min="1" value="{{ old('quantities.' . $dishId) }}" placeholder="Số lượng">
                        </div>
                    @endif
                @endforeach
            </div>
            <button type="submit" class="btn btn-book-now">Đặt chỗ ngay</button>
        </form>
    </div>
</section>

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
                div.innerHTML = `<label class="form-label">${dishName} - Số lượng</label>
                                 <input type="number" name="quantities[${dishId}]" class="form-control" min="1" value="1" placeholder="Số lượng">`;
                dishQuantityContainer.appendChild(div);
            });
        });

        const tableSelectButtons = document.querySelectorAll('.table-select-btn');
        const selectedTableIdInput = document.getElementById('selected-table-id');

        tableSelectButtons.forEach(button => {
            button.addEventListener('click', function() {
                tableSelectButtons.forEach(btn => btn.classList.remove('btn-primary', 'active'));
                this.classList.add('btn-primary', 'active');
                selectedTableIdInput.value = this.getAttribute('data-table-id');
            });
        });
    });
</script>

@endsection
