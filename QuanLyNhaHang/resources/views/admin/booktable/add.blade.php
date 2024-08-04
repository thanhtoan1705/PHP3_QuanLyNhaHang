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
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                    <div class="mb-3 col-md-3">
                                        <label class="form-label">Vị trí bàn</label>
                                        <select name="table_id" id="table-select" class="default-select form-control wide">
                                            @foreach ($tables as $table)
                                                <option value="{{ $table->id }}"
                                                    {{ old('table_id') == $table->id ? 'selected' : '' }}>
                                                    Bàn số {{ $table->number }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('table_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <label class="form-label">Số ghế</label>
                                        <input type="number" name="seats" id="table-seats" class="form-control"
                                            placeholder="Số ghế" value="{{ old('seats') }}">
                                        @error('seats')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Chọn món</label>
                                        <button type="button" class="btn form-control" data-bs-toggle="modal"
                                            data-bs-target="#dishModal">
                                            Chọn món ăn
                                        </button>
                                        <div id="selected-dishes"></div>
                                    </div>
                                    <div class="modal fade" id="dishModal" tabindex="-1" aria-labelledby="dishModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="dishModalLabel">Chọn món ăn</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    @foreach ($categories as $category)
                                                        <h5>{{ $category->name }}</h5>
                                                        <div class="row">
                                                            @foreach ($category->dishes as $dish)
                                                                <div class="col-md-4">
                                                                    <div class="card mb-5">
                                                                        <img src="{{ asset('storage/images/' . $dish->image) }}"
                                                                            width="232px" height="174px"
                                                                            class="card-img-top" alt="{{ $dish->name }}">
                                                                        <div class="">
                                                                            <h5 class="card-title mb-0">{{ $dish->name }}
                                                                            </h5>
                                                                            <span
                                                                                class="mb-0">{{ number_format($dish->price, 0, ',', '.') }}
                                                                                VNĐ</span>
                                                                            <p>Còn lại: {{ $dish->quantity }} món</p>
                                                                        </div>
                                                                        <button type="button"
                                                                            class="btn btn-primary select-dish"
                                                                            data-id="{{ $dish->id }}"
                                                                            data-name="{{ $dish->name }}"
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

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Ngày đặt</label>
                                        <input type="date" name="reservation_date" class="form-control"
                                            value="{{ old('reservation_date') }}">
                                        @error('reservation_date')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Giờ đặt</label>
                                        <input type="time" name="reservation_time" class="form-control"
                                            value="{{ old('reservation_time') }}">
                                        @error('reservation_time')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Ghi chú</label>
                                        <textarea name="note" class="form-control" placeholder="Ghi chú">{{ old('note') }}</textarea>
                                        @error('note')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
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
                                        @error('status')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
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

            // Fetch table details when table is selected
            tableSelect.addEventListener('change', function() {
                const tableId = this.value;
                if (tableId) {
                    fetch(`/api/table-book/table-details/${tableId}`)
                        .then(response => response.json())
                        .then(data => {
                            tableSeats.value = data.seats;
                            tableSeats.removeAttribute('readonly');
                        })
                        .catch(error => console.error('Error fetching table details:', error));
                } else {
                    tableSeats.value = '';
                    tableSeats.setAttribute('readonly', 'readonly');
                }
            });

            // Trigger change event on page load to set initial seats value if a table is already selected
            if (tableSelect.value) {
                tableSelect.dispatchEvent(new Event('change'));
            }

            const selectedDishesContainer = document.getElementById('selected-dishes');

            document.querySelectorAll('.select-dish').forEach(button => {
                button.addEventListener('click', function() {
                    const dishId = this.getAttribute('data-id');
                    const dishName = this.getAttribute('data-name');
                    const dishImage = this.getAttribute('data-image');

                    const existingDish = selectedDishesContainer.querySelector(
                        `[data-dish-id="${dishId}"]`);
                    if (!existingDish) {
                        const dishElement = document.createElement('div');
                        dishElement.setAttribute('data-dish-id', dishId);
                        dishElement.classList.add('dish-item');
                        dishElement.innerHTML = `
                            <div class="position-relative mb-5 mt-5">
                                <button type="button" class="btn-close position-absolute top-0 end-0 remove-dish" aria-label="Close" data-dish-id="${dishId}"></button>
                                <label class="form-label">
                                    <img src="${dishImage}" alt="${dishName}" width="150px" height="100px"> ${dishName} - Số lượng
                                </label>
                                <input type="hidden" name="dish_id[]" value="${dishId}">
                                <input type="number" name="quantities[${dishId}]" class="form-control" min="1" placeholder="Số lượng">
                                @error('quantities')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                            </div>
                        `;
                        selectedDishesContainer.appendChild(dishElement);

                        // Add event listener for remove button
                        dishElement.querySelector('.remove-dish').addEventListener('click',
                            function() {
                                dishElement.remove();
                            });
                    }
                });
            });

            // Get old quantities from server-side rendered inputs
            const oldQuantities = @json(old('quantities', []));

            // Trigger change event to initialize old quantities on page load
            if (Object.keys(oldQuantities).length > 0) {
                for (const [dishId, quantity] of Object.entries(oldQuantities)) {
                    const dishElement = selectedDishesContainer.querySelector(
                        `[data-dish-id="${dishId}"]`);
                    if (dishElement) {
                        dishElement.querySelector('input[type="number"]').value = quantity;
                    } else {
                        // Create a new dish element if it doesn't exist
                        const dishName = document.querySelector(`.select-dish[data-id="${dishId}"]`).getAttribute(
                            'data-name');
                        const dishImage = document.querySelector(`.select-dish[data-id="${dishId}"]`).getAttribute(
                            'data-image');

                        const newDishElement = document.createElement('div');
                        newDishElement.setAttribute('data-dish-id', dishId);
                        newDishElement.classList.add('dish-item');
                        newDishElement.innerHTML = `
                            <div class="position-relative mb-5 mt-5">
                                <button type="button" class="btn-close position-absolute top-0 end-0 remove-dish" aria-label="Close" data-dish-id="${dishId}"></button>
                                <label class="form-label">
                                    <img src="${dishImage}" alt="${dishName}" width="150px" height="100px"> ${dishName} - Số lượng
                                </label>
                                <input type="hidden" name="dish_id[]" value="${dishId}">
                                <input type="number" name="quantities[${dishId}]" class="form-control" min="1" placeholder="Số lượng" value="${quantity}">
                            </div>
                        `;
                        selectedDishesContainer.appendChild(newDishElement);

                        // Add event listener for remove button
                        newDishElement.querySelector('.remove-dish').addEventListener('click', function() {
                            newDishElement.remove();
                        });
                    }
                }
            }
        });
    </script>
@endsection
