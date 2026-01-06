@extends("layout.erp.app")
@section("content")
		<!--**********************************
            Content body start
        ***********************************-->
<style>

.main-content {
  margin-left: 250px;
  margin-top: 56px;
}

</style>
        <div class="content-body p-4 main-content">
            <!-- row -->
			<div class="container-fluid">
				<div class="d-flex align-items-center mb-4 flex-wrap">
					<div class="card-tabs mt-3 mt-sm-0 me-auto">
						<ul class="nav nav-tabs trans-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link underline active" data-bs-toggle="tab" href="#all-transactions" role="tab">All</a>
							</li>
							<li class="nav-item">
								<a class="nav-link underline" data-bs-toggle="tab" href="#completed" role="tab">Completed</a>
							</li>
							<li class="nav-item">
								<a class="nav-link underline" data-bs-toggle="tab" href="#pending" role="tab">Pending</a>
							</li>
							<li class="nav-item">
								<a class="nav-link underline" data-bs-toggle="tab" href="#canceled" role="tab">Cancelled</a>
							</li>
						</ul>
					</div>
					<h4 class="fs-20 font-w600  me-2 mb-0 downlod-pdf">
						<button class="btn btn-primary btn-sm"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path opacity="1" d="M2 13C2 12.5 2.5 12 3 12C3.5 12 4 12.5 4 13C4 13.3333 4 15 4 18C4 19.1046 4.89543 20 6 20H18C19.1046 20 20 19.1046 20 18V13C20 12.4477 20.4477 12 21 12C21.5523 12 22 12.4477 22 13V18C22 20.2091 20.2091 22 18 22H6C3.79086 22 2 20.2091 2 18C2 15 2 13.3333 2 13Z" fill="white"/>
							<path opacity="1" d="M11 14C11 14.5523 11.4477 15 12 15C12.5523 15 13 14.5523 13 14L13 2C13 1.44771 12.5523 1 12 1C11.4477 1 11 1.44771 11 2L11 14Z" fill="white"/>
							<path d="M16.2929 9.29289C16.6834 8.90237 17.3166 8.90237 17.7071 9.29289C18.0976 9.68341 18.0976 10.3166 17.7071 10.7071L12.7071 15.7071C12.331 16.0832 11.7264 16.0991 11.331 15.7433L6.33104 11.2433C5.92053 10.8738 5.88725 10.2415 6.25671 9.83103C6.62617 9.42052 7.25845 9.38724 7.66896 9.7567L11.9638 13.622L16.2929 9.29289Z" fill="white"/>
							</svg> Download PDF</button>
					</h4>
					<select class="form-select w-auto">
						<option data-display="newest">newest</option>
						<option value="1">newest</option>
						<option value="2">oldest</option>
					</select>
				</div>
				<!-- row -->
				<div class="row">
					<!-- --column-- -->
					<div class="col-xl-12">
						<div class="tab-content">
							<!-- --tab-pane -->
							<div class="tab-pane fade active show" id="all-transactions" role="tabpanel">
								<div class="table-responsive ">
									<table class="table-responsive-lg table display mb-4 dataTablesCard order-table card-table text-black dataTable no-footer student-tbl" id="example5">
										<thead>
											<tr>
												<th>
													<div class="checkbox mr-0 align-self-center">
														<div class="custom-control custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="checkAll" required="">
															<label class="custom-control-label" for="checkAll"></label>
														</div>
													</div>
												</th>
												<th>ID Invoice</th>
												<th>Date</th>
												<th>Recipient</th>
												<th>Amount</th>
												<th>Type</th>
												<th>Location</th>
												<th>Status</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="checkbox mr-0 align-self-center">
														<div class="custom-control custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="check8" required="">
															<label class="custom-control-label" for="check8"></label>
														</div>
													</div>
												</td>
												<td>#123412451</td>
												<td class="whitesp-no">June 1, 2020, 08:22 AM</td>
												<td class="whitesp-no p-0">
													<div class="d-flex py-sm-3 py-1 align-items-center">
														<span class=" me-3">
															<img src="./images/profile/small/pic16.jpg" alt="" width="50" class="rounded-3 img-history">
														</span>
														<div >
															<h6 class="font-w500 fs-16 mb-0">Marcus</h6>

														</div>
													</div>
												</td>


												<td class="whitesp-no amount"><a href="ecom-invoice.html" >$128.89 </a></td>
												<td class="income">
													<span class="me-2">
														<svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect x="39" y="39" width="39" height="39" rx="19.5" transform="rotate(-180 39 39)" fill="#2BC155" fill-opacity="0.11"/>
															<path opacity="1" d="M11.667 19.8333C11.667 19.4167 12.0837 19 12.5003 19C12.917 19 13.3337 19.4167 13.3337 19.8333C13.3337 20.1111 13.3337 21.5 13.3337 24C13.3337 24.9205 14.0799 25.6667 15.0003 25.6667H25.0003C25.9208 25.6667 26.667 24.9205 26.667 24V19.8333C26.667 19.3731 27.0401 19 27.5003 19C27.9606 19 28.3337 19.3731 28.3337 19.8333V24C28.3337 25.8409 26.8413 27.3333 25.0003 27.3333H15.0003C13.1594 27.3333 11.667 25.8409 11.667 24C11.667 21.5 11.667 20.1111 11.667 19.8333Z" fill="#13C28F"/>
															<path opacity="1" d="M19.1663 20.6667C19.1663 21.1269 19.5394 21.5 19.9997 21.5C20.4599 21.5 20.833 21.1269 20.833 20.6667V10.6667C20.833 10.2064 20.4599 9.83333 19.9997 9.83333C19.5394 9.83333 19.1663 10.2064 19.1663 10.6667V20.6667Z" fill="#13C28F"/>
															<path d="M23.5774 16.7441C23.9028 16.4186 24.4305 16.4186 24.7559 16.7441C25.0814 17.0695 25.0814 17.5972 24.7559 17.9226L20.5893 22.0893C20.2759 22.4027 19.772 22.4159 19.4425 22.1194L15.2759 18.3694C14.9338 18.0615 14.906 17.5346 15.2139 17.1925C15.5218 16.8504 16.0487 16.8227 16.3908 17.1306L19.9698 20.3517L23.5774 16.7441Z" fill="#13C28F"/>
														</svg>
													</span>
													 Income
												</td>
												<td>Bangladesh,India</td>
												<td><span class="btn btn-outline-danger btn-xs">Cancelled</span></td>
												<td>
													<div class="dropdown">
														<a href="javascript:void(0);" class="btn-link btn sharp tp-btn-light btn-primary pill" data-bs-toggle="dropdown" aria-expanded="false">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8.33319 9.99985C8.33319 10.9203 9.07938 11.6665 9.99986 11.6665C10.9203 11.6665 11.6665 10.9203 11.6665 9.99986C11.6665 9.07938 10.9203 8.33319 9.99986 8.33319C9.07938 8.33319 8.33319 9.07938 8.33319 9.99985Z" fill="#ffffff"/>
														<path d="M8.33319 3.33329C8.33319 4.25376 9.07938 4.99995 9.99986 4.99995C10.9203 4.99995 11.6665 4.25376 11.6665 3.33329C11.6665 2.41282 10.9203 1.66663 9.99986 1.66663C9.07938 1.66663 8.33319 2.41282 8.33319 3.33329Z" fill="#ffffff"/>
														<path d="M8.33319 16.6667C8.33319 17.5871 9.07938 18.3333 9.99986 18.3333C10.9203 18.3333 11.6665 17.5871 11.6665 16.6667C11.6665 15.7462 10.9203 15 9.99986 15C9.07938 15 8.33319 15.7462 8.33319 16.6667Z" fill="#ffffff"/>
														</svg>

														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M13.617 1.6665H6.39199C3.56699 1.6665 1.66699 3.64984 1.66699 6.59984V13.4082C1.66699 16.3498 3.56699 18.3332 6.39199 18.3332H13.617C16.442 18.3332 18.3337 16.3498 18.3337 13.4082V6.59984C18.3337 3.64984 16.442 1.6665 13.617 1.6665Z" fill="#FD5353"/>
																<path d="M12.5129 11.4752L11.0304 9.99358L12.5121 8.51192C12.7971 8.22775 12.7971 7.76525 12.5121 7.48108C12.2271 7.19442 11.7663 7.19525 11.4813 7.48025L9.99878 8.96192L8.51628 7.47858C8.23128 7.19358 7.76961 7.19525 7.48461 7.47858C7.20044 7.76358 7.20044 8.22608 7.48461 8.51025L8.96794 9.99358L7.48794 11.4727C7.20294 11.7577 7.20294 12.2202 7.48794 12.5036C7.63044 12.6469 7.81628 12.7177 8.00294 12.7177C8.19044 12.7177 8.37628 12.6469 8.51878 12.5044L9.99878 11.0244L11.4821 12.5069C11.6246 12.6494 11.8104 12.7202 11.9971 12.7202C12.1838 12.7202 12.3704 12.6486 12.5129 12.5069C12.7979 12.2219 12.7979 11.7602 12.5129 11.4752Z" fill="#FD5353"/>
																</svg> Cancel Transactions</a>
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M18.3337 9.99984C18.3337 14.6032 14.6028 18.3332 10.0003 18.3332C5.39783 18.3332 1.66699 14.6032 1.66699 9.99984C1.66699 5.39817 5.39783 1.6665 10.0003 1.6665C14.6028 1.6665 18.3337 5.39817 18.3337 9.99984Z" fill="#FF9F00"/>
																<path fill-rule="evenodd" clip-rule="evenodd" d="M10.7249 10.5256C10.7249 10.9272 10.3974 11.2547 9.99577 11.2547C9.5941 11.2547 9.2666 10.9272 9.2666 10.5256V6.84225C9.2666 6.44058 9.5941 6.11308 9.99577 6.11308C10.3974 6.11308 10.7249 6.44058 10.7249 6.84225V10.5256ZM9.27077 13.1696C9.27077 12.7679 9.5966 12.4404 9.99577 12.4404C10.4066 12.4404 10.7333 12.7679 10.7333 13.1696C10.7333 13.5712 10.4066 13.8987 10.0041 13.8987C9.59993 13.8987 9.27077 13.5712 9.27077 13.1696Z" fill="#FF9F00"/>
																</svg>
																 View Details</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="checkbox mr-0 align-self-center">
														<div class="custom-control custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="check81" required="">
															<label class="custom-control-label" for="check8"></label>
														</div>
													</div>
												</td>
												<td>Mr. Johnson</td>
												<td class="whitesp-no">June 1, 2020, 08:22 AM</td>
												<td class="whitesp-no p-0">
													<div class="d-flex py-sm-3 py-1 align-items-center">
														<span class="me-3">
															<img src="./images/profile/small/pic12.jpg" alt="" width="50" class="rounded-3 img-history">
														</span>
														<div >
															<h6 class="font-w500 fs-16 mb-0">Jordyn</h6>
														</div>
													</div>
												</td>
												<td class="whitesp-no amount"><a href="ecom-invoice.html" >$128.89 </a></td>
												<td>
													<span class="me-2">
														<svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect x="39" y="39" width="39" height="39" rx="19.5" transform="rotate(-180 39 39)" fill="#2BC155" fill-opacity="0.11"/>
															<path opacity="1" d="M11.667 19.8333C11.667 19.4167 12.0837 19 12.5003 19C12.917 19 13.3337 19.4167 13.3337 19.8333C13.3337 20.1111 13.3337 21.5 13.3337 24C13.3337 24.9205 14.0799 25.6667 15.0003 25.6667H25.0003C25.9208 25.6667 26.667 24.9205 26.667 24V19.8333C26.667 19.3731 27.0401 19 27.5003 19C27.9606 19 28.3337 19.3731 28.3337 19.8333V24C28.3337 25.8409 26.8413 27.3333 25.0003 27.3333H15.0003C13.1594 27.3333 11.667 25.8409 11.667 24C11.667 21.5 11.667 20.1111 11.667 19.8333Z" fill="#13C28F"/>
															<path opacity="1" d="M19.1663 20.6667C19.1663 21.1269 19.5394 21.5 19.9997 21.5C20.4599 21.5 20.833 21.1269 20.833 20.6667V10.6667C20.833 10.2064 20.4599 9.83333 19.9997 9.83333C19.5394 9.83333 19.1663 10.2064 19.1663 10.6667V20.6667Z" fill="#13C28F"/>
															<path d="M23.5774 16.7441C23.9028 16.4186 24.4305 16.4186 24.7559 16.7441C25.0814 17.0695 25.0814 17.5972 24.7559 17.9226L20.5893 22.0893C20.2759 22.4027 19.772 22.4159 19.4425 22.1194L15.2759 18.3694C14.9338 18.0615 14.906 17.5346 15.2139 17.1925C15.5218 16.8504 16.0487 16.8227 16.3908 17.1306L19.9698 20.3517L23.5774 16.7441Z" fill="#13C28F"/>
														</svg>
													</span>
													 Income
												</td>
												<td>Bangladesh,India</td>
												<td><span class=" btn btn-outline-light btn-xs">Pending</span></td>
												<td>
													<div class="dropdown">
														<a href="javascript:void(0);" class="btn-link btn sharp tp-btn-light btn-primary pill" data-bs-toggle="dropdown" aria-expanded="false">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8.33319 9.99985C8.33319 10.9203 9.07938 11.6665 9.99986 11.6665C10.9203 11.6665 11.6665 10.9203 11.6665 9.99986C11.6665 9.07938 10.9203 8.33319 9.99986 8.33319C9.07938 8.33319 8.33319 9.07938 8.33319 9.99985Z" fill="#ffffff"/>
														<path d="M8.33319 3.33329C8.33319 4.25376 9.07938 4.99995 9.99986 4.99995C10.9203 4.99995 11.6665 4.25376 11.6665 3.33329C11.6665 2.41282 10.9203 1.66663 9.99986 1.66663C9.07938 1.66663 8.33319 2.41282 8.33319 3.33329Z" fill="#ffffff"/>
														<path d="M8.33319 16.6667C8.33319 17.5871 9.07938 18.3333 9.99986 18.3333C10.9203 18.3333 11.6665 17.5871 11.6665 16.6667C11.6665 15.7462 10.9203 15 9.99986 15C9.07938 15 8.33319 15.7462 8.33319 16.6667Z" fill="#ffffff"/>
														</svg>
														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M13.617 1.6665H6.39199C3.56699 1.6665 1.66699 3.64984 1.66699 6.59984V13.4082C1.66699 16.3498 3.56699 18.3332 6.39199 18.3332H13.617C16.442 18.3332 18.3337 16.3498 18.3337 13.4082V6.59984C18.3337 3.64984 16.442 1.6665 13.617 1.6665Z" fill="#FD5353"/>
																<path d="M12.5129 11.4752L11.0304 9.99358L12.5121 8.51192C12.7971 8.22775 12.7971 7.76525 12.5121 7.48108C12.2271 7.19442 11.7663 7.19525 11.4813 7.48025L9.99878 8.96192L8.51628 7.47858C8.23128 7.19358 7.76961 7.19525 7.48461 7.47858C7.20044 7.76358 7.20044 8.22608 7.48461 8.51025L8.96794 9.99358L7.48794 11.4727C7.20294 11.7577 7.20294 12.2202 7.48794 12.5036C7.63044 12.6469 7.81628 12.7177 8.00294 12.7177C8.19044 12.7177 8.37628 12.6469 8.51878 12.5044L9.99878 11.0244L11.4821 12.5069C11.6246 12.6494 11.8104 12.7202 11.9971 12.7202C12.1838 12.7202 12.3704 12.6486 12.5129 12.5069C12.7979 12.2219 12.7979 11.7602 12.5129 11.4752Z" fill="#FD5353"/>
																</svg>Cancel Transactions</a>
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M18.3337 9.99984C18.3337 14.6032 14.6028 18.3332 10.0003 18.3332C5.39783 18.3332 1.66699 14.6032 1.66699 9.99984C1.66699 5.39817 5.39783 1.6665 10.0003 1.6665C14.6028 1.6665 18.3337 5.39817 18.3337 9.99984Z" fill="#FF9F00"/>
																<path fill-rule="evenodd" clip-rule="evenodd" d="M10.7249 10.5256C10.7249 10.9272 10.3974 11.2547 9.99577 11.2547C9.5941 11.2547 9.2666 10.9272 9.2666 10.5256V6.84225C9.2666 6.44058 9.5941 6.11308 9.99577 6.11308C10.3974 6.11308 10.7249 6.44058 10.7249 6.84225V10.5256ZM9.27077 13.1696C9.27077 12.7679 9.5966 12.4404 9.99577 12.4404C10.4066 12.4404 10.7333 12.7679 10.7333 13.1696C10.7333 13.5712 10.4066 13.8987 10.0041 13.8987C9.59993 13.8987 9.27077 13.5712 9.27077 13.1696Z" fill="#FF9F00"/>
																</svg>
																 View Details</a>
														</div>
													</div>
												</td>

											</tr>
											<tr>
												<td>
													<div class="checkbox mr-0 align-self-center">
														<div class="custom-control custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="check82" required="">
															<label class="custom-control-label" for="check82"></label>
														</div>
													</div>
												</td>
												<td>#123412451</td>
												<td class="whitesp-no">June 1, 2020, 08:22 AM</td>
												<td class="whitesp-no p-0">
													<div class="d-flex py-sm-3 py-1 align-items-center">
														<span class=" me-3">
															<img src="./images/avatar/LB.png" alt="" width="50" class="rounded-3 img-history">
														</span>
														<div >
															<h6 class="font-w500 fs-16 mb-0">Marcus</h6>
															<span class="fs-14 font-w400"><a href="app-profile.html">Freelancer </a></span>

														</div>
													</div>
												</td>
												<td class="whitesp-no amount"><a href="ecom-invoice.html" >$128.89 </a></td>
												<td class="income">
													<span class="me-2">
														<svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect width="39" height="39" rx="19.5" fill="#FF2E2E" fill-opacity="0.08"/>
															<path opacity="1" d="M11.667 19.8333C11.667 19.4167 12.0837 19 12.5003 19C12.917 19 13.3337 19.4167 13.3337 19.8333C13.3337 20.1111 13.3337 21.5 13.3337 24C13.3337 24.9205 14.0799 25.6667 15.0003 25.6667H25.0003C25.9208 25.6667 26.667 24.9205 26.667 24V19.8333C26.667 19.3731 27.0401 19 27.5003 19C27.9606 19 28.3337 19.3731 28.3337 19.8333V24C28.3337 25.8409 26.8413 27.3333 25.0003 27.3333H15.0003C13.1594 27.3333 11.667 25.8409 11.667 24C11.667 21.5 11.667 20.1111 11.667 19.8333Z" fill="#FD5353"/>
															<path opacity="1" d="M20.8337 11.5C20.8337 11.0398 20.4606 10.6667 20.0003 10.6667C19.5401 10.6667 19.167 11.0398 19.167 11.5V21.5C19.167 21.9602 19.5401 22.3333 20.0003 22.3333C20.4606 22.3333 20.8337 21.9602 20.8337 21.5V11.5Z" fill="#FD5353"/>
															<path d="M20.0302 11.815L16.4226 15.4226C16.0972 15.748 15.5695 15.748 15.2441 15.4226C14.9186 15.0972 14.9186 14.5695 15.2441 14.2441L19.4107 10.0774C19.7241 9.76402 20.228 9.75077 20.5575 10.0473L24.7241 13.7973C25.0662 14.1051 25.094 14.6321 24.7861 14.9741C24.4782 15.3162 23.9513 15.344 23.6092 15.0361L20.0302 11.815Z" fill="#FD5353"/>
														</svg>
													</span>
													Outcome
												</td>
												<td>Bangladesh,India</td>
												<td><span class=" btn btn-outline-success btn-xs">Completed</span></td>
												<td>
													<div class="dropdown">
														<a href="javascript:void(0);" class="btn-link btn sharp tp-btn-light btn-primary pill" data-bs-toggle="dropdown" aria-expanded="false">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8.33319 9.99985C8.33319 10.9203 9.07938 11.6665 9.99986 11.6665C10.9203 11.6665 11.6665 10.9203 11.6665 9.99986C11.6665 9.07938 10.9203 8.33319 9.99986 8.33319C9.07938 8.33319 8.33319 9.07938 8.33319 9.99985Z" fill="#ffffff"/>
														<path d="M8.33319 3.33329C8.33319 4.25376 9.07938 4.99995 9.99986 4.99995C10.9203 4.99995 11.6665 4.25376 11.6665 3.33329C11.6665 2.41282 10.9203 1.66663 9.99986 1.66663C9.07938 1.66663 8.33319 2.41282 8.33319 3.33329Z" fill="#ffffff"/>
														<path d="M8.33319 16.6667C8.33319 17.5871 9.07938 18.3333 9.99986 18.3333C10.9203 18.3333 11.6665 17.5871 11.6665 16.6667C11.6665 15.7462 10.9203 15 9.99986 15C9.07938 15 8.33319 15.7462 8.33319 16.6667Z" fill="#ffffff"/>
														</svg>

														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M13.617 1.6665H6.39199C3.56699 1.6665 1.66699 3.64984 1.66699 6.59984V13.4082C1.66699 16.3498 3.56699 18.3332 6.39199 18.3332H13.617C16.442 18.3332 18.3337 16.3498 18.3337 13.4082V6.59984C18.3337 3.64984 16.442 1.6665 13.617 1.6665Z" fill="#FD5353"/>
																<path d="M12.5129 11.4752L11.0304 9.99358L12.5121 8.51192C12.7971 8.22775 12.7971 7.76525 12.5121 7.48108C12.2271 7.19442 11.7663 7.19525 11.4813 7.48025L9.99878 8.96192L8.51628 7.47858C8.23128 7.19358 7.76961 7.19525 7.48461 7.47858C7.20044 7.76358 7.20044 8.22608 7.48461 8.51025L8.96794 9.99358L7.48794 11.4727C7.20294 11.7577 7.20294 12.2202 7.48794 12.5036C7.63044 12.6469 7.81628 12.7177 8.00294 12.7177C8.19044 12.7177 8.37628 12.6469 8.51878 12.5044L9.99878 11.0244L11.4821 12.5069C11.6246 12.6494 11.8104 12.7202 11.9971 12.7202C12.1838 12.7202 12.3704 12.6486 12.5129 12.5069C12.7979 12.2219 12.7979 11.7602 12.5129 11.4752Z" fill="#FD5353"/>
																</svg> Cancel Transactions</a>
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M18.3337 9.99984C18.3337 14.6032 14.6028 18.3332 10.0003 18.3332C5.39783 18.3332 1.66699 14.6032 1.66699 9.99984C1.66699 5.39817 5.39783 1.6665 10.0003 1.6665C14.6028 1.6665 18.3337 5.39817 18.3337 9.99984Z" fill="#FF9F00"/>
																<path fill-rule="evenodd" clip-rule="evenodd" d="M10.7249 10.5256C10.7249 10.9272 10.3974 11.2547 9.99577 11.2547C9.5941 11.2547 9.2666 10.9272 9.2666 10.5256V6.84225C9.2666 6.44058 9.5941 6.11308 9.99577 6.11308C10.3974 6.11308 10.7249 6.44058 10.7249 6.84225V10.5256ZM9.27077 13.1696C9.27077 12.7679 9.5966 12.4404 9.99577 12.4404C10.4066 12.4404 10.7333 12.7679 10.7333 13.1696C10.7333 13.5712 10.4066 13.8987 10.0041 13.8987C9.59993 13.8987 9.27077 13.5712 9.27077 13.1696Z" fill="#FF9F00"/>
																</svg>
																 View Details</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="checkbox mr-0 align-self-center">
														<div class="custom-control custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="check83" required="">
															<label class="custom-control-label" for="check83"></label>
														</div>
													</div>
												</td>
												<td>#123412451</td>
												<td class="whitesp-no">June 1, 2020, 08:22 AM</td>
												<td class="whitesp-no p-0">
													<div class="d-flex py-sm-3 py-1 align-items-center">
														<span class=" me-3">
															<img src="./images/profile/small/pic14.jpg" alt="" width="50" class="rounded-3 img-history">
														</span>
														<div>
															<h6 class="font-w500 fs-16 mb-0">Brandon</h6>

														</div>
													</div>
												</td>
												<td class="whitesp-no amount"><a href="ecom-invoice.html" >$128.89 </a></td>
												<td class="income">
													<span class="me-2">
														<svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect x="39" y="39" width="39" height="39" rx="19.5" transform="rotate(-180 39 39)" fill="#2BC155" fill-opacity="0.11"/>
															<path opacity="1" d="M11.667 19.8333C11.667 19.4167 12.0837 19 12.5003 19C12.917 19 13.3337 19.4167 13.3337 19.8333C13.3337 20.1111 13.3337 21.5 13.3337 24C13.3337 24.9205 14.0799 25.6667 15.0003 25.6667H25.0003C25.9208 25.6667 26.667 24.9205 26.667 24V19.8333C26.667 19.3731 27.0401 19 27.5003 19C27.9606 19 28.3337 19.3731 28.3337 19.8333V24C28.3337 25.8409 26.8413 27.3333 25.0003 27.3333H15.0003C13.1594 27.3333 11.667 25.8409 11.667 24C11.667 21.5 11.667 20.1111 11.667 19.8333Z" fill="#13C28F"/>
															<path opacity="1" d="M19.1663 20.6667C19.1663 21.1269 19.5394 21.5 19.9997 21.5C20.4599 21.5 20.833 21.1269 20.833 20.6667V10.6667C20.833 10.2064 20.4599 9.83333 19.9997 9.83333C19.5394 9.83333 19.1663 10.2064 19.1663 10.6667V20.6667Z" fill="#13C28F"/>
															<path d="M23.5774 16.7441C23.9028 16.4186 24.4305 16.4186 24.7559 16.7441C25.0814 17.0695 25.0814 17.5972 24.7559 17.9226L20.5893 22.0893C20.2759 22.4027 19.772 22.4159 19.4425 22.1194L15.2759 18.3694C14.9338 18.0615 14.906 17.5346 15.2139 17.1925C15.5218 16.8504 16.0487 16.8227 16.3908 17.1306L19.9698 20.3517L23.5774 16.7441Z" fill="#13C28F"/>
														</svg>
													</span>
													 Income
												</td>
												<td>Bangladesh,India</td>
												<td><span class=" btn btn-outline-light btn-xs">Pending</span></td>
												<td>
													<div class="dropdown">
														<a href="javascript:void(0);" class="btn-link btn sharp tp-btn-light btn-primary pill" data-bs-toggle="dropdown" aria-expanded="false">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8.33319 9.99985C8.33319 10.9203 9.07938 11.6665 9.99986 11.6665C10.9203 11.6665 11.6665 10.9203 11.6665 9.99986C11.6665 9.07938 10.9203 8.33319 9.99986 8.33319C9.07938 8.33319 8.33319 9.07938 8.33319 9.99985Z" fill="#ffffff"/>
														<path d="M8.33319 3.33329C8.33319 4.25376 9.07938 4.99995 9.99986 4.99995C10.9203 4.99995 11.6665 4.25376 11.6665 3.33329C11.6665 2.41282 10.9203 1.66663 9.99986 1.66663C9.07938 1.66663 8.33319 2.41282 8.33319 3.33329Z" fill="#ffffff"/>
														<path d="M8.33319 16.6667C8.33319 17.5871 9.07938 18.3333 9.99986 18.3333C10.9203 18.3333 11.6665 17.5871 11.6665 16.6667C11.6665 15.7462 10.9203 15 9.99986 15C9.07938 15 8.33319 15.7462 8.33319 16.6667Z" fill="#ffffff"/>
														</svg>

														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M13.617 1.6665H6.39199C3.56699 1.6665 1.66699 3.64984 1.66699 6.59984V13.4082C1.66699 16.3498 3.56699 18.3332 6.39199 18.3332H13.617C16.442 18.3332 18.3337 16.3498 18.3337 13.4082V6.59984C18.3337 3.64984 16.442 1.6665 13.617 1.6665Z" fill="#FD5353"/>
																<path d="M12.5129 11.4752L11.0304 9.99358L12.5121 8.51192C12.7971 8.22775 12.7971 7.76525 12.5121 7.48108C12.2271 7.19442 11.7663 7.19525 11.4813 7.48025L9.99878 8.96192L8.51628 7.47858C8.23128 7.19358 7.76961 7.19525 7.48461 7.47858C7.20044 7.76358 7.20044 8.22608 7.48461 8.51025L8.96794 9.99358L7.48794 11.4727C7.20294 11.7577 7.20294 12.2202 7.48794 12.5036C7.63044 12.6469 7.81628 12.7177 8.00294 12.7177C8.19044 12.7177 8.37628 12.6469 8.51878 12.5044L9.99878 11.0244L11.4821 12.5069C11.6246 12.6494 11.8104 12.7202 11.9971 12.7202C12.1838 12.7202 12.3704 12.6486 12.5129 12.5069C12.7979 12.2219 12.7979 11.7602 12.5129 11.4752Z" fill="#FD5353"/>
																</svg> Cancel Transactions</a>
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M18.3337 9.99984C18.3337 14.6032 14.6028 18.3332 10.0003 18.3332C5.39783 18.3332 1.66699 14.6032 1.66699 9.99984C1.66699 5.39817 5.39783 1.6665 10.0003 1.6665C14.6028 1.6665 18.3337 5.39817 18.3337 9.99984Z" fill="#FF9F00"/>
																<path fill-rule="evenodd" clip-rule="evenodd" d="M10.7249 10.5256C10.7249 10.9272 10.3974 11.2547 9.99577 11.2547C9.5941 11.2547 9.2666 10.9272 9.2666 10.5256V6.84225C9.2666 6.44058 9.5941 6.11308 9.99577 6.11308C10.3974 6.11308 10.7249 6.44058 10.7249 6.84225V10.5256ZM9.27077 13.1696C9.27077 12.7679 9.5966 12.4404 9.99577 12.4404C10.4066 12.4404 10.7333 12.7679 10.7333 13.1696C10.7333 13.5712 10.4066 13.8987 10.0041 13.8987C9.59993 13.8987 9.27077 13.5712 9.27077 13.1696Z" fill="#FF9F00"/>
																</svg>
																 View Details</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="checkbox mr-0 align-self-center">
														<div class="custom-control custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="check84" required="">
															<label class="custom-control-label" for="check84"></label>
														</div>
													</div>
												</td>
												<td>#123412451</td>
												<td class="whitesp-no">June 1, 2020, 08:22 AM</td>
												<td class="whitesp-no p-0">
													<div class="d-flex py-sm-3 py-1 align-items-center">
														<span class=" me-3">
															<img src="./images/profile/small/pic15.jpg" alt="" width="50" class="rounded-3 img-history">
														</span>
														<div>
															<h6 class="font-w500 fs-16 mb-0">James</h6>

														</div>
													</div>
												</td>
												<td class="whitesp-no amount"><a href="ecom-invoice.html" >$128.89 </a></td>
												<td class="income">
													<span class="me-2">
														<svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect x="39" y="39" width="39" height="39" rx="19.5" transform="rotate(-180 39 39)" fill="#2BC155" fill-opacity="0.11"/>
															<path opacity="1" d="M11.667 19.8333C11.667 19.4167 12.0837 19 12.5003 19C12.917 19 13.3337 19.4167 13.3337 19.8333C13.3337 20.1111 13.3337 21.5 13.3337 24C13.3337 24.9205 14.0799 25.6667 15.0003 25.6667H25.0003C25.9208 25.6667 26.667 24.9205 26.667 24V19.8333C26.667 19.3731 27.0401 19 27.5003 19C27.9606 19 28.3337 19.3731 28.3337 19.8333V24C28.3337 25.8409 26.8413 27.3333 25.0003 27.3333H15.0003C13.1594 27.3333 11.667 25.8409 11.667 24C11.667 21.5 11.667 20.1111 11.667 19.8333Z" fill="#13C28F"/>
															<path opacity="1" d="M19.1663 20.6667C19.1663 21.1269 19.5394 21.5 19.9997 21.5C20.4599 21.5 20.833 21.1269 20.833 20.6667V10.6667C20.833 10.2064 20.4599 9.83333 19.9997 9.83333C19.5394 9.83333 19.1663 10.2064 19.1663 10.6667V20.6667Z" fill="#13C28F"/>
															<path d="M23.5774 16.7441C23.9028 16.4186 24.4305 16.4186 24.7559 16.7441C25.0814 17.0695 25.0814 17.5972 24.7559 17.9226L20.5893 22.0893C20.2759 22.4027 19.772 22.4159 19.4425 22.1194L15.2759 18.3694C14.9338 18.0615 14.906 17.5346 15.2139 17.1925C15.5218 16.8504 16.0487 16.8227 16.3908 17.1306L19.9698 20.3517L23.5774 16.7441Z" fill="#13C28F"/>
														</svg>
													</span>
													 Income
												</td>
												<td>Bangladesh,India</td>
												<td><span class="btn btn-outline-danger btn-xs">Cancelled</span></td>
												<td>
													<div class="dropdown">
														<a href="javascript:void(0);" class="btn-link btn sharp tp-btn-light btn-primary pill" data-bs-toggle="dropdown" aria-expanded="false">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8.33319 9.99985C8.33319 10.9203 9.07938 11.6665 9.99986 11.6665C10.9203 11.6665 11.6665 10.9203 11.6665 9.99986C11.6665 9.07938 10.9203 8.33319 9.99986 8.33319C9.07938 8.33319 8.33319 9.07938 8.33319 9.99985Z" fill="#ffffff"/>
														<path d="M8.33319 3.33329C8.33319 4.25376 9.07938 4.99995 9.99986 4.99995C10.9203 4.99995 11.6665 4.25376 11.6665 3.33329C11.6665 2.41282 10.9203 1.66663 9.99986 1.66663C9.07938 1.66663 8.33319 2.41282 8.33319 3.33329Z" fill="#ffffff"/>
														<path d="M8.33319 16.6667C8.33319 17.5871 9.07938 18.3333 9.99986 18.3333C10.9203 18.3333 11.6665 17.5871 11.6665 16.6667C11.6665 15.7462 10.9203 15 9.99986 15C9.07938 15 8.33319 15.7462 8.33319 16.6667Z" fill="#ffffff"/>
														</svg>

														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M13.617 1.6665H6.39199C3.56699 1.6665 1.66699 3.64984 1.66699 6.59984V13.4082C1.66699 16.3498 3.56699 18.3332 6.39199 18.3332H13.617C16.442 18.3332 18.3337 16.3498 18.3337 13.4082V6.59984C18.3337 3.64984 16.442 1.6665 13.617 1.6665Z" fill="#FD5353"/>
																<path d="M12.5129 11.4752L11.0304 9.99358L12.5121 8.51192C12.7971 8.22775 12.7971 7.76525 12.5121 7.48108C12.2271 7.19442 11.7663 7.19525 11.4813 7.48025L9.99878 8.96192L8.51628 7.47858C8.23128 7.19358 7.76961 7.19525 7.48461 7.47858C7.20044 7.76358 7.20044 8.22608 7.48461 8.51025L8.96794 9.99358L7.48794 11.4727C7.20294 11.7577 7.20294 12.2202 7.48794 12.5036C7.63044 12.6469 7.81628 12.7177 8.00294 12.7177C8.19044 12.7177 8.37628 12.6469 8.51878 12.5044L9.99878 11.0244L11.4821 12.5069C11.6246 12.6494 11.8104 12.7202 11.9971 12.7202C12.1838 12.7202 12.3704 12.6486 12.5129 12.5069C12.7979 12.2219 12.7979 11.7602 12.5129 11.4752Z" fill="#FD5353"/>
																</svg> Cancel Transactions</a>
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M18.3337 9.99984C18.3337 14.6032 14.6028 18.3332 10.0003 18.3332C5.39783 18.3332 1.66699 14.6032 1.66699 9.99984C1.66699 5.39817 5.39783 1.6665 10.0003 1.6665C14.6028 1.6665 18.3337 5.39817 18.3337 9.99984Z" fill="#FF9F00"/>
																<path fill-rule="evenodd" clip-rule="evenodd" d="M10.7249 10.5256C10.7249 10.9272 10.3974 11.2547 9.99577 11.2547C9.5941 11.2547 9.2666 10.9272 9.2666 10.5256V6.84225C9.2666 6.44058 9.5941 6.11308 9.99577 6.11308C10.3974 6.11308 10.7249 6.44058 10.7249 6.84225V10.5256ZM9.27077 13.1696C9.27077 12.7679 9.5966 12.4404 9.99577 12.4404C10.4066 12.4404 10.7333 12.7679 10.7333 13.1696C10.7333 13.5712 10.4066 13.8987 10.0041 13.8987C9.59993 13.8987 9.27077 13.5712 9.27077 13.1696Z" fill="#FF9F00"/>
																</svg>
																 View Details</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="checkbox mr-0 align-self-center">
														<div class="custom-control custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="check85" required="">
															<label class="custom-control-label" for="check85"></label>
														</div>
													</div>
												</td>
												<td>#123412451</td>
												<td class="whitesp-no">June 1, 2020, 08:22 AM</td>
												<td class="whitesp-no p-0">
													<div class="d-flex py-sm-3 py-1 align-items-center">
														<span class=" me-3">
															<img src="./images/profile/small/pic11.jpg" alt="" width="50" class="rounded-3 img-history">
														</span>
														<div>
															<h6 class="font-w500 fs-16 mb-0">Haylie</h6>
														</div>
													</div>
												</td>


												<td class="whitesp-no amount"><a href="ecom-invoice.html" >$128.89</a></td>
												<td class="income">
													<span class="me-2">
														<svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect x="39" y="39" width="39" height="39" rx="19.5" transform="rotate(-180 39 39)" fill="#2BC155" fill-opacity="0.11"/>
															<path opacity="1" d="M11.667 19.8333C11.667 19.4167 12.0837 19 12.5003 19C12.917 19 13.3337 19.4167 13.3337 19.8333C13.3337 20.1111 13.3337 21.5 13.3337 24C13.3337 24.9205 14.0799 25.6667 15.0003 25.6667H25.0003C25.9208 25.6667 26.667 24.9205 26.667 24V19.8333C26.667 19.3731 27.0401 19 27.5003 19C27.9606 19 28.3337 19.3731 28.3337 19.8333V24C28.3337 25.8409 26.8413 27.3333 25.0003 27.3333H15.0003C13.1594 27.3333 11.667 25.8409 11.667 24C11.667 21.5 11.667 20.1111 11.667 19.8333Z" fill="#13C28F"/>
															<path opacity="1" d="M19.1663 20.6667C19.1663 21.1269 19.5394 21.5 19.9997 21.5C20.4599 21.5 20.833 21.1269 20.833 20.6667V10.6667C20.833 10.2064 20.4599 9.83333 19.9997 9.83333C19.5394 9.83333 19.1663 10.2064 19.1663 10.6667V20.6667Z" fill="#13C28F"/>
															<path d="M23.5774 16.7441C23.9028 16.4186 24.4305 16.4186 24.7559 16.7441C25.0814 17.0695 25.0814 17.5972 24.7559 17.9226L20.5893 22.0893C20.2759 22.4027 19.772 22.4159 19.4425 22.1194L15.2759 18.3694C14.9338 18.0615 14.906 17.5346 15.2139 17.1925C15.5218 16.8504 16.0487 16.8227 16.3908 17.1306L19.9698 20.3517L23.5774 16.7441Z" fill="#13C28F"/>
														</svg>
													</span>
													 Income
												</td>
												<td>Bangladesh,India</td>
												<td><span class="btn btn-outline-danger btn-xs">Cancelled</span></td>
												<td>
													<div class="dropdown">
														<a href="javascript:void(0);" class="btn-link btn sharp tp-btn-light btn-primary pill" data-bs-toggle="dropdown" aria-expanded="false">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8.33319 9.99985C8.33319 10.9203 9.07938 11.6665 9.99986 11.6665C10.9203 11.6665 11.6665 10.9203 11.6665 9.99986C11.6665 9.07938 10.9203 8.33319 9.99986 8.33319C9.07938 8.33319 8.33319 9.07938 8.33319 9.99985Z" fill="#ffffff"/>
														<path d="M8.33319 3.33329C8.33319 4.25376 9.07938 4.99995 9.99986 4.99995C10.9203 4.99995 11.6665 4.25376 11.6665 3.33329C11.6665 2.41282 10.9203 1.66663 9.99986 1.66663C9.07938 1.66663 8.33319 2.41282 8.33319 3.33329Z" fill="#ffffff"/>
														<path d="M8.33319 16.6667C8.33319 17.5871 9.07938 18.3333 9.99986 18.3333C10.9203 18.3333 11.6665 17.5871 11.6665 16.6667C11.6665 15.7462 10.9203 15 9.99986 15C9.07938 15 8.33319 15.7462 8.33319 16.6667Z" fill="#ffffff"/>
														</svg>

														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M13.617 1.6665H6.39199C3.56699 1.6665 1.66699 3.64984 1.66699 6.59984V13.4082C1.66699 16.3498 3.56699 18.3332 6.39199 18.3332H13.617C16.442 18.3332 18.3337 16.3498 18.3337 13.4082V6.59984C18.3337 3.64984 16.442 1.6665 13.617 1.6665Z" fill="#FD5353"/>
																<path d="M12.5129 11.4752L11.0304 9.99358L12.5121 8.51192C12.7971 8.22775 12.7971 7.76525 12.5121 7.48108C12.2271 7.19442 11.7663 7.19525 11.4813 7.48025L9.99878 8.96192L8.51628 7.47858C8.23128 7.19358 7.76961 7.19525 7.48461 7.47858C7.20044 7.76358 7.20044 8.22608 7.48461 8.51025L8.96794 9.99358L7.48794 11.4727C7.20294 11.7577 7.20294 12.2202 7.48794 12.5036C7.63044 12.6469 7.81628 12.7177 8.00294 12.7177C8.19044 12.7177 8.37628 12.6469 8.51878 12.5044L9.99878 11.0244L11.4821 12.5069C11.6246 12.6494 11.8104 12.7202 11.9971 12.7202C12.1838 12.7202 12.3704 12.6486 12.5129 12.5069C12.7979 12.2219 12.7979 11.7602 12.5129 11.4752Z" fill="#FD5353"/>
																</svg> Cancel Transactions</a>
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M18.3337 9.99984C18.3337 14.6032 14.6028 18.3332 10.0003 18.3332C5.39783 18.3332 1.66699 14.6032 1.66699 9.99984C1.66699 5.39817 5.39783 1.6665 10.0003 1.6665C14.6028 1.6665 18.3337 5.39817 18.3337 9.99984Z" fill="#FF9F00"/>
																<path fill-rule="evenodd" clip-rule="evenodd" d="M10.7249 10.5256C10.7249 10.9272 10.3974 11.2547 9.99577 11.2547C9.5941 11.2547 9.2666 10.9272 9.2666 10.5256V6.84225C9.2666 6.44058 9.5941 6.11308 9.99577 6.11308C10.3974 6.11308 10.7249 6.44058 10.7249 6.84225V10.5256ZM9.27077 13.1696C9.27077 12.7679 9.5966 12.4404 9.99577 12.4404C10.4066 12.4404 10.7333 12.7679 10.7333 13.1696C10.7333 13.5712 10.4066 13.8987 10.0041 13.8987C9.59993 13.8987 9.27077 13.5712 9.27077 13.1696Z" fill="#FF9F00"/>
																</svg>
																 View Details</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="checkbox mr-0 align-self-center">
														<div class="custom-control custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="check86" required="">
															<label class="custom-control-label" for="check86"></label>
														</div>
													</div>
												</td>
												<td>#123412451</td>
												<td class="whitesp-no">June 1, 2020, 08:22 AM</td>
												<td class="whitesp-no p-0">
													<div class="d-flex py-sm-3 py-1 align-items-center">
														<span class=" me-3 rounded-3">
															<img src="./images/avatar/LB.png" alt="" width="50" class="rounded-3 img-history">
														</span>
														<div>
															<h6 class="font-w500 fs-16 mb-0">Allison</h6>
															<span class="fs-14 font-w400"><a href="app-profile.html">Online Shop</a></span>
														</div>
													</div>
												</td>


												<td class="whitesp-no amount"><a href="ecom-invoice.html" >$128.89</a></td>
												<td class="income">
													<span class="me-2">
														<svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect x="39" y="39" width="39" height="39" rx="19.5" transform="rotate(-180 39 39)" fill="#2BC155" fill-opacity="0.11"/>
															<path opacity="1" d="M11.667 19.8333C11.667 19.4167 12.0837 19 12.5003 19C12.917 19 13.3337 19.4167 13.3337 19.8333C13.3337 20.1111 13.3337 21.5 13.3337 24C13.3337 24.9205 14.0799 25.6667 15.0003 25.6667H25.0003C25.9208 25.6667 26.667 24.9205 26.667 24V19.8333C26.667 19.3731 27.0401 19 27.5003 19C27.9606 19 28.3337 19.3731 28.3337 19.8333V24C28.3337 25.8409 26.8413 27.3333 25.0003 27.3333H15.0003C13.1594 27.3333 11.667 25.8409 11.667 24C11.667 21.5 11.667 20.1111 11.667 19.8333Z" fill="#13C28F"/>
															<path opacity="1" d="M19.1663 20.6667C19.1663 21.1269 19.5394 21.5 19.9997 21.5C20.4599 21.5 20.833 21.1269 20.833 20.6667V10.6667C20.833 10.2064 20.4599 9.83333 19.9997 9.83333C19.5394 9.83333 19.1663 10.2064 19.1663 10.6667V20.6667Z" fill="#13C28F"/>
															<path d="M23.5774 16.7441C23.9028 16.4186 24.4305 16.4186 24.7559 16.7441C25.0814 17.0695 25.0814 17.5972 24.7559 17.9226L20.5893 22.0893C20.2759 22.4027 19.772 22.4159 19.4425 22.1194L15.2759 18.3694C14.9338 18.0615 14.906 17.5346 15.2139 17.1925C15.5218 16.8504 16.0487 16.8227 16.3908 17.1306L19.9698 20.3517L23.5774 16.7441Z" fill="#13C28F"/>
														</svg>
													</span>
													 Income
												</td>
												<td>Bangladesh,India</td>
												<td><span class=" btn btn-outline-success btn-xs">Completed</span></td>
												<td>
													<div class="dropdown">
														<a href="javascript:void(0);" class="btn-link btn sharp tp-btn-light btn-primary pill" data-bs-toggle="dropdown" aria-expanded="false">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8.33319 9.99985C8.33319 10.9203 9.07938 11.6665 9.99986 11.6665C10.9203 11.6665 11.6665 10.9203 11.6665 9.99986C11.6665 9.07938 10.9203 8.33319 9.99986 8.33319C9.07938 8.33319 8.33319 9.07938 8.33319 9.99985Z" fill="#ffffff"/>
														<path d="M8.33319 3.33329C8.33319 4.25376 9.07938 4.99995 9.99986 4.99995C10.9203 4.99995 11.6665 4.25376 11.6665 3.33329C11.6665 2.41282 10.9203 1.66663 9.99986 1.66663C9.07938 1.66663 8.33319 2.41282 8.33319 3.33329Z" fill="#ffffff"/>
														<path d="M8.33319 16.6667C8.33319 17.5871 9.07938 18.3333 9.99986 18.3333C10.9203 18.3333 11.6665 17.5871 11.6665 16.6667C11.6665 15.7462 10.9203 15 9.99986 15C9.07938 15 8.33319 15.7462 8.33319 16.6667Z" fill="#ffffff"/>
														</svg>

														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M13.617 1.6665H6.39199C3.56699 1.6665 1.66699 3.64984 1.66699 6.59984V13.4082C1.66699 16.3498 3.56699 18.3332 6.39199 18.3332H13.617C16.442 18.3332 18.3337 16.3498 18.3337 13.4082V6.59984C18.3337 3.64984 16.442 1.6665 13.617 1.6665Z" fill="#FD5353"/>
																<path d="M12.5129 11.4752L11.0304 9.99358L12.5121 8.51192C12.7971 8.22775 12.7971 7.76525 12.5121 7.48108C12.2271 7.19442 11.7663 7.19525 11.4813 7.48025L9.99878 8.96192L8.51628 7.47858C8.23128 7.19358 7.76961 7.19525 7.48461 7.47858C7.20044 7.76358 7.20044 8.22608 7.48461 8.51025L8.96794 9.99358L7.48794 11.4727C7.20294 11.7577 7.20294 12.2202 7.48794 12.5036C7.63044 12.6469 7.81628 12.7177 8.00294 12.7177C8.19044 12.7177 8.37628 12.6469 8.51878 12.5044L9.99878 11.0244L11.4821 12.5069C11.6246 12.6494 11.8104 12.7202 11.9971 12.7202C12.1838 12.7202 12.3704 12.6486 12.5129 12.5069C12.7979 12.2219 12.7979 11.7602 12.5129 11.4752Z" fill="#FD5353"/>
																</svg> Cancel Transactions</a>
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M18.3337 9.99984C18.3337 14.6032 14.6028 18.3332 10.0003 18.3332C5.39783 18.3332 1.66699 14.6032 1.66699 9.99984C1.66699 5.39817 5.39783 1.6665 10.0003 1.6665C14.6028 1.6665 18.3337 5.39817 18.3337 9.99984Z" fill="#FF9F00"/>
																<path fill-rule="evenodd" clip-rule="evenodd" d="M10.7249 10.5256C10.7249 10.9272 10.3974 11.2547 9.99577 11.2547C9.5941 11.2547 9.2666 10.9272 9.2666 10.5256V6.84225C9.2666 6.44058 9.5941 6.11308 9.99577 6.11308C10.3974 6.11308 10.7249 6.44058 10.7249 6.84225V10.5256ZM9.27077 13.1696C9.27077 12.7679 9.5966 12.4404 9.99577 12.4404C10.4066 12.4404 10.7333 12.7679 10.7333 13.1696C10.7333 13.5712 10.4066 13.8987 10.0041 13.8987C9.59993 13.8987 9.27077 13.5712 9.27077 13.1696Z" fill="#FF9F00"/>
																</svg>
																 View Details</a>
														</div>
													</div>
												</td>

											</tr>
											<tr>
												<td>
													<div class="checkbox mr-0 align-self-center">
														<div class="custom-control custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="check87" required="">
															<label class="custom-control-label" for="check87"></label>
														</div>
													</div>
												</td>
												<td>#123412451</td>
												<td class="whitesp-no">June 1, 2020, 08:22 AM</td>
												<td class="whitesp-no p-0">
													<div class="d-flex py-sm-3 py-1 align-items-center">
														<span class=" me-3">
															<img src="./images/avatar/LB.png" alt="" width="50" class="rounded-3 img-history">
														</span>
														<div>
															<h6 class="font-w500 fs-16 mb-0">Yellow Studios</h6>
															<span class="fs-14 font-w400"><a href="app-profile.html">Studio</a></span>
														</div>
													</div>
												</td>
												<td class="whitesp-no amount">
													<a href="ecom-invoice.html" >$128.89</a></a>
												</td>
												<td class="income">
													<span class="me-2">
														<svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect width="39" height="39" rx="19.5" fill="#FF2E2E" fill-opacity="0.08"/>
															<path opacity="1" d="M11.667 19.8333C11.667 19.4167 12.0837 19 12.5003 19C12.917 19 13.3337 19.4167 13.3337 19.8333C13.3337 20.1111 13.3337 21.5 13.3337 24C13.3337 24.9205 14.0799 25.6667 15.0003 25.6667H25.0003C25.9208 25.6667 26.667 24.9205 26.667 24V19.8333C26.667 19.3731 27.0401 19 27.5003 19C27.9606 19 28.3337 19.3731 28.3337 19.8333V24C28.3337 25.8409 26.8413 27.3333 25.0003 27.3333H15.0003C13.1594 27.3333 11.667 25.8409 11.667 24C11.667 21.5 11.667 20.1111 11.667 19.8333Z" fill="#FD5353"/>
															<path opacity="1" d="M20.8337 11.5C20.8337 11.0398 20.4606 10.6667 20.0003 10.6667C19.5401 10.6667 19.167 11.0398 19.167 11.5V21.5C19.167 21.9602 19.5401 22.3333 20.0003 22.3333C20.4606 22.3333 20.8337 21.9602 20.8337 21.5V11.5Z" fill="#FD5353"/>
															<path d="M20.0302 11.815L16.4226 15.4226C16.0972 15.748 15.5695 15.748 15.2441 15.4226C14.9186 15.0972 14.9186 14.5695 15.2441 14.2441L19.4107 10.0774C19.7241 9.76402 20.228 9.75077 20.5575 10.0473L24.7241 13.7973C25.0662 14.1051 25.094 14.6321 24.7861 14.9741C24.4782 15.3162 23.9513 15.344 23.6092 15.0361L20.0302 11.815Z" fill="#FD5353"/>
														</svg>

													</span>
													Outcome
												</td>
												<td>Bangladesh,India</td>
												<td><span class="btn btn-outline-success btn-xs">Completed</span></td>
												<td>
													<div class="dropdown">
														<a href="javascript:void(0);" class="btn-link btn sharp tp-btn-light btn-primary pill" data-bs-toggle="dropdown" aria-expanded="false">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8.33319 9.99985C8.33319 10.9203 9.07938 11.6665 9.99986 11.6665C10.9203 11.6665 11.6665 10.9203 11.6665 9.99986C11.6665 9.07938 10.9203 8.33319 9.99986 8.33319C9.07938 8.33319 8.33319 9.07938 8.33319 9.99985Z" fill="#ffffff"/>
														<path d="M8.33319 3.33329C8.33319 4.25376 9.07938 4.99995 9.99986 4.99995C10.9203 4.99995 11.6665 4.25376 11.6665 3.33329C11.6665 2.41282 10.9203 1.66663 9.99986 1.66663C9.07938 1.66663 8.33319 2.41282 8.33319 3.33329Z" fill="#ffffff"/>
														<path d="M8.33319 16.6667C8.33319 17.5871 9.07938 18.3333 9.99986 18.3333C10.9203 18.3333 11.6665 17.5871 11.6665 16.6667C11.6665 15.7462 10.9203 15 9.99986 15C9.07938 15 8.33319 15.7462 8.33319 16.6667Z" fill="#ffffff"/>
														</svg>

														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M13.617 1.6665H6.39199C3.56699 1.6665 1.66699 3.64984 1.66699 6.59984V13.4082C1.66699 16.3498 3.56699 18.3332 6.39199 18.3332H13.617C16.442 18.3332 18.3337 16.3498 18.3337 13.4082V6.59984C18.3337 3.64984 16.442 1.6665 13.617 1.6665Z" fill="#FD5353"/>
																<path d="M12.5129 11.4752L11.0304 9.99358L12.5121 8.51192C12.7971 8.22775 12.7971 7.76525 12.5121 7.48108C12.2271 7.19442 11.7663 7.19525 11.4813 7.48025L9.99878 8.96192L8.51628 7.47858C8.23128 7.19358 7.76961 7.19525 7.48461 7.47858C7.20044 7.76358 7.20044 8.22608 7.48461 8.51025L8.96794 9.99358L7.48794 11.4727C7.20294 11.7577 7.20294 12.2202 7.48794 12.5036C7.63044 12.6469 7.81628 12.7177 8.00294 12.7177C8.19044 12.7177 8.37628 12.6469 8.51878 12.5044L9.99878 11.0244L11.4821 12.5069C11.6246 12.6494 11.8104 12.7202 11.9971 12.7202C12.1838 12.7202 12.3704 12.6486 12.5129 12.5069C12.7979 12.2219 12.7979 11.7602 12.5129 11.4752Z" fill="#FD5353"/>
																</svg> Cancel Transactions</a>
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M18.3337 9.99984C18.3337 14.6032 14.6028 18.3332 10.0003 18.3332C5.39783 18.3332 1.66699 14.6032 1.66699 9.99984C1.66699 5.39817 5.39783 1.6665 10.0003 1.6665C14.6028 1.6665 18.3337 5.39817 18.3337 9.99984Z" fill="#FF9F00"/>
																<path fill-rule="evenodd" clip-rule="evenodd" d="M10.7249 10.5256C10.7249 10.9272 10.3974 11.2547 9.99577 11.2547C9.5941 11.2547 9.2666 10.9272 9.2666 10.5256V6.84225C9.2666 6.44058 9.5941 6.11308 9.99577 6.11308C10.3974 6.11308 10.7249 6.44058 10.7249 6.84225V10.5256ZM9.27077 13.1696C9.27077 12.7679 9.5966 12.4404 9.99577 12.4404C10.4066 12.4404 10.7333 12.7679 10.7333 13.1696C10.7333 13.5712 10.4066 13.8987 10.0041 13.8987C9.59993 13.8987 9.27077 13.5712 9.27077 13.1696Z" fill="#FF9F00"/>
																</svg>
																 View Details</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="checkbox mr-0 align-self-center">
														<div class="custom-control custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="check88" required="">
															<label class="custom-control-label" for="check88"></label>
														</div>
													</div>
												</td>
												<td>#123412451</td>
												<td class="whitesp-no">June 1, 2020, 08:22 AM</td>
												<td class="whitesp-no p-0">
													<div class="d-flex py-sm-3 py-1 align-items-center ">
														<span class=" me-3">
															<img src="./images/profile/small/pic11.jpg" alt="" width="50" class="rounded-3 img-history">
														</span>
														<div>
															<h6 class="font-w500 fs-16 mb-0">Thomas Khun</h6>
															<span class="fs-14 font-w400"><a href="app-profile.html">@thomaskhuncoro</a></span>
														</div>
													</div>
												</td>


												<td class="whitesp-no amount"><a href="ecom-invoice.html" >$128.89</td>
												<td class="income">
													<span class="me-2">
														<svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect width="39" height="39" rx="19.5" fill="#FF2E2E" fill-opacity="0.08"/>
															<path opacity="1" d="M11.667 19.8333C11.667 19.4167 12.0837 19 12.5003 19C12.917 19 13.3337 19.4167 13.3337 19.8333C13.3337 20.1111 13.3337 21.5 13.3337 24C13.3337 24.9205 14.0799 25.6667 15.0003 25.6667H25.0003C25.9208 25.6667 26.667 24.9205 26.667 24V19.8333C26.667 19.3731 27.0401 19 27.5003 19C27.9606 19 28.3337 19.3731 28.3337 19.8333V24C28.3337 25.8409 26.8413 27.3333 25.0003 27.3333H15.0003C13.1594 27.3333 11.667 25.8409 11.667 24C11.667 21.5 11.667 20.1111 11.667 19.8333Z" fill="#FD5353"/>
															<path opacity="1" d="M20.8337 11.5C20.8337 11.0398 20.4606 10.6667 20.0003 10.6667C19.5401 10.6667 19.167 11.0398 19.167 11.5V21.5C19.167 21.9602 19.5401 22.3333 20.0003 22.3333C20.4606 22.3333 20.8337 21.9602 20.8337 21.5V11.5Z" fill="#FD5353"/>
															<path d="M20.0302 11.815L16.4226 15.4226C16.0972 15.748 15.5695 15.748 15.2441 15.4226C14.9186 15.0972 14.9186 14.5695 15.2441 14.2441L19.4107 10.0774C19.7241 9.76402 20.228 9.75077 20.5575 10.0473L24.7241 13.7973C25.0662 14.1051 25.094 14.6321 24.7861 14.9741C24.4782 15.3162 23.9513 15.344 23.6092 15.0361L20.0302 11.815Z" fill="#FD5353"/>
														</svg>
													</span>
													Outcome
												</td>
												<td>Bangladesh,India</td>
												<td><span class=" btn btn-outline-light btn-xs">Pending</span></td>
												<td>
													<div class="dropdown">
														<a href="javascript:void(0);" class="btn-link btn sharp tp-btn-light btn-primary pill" data-bs-toggle="dropdown" aria-expanded="false">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8.33319 9.99985C8.33319 10.9203 9.07938 11.6665 9.99986 11.6665C10.9203 11.6665 11.6665 10.9203 11.6665 9.99986C11.6665 9.07938 10.9203 8.33319 9.99986 8.33319C9.07938 8.33319 8.33319 9.07938 8.33319 9.99985Z" fill="#ffffff"/>
														<path d="M8.33319 3.33329C8.33319 4.25376 9.07938 4.99995 9.99986 4.99995C10.9203 4.99995 11.6665 4.25376 11.6665 3.33329C11.6665 2.41282 10.9203 1.66663 9.99986 1.66663C9.07938 1.66663 8.33319 2.41282 8.33319 3.33329Z" fill="#ffffff"/>
														<path d="M8.33319 16.6667C8.33319 17.5871 9.07938 18.3333 9.99986 18.3333C10.9203 18.3333 11.6665 17.5871 11.6665 16.6667C11.6665 15.7462 10.9203 15 9.99986 15C9.07938 15 8.33319 15.7462 8.33319 16.6667Z" fill="#ffffff"/>
														</svg>

														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M13.617 1.6665H6.39199C3.56699 1.6665 1.66699 3.64984 1.66699 6.59984V13.4082C1.66699 16.3498 3.56699 18.3332 6.39199 18.3332H13.617C16.442 18.3332 18.3337 16.3498 18.3337 13.4082V6.59984C18.3337 3.64984 16.442 1.6665 13.617 1.6665Z" fill="#FD5353"/>
																<path d="M12.5129 11.4752L11.0304 9.99358L12.5121 8.51192C12.7971 8.22775 12.7971 7.76525 12.5121 7.48108C12.2271 7.19442 11.7663 7.19525 11.4813 7.48025L9.99878 8.96192L8.51628 7.47858C8.23128 7.19358 7.76961 7.19525 7.48461 7.47858C7.20044 7.76358 7.20044 8.22608 7.48461 8.51025L8.96794 9.99358L7.48794 11.4727C7.20294 11.7577 7.20294 12.2202 7.48794 12.5036C7.63044 12.6469 7.81628 12.7177 8.00294 12.7177C8.19044 12.7177 8.37628 12.6469 8.51878 12.5044L9.99878 11.0244L11.4821 12.5069C11.6246 12.6494 11.8104 12.7202 11.9971 12.7202C12.1838 12.7202 12.3704 12.6486 12.5129 12.5069C12.7979 12.2219 12.7979 11.7602 12.5129 11.4752Z" fill="#FD5353"/>
																</svg> Cancel Transactions</a>
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M18.3337 9.99984C18.3337 14.6032 14.6028 18.3332 10.0003 18.3332C5.39783 18.3332 1.66699 14.6032 1.66699 9.99984C1.66699 5.39817 5.39783 1.6665 10.0003 1.6665C14.6028 1.6665 18.3337 5.39817 18.3337 9.99984Z" fill="#FF9F00"/>
																<path fill-rule="evenodd" clip-rule="evenodd" d="M10.7249 10.5256C10.7249 10.9272 10.3974 11.2547 9.99577 11.2547C9.5941 11.2547 9.2666 10.9272 9.2666 10.5256V6.84225C9.2666 6.44058 9.5941 6.11308 9.99577 6.11308C10.3974 6.11308 10.7249 6.44058 10.7249 6.84225V10.5256ZM9.27077 13.1696C9.27077 12.7679 9.5966 12.4404 9.99577 12.4404C10.4066 12.4404 10.7333 12.7679 10.7333 13.1696C10.7333 13.5712 10.4066 13.8987 10.0041 13.8987C9.59993 13.8987 9.27077 13.5712 9.27077 13.1696Z" fill="#FF9F00"/>
																</svg>
																 View Details</a>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- --/tab-pane -->
							<!-- --tab-pane -->
							<div class="tab-pane fade " id="completed" role="tabpanel">
								<div class="table-responsive ">
									<table class="table-responsive-lg table display mb-4 dataTablesCard order-table card-table text-black dataTable no-footer student-tbl" id="example5">
										<thead>
											<tr>
												<th>
													<div class="checkbox mr-0 align-self-center">
														<div class="custom-control custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="checkAll" required="">
															<label class="custom-control-label" for="checkAll"></label>
														</div>
													</div>
												</th>
												<th>ID Invoice</th>
												<th>Date</th>
												<th>Recipient</th>
												<th>Amount</th>
												<th>Type</th>
												<th>Location</th>
												<th>Status</th>
												<th></th>
											</tr>
										</thead>
										<tbody>

											<tr>
												<td>
													<div class="checkbox mr-0 align-self-center">
														<div class="custom-control custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="check89" required="">
															<label class="custom-control-label" for="check89"></label>
														</div>
													</div>
												</td>
												<td>#123412451</td>
												<td class="whitesp-no">June 1, 2020, 08:22 AM</td>
												<td class="whitesp-no p-0">
													<div class="d-flex py-sm-3 py-1 align-items-center">
														<span class=" me-3">
															<img src="./images/avatar/LB.png" alt="" width="50" class="rounded-3 img-history">
														</span>
														<div >
															<h6 class="font-w500 fs-16 mb-0">Marcus</h6>
															<span class="fs-14 font-w400"> <a href="app-profile.html">Freelancer </a></span>
														</div>
													</div>
												</td>
												<td class="whitesp-no amount"><a href="ecom-invoice.html" >$128.89 </a></td>
												<td class="income">
													<span class="me-2">
														<svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect width="39" height="39" rx="19.5" fill="#FF2E2E" fill-opacity="0.08"/>
															<path opacity="1" d="M11.667 19.8333C11.667 19.4167 12.0837 19 12.5003 19C12.917 19 13.3337 19.4167 13.3337 19.8333C13.3337 20.1111 13.3337 21.5 13.3337 24C13.3337 24.9205 14.0799 25.6667 15.0003 25.6667H25.0003C25.9208 25.6667 26.667 24.9205 26.667 24V19.8333C26.667 19.3731 27.0401 19 27.5003 19C27.9606 19 28.3337 19.3731 28.3337 19.8333V24C28.3337 25.8409 26.8413 27.3333 25.0003 27.3333H15.0003C13.1594 27.3333 11.667 25.8409 11.667 24C11.667 21.5 11.667 20.1111 11.667 19.8333Z" fill="#FD5353"/>
															<path opacity="1" d="M20.8337 11.5C20.8337 11.0398 20.4606 10.6667 20.0003 10.6667C19.5401 10.6667 19.167 11.0398 19.167 11.5V21.5C19.167 21.9602 19.5401 22.3333 20.0003 22.3333C20.4606 22.3333 20.8337 21.9602 20.8337 21.5V11.5Z" fill="#FD5353"/>
															<path d="M20.0302 11.815L16.4226 15.4226C16.0972 15.748 15.5695 15.748 15.2441 15.4226C14.9186 15.0972 14.9186 14.5695 15.2441 14.2441L19.4107 10.0774C19.7241 9.76402 20.228 9.75077 20.5575 10.0473L24.7241 13.7973C25.0662 14.1051 25.094 14.6321 24.7861 14.9741C24.4782 15.3162 23.9513 15.344 23.6092 15.0361L20.0302 11.815Z" fill="#FD5353"/>
														</svg>
													</span>
													Outcome
												</td>
												<td>Bangladesh,India</td>
												<td><span class=" btn btn-outline-success btn-xs">Completed</span></td>
												<td>
													<div class="dropdown">
														<a href="javascript:void(0);" class="btn-link btn sharp tp-btn-light btn-primary pill" data-bs-toggle="dropdown" aria-expanded="false">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8.33319 9.99985C8.33319 10.9203 9.07938 11.6665 9.99986 11.6665C10.9203 11.6665 11.6665 10.9203 11.6665 9.99986C11.6665 9.07938 10.9203 8.33319 9.99986 8.33319C9.07938 8.33319 8.33319 9.07938 8.33319 9.99985Z" fill="#B9A8FF"/>
														<path d="M8.33319 3.33329C8.33319 4.25376 9.07938 4.99995 9.99986 4.99995C10.9203 4.99995 11.6665 4.25376 11.6665 3.33329C11.6665 2.41282 10.9203 1.66663 9.99986 1.66663C9.07938 1.66663 8.33319 2.41282 8.33319 3.33329Z" fill="#B9A8FF"/>
														<path d="M8.33319 16.6667C8.33319 17.5871 9.07938 18.3333 9.99986 18.3333C10.9203 18.3333 11.6665 17.5871 11.6665 16.6667C11.6665 15.7462 10.9203 15 9.99986 15C9.07938 15 8.33319 15.7462 8.33319 16.6667Z" fill="#B9A8FF"/>
														</svg>

														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M13.617 1.6665H6.39199C3.56699 1.6665 1.66699 3.64984 1.66699 6.59984V13.4082C1.66699 16.3498 3.56699 18.3332 6.39199 18.3332H13.617C16.442 18.3332 18.3337 16.3498 18.3337 13.4082V6.59984C18.3337 3.64984 16.442 1.6665 13.617 1.6665Z" fill="#FD5353"/>
																<path d="M12.5129 11.4752L11.0304 9.99358L12.5121 8.51192C12.7971 8.22775 12.7971 7.76525 12.5121 7.48108C12.2271 7.19442 11.7663 7.19525 11.4813 7.48025L9.99878 8.96192L8.51628 7.47858C8.23128 7.19358 7.76961 7.19525 7.48461 7.47858C7.20044 7.76358 7.20044 8.22608 7.48461 8.51025L8.96794 9.99358L7.48794 11.4727C7.20294 11.7577 7.20294 12.2202 7.48794 12.5036C7.63044 12.6469 7.81628 12.7177 8.00294 12.7177C8.19044 12.7177 8.37628 12.6469 8.51878 12.5044L9.99878 11.0244L11.4821 12.5069C11.6246 12.6494 11.8104 12.7202 11.9971 12.7202C12.1838 12.7202 12.3704 12.6486 12.5129 12.5069C12.7979 12.2219 12.7979 11.7602 12.5129 11.4752Z" fill="#FD5353"/>
																</svg> Cancel Transactions</a>
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M18.3337 9.99984C18.3337 14.6032 14.6028 18.3332 10.0003 18.3332C5.39783 18.3332 1.66699 14.6032 1.66699 9.99984C1.66699 5.39817 5.39783 1.6665 10.0003 1.6665C14.6028 1.6665 18.3337 5.39817 18.3337 9.99984Z" fill="#FF9F00"/>
																<path fill-rule="evenodd" clip-rule="evenodd" d="M10.7249 10.5256C10.7249 10.9272 10.3974 11.2547 9.99577 11.2547C9.5941 11.2547 9.2666 10.9272 9.2666 10.5256V6.84225C9.2666 6.44058 9.5941 6.11308 9.99577 6.11308C10.3974 6.11308 10.7249 6.44058 10.7249 6.84225V10.5256ZM9.27077 13.1696C9.27077 12.7679 9.5966 12.4404 9.99577 12.4404C10.4066 12.4404 10.7333 12.7679 10.7333 13.1696C10.7333 13.5712 10.4066 13.8987 10.0041 13.8987C9.59993 13.8987 9.27077 13.5712 9.27077 13.1696Z" fill="#FF9F00"/>
																</svg>
																 View Details</a>
														</div>
													</div>
												</td>
											</tr>

											<tr>
												<td>
													<div class="checkbox mr-0 align-self-center">
														<div class="custom-control custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="check811" required="">
															<label class="custom-control-label" for="check811"></label>
														</div>
													</div>
												</td>
												<td>#123412451</td>
												<td class="whitesp-no">June 1, 2020, 08:22 AM</td>
												<td class="whitesp-no p-0">
													<div class="d-flex py-sm-3 py-1 align-items-center">
														<span class=" me-3 rounded-3">
															<img src="./images/avatar/LB.png" alt="" width="50" class="rounded-3 img-history">
														</span>
														<div>
															<h6 class="font-w500 fs-16 mb-0">Allison</h6>
															<span class="fs-14 font-w400"><a href="app-profile.html">Online Shop</a></span>
														</div>
													</div>
												</td>


												<td class="whitesp-no amount"><a href="ecom-invoice.html" >$128.89</a></td>
												<td class="income">
													<span class="me-2">
														<svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect x="39" y="39" width="39" height="39" rx="19.5" transform="rotate(-180 39 39)" fill="#2BC155" fill-opacity="0.11"/>
															<path opacity="1" d="M11.667 19.8333C11.667 19.4167 12.0837 19 12.5003 19C12.917 19 13.3337 19.4167 13.3337 19.8333C13.3337 20.1111 13.3337 21.5 13.3337 24C13.3337 24.9205 14.0799 25.6667 15.0003 25.6667H25.0003C25.9208 25.6667 26.667 24.9205 26.667 24V19.8333C26.667 19.3731 27.0401 19 27.5003 19C27.9606 19 28.3337 19.3731 28.3337 19.8333V24C28.3337 25.8409 26.8413 27.3333 25.0003 27.3333H15.0003C13.1594 27.3333 11.667 25.8409 11.667 24C11.667 21.5 11.667 20.1111 11.667 19.8333Z" fill="#13C28F"/>
															<path opacity="1" d="M19.1663 20.6667C19.1663 21.1269 19.5394 21.5 19.9997 21.5C20.4599 21.5 20.833 21.1269 20.833 20.6667V10.6667C20.833 10.2064 20.4599 9.83333 19.9997 9.83333C19.5394 9.83333 19.1663 10.2064 19.1663 10.6667V20.6667Z" fill="#13C28F"/>
															<path d="M23.5774 16.7441C23.9028 16.4186 24.4305 16.4186 24.7559 16.7441C25.0814 17.0695 25.0814 17.5972 24.7559 17.9226L20.5893 22.0893C20.2759 22.4027 19.772 22.4159 19.4425 22.1194L15.2759 18.3694C14.9338 18.0615 14.906 17.5346 15.2139 17.1925C15.5218 16.8504 16.0487 16.8227 16.3908 17.1306L19.9698 20.3517L23.5774 16.7441Z" fill="#13C28F"/>
														</svg>
													</span>
													 Income
												</td>
												<td>Bangladesh,India</td>
												<td><span class=" btn btn-outline-success btn-xs">Completed</span></td>
												<td>
													<div class="dropdown">
														<a href="javascript:void(0);" class="btn-link btn sharp tp-btn-light btn-primary pill" data-bs-toggle="dropdown" aria-expanded="false">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8.33319 9.99985C8.33319 10.9203 9.07938 11.6665 9.99986 11.6665C10.9203 11.6665 11.6665 10.9203 11.6665 9.99986C11.6665 9.07938 10.9203 8.33319 9.99986 8.33319C9.07938 8.33319 8.33319 9.07938 8.33319 9.99985Z" fill="#B9A8FF"/>
														<path d="M8.33319 3.33329C8.33319 4.25376 9.07938 4.99995 9.99986 4.99995C10.9203 4.99995 11.6665 4.25376 11.6665 3.33329C11.6665 2.41282 10.9203 1.66663 9.99986 1.66663C9.07938 1.66663 8.33319 2.41282 8.33319 3.33329Z" fill="#B9A8FF"/>
														<path d="M8.33319 16.6667C8.33319 17.5871 9.07938 18.3333 9.99986 18.3333C10.9203 18.3333 11.6665 17.5871 11.6665 16.6667C11.6665 15.7462 10.9203 15 9.99986 15C9.07938 15 8.33319 15.7462 8.33319 16.6667Z" fill="#B9A8FF"/>
														</svg>

														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M13.617 1.6665H6.39199C3.56699 1.6665 1.66699 3.64984 1.66699 6.59984V13.4082C1.66699 16.3498 3.56699 18.3332 6.39199 18.3332H13.617C16.442 18.3332 18.3337 16.3498 18.3337 13.4082V6.59984C18.3337 3.64984 16.442 1.6665 13.617 1.6665Z" fill="#FD5353"/>
																<path d="M12.5129 11.4752L11.0304 9.99358L12.5121 8.51192C12.7971 8.22775 12.7971 7.76525 12.5121 7.48108C12.2271 7.19442 11.7663 7.19525 11.4813 7.48025L9.99878 8.96192L8.51628 7.47858C8.23128 7.19358 7.76961 7.19525 7.48461 7.47858C7.20044 7.76358 7.20044 8.22608 7.48461 8.51025L8.96794 9.99358L7.48794 11.4727C7.20294 11.7577 7.20294 12.2202 7.48794 12.5036C7.63044 12.6469 7.81628 12.7177 8.00294 12.7177C8.19044 12.7177 8.37628 12.6469 8.51878 12.5044L9.99878 11.0244L11.4821 12.5069C11.6246 12.6494 11.8104 12.7202 11.9971 12.7202C12.1838 12.7202 12.3704 12.6486 12.5129 12.5069C12.7979 12.2219 12.7979 11.7602 12.5129 11.4752Z" fill="#FD5353"/>
																</svg> Cancel Transactions</a>
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M18.3337 9.99984C18.3337 14.6032 14.6028 18.3332 10.0003 18.3332C5.39783 18.3332 1.66699 14.6032 1.66699 9.99984C1.66699 5.39817 5.39783 1.6665 10.0003 1.6665C14.6028 1.6665 18.3337 5.39817 18.3337 9.99984Z" fill="#FF9F00"/>
																<path fill-rule="evenodd" clip-rule="evenodd" d="M10.7249 10.5256C10.7249 10.9272 10.3974 11.2547 9.99577 11.2547C9.5941 11.2547 9.2666 10.9272 9.2666 10.5256V6.84225C9.2666 6.44058 9.5941 6.11308 9.99577 6.11308C10.3974 6.11308 10.7249 6.44058 10.7249 6.84225V10.5256ZM9.27077 13.1696C9.27077 12.7679 9.5966 12.4404 9.99577 12.4404C10.4066 12.4404 10.7333 12.7679 10.7333 13.1696C10.7333 13.5712 10.4066 13.8987 10.0041 13.8987C9.59993 13.8987 9.27077 13.5712 9.27077 13.1696Z" fill="#FF9F00"/>
																</svg>
																 View Details</a>
														</div>
													</div>
												</td>

											</tr>
											<tr>
												<td>
													<div class="checkbox mr-0 align-self-center">
														<div class="custom-control custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="check822" required="">
															<label class="custom-control-label" for="check822"></label>
														</div>
													</div>
												</td>
												<td>#123412451</td>
												<td class="whitesp-no">June 1, 2020, 08:22 AM</td>
												<td class="whitesp-no p-0">
													<div class="d-flex py-sm-3 py-1 align-items-center">
														<span class=" me-3">
															<img src="./images/avatar/LB.png" alt="" width="50" class="rounded-3 img-history">
														</span>
														<div>
															<h6 class="font-w500 fs-16 mb-0">Yellow Studios</h6>
															<span class="fs-14 font-w400"><a href="app-profile.html">Studio</a></span>
														</div>
													</div>
												</td>
												<td class="whitesp-no amount">
													<a href="ecom-invoice.html" >$128.89</a></a>
												</td>
												<td class="income">
													<span class="me-2">
														<svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect width="39" height="39" rx="19.5" fill="#FF2E2E" fill-opacity="0.08"/>
															<path opacity="1" d="M11.667 19.8333C11.667 19.4167 12.0837 19 12.5003 19C12.917 19 13.3337 19.4167 13.3337 19.8333C13.3337 20.1111 13.3337 21.5 13.3337 24C13.3337 24.9205 14.0799 25.6667 15.0003 25.6667H25.0003C25.9208 25.6667 26.667 24.9205 26.667 24V19.8333C26.667 19.3731 27.0401 19 27.5003 19C27.9606 19 28.3337 19.3731 28.3337 19.8333V24C28.3337 25.8409 26.8413 27.3333 25.0003 27.3333H15.0003C13.1594 27.3333 11.667 25.8409 11.667 24C11.667 21.5 11.667 20.1111 11.667 19.8333Z" fill="#FD5353"/>
															<path opacity="1" d="M20.8337 11.5C20.8337 11.0398 20.4606 10.6667 20.0003 10.6667C19.5401 10.6667 19.167 11.0398 19.167 11.5V21.5C19.167 21.9602 19.5401 22.3333 20.0003 22.3333C20.4606 22.3333 20.8337 21.9602 20.8337 21.5V11.5Z" fill="#FD5353"/>
															<path d="M20.0302 11.815L16.4226 15.4226C16.0972 15.748 15.5695 15.748 15.2441 15.4226C14.9186 15.0972 14.9186 14.5695 15.2441 14.2441L19.4107 10.0774C19.7241 9.76402 20.228 9.75077 20.5575 10.0473L24.7241 13.7973C25.0662 14.1051 25.094 14.6321 24.7861 14.9741C24.4782 15.3162 23.9513 15.344 23.6092 15.0361L20.0302 11.815Z" fill="#FD5353"/>
														</svg>

													</span>
													Outcome
												</td>
												<td>Bangladesh,India</td>
												<td><span class="btn btn-outline-success btn-xs">Completed</span></td>
												<td>
													<div class="dropdown">
														<a href="javascript:void(0);" class="btn-link btn sharp tp-btn-light btn-primary pill" data-bs-toggle="dropdown" aria-expanded="false">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8.33319 9.99985C8.33319 10.9203 9.07938 11.6665 9.99986 11.6665C10.9203 11.6665 11.6665 10.9203 11.6665 9.99986C11.6665 9.07938 10.9203 8.33319 9.99986 8.33319C9.07938 8.33319 8.33319 9.07938 8.33319 9.99985Z" fill="#B9A8FF"/>
														<path d="M8.33319 3.33329C8.33319 4.25376 9.07938 4.99995 9.99986 4.99995C10.9203 4.99995 11.6665 4.25376 11.6665 3.33329C11.6665 2.41282 10.9203 1.66663 9.99986 1.66663C9.07938 1.66663 8.33319 2.41282 8.33319 3.33329Z" fill="#B9A8FF"/>
														<path d="M8.33319 16.6667C8.33319 17.5871 9.07938 18.3333 9.99986 18.3333C10.9203 18.3333 11.6665 17.5871 11.6665 16.6667C11.6665 15.7462 10.9203 15 9.99986 15C9.07938 15 8.33319 15.7462 8.33319 16.6667Z" fill="#B9A8FF"/>
														</svg>

														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M13.617 1.6665H6.39199C3.56699 1.6665 1.66699 3.64984 1.66699 6.59984V13.4082C1.66699 16.3498 3.56699 18.3332 6.39199 18.3332H13.617C16.442 18.3332 18.3337 16.3498 18.3337 13.4082V6.59984C18.3337 3.64984 16.442 1.6665 13.617 1.6665Z" fill="#FD5353"/>
																<path d="M12.5129 11.4752L11.0304 9.99358L12.5121 8.51192C12.7971 8.22775 12.7971 7.76525 12.5121 7.48108C12.2271 7.19442 11.7663 7.19525 11.4813 7.48025L9.99878 8.96192L8.51628 7.47858C8.23128 7.19358 7.76961 7.19525 7.48461 7.47858C7.20044 7.76358 7.20044 8.22608 7.48461 8.51025L8.96794 9.99358L7.48794 11.4727C7.20294 11.7577 7.20294 12.2202 7.48794 12.5036C7.63044 12.6469 7.81628 12.7177 8.00294 12.7177C8.19044 12.7177 8.37628 12.6469 8.51878 12.5044L9.99878 11.0244L11.4821 12.5069C11.6246 12.6494 11.8104 12.7202 11.9971 12.7202C12.1838 12.7202 12.3704 12.6486 12.5129 12.5069C12.7979 12.2219 12.7979 11.7602 12.5129 11.4752Z" fill="#FD5353"/>
																</svg> Cancel Transactions</a>
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M18.3337 9.99984C18.3337 14.6032 14.6028 18.3332 10.0003 18.3332C5.39783 18.3332 1.66699 14.6032 1.66699 9.99984C1.66699 5.39817 5.39783 1.6665 10.0003 1.6665C14.6028 1.6665 18.3337 5.39817 18.3337 9.99984Z" fill="#FF9F00"/>
																<path fill-rule="evenodd" clip-rule="evenodd" d="M10.7249 10.5256C10.7249 10.9272 10.3974 11.2547 9.99577 11.2547C9.5941 11.2547 9.2666 10.9272 9.2666 10.5256V6.84225C9.2666 6.44058 9.5941 6.11308 9.99577 6.11308C10.3974 6.11308 10.7249 6.44058 10.7249 6.84225V10.5256ZM9.27077 13.1696C9.27077 12.7679 9.5966 12.4404 9.99577 12.4404C10.4066 12.4404 10.7333 12.7679 10.7333 13.1696C10.7333 13.5712 10.4066 13.8987 10.0041 13.8987C9.59993 13.8987 9.27077 13.5712 9.27077 13.1696Z" fill="#FF9F00"/>
																</svg>
																 View Details</a>
														</div>
													</div>
												</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
							<!-- --/tab-pane -->
							<!-- --tab-pane -->
							<div class="tab-pane fade " id="pending" role="tabpanel">
								<div class="table-responsive ">
									<table class="table-responsive-lg table display mb-4 dataTablesCard order-table card-table text-black dataTable no-footer student-tbl" id="example5">
										<thead>
											<tr>
												<th>
													<div class="checkbox mr-0 align-self-center">
														<div class="custom-control custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="checkAll" required="">
															<label class="custom-control-label" for="checkAll"></label>
														</div>
													</div>
												</th>
												<th>ID Invoice</th>
												<th>Date</th>
												<th>Recipient</th>
												<th>Amount</th>
												<th>Type</th>
												<th>Location</th>
												<th>Status</th>
												<th></th>
											</tr>
										</thead>
										<tbody>

											<tr>
												<td>
													<div class="checkbox mr-0 align-self-center">
														<div class="custom-control custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="check833" required="">
															<label class="custom-control-label" for="check833"></label>
														</div>
													</div>
												</td>
												<td>Mr. Johnson</td>
												<td class="whitesp-no">June 1, 2020, 08:22 AM</td>
												<td class="whitesp-no p-0">
													<div class="d-flex py-sm-3 py-1 align-items-center">
														<span class=" me-3">
															<img src="./images/profile/small/pic12.jpg" alt="" width="50" class="rounded-3 img-history">
														</span>
														<div >
															<h6 class="font-w500 fs-16 mb-0">Talan Siphron</h6>

														</div>
													</div>
												</td>
												<td class="whitesp-no amount"><a href="ecom-invoice.html" >$128.89 </a></td>
												<td>
													<span class="me-2">
														<svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect x="39" y="39" width="39" height="39" rx="19.5" transform="rotate(-180 39 39)" fill="#2BC155" fill-opacity="0.11"/>
															<path opacity="0.3" d="M11.667 19.8333C11.667 19.4167 12.0837 19 12.5003 19C12.917 19 13.3337 19.4167 13.3337 19.8333C13.3337 20.1111 13.3337 21.5 13.3337 24C13.3337 24.9205 14.0799 25.6667 15.0003 25.6667H25.0003C25.9208 25.6667 26.667 24.9205 26.667 24V19.8333C26.667 19.3731 27.0401 19 27.5003 19C27.9606 19 28.3337 19.3731 28.3337 19.8333V24C28.3337 25.8409 26.8413 27.3333 25.0003 27.3333H15.0003C13.1594 27.3333 11.667 25.8409 11.667 24C11.667 21.5 11.667 20.1111 11.667 19.8333Z" fill="#13C28F"/>
															<path opacity="0.3" d="M19.1663 20.6667C19.1663 21.1269 19.5394 21.5 19.9997 21.5C20.4599 21.5 20.833 21.1269 20.833 20.6667V10.6667C20.833 10.2064 20.4599 9.83333 19.9997 9.83333C19.5394 9.83333 19.1663 10.2064 19.1663 10.6667V20.6667Z" fill="#13C28F"/>
															<path d="M23.5774 16.7441C23.9028 16.4186 24.4305 16.4186 24.7559 16.7441C25.0814 17.0695 25.0814 17.5972 24.7559 17.9226L20.5893 22.0893C20.2759 22.4027 19.772 22.4159 19.4425 22.1194L15.2759 18.3694C14.9338 18.0615 14.906 17.5346 15.2139 17.1925C15.5218 16.8504 16.0487 16.8227 16.3908 17.1306L19.9698 20.3517L23.5774 16.7441Z" fill="#13C28F"/>
														</svg>
													</span>
													 Income
												</td>
												<td>Bangladesh,India</td>
												<td><span class=" btn btn-outline-light btn-xs">Pending</span></td>
												<td>
													<div class="dropdown">
														<a href="javascript:void(0);" class="btn-link btn sharp tp-btn-light btn-primary pill" data-bs-toggle="dropdown" aria-expanded="false">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8.33319 9.99985C8.33319 10.9203 9.07938 11.6665 9.99986 11.6665C10.9203 11.6665 11.6665 10.9203 11.6665 9.99986C11.6665 9.07938 10.9203 8.33319 9.99986 8.33319C9.07938 8.33319 8.33319 9.07938 8.33319 9.99985Z" fill="#B9A8FF"/>
														<path d="M8.33319 3.33329C8.33319 4.25376 9.07938 4.99995 9.99986 4.99995C10.9203 4.99995 11.6665 4.25376 11.6665 3.33329C11.6665 2.41282 10.9203 1.66663 9.99986 1.66663C9.07938 1.66663 8.33319 2.41282 8.33319 3.33329Z" fill="#B9A8FF"/>
														<path d="M8.33319 16.6667C8.33319 17.5871 9.07938 18.3333 9.99986 18.3333C10.9203 18.3333 11.6665 17.5871 11.6665 16.6667C11.6665 15.7462 10.9203 15 9.99986 15C9.07938 15 8.33319 15.7462 8.33319 16.6667Z" fill="#B9A8FF"/>
														</svg>

														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M13.617 1.6665H6.39199C3.56699 1.6665 1.66699 3.64984 1.66699 6.59984V13.4082C1.66699 16.3498 3.56699 18.3332 6.39199 18.3332H13.617C16.442 18.3332 18.3337 16.3498 18.3337 13.4082V6.59984C18.3337 3.64984 16.442 1.6665 13.617 1.6665Z" fill="#FD5353"/>
																<path d="M12.5129 11.4752L11.0304 9.99358L12.5121 8.51192C12.7971 8.22775 12.7971 7.76525 12.5121 7.48108C12.2271 7.19442 11.7663 7.19525 11.4813 7.48025L9.99878 8.96192L8.51628 7.47858C8.23128 7.19358 7.76961 7.19525 7.48461 7.47858C7.20044 7.76358 7.20044 8.22608 7.48461 8.51025L8.96794 9.99358L7.48794 11.4727C7.20294 11.7577 7.20294 12.2202 7.48794 12.5036C7.63044 12.6469 7.81628 12.7177 8.00294 12.7177C8.19044 12.7177 8.37628 12.6469 8.51878 12.5044L9.99878 11.0244L11.4821 12.5069C11.6246 12.6494 11.8104 12.7202 11.9971 12.7202C12.1838 12.7202 12.3704 12.6486 12.5129 12.5069C12.7979 12.2219 12.7979 11.7602 12.5129 11.4752Z" fill="#FD5353"/>
																</svg> Cancel Transactions</a>
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M18.3337 9.99984C18.3337 14.6032 14.6028 18.3332 10.0003 18.3332C5.39783 18.3332 1.66699 14.6032 1.66699 9.99984C1.66699 5.39817 5.39783 1.6665 10.0003 1.6665C14.6028 1.6665 18.3337 5.39817 18.3337 9.99984Z" fill="#FF9F00"/>
																<path fill-rule="evenodd" clip-rule="evenodd" d="M10.7249 10.5256C10.7249 10.9272 10.3974 11.2547 9.99577 11.2547C9.5941 11.2547 9.2666 10.9272 9.2666 10.5256V6.84225C9.2666 6.44058 9.5941 6.11308 9.99577 6.11308C10.3974 6.11308 10.7249 6.44058 10.7249 6.84225V10.5256ZM9.27077 13.1696C9.27077 12.7679 9.5966 12.4404 9.99577 12.4404C10.4066 12.4404 10.7333 12.7679 10.7333 13.1696C10.7333 13.5712 10.4066 13.8987 10.0041 13.8987C9.59993 13.8987 9.27077 13.5712 9.27077 13.1696Z" fill="#FF9F00"/>
																</svg>
																 View Details</a>
														</div>
													</div>
												</td>

											</tr>

											<tr>
												<td>
													<div class="checkbox mr-0 align-self-center">
														<div class="custom-control custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="check844" required="">
															<label class="custom-control-label" for="check844"></label>
														</div>
													</div>
												</td>
												<td>#123412451</td>
												<td class="whitesp-no">June 1, 2020, 08:22 AM</td>
												<td class="whitesp-no p-0">
													<div class="d-flex py-sm-3 py-1 align-items-center">
														<span class=" me-3">
															<img src="./images/profile/small/pic14.jpg" alt="" width="50" class="rounded-3 img-history">
														</span>
														<div>
															<h6 class="font-w500 fs-16 mb-0">Thomas Khun</h6>

														</div>
													</div>
												</td>
												<td class="whitesp-no amount"><a href="ecom-invoice.html" >$128.89 </a></td>
												<td class="income">
													<span class="me-2">
														<svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect x="39" y="39" width="39" height="39" rx="19.5" transform="rotate(-180 39 39)" fill="#2BC155" fill-opacity="0.11"/>
															<path opacity="1" d="M11.667 19.8333C11.667 19.4167 12.0837 19 12.5003 19C12.917 19 13.3337 19.4167 13.3337 19.8333C13.3337 20.1111 13.3337 21.5 13.3337 24C13.3337 24.9205 14.0799 25.6667 15.0003 25.6667H25.0003C25.9208 25.6667 26.667 24.9205 26.667 24V19.8333C26.667 19.3731 27.0401 19 27.5003 19C27.9606 19 28.3337 19.3731 28.3337 19.8333V24C28.3337 25.8409 26.8413 27.3333 25.0003 27.3333H15.0003C13.1594 27.3333 11.667 25.8409 11.667 24C11.667 21.5 11.667 20.1111 11.667 19.8333Z" fill="#13C28F"/>
															<path opacity="1" d="M19.1663 20.6667C19.1663 21.1269 19.5394 21.5 19.9997 21.5C20.4599 21.5 20.833 21.1269 20.833 20.6667V10.6667C20.833 10.2064 20.4599 9.83333 19.9997 9.83333C19.5394 9.83333 19.1663 10.2064 19.1663 10.6667V20.6667Z" fill="#13C28F"/>
															<path d="M23.5774 16.7441C23.9028 16.4186 24.4305 16.4186 24.7559 16.7441C25.0814 17.0695 25.0814 17.5972 24.7559 17.9226L20.5893 22.0893C20.2759 22.4027 19.772 22.4159 19.4425 22.1194L15.2759 18.3694C14.9338 18.0615 14.906 17.5346 15.2139 17.1925C15.5218 16.8504 16.0487 16.8227 16.3908 17.1306L19.9698 20.3517L23.5774 16.7441Z" fill="#13C28F"/>
														</svg>
													</span>
													 Income
												</td>
												<td>Bangladesh,India</td>
												<td><span class=" btn btn-outline-light btn-xs">Pending</span></td>
												<td>
													<div class="dropdown">
														<a href="javascript:void(0);" class="btn-link btn sharp tp-btn-light btn-primary pill" data-bs-toggle="dropdown" aria-expanded="false">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8.33319 9.99985C8.33319 10.9203 9.07938 11.6665 9.99986 11.6665C10.9203 11.6665 11.6665 10.9203 11.6665 9.99986C11.6665 9.07938 10.9203 8.33319 9.99986 8.33319C9.07938 8.33319 8.33319 9.07938 8.33319 9.99985Z" fill="#B9A8FF"/>
														<path d="M8.33319 3.33329C8.33319 4.25376 9.07938 4.99995 9.99986 4.99995C10.9203 4.99995 11.6665 4.25376 11.6665 3.33329C11.6665 2.41282 10.9203 1.66663 9.99986 1.66663C9.07938 1.66663 8.33319 2.41282 8.33319 3.33329Z" fill="#B9A8FF"/>
														<path d="M8.33319 16.6667C8.33319 17.5871 9.07938 18.3333 9.99986 18.3333C10.9203 18.3333 11.6665 17.5871 11.6665 16.6667C11.6665 15.7462 10.9203 15 9.99986 15C9.07938 15 8.33319 15.7462 8.33319 16.6667Z" fill="#B9A8FF"/>
														</svg>

														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M13.617 1.6665H6.39199C3.56699 1.6665 1.66699 3.64984 1.66699 6.59984V13.4082C1.66699 16.3498 3.56699 18.3332 6.39199 18.3332H13.617C16.442 18.3332 18.3337 16.3498 18.3337 13.4082V6.59984C18.3337 3.64984 16.442 1.6665 13.617 1.6665Z" fill="#FD5353"/>
																<path d="M12.5129 11.4752L11.0304 9.99358L12.5121 8.51192C12.7971 8.22775 12.7971 7.76525 12.5121 7.48108C12.2271 7.19442 11.7663 7.19525 11.4813 7.48025L9.99878 8.96192L8.51628 7.47858C8.23128 7.19358 7.76961 7.19525 7.48461 7.47858C7.20044 7.76358 7.20044 8.22608 7.48461 8.51025L8.96794 9.99358L7.48794 11.4727C7.20294 11.7577 7.20294 12.2202 7.48794 12.5036C7.63044 12.6469 7.81628 12.7177 8.00294 12.7177C8.19044 12.7177 8.37628 12.6469 8.51878 12.5044L9.99878 11.0244L11.4821 12.5069C11.6246 12.6494 11.8104 12.7202 11.9971 12.7202C12.1838 12.7202 12.3704 12.6486 12.5129 12.5069C12.7979 12.2219 12.7979 11.7602 12.5129 11.4752Z" fill="#FD5353"/>
																</svg> Cancel Transactions</a>
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M18.3337 9.99984C18.3337 14.6032 14.6028 18.3332 10.0003 18.3332C5.39783 18.3332 1.66699 14.6032 1.66699 9.99984C1.66699 5.39817 5.39783 1.6665 10.0003 1.6665C14.6028 1.6665 18.3337 5.39817 18.3337 9.99984Z" fill="#FF9F00"/>
																<path fill-rule="evenodd" clip-rule="evenodd" d="M10.7249 10.5256C10.7249 10.9272 10.3974 11.2547 9.99577 11.2547C9.5941 11.2547 9.2666 10.9272 9.2666 10.5256V6.84225C9.2666 6.44058 9.5941 6.11308 9.99577 6.11308C10.3974 6.11308 10.7249 6.44058 10.7249 6.84225V10.5256ZM9.27077 13.1696C9.27077 12.7679 9.5966 12.4404 9.99577 12.4404C10.4066 12.4404 10.7333 12.7679 10.7333 13.1696C10.7333 13.5712 10.4066 13.8987 10.0041 13.8987C9.59993 13.8987 9.27077 13.5712 9.27077 13.1696Z" fill="#FF9F00"/>
																</svg>
																 View Details</a>
														</div>
													</div>
												</td>
											</tr>

											<tr>
												<td>
													<div class="checkbox mr-0 align-self-center">
														<div class="custom-control custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="check855" required="">
															<label class="custom-control-label" for="check855"></label>
														</div>
													</div>
												</td>
												<td>#123412451</td>
												<td class="whitesp-no">June 1, 2020, 08:22 AM</td>
												<td class="whitesp-no p-0">
													<div class="d-flex py-sm-3 py-1 align-items-center ">
														<span class=" me-3">
															<img src="./images/profile/small/pic11.jpg" alt="" width="50" class="rounded-3 img-history">
														</span>
														<div>
															<h6 class="font-w500 fs-16 mb-0">Thomas Khun</h6>

														</div>
													</div>
												</td>


												<td class="whitesp-no amount"><a href="ecom-invoice.html" >$128.89</a></td>
												<td class="income">
													<span class="me-2">
														<svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect width="39" height="39" rx="19.5" fill="#FF2E2E" fill-opacity="0.08"/>
															<path opacity="1" d="M11.667 19.8333C11.667 19.4167 12.0837 19 12.5003 19C12.917 19 13.3337 19.4167 13.3337 19.8333C13.3337 20.1111 13.3337 21.5 13.3337 24C13.3337 24.9205 14.0799 25.6667 15.0003 25.6667H25.0003C25.9208 25.6667 26.667 24.9205 26.667 24V19.8333C26.667 19.3731 27.0401 19 27.5003 19C27.9606 19 28.3337 19.3731 28.3337 19.8333V24C28.3337 25.8409 26.8413 27.3333 25.0003 27.3333H15.0003C13.1594 27.3333 11.667 25.8409 11.667 24C11.667 21.5 11.667 20.1111 11.667 19.8333Z" fill="#FD5353"/>
															<path opacity="1" d="M20.8337 11.5C20.8337 11.0398 20.4606 10.6667 20.0003 10.6667C19.5401 10.6667 19.167 11.0398 19.167 11.5V21.5C19.167 21.9602 19.5401 22.3333 20.0003 22.3333C20.4606 22.3333 20.8337 21.9602 20.8337 21.5V11.5Z" fill="#FD5353"/>
															<path d="M20.0302 11.815L16.4226 15.4226C16.0972 15.748 15.5695 15.748 15.2441 15.4226C14.9186 15.0972 14.9186 14.5695 15.2441 14.2441L19.4107 10.0774C19.7241 9.76402 20.228 9.75077 20.5575 10.0473L24.7241 13.7973C25.0662 14.1051 25.094 14.6321 24.7861 14.9741C24.4782 15.3162 23.9513 15.344 23.6092 15.0361L20.0302 11.815Z" fill="#FD5353"/>
														</svg>
													</span>
													Outcome
												</td>
												<td>Bangladesh,India</td>
												<td><span class=" btn btn-outline-light btn-xs">Pending</span></td>
												<td>
													<div class="dropdown">
														<a href="javascript:void(0);" class="btn-link btn sharp tp-btn-light btn-primary pill" data-bs-toggle="dropdown" aria-expanded="false">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8.33319 9.99985C8.33319 10.9203 9.07938 11.6665 9.99986 11.6665C10.9203 11.6665 11.6665 10.9203 11.6665 9.99986C11.6665 9.07938 10.9203 8.33319 9.99986 8.33319C9.07938 8.33319 8.33319 9.07938 8.33319 9.99985Z" fill="#B9A8FF"/>
														<path d="M8.33319 3.33329C8.33319 4.25376 9.07938 4.99995 9.99986 4.99995C10.9203 4.99995 11.6665 4.25376 11.6665 3.33329C11.6665 2.41282 10.9203 1.66663 9.99986 1.66663C9.07938 1.66663 8.33319 2.41282 8.33319 3.33329Z" fill="#B9A8FF"/>
														<path d="M8.33319 16.6667C8.33319 17.5871 9.07938 18.3333 9.99986 18.3333C10.9203 18.3333 11.6665 17.5871 11.6665 16.6667C11.6665 15.7462 10.9203 15 9.99986 15C9.07938 15 8.33319 15.7462 8.33319 16.6667Z" fill="#B9A8FF"/>
														</svg>

														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M13.617 1.6665H6.39199C3.56699 1.6665 1.66699 3.64984 1.66699 6.59984V13.4082C1.66699 16.3498 3.56699 18.3332 6.39199 18.3332H13.617C16.442 18.3332 18.3337 16.3498 18.3337 13.4082V6.59984C18.3337 3.64984 16.442 1.6665 13.617 1.6665Z" fill="#FD5353"/>
																<path d="M12.5129 11.4752L11.0304 9.99358L12.5121 8.51192C12.7971 8.22775 12.7971 7.76525 12.5121 7.48108C12.2271 7.19442 11.7663 7.19525 11.4813 7.48025L9.99878 8.96192L8.51628 7.47858C8.23128 7.19358 7.76961 7.19525 7.48461 7.47858C7.20044 7.76358 7.20044 8.22608 7.48461 8.51025L8.96794 9.99358L7.48794 11.4727C7.20294 11.7577 7.20294 12.2202 7.48794 12.5036C7.63044 12.6469 7.81628 12.7177 8.00294 12.7177C8.19044 12.7177 8.37628 12.6469 8.51878 12.5044L9.99878 11.0244L11.4821 12.5069C11.6246 12.6494 11.8104 12.7202 11.9971 12.7202C12.1838 12.7202 12.3704 12.6486 12.5129 12.5069C12.7979 12.2219 12.7979 11.7602 12.5129 11.4752Z" fill="#FD5353"/>
																</svg> Cancel Transactions</a>
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M18.3337 9.99984C18.3337 14.6032 14.6028 18.3332 10.0003 18.3332C5.39783 18.3332 1.66699 14.6032 1.66699 9.99984C1.66699 5.39817 5.39783 1.6665 10.0003 1.6665C14.6028 1.6665 18.3337 5.39817 18.3337 9.99984Z" fill="#FF9F00"/>
																<path fill-rule="evenodd" clip-rule="evenodd" d="M10.7249 10.5256C10.7249 10.9272 10.3974 11.2547 9.99577 11.2547C9.5941 11.2547 9.2666 10.9272 9.2666 10.5256V6.84225C9.2666 6.44058 9.5941 6.11308 9.99577 6.11308C10.3974 6.11308 10.7249 6.44058 10.7249 6.84225V10.5256ZM9.27077 13.1696C9.27077 12.7679 9.5966 12.4404 9.99577 12.4404C10.4066 12.4404 10.7333 12.7679 10.7333 13.1696C10.7333 13.5712 10.4066 13.8987 10.0041 13.8987C9.59993 13.8987 9.27077 13.5712 9.27077 13.1696Z" fill="#FF9F00"/>
																</svg>
																 View Details</a>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- --/tab-pane -->
							<!-- --tab-pane -->
							<div class="tab-pane fade " id="canceled" role="tabpanel">
								<div class="table-responsive">
									<table class="table-responsive-lg table display mb-4 dataTablesCard order-table card-table text-black dataTable no-footer student-tbl" id="example5">
										<thead>
											<tr>
												<th>
													<div class="checkbox mr-0 align-self-center">
														<div class="custom-control custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="checkAll1" required="">
															<label class="custom-control-label" for="checkAll1"></label>
														</div>
													</div>
												</th>
												<th>ID Invoice</th>
												<th>Date</th>
												<th>Recipient</th>
												<th>Amount</th>
												<th>Type</th>
												<th>Location</th>
												<th>Status</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="checkbox mr-0 align-self-center">
														<div class="custom-control custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="check866" required="">
															<label class="custom-control-label" for="check866"></label>
														</div>
													</div>
												</td>
												<td>#123412451</td>
												<td class="whitesp-no">June 1, 2020, 08:22 AM</td>
												<td class="whitesp-no p-0">
													<div class="d-flex py-sm-3 py-1 align-items-center">
														<span class=" me-3">
															<img src="./images/profile/small/pic11.jpg" alt="" width="50" class="rounded-3 img-history">
														</span>
														<div >
															<h6 class="font-w500 fs-16 mb-0">Marilyn Workman</h6>

														</div>
													</div>
												</td>


												<td class="whitesp-no amount"><a href="ecom-invoice.html" >$128.89 </a></td>
												<td class="income">
													<span class="me-2">
														<svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect x="39" y="39" width="39" height="39" rx="19.5" transform="rotate(-180 39 39)" fill="#2BC155" fill-opacity="0.11"/>
															<path opacity="1" d="M11.667 19.8333C11.667 19.4167 12.0837 19 12.5003 19C12.917 19 13.3337 19.4167 13.3337 19.8333C13.3337 20.1111 13.3337 21.5 13.3337 24C13.3337 24.9205 14.0799 25.6667 15.0003 25.6667H25.0003C25.9208 25.6667 26.667 24.9205 26.667 24V19.8333C26.667 19.3731 27.0401 19 27.5003 19C27.9606 19 28.3337 19.3731 28.3337 19.8333V24C28.3337 25.8409 26.8413 27.3333 25.0003 27.3333H15.0003C13.1594 27.3333 11.667 25.8409 11.667 24C11.667 21.5 11.667 20.1111 11.667 19.8333Z" fill="#13C28F"/>
															<path opacity="1" d="M19.1663 20.6667C19.1663 21.1269 19.5394 21.5 19.9997 21.5C20.4599 21.5 20.833 21.1269 20.833 20.6667V10.6667C20.833 10.2064 20.4599 9.83333 19.9997 9.83333C19.5394 9.83333 19.1663 10.2064 19.1663 10.6667V20.6667Z" fill="#13C28F"/>
															<path d="M23.5774 16.7441C23.9028 16.4186 24.4305 16.4186 24.7559 16.7441C25.0814 17.0695 25.0814 17.5972 24.7559 17.9226L20.5893 22.0893C20.2759 22.4027 19.772 22.4159 19.4425 22.1194L15.2759 18.3694C14.9338 18.0615 14.906 17.5346 15.2139 17.1925C15.5218 16.8504 16.0487 16.8227 16.3908 17.1306L19.9698 20.3517L23.5774 16.7441Z" fill="#13C28F"/>
														</svg>
													</span>
													 Income
												</td>
												<td>Bangladesh,India</td>
												<td><span class="btn btn-outline-danger btn-xs">Cancelled</span></td>
												<td>
													<div class="dropdown">
														<a href="javascript:void(0);" class="btn-link btn sharp tp-btn-light btn-primary pill" data-bs-toggle="dropdown" aria-expanded="false">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8.33319 9.99985C8.33319 10.9203 9.07938 11.6665 9.99986 11.6665C10.9203 11.6665 11.6665 10.9203 11.6665 9.99986C11.6665 9.07938 10.9203 8.33319 9.99986 8.33319C9.07938 8.33319 8.33319 9.07938 8.33319 9.99985Z" fill="#B9A8FF"/>
														<path d="M8.33319 3.33329C8.33319 4.25376 9.07938 4.99995 9.99986 4.99995C10.9203 4.99995 11.6665 4.25376 11.6665 3.33329C11.6665 2.41282 10.9203 1.66663 9.99986 1.66663C9.07938 1.66663 8.33319 2.41282 8.33319 3.33329Z" fill="#B9A8FF"/>
														<path d="M8.33319 16.6667C8.33319 17.5871 9.07938 18.3333 9.99986 18.3333C10.9203 18.3333 11.6665 17.5871 11.6665 16.6667C11.6665 15.7462 10.9203 15 9.99986 15C9.07938 15 8.33319 15.7462 8.33319 16.6667Z" fill="#B9A8FF"/>
														</svg>

														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M13.617 1.6665H6.39199C3.56699 1.6665 1.66699 3.64984 1.66699 6.59984V13.4082C1.66699 16.3498 3.56699 18.3332 6.39199 18.3332H13.617C16.442 18.3332 18.3337 16.3498 18.3337 13.4082V6.59984C18.3337 3.64984 16.442 1.6665 13.617 1.6665Z" fill="#FD5353"/>
																<path d="M12.5129 11.4752L11.0304 9.99358L12.5121 8.51192C12.7971 8.22775 12.7971 7.76525 12.5121 7.48108C12.2271 7.19442 11.7663 7.19525 11.4813 7.48025L9.99878 8.96192L8.51628 7.47858C8.23128 7.19358 7.76961 7.19525 7.48461 7.47858C7.20044 7.76358 7.20044 8.22608 7.48461 8.51025L8.96794 9.99358L7.48794 11.4727C7.20294 11.7577 7.20294 12.2202 7.48794 12.5036C7.63044 12.6469 7.81628 12.7177 8.00294 12.7177C8.19044 12.7177 8.37628 12.6469 8.51878 12.5044L9.99878 11.0244L11.4821 12.5069C11.6246 12.6494 11.8104 12.7202 11.9971 12.7202C12.1838 12.7202 12.3704 12.6486 12.5129 12.5069C12.7979 12.2219 12.7979 11.7602 12.5129 11.4752Z" fill="#FD5353"/>
																</svg> Cancel Transactions</a>
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M18.3337 9.99984C18.3337 14.6032 14.6028 18.3332 10.0003 18.3332C5.39783 18.3332 1.66699 14.6032 1.66699 9.99984C1.66699 5.39817 5.39783 1.6665 10.0003 1.6665C14.6028 1.6665 18.3337 5.39817 18.3337 9.99984Z" fill="#FF9F00"/>
																<path fill-rule="evenodd" clip-rule="evenodd" d="M10.7249 10.5256C10.7249 10.9272 10.3974 11.2547 9.99577 11.2547C9.5941 11.2547 9.2666 10.9272 9.2666 10.5256V6.84225C9.2666 6.44058 9.5941 6.11308 9.99577 6.11308C10.3974 6.11308 10.7249 6.44058 10.7249 6.84225V10.5256ZM9.27077 13.1696C9.27077 12.7679 9.5966 12.4404 9.99577 12.4404C10.4066 12.4404 10.7333 12.7679 10.7333 13.1696C10.7333 13.5712 10.4066 13.8987 10.0041 13.8987C9.59993 13.8987 9.27077 13.5712 9.27077 13.1696Z" fill="#FF9F00"/>
																</svg>
																 View Details</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="checkbox mr-0 align-self-center">
														<div class="custom-control custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="check877" required="">
															<label class="custom-control-label" for="check877"></label>
														</div>
													</div>
												</td>
												<td>#123412451</td>
												<td class="whitesp-no">June 1, 2020, 08:22 AM</td>
												<td class="whitesp-no p-0">
													<div class="d-flex py-sm-3 py-1 align-items-center">
														<span class=" me-3">
															<img src="./images/profile/small/pic15.jpg" alt="" width="50" class="rounded-3 img-history">
														</span>
														<div>
															<h6 class="font-w500 fs-16 mb-0">Thomas Khun</h6>

														</div>
													</div>
												</td>
												<td class="whitesp-no amount"><a href="ecom-invoice.html" >$128.89 </a></td>
												<td class="income">
													<span class="me-2">
														<svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect x="39" y="39" width="39" height="39" rx="19.5" transform="rotate(-180 39 39)" fill="#2BC155" fill-opacity="0.11"/>
															<path opacity="1" d="M11.667 19.8333C11.667 19.4167 12.0837 19 12.5003 19C12.917 19 13.3337 19.4167 13.3337 19.8333C13.3337 20.1111 13.3337 21.5 13.3337 24C13.3337 24.9205 14.0799 25.6667 15.0003 25.6667H25.0003C25.9208 25.6667 26.667 24.9205 26.667 24V19.8333C26.667 19.3731 27.0401 19 27.5003 19C27.9606 19 28.3337 19.3731 28.3337 19.8333V24C28.3337 25.8409 26.8413 27.3333 25.0003 27.3333H15.0003C13.1594 27.3333 11.667 25.8409 11.667 24C11.667 21.5 11.667 20.1111 11.667 19.8333Z" fill="#13C28F"/>
															<path opacity="1" d="M19.1663 20.6667C19.1663 21.1269 19.5394 21.5 19.9997 21.5C20.4599 21.5 20.833 21.1269 20.833 20.6667V10.6667C20.833 10.2064 20.4599 9.83333 19.9997 9.83333C19.5394 9.83333 19.1663 10.2064 19.1663 10.6667V20.6667Z" fill="#13C28F"/>
															<path d="M23.5774 16.7441C23.9028 16.4186 24.4305 16.4186 24.7559 16.7441C25.0814 17.0695 25.0814 17.5972 24.7559 17.9226L20.5893 22.0893C20.2759 22.4027 19.772 22.4159 19.4425 22.1194L15.2759 18.3694C14.9338 18.0615 14.906 17.5346 15.2139 17.1925C15.5218 16.8504 16.0487 16.8227 16.3908 17.1306L19.9698 20.3517L23.5774 16.7441Z" fill="#13C28F"/>
														</svg>
													</span>
													 Income
												</td>
												<td>Bangladesh,India</td>
												<td><span class="btn btn-outline-danger btn-xs">Cancelled</span></td>
												<td>
													<div class="dropdown">
														<a href="javascript:void(0);" class="btn-link btn sharp tp-btn-light btn-primary pill" data-bs-toggle="dropdown" aria-expanded="false">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8.33319 9.99985C8.33319 10.9203 9.07938 11.6665 9.99986 11.6665C10.9203 11.6665 11.6665 10.9203 11.6665 9.99986C11.6665 9.07938 10.9203 8.33319 9.99986 8.33319C9.07938 8.33319 8.33319 9.07938 8.33319 9.99985Z" fill="#B9A8FF"/>
														<path d="M8.33319 3.33329C8.33319 4.25376 9.07938 4.99995 9.99986 4.99995C10.9203 4.99995 11.6665 4.25376 11.6665 3.33329C11.6665 2.41282 10.9203 1.66663 9.99986 1.66663C9.07938 1.66663 8.33319 2.41282 8.33319 3.33329Z" fill="#B9A8FF"/>
														<path d="M8.33319 16.6667C8.33319 17.5871 9.07938 18.3333 9.99986 18.3333C10.9203 18.3333 11.6665 17.5871 11.6665 16.6667C11.6665 15.7462 10.9203 15 9.99986 15C9.07938 15 8.33319 15.7462 8.33319 16.6667Z" fill="#B9A8FF"/>
														</svg>

														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M13.617 1.6665H6.39199C3.56699 1.6665 1.66699 3.64984 1.66699 6.59984V13.4082C1.66699 16.3498 3.56699 18.3332 6.39199 18.3332H13.617C16.442 18.3332 18.3337 16.3498 18.3337 13.4082V6.59984C18.3337 3.64984 16.442 1.6665 13.617 1.6665Z" fill="#FD5353"/>
																<path d="M12.5129 11.4752L11.0304 9.99358L12.5121 8.51192C12.7971 8.22775 12.7971 7.76525 12.5121 7.48108C12.2271 7.19442 11.7663 7.19525 11.4813 7.48025L9.99878 8.96192L8.51628 7.47858C8.23128 7.19358 7.76961 7.19525 7.48461 7.47858C7.20044 7.76358 7.20044 8.22608 7.48461 8.51025L8.96794 9.99358L7.48794 11.4727C7.20294 11.7577 7.20294 12.2202 7.48794 12.5036C7.63044 12.6469 7.81628 12.7177 8.00294 12.7177C8.19044 12.7177 8.37628 12.6469 8.51878 12.5044L9.99878 11.0244L11.4821 12.5069C11.6246 12.6494 11.8104 12.7202 11.9971 12.7202C12.1838 12.7202 12.3704 12.6486 12.5129 12.5069C12.7979 12.2219 12.7979 11.7602 12.5129 11.4752Z" fill="#FD5353"/>
																</svg> Cancel Transactions</a>
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M18.3337 9.99984C18.3337 14.6032 14.6028 18.3332 10.0003 18.3332C5.39783 18.3332 1.66699 14.6032 1.66699 9.99984C1.66699 5.39817 5.39783 1.6665 10.0003 1.6665C14.6028 1.6665 18.3337 5.39817 18.3337 9.99984Z" fill="#FF9F00"/>
																<path fill-rule="evenodd" clip-rule="evenodd" d="M10.7249 10.5256C10.7249 10.9272 10.3974 11.2547 9.99577 11.2547C9.5941 11.2547 9.2666 10.9272 9.2666 10.5256V6.84225C9.2666 6.44058 9.5941 6.11308 9.99577 6.11308C10.3974 6.11308 10.7249 6.44058 10.7249 6.84225V10.5256ZM9.27077 13.1696C9.27077 12.7679 9.5966 12.4404 9.99577 12.4404C10.4066 12.4404 10.7333 12.7679 10.7333 13.1696C10.7333 13.5712 10.4066 13.8987 10.0041 13.8987C9.59993 13.8987 9.27077 13.5712 9.27077 13.1696Z" fill="#FF9F00"/>
																</svg>
																 View Details</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="checkbox mr-0 align-self-center">
														<div class="custom-control custom-checkbox ">
															<input type="checkbox" class="form-check-input" id="check888" required="">
															<label class="custom-control-label" for="check888"></label>
														</div>
													</div>
												</td>
												<td>#123412451</td>
												<td class="whitesp-no">June 1, 2020, 08:22 AM</td>
												<td class="whitesp-no p-0">
													<div class="d-flex py-sm-3 py-1 align-items-center">
														<span class=" me-3">
															<img src="./images/profile/small/pic11.jpg" alt="" width="50" class="rounded-3 img-history">
														</span>
														<div>
															<h6 class="font-w500 fs-16 mb-0">Thomas Khun</h6>

														</div>
													</div>
												</td>


												<td class="whitesp-no amount"><a href="ecom-invoice.html" >$128.89</a></td>
												<td class="income">
													<span class="me-2">
														<svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect x="39" y="39" width="39" height="39" rx="19.5" transform="rotate(-180 39 39)" fill="#2BC155" fill-opacity="0.11"/>
															<path opacity="1" d="M11.667 19.8333C11.667 19.4167 12.0837 19 12.5003 19C12.917 19 13.3337 19.4167 13.3337 19.8333C13.3337 20.1111 13.3337 21.5 13.3337 24C13.3337 24.9205 14.0799 25.6667 15.0003 25.6667H25.0003C25.9208 25.6667 26.667 24.9205 26.667 24V19.8333C26.667 19.3731 27.0401 19 27.5003 19C27.9606 19 28.3337 19.3731 28.3337 19.8333V24C28.3337 25.8409 26.8413 27.3333 25.0003 27.3333H15.0003C13.1594 27.3333 11.667 25.8409 11.667 24C11.667 21.5 11.667 20.1111 11.667 19.8333Z" fill="#13C28F"/>
															<path opacity="1" d="M19.1663 20.6667C19.1663 21.1269 19.5394 21.5 19.9997 21.5C20.4599 21.5 20.833 21.1269 20.833 20.6667V10.6667C20.833 10.2064 20.4599 9.83333 19.9997 9.83333C19.5394 9.83333 19.1663 10.2064 19.1663 10.6667V20.6667Z" fill="#13C28F"/>
															<path d="M23.5774 16.7441C23.9028 16.4186 24.4305 16.4186 24.7559 16.7441C25.0814 17.0695 25.0814 17.5972 24.7559 17.9226L20.5893 22.0893C20.2759 22.4027 19.772 22.4159 19.4425 22.1194L15.2759 18.3694C14.9338 18.0615 14.906 17.5346 15.2139 17.1925C15.5218 16.8504 16.0487 16.8227 16.3908 17.1306L19.9698 20.3517L23.5774 16.7441Z" fill="#13C28F"/>
														</svg>
													</span>
													 Income
												</td>
												<td>Bangladesh,India</td>
												<td><span class="btn btn-outline-danger btn-xs">Cancelled</span></td>
												<td>
													<div class="dropdown">
														<a href="javascript:void(0);" class="btn-link btn sharp tp-btn-light btn-primary pill" data-bs-toggle="dropdown" aria-expanded="false">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8.33319 9.99985C8.33319 10.9203 9.07938 11.6665 9.99986 11.6665C10.9203 11.6665 11.6665 10.9203 11.6665 9.99986C11.6665 9.07938 10.9203 8.33319 9.99986 8.33319C9.07938 8.33319 8.33319 9.07938 8.33319 9.99985Z" fill="#B9A8FF"/>
														<path d="M8.33319 3.33329C8.33319 4.25376 9.07938 4.99995 9.99986 4.99995C10.9203 4.99995 11.6665 4.25376 11.6665 3.33329C11.6665 2.41282 10.9203 1.66663 9.99986 1.66663C9.07938 1.66663 8.33319 2.41282 8.33319 3.33329Z" fill="#B9A8FF"/>
														<path d="M8.33319 16.6667C8.33319 17.5871 9.07938 18.3333 9.99986 18.3333C10.9203 18.3333 11.6665 17.5871 11.6665 16.6667C11.6665 15.7462 10.9203 15 9.99986 15C9.07938 15 8.33319 15.7462 8.33319 16.6667Z" fill="#B9A8FF"/>
														</svg>

														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M13.617 1.6665H6.39199C3.56699 1.6665 1.66699 3.64984 1.66699 6.59984V13.4082C1.66699 16.3498 3.56699 18.3332 6.39199 18.3332H13.617C16.442 18.3332 18.3337 16.3498 18.3337 13.4082V6.59984C18.3337 3.64984 16.442 1.6665 13.617 1.6665Z" fill="#FD5353"/>
																<path d="M12.5129 11.4752L11.0304 9.99358L12.5121 8.51192C12.7971 8.22775 12.7971 7.76525 12.5121 7.48108C12.2271 7.19442 11.7663 7.19525 11.4813 7.48025L9.99878 8.96192L8.51628 7.47858C8.23128 7.19358 7.76961 7.19525 7.48461 7.47858C7.20044 7.76358 7.20044 8.22608 7.48461 8.51025L8.96794 9.99358L7.48794 11.4727C7.20294 11.7577 7.20294 12.2202 7.48794 12.5036C7.63044 12.6469 7.81628 12.7177 8.00294 12.7177C8.19044 12.7177 8.37628 12.6469 8.51878 12.5044L9.99878 11.0244L11.4821 12.5069C11.6246 12.6494 11.8104 12.7202 11.9971 12.7202C12.1838 12.7202 12.3704 12.6486 12.5129 12.5069C12.7979 12.2219 12.7979 11.7602 12.5129 11.4752Z" fill="#FD5353"/>
																</svg> Cancel Transactions</a>
															<a class="dropdown-item" href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.4" d="M18.3337 9.99984C18.3337 14.6032 14.6028 18.3332 10.0003 18.3332C5.39783 18.3332 1.66699 14.6032 1.66699 9.99984C1.66699 5.39817 5.39783 1.6665 10.0003 1.6665C14.6028 1.6665 18.3337 5.39817 18.3337 9.99984Z" fill="#FF9F00"/>
																<path fill-rule="evenodd" clip-rule="evenodd" d="M10.7249 10.5256C10.7249 10.9272 10.3974 11.2547 9.99577 11.2547C9.5941 11.2547 9.2666 10.9272 9.2666 10.5256V6.84225C9.2666 6.44058 9.5941 6.11308 9.99577 6.11308C10.3974 6.11308 10.7249 6.44058 10.7249 6.84225V10.5256ZM9.27077 13.1696C9.27077 12.7679 9.5966 12.4404 9.99577 12.4404C10.4066 12.4404 10.7333 12.7679 10.7333 13.1696C10.7333 13.5712 10.4066 13.8987 10.0041 13.8987C9.59993 13.8987 9.27077 13.5712 9.27077 13.1696Z" fill="#FF9F00"/>
																</svg>
																 View Details</a>
														</div>
													</div>
												</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
							<!-- --/tab-pane -->
						</div>
					</div>
					<!----/column-- -->
				</div>
				<!-- /row -->
            </div>

		</div>

@endsection
