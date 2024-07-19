@extends('layouts.admin')
@section('title','payment')
@section('content')
     

		  <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- container starts -->
            <div class="container">
				
                <!-- row -->
				
							<div class="row">
								<!-- Column starts -->
								<div class="col-xl-12 col-lg-12">
									<div class="card dz-card" id="bootstrap-table1">
										<div class="card-header flex-wrap border-0">
											<div>
												<h4 class="card-title">Hàng đợi thanh toán gần đây</h4>
											</div>
											<ul class="nav nav-tabs dzm-tabs" id="myTab" role="tablist">
												<li class="nav-item" role="presentation">
													<button class="nav-link active " id="home-tab" data-bs-toggle="tab" data-bs-target="#Preview" type="button" role="tab"  aria-selected="true">Preview</button>
												</li>
												<li class="nav-item" role="presentation">
													<button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#html" type="button" role="tab" aria-controls="html" aria-selected="false">HTML</button>
												</li>
											</ul>
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
																	<th>Trạng thái</th>
																	<th>Tổng tiền</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><strong>01</strong></td>
																	<td>#0110</td>
																	<td>Dr. Jackson</td>
																	<td>01 August 2020</td>
																	<td>Paypal</td>
																	<td><span class="badge light badge-success">Hoàn thành</span></td>
																	<td>$21.56</td>
																	<td>
																		<div class="dropdown">
																			<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
																				<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
																			</button>
																			<div class="dropdown-menu">
																				<a class="dropdown-item" href="#">Sửa</a>
																				<a class="dropdown-item" href="#">Xóa</a>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td><strong>02</strong></td>
																	<td>#0110</td>
																	<td>Dr. Jackson</td>
																	<td>01 August 2020</td>
																	<td>Paypal</td>
																	<td><span class="badge light badge-danger">Đã hủy</span></td>
																	<td>$21.56</td>
																	<td>
																		<div class="dropdown">
																			<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
																				<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
																			</button>
																			<div class="dropdown-menu">
																				<a class="dropdown-item" href="#">Sửa</a>
																				<a class="dropdown-item" href="#">Xóa</a>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td><strong>03</strong></td>
																	<td>#0110</td>
																	<td>Dr. Jackson</td>
																	<td>01 August 2020</td>
																	<td>Paypal</td>
																	<td><span class="badge light badge-warning">Chưa giải quyết</span></td>
																	<td>$21.56</td>
																	<td>
																		<div class="dropdown">
																			<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
																				<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
																			</button>
																			<div class="dropdown-menu">
																				<a class="dropdown-item" href="#">Sửa</a>
																				<a class="dropdown-item" href="#">Xóa</a>
																			</div>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<!-- /Recent Payments Queue -->	
											</div>
											
										</div>
										<!--/tab-content-->
									
						<!-- Column ends -->
					
                  
				</div>
					</div>
						
					</div>
				</div>			
            </div>
        <!--**********************************
                Content body end
            ***********************************-->
@endsection