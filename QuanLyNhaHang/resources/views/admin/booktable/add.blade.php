@extends('layouts.admin')

@section('title', 'Thêm đặt bàn')

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
                            <form action="{{ route('table-book.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Người đặt</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Tên người đặt" value="{{ old('name') }}">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Vị trí bàn</label>
                                        <select name="table_id" id="table-select" class="default-select form-control wide">
                                            @foreach ($tables as $table)
                                                <option value="{{ $table->id }}"
                                                    {{ old('table_id') == $table->id ? 'selected' : '' }}>Bàn số
                                                    {{ $table->number }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Số ghế</label>
                                        <input type="number" name="seats" id="table-seats" class="form-control"
                                            placeholder="Số ghế" value="{{ old('seats') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Chọn món</label>
                                        <select id="dish-select" name="dish_id[]" class="default-select form-control wide"
                                            multiple>
                                            @foreach ($dishes as $dish)
                                                <option value="{{ $dish->id }}"
                                                    {{ in_array($dish->id, old('dish_id', [])) ? 'selected' : '' }}>
                                                    {{ $dish->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3" id="dish-quantity-container">
                                        @foreach (old('dish_id', []) as $dishId)
                                            @php
                                                $dish = $dishes->find($dishId);
                                            @endphp
                                            @if ($dish)
                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label">{{ $dish->name }} - Số lượng</label>
                                                    <input type="number" name="quantities[{{ $dishId }}]"
                                                        class="form-control" min="1"
                                                        value="{{ old('quantities.' . $dishId) }}" placeholder="Số lượng">
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Ngày đặt</label>
                                        <input type="date" name="order_date" class="form-control"
                                            value="{{ old('order_date') }}">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Giờ đặt</label>
                                        <input type="time" name="order_time" class="form-control"
                                            value="{{ old('order_time') }}">
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Ghi chú</label>
                                        <textarea name="note" class="form-control" placeholder="Ghi chú">{{ old('note') }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Trạng thái</label>
                                        <select name="status" class="default-select form-control wide">
                                            <option value="Đã thanh toán"
                                                {{ old('status') == 'Đã thanh toán' ? 'selected' : '' }}>Đã thanh toán
                                            </option>
                                            <option value="Chưa thanh toán"
                                                {{ old('status') == 'Chưa thanh toán' ? 'selected' : '' }}>Chưa thanh toán
                                            </option>
                                        </select>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Đặt bàn</button>
                                    </div>
                                </div>
                            </form>

                            @if ($errors->any())
                                <div class="alert alert-danger mt-3">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tableSelect = document.getElementById('table-select');
            const tableSeats = document.getElementById('table-seats');
            const dishSelect = document.getElementById('dish-select');
            const dishQuantityContainer = document.getElementById('dish-quantity-container');

            tableSelect.addEventListener('change', function() {
                const tableId = this.value;
                if (tableId) {
                    fetch(`/api/table-book/table-details/${tableId}`) // Change the URL to use /api/
                        .then(response => response.json())
                        .then(data => {
                            tableSeats.value = data.seats;
                            tableSeats.removeAttribute('readonly'); // Allow updating seats
                        })
                        .catch(error => console.error('Error fetching table details:', error));
                } else {
                    tableSeats.value = '';
                    tableSeats.setAttribute('readonly', 'readonly'); // Disable updating seats
                }
            });

            dishSelect.addEventListener('change', function() {
                dishQuantityContainer.innerHTML = '';
                Array.from(this.selectedOptions).forEach(option => {
                    const dishId = option.value;
                    const dishName = option.text;
                    dishQuantityContainer.innerHTML += `
                <div class="mb-3 col-md-6">
                    <label class="form-label">${dishName} - Số lượng</label>
                    <input type="number" name="quantities[${dishId}]" class="form-control" min="1" placeholder="Số lượng">
                </div>
            `;
                });
            });

            if (dishSelect.selectedOptions.length > 0) {
                dishSelect.dispatchEvent(new Event('change'));
            }
        });
    </script>
@endsection
