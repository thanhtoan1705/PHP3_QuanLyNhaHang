@extends('layouts.admin')
@section('title', 'list order')

@section('content')
    <div class="content-body">
        @if (session('success'))
            <script>
                toastr.success("{{ session('success') }}");
            </script>
        @endif
        <div class="container">
            <div class="d-flex justify-content-between mb-4 flex-wrap">
                <ul class="revnue-tab nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="status-tab" data-bs-toggle="tab" data-bs-target="#status-tab-pane"
                            type="button" role="tab" aria-controls="status-tab-pane" aria-selected="true">Tất
                            cả</button>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="status-tab-pane" role="tabpanel"
                            aria-labelledby="status-tab" tabindex="0">
                            <div class="card mt-2">
                                <div class="card-body p-0">
                                    <div class="table-responsive active-projects style-1 ItemsCheckboxSec shorting ">
                                        <table id="empoloyees-tbl" class="table">
                                            <thead>
                                                <tr>
                                                    <th class="d-flex align-items-center">
                                                        <div class="form-check custom-checkbox ms-0">
                                                            <input type="checkbox" class="form-check-input checkAllInput"
                                                                id="checkAll2" required="">
                                                            <label class="form-check-label" for="checkAll2"></label>
                                                        </div>
                                                    </th>
                                                    <th>Mã đơn hàng</th>
                                                    <th>Khách hàng</th>
                                                    <th>Món ăn</th>
                                                    <th>Số bàn</th>
                                                    <th>Tổng tiền</th>
                                                    <th>Trạng thái</th>
                                                    <th>Hành động</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $order)
                                                    <tr>
                                                        <td>
                                                            <div class="form-check custom-checkbox">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="customCheckBox100" required="">
                                                                <label class="form-check-label"
                                                                    for="customCheckBox100"></label>
                                                            </div>
                                                        </td>
                                                        <td><span>{{ $order->code_order }}</span></td>
                                                        <td><span>{{ $order->user->name }}</span></td>
                                                        <td>
                                                            @foreach ($order->dishes as $dish)
                                                                <div>{{ $dish->name }} ({{ $dish->pivot->quantity }})<br>
                                                                </div>
                                                            @endforeach
                                                        </td>
                                                        <td><span>{{ $order->table->number }}</span></td>
                                                        <td>
                                                            @php
                                                                $totalAmount = $order->payments->sum('total_amount');
                                                            @endphp
                                                            <span>{{ number_format($totalAmount, 0, ',', '.') }} vnđ</span>
                                                        </td>
                                                        <td><span
                                                                class="badge badge-rounded badge-outline-primary badge-lg">Đã
                                                                thanh toán</span></td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <div class="btn-link" data-bs-toggle="dropdown">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
                                                                            stroke="#737B8B" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round">
                                                                        </path>
                                                                        <path
                                                                            d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
                                                                            stroke="#737B8B" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round">
                                                                        </path>
                                                                        <path
                                                                            d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
                                                                            stroke="#737B8B" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    style="">
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('order.detail', $order->id) }}">Xem
                                                                        chi tiết</a>
                                                                    <form action="{{ route('order.delete', $order->id) }}"
                                                                        method="POST"
                                                                        onsubmit="return confirm('Bạn có chắc chắn muốn xóa đơn hàng này?');">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="dropdown-item">Xóa</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
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
    </div>
@endsection
