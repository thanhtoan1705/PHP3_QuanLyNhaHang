@extends('layouts.admin')
@section('title','list staff')
@section('content')
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container">
				<div class="d-flex justify-content-between mb-4 flex-wrap">
					<ul class="revnue-tab nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="status-tab" data-bs-toggle="tab" data-bs-target="#active-tab-pane" type="button" role="tab" aria-controls="active-tab-pane" aria-selected="true">Hoạt động</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="inactive-tab" data-bs-toggle="tab" data-bs-target="#inactive-tab-pane" type="button" role="tab" aria-controls="inactive-tab-pane" aria-selected="false">Không hoạt động</button>
						</li>
					</ul>
					<div>
						<a href="javascript:void(0)" class="btn btn-primary me-1">+ Thêm nhân viên</a>
						<select class="default-select h-select ms-1" aria-label="Default select example">
						  <option selected>Tuần</option>
						  <option value="1">Tháng</option>
						  <option value="2">Hằng ngày</option>
						  
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="active-tab-pane" role="tabpanel" aria-labelledby="active-tab" tabindex="0">
								<div class="card mt-2">
									<div class="card-body p-0">
										<div class="table-responsive active-projects style-1 ItemsCheckboxSec shorting ">
											<table id="empoloyees-tbl" class="table">
												<thead>
													<tr>
														<th>
															<div class="form-check custom-checkbox ms-0">
																<input type="checkbox" class="form-check-input checkAllInput" id="checkAll2" required="">
																<label class="form-check-label" for="checkAll2"></label>
															</div>
														</th>
														<th>ID</th>
														<th>Tên</th>
														<th>Hình ảnh</th>
														<th>Điện Thoại</th>
														<th>Địa chỉ</th>
														<th>Chức vụ</th>
														<th>Lương</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
																<label class="form-check-label" for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{ asset('assets/admin/images/contacts/pic1.jpg') }}" class="avatar avatar-xxs rounded" alt="">
																<p class="mb-0 ms-2">James Sitepu</p>	
															</div>
														</td>
														<td><span>Alabama</span></td>
														
														<td><span class="badge badge-rounded badge-outline-primary badge-lg">$ 924,23</span></td>
														<td><span class="text-primary font-w500">$ 34,2</span></td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown" >
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item" href="javascript:void(0);">Sửa</a>
																	<a class="dropdown-item" href="javascript:void(0);">Xóa</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
																<label class="form-check-label" for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{ asset('assets/admin/images/contacts/pic2.jpg') }}" class="avatar avatar-xxs rounded" alt="">
																<p class="mb-0 ms-2">James Sitepu</p>	
															</div>
														</td>
														<td><span>Nebraska</span></td>
														
														<td><span class="badge badge-rounded badge-outline-primary badge-lg">$ 924,23</span></td>
														<td><span class="text-primary font-w500">$ 58,2</span></td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown" >
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item" href="javascript:void(0);">Sửa</a>
																	<a class="dropdown-item" href="javascript:void(0);">Xóa</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
																<label class="form-check-label" for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{ asset('assets/admin/images/contacts/pic3.jpg') }}" class="avatar avatar-xxs rounded" alt="">
																<p class="mb-0 ms-2">James Sitepu</p>	
															</div>
														</td>
														<td><span>Alaska</span></td>
														
														<td><span class="badge badge-rounded badge-outline-primary badge-lg">$ 924,23</span></td>
														<td><span class="text-primary font-w500">$ 34,2</span></td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown" >
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item" href="javascript:void(0);">Sửa</a>
																	<a class="dropdown-item" href="javascript:void(0);">Xóa</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
																<label class="form-check-label" for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{ asset('assets/admin/images/contacts/pic2.jpg') }}" class="avatar avatar-xxs rounded" alt="">
																<p class="mb-0 ms-2">James Sitepu</p>	
															</div>
														</td>
														<td><span>Nebraska</span></td>
														
														<td><span class="badge badge-rounded badge-outline-primary badge-lg">$ 924,23</span></td>
														<td><span class="text-primary font-w500">$ 58,2</span></td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown" >
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item" href="javascript:void(0);">Sửa</a>
																	<a class="dropdown-item" href="javascript:void(0);">Xóa</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
																<label class="form-check-label" for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000523456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{ asset('assets/admin/images/contacts/pic1.jpg') }}" class="avatar avatar-xxs rounded" alt="">
																<p class="mb-0 ms-2">James Sitepu</p>	
															</div>
														</td>
														<td><span>North Dakota</span></td>
														
														<td><span class="badge badge-rounded badge-outline-primary badge-lg">$ 924,23</span></td>
														<td><span class="text-primary font-w500">$ 34,2</span></td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown" >
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item" href="javascript:void(0);">Sửa</a>
																	<a class="dropdown-item" href="javascript:void(0);">Xóa</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
																<label class="form-check-label" for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{ asset('assets/admin/images/contacts/pic1.jpg') }}" class="avatar avatar-xxs rounded" alt="">
																<p class="mb-0 ms-2">James Sitepu</p>	
															</div>
														</td>
														<td><span>Alabama</span></td>
														
														<td><span class="badge badge-rounded badge-outline-primary badge-lg">$ 924,23</span></td>
														<td><span class="text-primary font-w500">$ 34,2</span></td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown" >
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item" href="javascript:void(0);">Sửa</a>
																	<a class="dropdown-item" href="javascript:void(0);">Xóa</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
																<label class="form-check-label" for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{ asset('assets/admin/images/contacts/pic2.jpg') }}" class="avatar avatar-xxs rounded" alt="">
																<p class="mb-0 ms-2">James Sitepu</p>	
															</div>
														</td>
														<td><span>Nebraska</span></td>
														
														<td><span class="badge badge-rounded badge-outline-primary badge-lg">$ 924,23</span></td>
														<td><span class="text-primary font-w500">$ 58,2</span></td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown" >
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item" href="javascript:void(0);">Sửa</a>
																	<a class="dropdown-item" href="javascript:void(0);">Xóa</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
																<label class="form-check-label" for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{ asset('assets/admin/images/contacts/pic3.jpg') }}" class="avatar avatar-xxs rounded" alt="">
																<p class="mb-0 ms-2">James Sitepu</p>	
															</div>
														</td>
														<td><span>Alaska</span></td>
														
														<td><span class="badge badge-rounded badge-outline-primary badge-lg">$ 924,23</span></td>
														<td><span class="text-primary font-w500">$ 34,2</span></td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown" >
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item" href="javascript:void(0);">Sửa</a>
																	<a class="dropdown-item" href="javascript:void(0);">Xóa</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
																<label class="form-check-label" for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{ asset('assets/admin/images/contacts/pic2.jpg') }}" class="avatar avatar-xxs rounded" alt="">
																<p class="mb-0 ms-2">James Sitepu</p>	
															</div>
														</td>
														<td><span>Nebraska</span></td>
														
														<td><span class="badge badge-rounded badge-outline-primary badge-lg">$ 924,23</span></td>
														<td><span class="text-primary font-w500">$ 58,2</span></td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown" >
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item" href="javascript:void(0);">Sửa</a>
																	<a class="dropdown-item" href="javascript:void(0);">Xóa</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
																<label class="form-check-label" for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000523456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{ asset('assets/admin/images/contacts/pic1.jpg') }}" class="avatar avatar-xxs rounded" alt="">
																<p class="mb-0 ms-2">James Sitepu</p>	
															</div>
														</td>
														<td><span>North Dakota</span></td>
														
														<td><span class="badge badge-rounded badge-outline-primary badge-lg">$ 924,23</span></td>
														<td><span class="text-primary font-w500">$ 34,2</span></td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown" >
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item" href="javascript:void(0);">Sửa</a>
																	<a class="dropdown-item" href="javascript:void(0);">Xóa</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
																<label class="form-check-label" for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{ asset('assets/admin/images/contacts/pic1.jpg') }}" class="avatar avatar-xxs rounded" alt="">
																<p class="mb-0 ms-2">James Sitepu</p>	
															</div>
														</td>
														<td><span>Alabama</span></td>
														
														<td><span class="badge badge-rounded badge-outline-primary badge-lg">$ 924,23</span></td>
														<td><span class="text-primary font-w500">$ 34,2</span></td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown" >
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item" href="javascript:void(0);">Sửa</a>
																	<a class="dropdown-item" href="javascript:void(0);">Xóa</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
																<label class="form-check-label" for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{ asset('assets/admin/images/contacts/pic2.jpg') }}" class="avatar avatar-xxs rounded" alt="">
																<p class="mb-0 ms-2">James Sitepu</p>	
															</div>
														</td>
														<td><span>Nebraska</span></td>
														
														<td><span class="badge badge-rounded badge-outline-primary badge-lg">$ 924,23</span></td>
														<td><span class="text-primary font-w500">$ 58,2</span></td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown" >
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item" href="javascript:void(0);">Sửa</a>
																	<a class="dropdown-item" href="javascript:void(0);">Xóa</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
																<label class="form-check-label" for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{ asset('assets/admin/images/contacts/pic3.jpg') }}" class="avatar avatar-xxs rounded" alt="">
																<p class="mb-0 ms-2">James Sitepu</p>	
															</div>
														</td>
														<td><span>Alaska</span></td>
														
														<td><span class="badge badge-rounded badge-outline-primary badge-lg">$ 924,23</span></td>
														<td><span class="text-primary font-w500">$ 34,2</span></td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown" >
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item" href="javascript:void(0);">Sửa</a>
																	<a class="dropdown-item" href="javascript:void(0);">Xóa</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
																<label class="form-check-label" for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{ asset('assets/admin/images/contacts/pic2.jpg') }}" class="avatar avatar-xxs rounded" alt="">
																<p class="mb-0 ms-2">James Sitepu</p>	
															</div>
														</td>
														<td><span>Nebraska</span></td>
														
														<td><span class="badge badge-rounded badge-outline-primary badge-lg">$ 924,23</span></td>
														<td><span class="text-primary font-w500">$ 58,2</span></td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown" >
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item" href="javascript:void(0);">Sửa</a>
																	<a class="dropdown-item" href="javascript:void(0);">Xóa</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
																<label class="form-check-label" for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000523456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{ asset('assets/admin/images/contacts/pic1.jpg') }}" class="avatar avatar-xxs rounded" alt="">
																<p class="mb-0 ms-2">James Sitepu</p>	
															</div>
														</td>
														<td><span>North Dakota</span></td>
														
														<td><span class="badge badge-rounded badge-outline-primary badge-lg">$ 924,23</span></td>
														<td><span class="text-primary font-w500">$ 34,2</span></td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown" >
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item" href="javascript:void(0);">Sửa</a>
																	<a class="dropdown-item" href="javascript:void(0);">Xóa</a>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade show" id="inactive-tab-pane" role="tabpanel" aria-labelledby="inactive-tab" tabindex="0">
								<div class="card mt-2">
									<div class="card-body p-0">
										<div class="table-responsive active-projects style-1 ItemsCheckboxSec shorting ">
											<table id="empoloyees-tblA" class="table">
												<thead>
													<tr>
														<th>
															<div class="form-check custom-checkbox ms-0">
																<input type="checkbox" class="form-check-input checkAllInput" id="checkAll2" required="">
																<label class="form-check-label" for="checkAll2"></label>
															</div>
														</th>
														<th>ID</th>
														<th>Tên</th>
														<th>Hình ảnh</th>
														<th>Điện Thoại</th>
														<th>Địa chỉ</th>
														<th>Chức vụ</th>
														<th>Lương</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
																<label class="form-check-label" for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{ asset('assets/admin/images/contacts/pic2.jpg') }}" class="avatar avatar-xxs rounded" alt="">
																<p class="mb-0 ms-2">James Sitepu</p>	
															</div>
														</td>
														<td><span>Nebraska</span></td>
														
														<td><span class="badge badge-rounded badge-outline-primary badge-lg">$ 924,23</span></td>
														<td><span class="text-primary font-w500">$ 58,2</span></td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown" >
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item" href="javascript:void(0);">Sửa</a>
																	<a class="dropdown-item" href="javascript:void(0);">Xóa</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
																<label class="form-check-label" for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000523456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{ asset('assets/admin/images/contacts/pic1.jpg') }}" class="avatar avatar-xxs rounded" alt="">
																<p class="mb-0 ms-2">James Sitepu</p>	
															</div>
														</td>
														<td><span>North Dakota</span></td>
														
														<td><span class="badge badge-rounded badge-outline-primary badge-lg">$ 924,23</span></td>
														<td><span class="text-primary font-w500">$ 34,2</span></td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown" >
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item" href="javascript:void(0);">Sửa</a>
																	<a class="dropdown-item" href="javascript:void(0);">Xóa</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
																<label class="form-check-label" for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{ asset('assets/admin/images/contacts/pic1.jpg') }}" class="avatar avatar-xxs rounded" alt="">
																<p class="mb-0 ms-2">James Sitepu</p>	
															</div>
														</td>
														<td><span>Alabama</span></td>
														
														<td><span class="badge badge-rounded badge-outline-primary badge-lg">$ 924,23</span></td>
														<td><span class="text-primary font-w500">$ 34,2</span></td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown" >
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item" href="javascript:void(0);">Sửa</a>
																	<a class="dropdown-item" href="javascript:void(0);">Xóa</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
																<label class="form-check-label" for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{ asset('assets/admin/images/contacts/pic2.jpg') }}" class="avatar avatar-xxs rounded" alt="">
																<p class="mb-0 ms-2">James Sitepu</p>	
															</div>
														</td>
														<td><span>Nebraska</span></td>
														
														<td><span class="badge badge-rounded badge-outline-primary badge-lg">$ 924,23</span></td>
														<td><span class="text-primary font-w500">$ 58,2</span></td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown" >
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item" href="javascript:void(0);">Sửa</a>
																	<a class="dropdown-item" href="javascript:void(0);">Xóa</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
																<label class="form-check-label" for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{ asset('assets/admin/images/contacts/pic3.jpg') }}" class="avatar avatar-xxs rounded" alt="">
																<p class="mb-0 ms-2">James Sitepu</p>	
															</div>
														</td>
														<td><span>Alaska</span></td>
														
														<td><span class="badge badge-rounded badge-outline-primary badge-lg">$ 924,23</span></td>
														<td><span class="text-primary font-w500">$ 34,2</span></td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown" >
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item" href="javascript:void(0);">Sửa</a>
																	<a class="dropdown-item" href="javascript:void(0);">Xóa</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
																<label class="form-check-label" for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td>
															<div class="d-flex align-items-center">
																<img src="{{ asset('assets/admin/images/contacts/pic2.jpg') }}" class="avatar avatar-xxs rounded" alt="">
																<p class="mb-0 ms-2">James Sitepu</p>	
															</div>
														</td>
														<td><span>Nebraska</span></td>
														
														<td><span class="badge badge-rounded badge-outline-primary badge-lg">$ 924,23</span></td>
														<td><span class="text-primary font-w500">$ 58,2</span></td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown" >
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#737B8B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item" href="javascript:void(0);">Sửa</a>
																	<a class="dropdown-item" href="javascript:void(0);">Xóa</a>
																</div>
															</div>
														</td>
													</tr>
													
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
@endsection