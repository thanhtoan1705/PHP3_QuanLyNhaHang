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
                                            <a href="{{ route('table-book.add') }}" class="btn btn-primary me-1">Thêm đặt bàn</a>
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
                                                    <td>{{ $order->table->seats }} người</td>
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
                                                                    data-bs-target="#deleteModal{{ $order->id }}">Xóa</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- Form ẩn để gửi DELETE request -->
                                                    <form id="delete-form-{{ $order->id }}"
                                                        action="{{ route('table-book.destroy', $order->id) }}"
                                                        method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="deleteModal{{ $order->id }}" tabindex="-1"
                                                        aria-labelledby="deleteModalLabel{{ $order->id }}" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteModalLabel{{ $order->id }}">Xóa danh mục
                                                                    </h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Bạn có chắc chắn muốn xóa danh mục này không?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Hủy</button>
                                                                    <form action="{{ route('table-book.destroy', $order->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-danger">Xóa</button>
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
@endsection
