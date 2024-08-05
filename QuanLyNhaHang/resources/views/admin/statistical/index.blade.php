@extends('layouts.admin')

@section('title', 'Thống kê')

@section('content')
    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between">
                            <div class="card-menu">
                                <span>Tổng doanh thu</span>
                                <h3 class="mb-0">{{number_format($totalRevenue)}} VNĐ</h3>
                            </div>
                            <div class="icon-box icon-box-lg bg-primary-light">
                                <svg width="26" height="30" viewBox="0 0 26 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.45 29.3C10.0102 29.3093 11.5568 29.0088 13 28.416C14.4417 29.0138 15.9893 29.3145 17.55 29.3C22.2885 29.3 26 26.7715 26 23.5422V18.1577C26 14.9284 22.2885 12.4 17.55 12.4C17.3303 12.4 17.1145 12.4104 16.9 12.4221V6.33285C16.9 3.16995 13.1885 0.699951 8.45 0.699951C3.7115 0.699951 0 3.16995 0 6.33285V23.6671C0 26.83 3.7115 29.3 8.45 29.3ZM23.4 23.5422C23.4 25.0359 20.9976 26.7 17.55 26.7C14.1024 26.7 11.7 25.0359 11.7 23.5422V22.3398C13.4605 23.4105 15.4899 23.9566 17.55 23.9141C19.6101 23.9566 21.6395 23.4105 23.4 22.3398V23.5422ZM17.55 15C20.9976 15 23.4 16.664 23.4 18.1577C23.4 19.6514 20.9976 21.3141 17.55 21.3141C14.1024 21.3141 11.7 19.6501 11.7 18.1577C11.7 16.6653 14.1024 15 17.55 15ZM8.45 3.29995C11.8976 3.29995 14.3 4.89895 14.3 6.33285C14.3 7.76675 11.8976 9.36705 8.45 9.36705C5.0024 9.36705 2.6 7.76805 2.6 6.33285C2.6 4.89765 5.0024 3.29995 8.45 3.29995ZM2.6 10.4266C4.36783 11.4764 6.39439 12.0101 8.45 11.967C10.5056 12.0101 12.5322 11.4764 14.3 10.4266L14.3 12.8289C12.8832 13.186 11.5839 13.9061 10.53 14.918C9.84648 15.066 9.14934 15.1418 8.45 15.1443C5.0024 15.1443 2.6 13.5453 2.6 12.1114V10.4266ZM2.6 16.2051C4.3682 17.2539 6.39459 17.787 8.45 17.7443C8.6814 17.7443 8.905 17.7157 9.1325 17.704C9.11313 17.8545 9.10228 18.0059 9.1 18.1576V20.8682C8.8816 20.8812 8.671 20.9228 8.45 20.9228C5.0024 20.9228 2.6 19.3238 2.6 17.8886V16.2051ZM2.6 21.9823C4.36783 23.0321 6.39439 23.5658 8.45 23.5228C8.6684 23.5228 8.8829 23.5058 9.1 23.4955V23.5422C9.1186 24.6489 9.54387 25.71 10.2947 26.5232C9.68645 26.638 9.06899 26.6972 8.45 26.7C5.0024 26.7 2.6 25.101 2.6 23.6671V21.9823Z"
                                        fill="var(--primary)" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between">
                            <div class="card-menu">
                                <span>Tổng doanh thu ngày {{ \Carbon\Carbon::createFromDate($day)->format('d') }}</span>
                                <h3 class="mb-0">{{number_format($totalRevenueday)}} VNĐ</h3>
                            </div>
                            <div class="icon-box icon-box-lg bg-primary-light">
                                <svg width="26" height="30" viewBox="0 0 26 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.45 29.3C10.0102 29.3093 11.5568 29.0088 13 28.416C14.4417 29.0138 15.9893 29.3145 17.55 29.3C22.2885 29.3 26 26.7715 26 23.5422V18.1577C26 14.9284 22.2885 12.4 17.55 12.4C17.3303 12.4 17.1145 12.4104 16.9 12.4221V6.33285C16.9 3.16995 13.1885 0.699951 8.45 0.699951C3.7115 0.699951 0 3.16995 0 6.33285V23.6671C0 26.83 3.7115 29.3 8.45 29.3ZM23.4 23.5422C23.4 25.0359 20.9976 26.7 17.55 26.7C14.1024 26.7 11.7 25.0359 11.7 23.5422V22.3398C13.4605 23.4105 15.4899 23.9566 17.55 23.9141C19.6101 23.9566 21.6395 23.4105 23.4 22.3398V23.5422ZM17.55 15C20.9976 15 23.4 16.664 23.4 18.1577C23.4 19.6514 20.9976 21.3141 17.55 21.3141C14.1024 21.3141 11.7 19.6501 11.7 18.1577C11.7 16.6653 14.1024 15 17.55 15ZM8.45 3.29995C11.8976 3.29995 14.3 4.89895 14.3 6.33285C14.3 7.76675 11.8976 9.36705 8.45 9.36705C5.0024 9.36705 2.6 7.76805 2.6 6.33285C2.6 4.89765 5.0024 3.29995 8.45 3.29995ZM2.6 10.4266C4.36783 11.4764 6.39439 12.0101 8.45 11.967C10.5056 12.0101 12.5322 11.4764 14.3 10.4266L14.3 12.8289C12.8832 13.186 11.5839 13.9061 10.53 14.918C9.84648 15.066 9.14934 15.1418 8.45 15.1443C5.0024 15.1443 2.6 13.5453 2.6 12.1114V10.4266ZM2.6 16.2051C4.3682 17.2539 6.39459 17.787 8.45 17.7443C8.6814 17.7443 8.905 17.7157 9.1325 17.704C9.11313 17.8545 9.10228 18.0059 9.1 18.1576V20.8682C8.8816 20.8812 8.671 20.9228 8.45 20.9228C5.0024 20.9228 2.6 19.3238 2.6 17.8886V16.2051ZM2.6 21.9823C4.36783 23.0321 6.39439 23.5658 8.45 23.5228C8.6684 23.5228 8.8829 23.5058 9.1 23.4955V23.5422C9.1186 24.6489 9.54387 25.71 10.2947 26.5232C9.68645 26.638 9.06899 26.6972 8.45 26.7C5.0024 26.7 2.6 25.101 2.6 23.6671V21.9823Z"
                                        fill="var(--primary)" />
                                </svg>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between">
                            <div class="card-menu">
                                <span>Tổng doanh thu tháng {{ \Carbon\Carbon::createFromDate($month)->format('m') }} năm {{ \Carbon\Carbon::createFromDate($year)->format('Y') }}</span>
                                <h3 class="mb-0">{{number_format($totalRevenuemonth)}} VNĐ</h3>
                            </div>
                            <div class="icon-box icon-box-lg bg-primary-light">
                                <svg width="26" height="30" viewBox="0 0 26 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.45 29.3C10.0102 29.3093 11.5568 29.0088 13 28.416C14.4417 29.0138 15.9893 29.3145 17.55 29.3C22.2885 29.3 26 26.7715 26 23.5422V18.1577C26 14.9284 22.2885 12.4 17.55 12.4C17.3303 12.4 17.1145 12.4104 16.9 12.4221V6.33285C16.9 3.16995 13.1885 0.699951 8.45 0.699951C3.7115 0.699951 0 3.16995 0 6.33285V23.6671C0 26.83 3.7115 29.3 8.45 29.3ZM23.4 23.5422C23.4 25.0359 20.9976 26.7 17.55 26.7C14.1024 26.7 11.7 25.0359 11.7 23.5422V22.3398C13.4605 23.4105 15.4899 23.9566 17.55 23.9141C19.6101 23.9566 21.6395 23.4105 23.4 22.3398V23.5422ZM17.55 15C20.9976 15 23.4 16.664 23.4 18.1577C23.4 19.6514 20.9976 21.3141 17.55 21.3141C14.1024 21.3141 11.7 19.6501 11.7 18.1577C11.7 16.6653 14.1024 15 17.55 15ZM8.45 3.29995C11.8976 3.29995 14.3 4.89895 14.3 6.33285C14.3 7.76675 11.8976 9.36705 8.45 9.36705C5.0024 9.36705 2.6 7.76805 2.6 6.33285C2.6 4.89765 5.0024 3.29995 8.45 3.29995ZM2.6 10.4266C4.36783 11.4764 6.39439 12.0101 8.45 11.967C10.5056 12.0101 12.5322 11.4764 14.3 10.4266L14.3 12.8289C12.8832 13.186 11.5839 13.9061 10.53 14.918C9.84648 15.066 9.14934 15.1418 8.45 15.1443C5.0024 15.1443 2.6 13.5453 2.6 12.1114V10.4266ZM2.6 16.2051C4.3682 17.2539 6.39459 17.787 8.45 17.7443C8.6814 17.7443 8.905 17.7157 9.1325 17.704C9.11313 17.8545 9.10228 18.0059 9.1 18.1576V20.8682C8.8816 20.8812 8.671 20.9228 8.45 20.9228C5.0024 20.9228 2.6 19.3238 2.6 17.8886V16.2051ZM2.6 21.9823C4.36783 23.0321 6.39439 23.5658 8.45 23.5228C8.6684 23.5228 8.8829 23.5058 9.1 23.4955V23.5422C9.1186 24.6489 9.54387 25.71 10.2947 26.5232C9.68645 26.638 9.06899 26.6972 8.45 26.7C5.0024 26.7 2.6 25.101 2.6 23.6671V21.9823Z"
                                        fill="var(--primary)" />
                                </svg>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card dz-card" id="bootstrap-table1">
                                <div class="card-header flex-wrap border-0">
                                    <div>
                                        <h4 class="card-title">Tổng doanh thu</h4>
                                    </div>
                                    <div>
                                        <a href="{{ route('statistical.export') }}" class="btn btn-secondary">Xuất Excel</a>
                                    </div>
                                    <div>

                                        <h4 class="card-title">Doanh thu tất cả: {{number_format($totalRevenue)}} VNĐ</h4>
                                    </div>
                                </div>
                                <!--tab-content-->
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="Preview" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body pt-0">
                                            <div class="table-responsive">
                                                <table class="table table-responsive-md">
                                                    <thead>
                                                        <tr>
                                                            <th style="width:80px;"><strong>Số thứ tự</strong></th>
                                                            <th>Mã đơn hàng</th>
                                                            <th>Khách hàng</th>
                                                            <th>Ngày đặt hàng</th>
                                                            <th>Phương thức thanh toán</th>
                                                            <th>Tổng tiền</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($statisticals as $index => $statistical)
                                                        <tr>
                                                            <td><strong>{{ $statisticals->firstItem() + $index }}</strong></td>
                                                            <td>{{ $statistical->order_id }}</td>
                                                            <td>{{ $statistical->user_id }}</td>
                                                            <td>{{ \Carbon\Carbon::parse($statistical->payment_date)->format('d-m-Y') }}</td>
                                                            <td>{{ $statistical->payment_method }}</td>
                                                            <td>{{ number_format($statistical->total_amount) }} VNĐ</td>

                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                {{ $statisticals->links() }}

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12">
                            <div class="card dz-card" id="bootstrap-table1">
                                <div class="card-header flex-wrap border-0">
                                    <div>
                                        <h4 class="card-title">Tổng doanh thu ngày {{ \Carbon\Carbon::createFromDate($day)->format('d') }}</h4>
                                    </div>
                                    <div>
                                        <a href="{{ route('statistical.export.dates', ['date' => $date]) }}" class="btn btn-secondary">Xuất Excel</a>
                                    </div>
                                    <div>
                                        <h4 class="card-title">Doanh thu ngày: {{number_format($totalRevenueday)}} VNĐ</h4>
                                    </div>
                                </div>
                                <!--tab-content-->
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="Preview" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body pt-0">
                                            <div class="table-responsive">
                                                <table class="table table-responsive-md">
                                                    <thead>
                                                        <tr>
                                                            <th style="width:80px;"><strong>Số thứ tự</strong></th>
                                                            <th>Mã đơn hàng</th>
                                                            <th>Khách hàng</th>
                                                            <th>Ngày đặt hàng</th>
                                                            <th>Phương thức thanh toán</th>
                                                            <th>Tổng tiền</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($statisticalsdates as $index => $statisticalsdate)
                                                        <tr>
                                                            <td><strong>{{ $statisticalsdates->firstItem() + $index }}</strong></td>
                                                            <td>{{ $statisticalsdate->order_id }}</td>
                                                            <td>{{ $statisticalsdate->user_id }}</td>
                                                            <td>{{ \Carbon\Carbon::parse($statisticalsdate->payment_date)->format('d-m-Y') }}</td>
                                                            <td>{{ $statisticalsdate->payment_method }}</td>
                                                            <td>{{ number_format($statisticalsdate->total_amount) }} VNĐ</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                {{ $statisticalsdates->links() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12">
                            <div class="card dz-card" id="bootstrap-table1">
                                <div class="card-header flex-wrap border-0">
                                    <div>
                                        <h4 class="card-title">Tổng doanh thu tháng {{ \Carbon\Carbon::createFromDate($month)->format('m') }} Năm {{ \Carbon\Carbon::createFromDate($year)->format('Y') }}</h4>
                                    </div>
                                    <div>
                                        <a href="{{ route('statistical.export.monthly', ['month' => $month, 'year' => $year]) }}" class="btn btn-secondary">
                                            Xuất Excel
                                        </a>
                                    </div>
                                    <div>
                                        <h4 class="card-title">Doanh thu tháng: {{number_format($totalRevenuemonth)}} VNĐ</h4>


                                    </div>
                                </div>
                                <!--tab-content-->
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="Preview" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body pt-0">
                                            <div class="table-responsive">
                                                <table class="table table-responsive-md">
                                                    <thead>
                                                        <tr>
                                                            <th style="width:80px;"><strong>Số thứ tự</strong></th>
                                                            <th>Mã đơn hàng</th>
                                                            <th>Khách hàng</th>
                                                            <th>Ngày đặt hàng</th>
                                                            <th>Phương thức thanh toán</th>
                                                            <th>Tổng tiền</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($statisticalmonths as $index => $statisticalmonth)
                                                        <tr>
                                                            <td><strong>{{ $statisticalmonths->firstItem() + $index }}</strong></td>
                                                            <td>{{ $statisticalmonth->order_id }}</td>
                                                            <td>{{ $statisticalmonth->user_id }}</td>
                                                            <td>{{ \Carbon\Carbon::parse($statisticalmonth->payment_date)->format('d-m-Y') }}</td>
                                                            <td>{{ $statisticalmonth->payment_method }}</td>
                                                            <td>{{ number_format($statisticalmonth->total_amount) }} VNĐ</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                {{ $statisticalmonths->links() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            @endsection
            @push('script')
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
               document.addEventListener('DOMContentLoaded', function () {
            fetch('/admin/statistical/revenue-chart')
                .then(response => response.json())
                .then(data => {
                    const ctx = document.getElementById('revenueChart').getContext('2d');
                    new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: data.labels,
                            datasets: [{
                                label: 'Doanh thu',
                                data: data.data,
                                borderColor: 'rgba(75, 192, 192, 1)',
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                fill: true
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                x: {
                                    beginAtZero: true
                                },
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                });
        });
            </script>
        @endpush
