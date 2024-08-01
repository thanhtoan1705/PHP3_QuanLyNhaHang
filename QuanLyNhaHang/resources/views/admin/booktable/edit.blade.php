@extends('layouts.admin')

@section('title', 'Chỉnh sửa đặt bàn')

@section('content')
    <div class="content-body">
        <div class="container">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Chỉnh sửa bàn</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('table-book.update', $order->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Người đặt</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ old('name', $order->name) }}" required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Vị trí bàn</label>
                                        <select name="table_id" class="default-select form-control wide">
                                            @foreach ($tables as $table)
                                                <option value="{{ $table->id }}"
                                                    {{ old('table_id', $order->table_id) == $table->id ? 'selected' : '' }}>
                                                    Bàn số {{ $table->number }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Số ghế</label>
                                        <input type="number" name="seats" class="form-control"
                                            value="{{ old('seats', $order->table->seats) }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Chọn món</label>
                                        <select id="dish-select" name="dish_id[]" class="default-select form-control wide"
                                            multiple required>
                                            @foreach ($dishes as $dish)
                                                <option value="{{ $dish->id }}"
                                                    {{ in_array($dish->id, old('dish_id', $order->dishes->pluck('id')->toArray())) ? 'selected' : '' }}>
                                                    {{ $dish->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3" id="dish-quantity-container">
                                        @foreach ($dishes as $dish)
                                            @if (in_array($dish->id, old('dish_id', $order->dishes->pluck('id')->toArray())))
                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label">{{ $dish->name }} - Số lượng</label>
                                                    <input type="number" name="quantities[{{ $dish->id }}]"
                                                        class="form-control" min="1"
                                                        value="{{ old('quantities.' . $dish->id, $order->dishes->find($dish->id)->pivot->quantity ?? 1) }}"
                                                        required>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Ngày đặt</label>
                                        <input type="date" name="order_date" class="form-control"
                                            value="{{ old('order_date', $order->order_date) }}" required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Giờ đặt</label>
                                        <input type="time" name="order_time" class="form-control"
                                            value="{{ old('order_time', \Carbon\Carbon::parse($order->order_time)->format('H:i')) }}"
                                            required>
                                    </div>

                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Ghi chú</label>
                                        <textarea name="note" class="form-control" placeholder="Ghi chú">{{ old('note', $order->note) }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Trạng thái</label>
                                        <select name="status" class="default-select form-control wide">
                                            <option value="Đã thanh toán"
                                                {{ old('status', $order->status) == 'Đã thanh toán' ? 'selected' : '' }}>Đã
                                                thanh toán</option>
                                            <option value="Chưa thanh toán"
                                                {{ old('status', $order->status) == 'Chưa thanh toán' ? 'selected' : '' }}>
                                                Chưa thanh toán</option>
                                        </select>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Cập nhật</button>
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
            const dishSelect = document.getElementById('dish-select');
            const dishQuantityContainer = document.getElementById('dish-quantity-container');

            dishSelect.addEventListener('change', function() {
                dishQuantityContainer.innerHTML = '';
                Array.from(this.selectedOptions).forEach(option => {
                    const dishId = option.value;
                    const dishName = option.text;
                    dishQuantityContainer.innerHTML += `
                        <div class="mb-3 col-md-6">
                            <label class="form-label">${dishName} - Số lượng</label>
                            <input type="number" name="quantities[${dishId}]" class="form-control" min="1" placeholder="Số lượng" required>
                        </div>
                    `;
                });
            });

            // Trigger change event to handle pre-selected options
            const selectedDishIds = @json(old('dish_id', $order->dishes->pluck('id')->toArray()));
            const selectedQuantities = @json(old('quantities', $order->dishes->pluck('pivot.quantity', 'id')->toArray()));
            selectedDishIds.forEach(dishId => {
                const dishName = dishSelect.querySelector(`option[value="${dishId}"]`).text;
                const quantity = selectedQuantities[dishId] || 1;
                dishQuantityContainer.innerHTML += `
                    <div class="mb-3 col-md-6">
                        <label class="form-label">${dishName} - Số lượng</label>
                        <input type="number" name="quantities[${dishId}]" class="form-control" min="1" value="${quantity}" required>
                    </div>
                `;
            });
        });
    </script>
@endsection
