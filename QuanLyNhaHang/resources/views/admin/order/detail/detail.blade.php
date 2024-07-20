@extends('layouts.admin')
@section('title','detail order')
@section('content')
<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="row">	
							<div class="col-xl-12 col-md-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h4 class="h-title">Mặt hàng</h4>
										<div class="dropdown custom-dropdown mb-0">
											<div class="btn sharp tp-btn dark-btn" data-bs-toggle="dropdown">
												<svg width="5" height="18" viewBox="0 0 5 18" fill="none" xmlns="http://www.w3.org/2000/svg">
													<circle cx="2.25748" cy="2.19083" r="1.92398" fill="#1921FA"/>
													<circle cx="2.25748" cy="8.92471" r="1.92398" fill="#1921FA"/>
													<circle cx="2.25748" cy="15.6585" r="1.92398" fill="#1921FA"/>
													</svg>

											</div>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="javascript:void(0);">Chi tiết</a>
												<a class="dropdown-item text-danger" href="javascript:void(0);">
                                                    Hủy bỏ</a>
											</div>
										</div>
									</div>
									<div class="card-body pt-2">
										<div class="food-items-bx">
											<div class="food-items-media">
												<img src="{{ asset('assets/admin/images/favirate-img/5.png') }}" alt="">
											</div>
											<div class="d-flex align-items-end">
												<div class="food-items-info">
													<span class="text-primary">ĐỒ ĂN</span>
													<h6>Burger lớn nguyên bản có thêm vị cay </h6>
													<span>x2</span>
												</div>
												<div class="d-inline-flex text-nowrap">
													<span class="me-2">$8,6</span>
													<h6 class="mb-0 text-primary">$ 17,2</h6>
												</div>
											</div>
										</div>
										<div class="food-items-bx">
											<div class="food-items-media">
												<img src="{{ asset('assets/admin/images/favirate-img/6.png') }}" alt="">
											</div>
											<div class="d-flex align-items-end">
												<div class="food-items-info">
													<span class="text-primary">ĐỒ ĂN</span>
													<h6>Burger lớn nguyên bản có thêm vị cay </h6>
													<span>x2</span>
												</div>
												<div class="d-inline-flex text-nowrap">
													<span class="me-2">$8,6</span>
													<h6 class="mb-0 text-primary">$ 17,2</h6>
												</div>
											</div>
										</div>
										<hr>
										<div class="food-totle">
											<ul class="d-flex align-items-center justify-content-between">
												<li><span>
													Tổng phụ</span></li>
												<li><h6>$ 25,8</h6>
											</ul>
											<ul class="d-flex align-items-center justify-content-between">
												<li><span>
													Số bàn</span></li>
												<li><h6>08</h6>
											</ul>
											<ul class="d-flex align-items-center justify-content-between">
												<li><span>PPN (10%)</span></li>
												<li><h6>$ 2,58</h6>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
		
			</div>
		</div>
		
        <!--**********************************
            Content body end
        ***********************************-->
    @endsection