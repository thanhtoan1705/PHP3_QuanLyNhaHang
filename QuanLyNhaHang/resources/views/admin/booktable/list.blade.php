@extends('layouts.admin')
@section('content')
    <div class="content-body">
        <div class="container">
            <div class="col-xl-12">
                <div class="card dz-card" id="bootstrap-table1">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="Preview" role="tabpanel" aria-labelledby="home-tab">
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <div class="card-header flex-wrap border-0">
                                        <div>
                                            <h3 class="card-title">Danh sách bàn ăn</h3>
                                        </div>
                                        <div>
                                            <a href="{{ route('table-book.add') }}" class="btn btn-primary me-1">Thêm đặt
                                                bàn</a>
                                        </div>
                                    </div>
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th style="width:80px;"><strong>#</strong></th>
                                                <th><strong>Người đặt bàn</strong></th>
                                                <th><strong>Bàn số</strong></th>
                                                <th><strong>Số người</strong></th>
                                                <th><strong>Món ăn</strong></th>
                                                <th><strong>Giờ và ngày đặt</strong></th>
                                                <th><strong>Tổng tiền</strong></th>
                                                <th><strong>Trạng thái</strong></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($reservation as $order)
                                                <tr>
                                                    <td><strong>{{ $loop->iteration }}</strong></td>
                                                    <td>{{ $order->name }}</td>
                                                    <td>Bàn {{ $order->table->number }}</td>
                                                    <td>{{ $order->seats }} người</td>
                                                    <td>
                                                        @foreach ($order->dishes as $dish)
                                                            {{ $dish->name }} ({{ $dish->pivot->quantity }}),
                                                        @endforeach
                                                    </td>
                                                    <td>{{ $order->reservation_time }} | {{ $order->reservation_date }}</td>
                                                    <td>{{ number_format($order->calculateTotalPrice(), 0, ',', '.') }} VND
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge {{ $order->status == 'Đã thanh toán' ? 'badge-success' : 'badge-danger' }}">
                                                            {{ $order->status == 'Đã thanh toán' ? 'Đã thanh toán' : 'Chưa thanh toán' }}
                                                        </span>
                                                    </td>
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
                                                                    href="{{ route('table-book.edit', $order->id) }}">Chỉnh
                                                                    sửa</a>
                                                                <a class="dropdown-item" data-bs-toggle="modal"
                                                                    data-bs-target="#paymentModal{{ $order->id }}">Thanh
                                                                    toán</a>

                                                                <a class="dropdown-item" data-bs-toggle="modal"
                                                                    data-bs-target="#deleteModal{{ $order->id }}">Xóa</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- Payment Modal -->
                                                    <!-- Modal thanh toán -->
                                                    <div class="modal fade" id="paymentModal{{ $order->id }}"
                                                        tabindex="-1"
                                                        aria-labelledby="paymentModalLabel{{ $order->id }}"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="paymentModalLabel{{ $order->id }}">Thanh
                                                                        toán đơn hàng</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="paymentForm{{ $order->id }}"
                                                                        method="POST"
                                                                        action="{{ route('payment.store') }}">
                                                                        @csrf
                                                                        <input type="hidden" name="order_id"
                                                                            value="{{ $order->id }}">

                                                                        <div class="mb-3">
                                                                            <label for="amountDue" class="form-label">Số
                                                                                tiền cần trả</label>
                                                                            <input type="text" class="form-control"
                                                                                name="total_amount"
                                                                                id="amountDue{{ $order->id }}" readonly
                                                                                value="{{ $order->calculateTotalPrice() }}">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="amountGiven" class="form-label">Số
                                                                                tiền khách đưa</label>
                                                                            <input type="number" class="form-control"
                                                                                id="amountGiven{{ $order->id }}"
                                                                                 required>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="amountChange" class="form-label">Số
                                                                                tiền trả lại</label>
                                                                            <input type="text" class="form-control"
                                                                                id="amountChange{{ $order->id }}"
                                                                                readonly>
                                                                        </div>

                                                                        <button type="submit" class="btn btn-primary">Thanh
                                                                            toán</button>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Phân trang -->
                            <div class="d-flex justify-content-center">
                                {{ $reservation->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // document.querySelectorAll('[id^=amountGiven]').forEach(input => {
        //     input.addEventListener('input', function() {
        //         let orderId = this.id.replace('amountGiven', '');
        //         let amountGiven = parseFloat(this.value) || 0;
        //         let amountDue = parseFloat(document.getElementById('amountDue' + orderId).value.replace(
        //             /[^0-9.-]+/g, '')) || 0;
        //         let amountChange = amountGiven - amountDue;
        //         document.getElementById('amountChange' + orderId).value = amountChange >= 0 ? amountChange
        //             .toFixed(2) + ' VND' : 'Số tiền không đủ';
        //     });
        // });
    </script>
@endsection
