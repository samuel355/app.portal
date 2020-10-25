<?php include "includes/header.php";?>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <?php include "includes/sidebar.php";?>
			<!-- /Header -->

            <!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                            <li class="menu-title">
                                <span>Main</span>
                            </li>
                            <li class="active">
                                <a href="index.php" class="noti-dot"><i class="la la-dashboard"></i> <span> Dashboard</span></a>
                            </li>
                            <li>
                                <a href="clients.php"><i class="la la-book"></i> <span>Announcements</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-cube"></i> <span> Apps</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="events.php">Calendar</a></li>
                                    <li><a href="contacts.php">Contacts</a></li>
                                    <li><a href="inbox.php">Email</a></li>
                                    <li><a href="file-manager.php">File Manager</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#" ><i class="la la-user"></i> <span> Coordinators</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="employees.php">All Cordinators</a></li>
                                    <li><a href="holidays.php">Holidays</a></li>
                                    <li><a href="attendance.php">Attendance </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#" ><i class="la la-user"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="employees.php">All Cordinators</a></li>
                                    <li><a href="holidays.php">Holidays</a></li>
                                    <li><a href="leave-settings.php">Leave Settings</a></li>
                                    <li><a href="attendance.php">Attendance (Cordinators)</a></li>
                                    <li><a href="attendance-employee.php">Attendance (Students)</a></li>
                                    <li><a href="timesheet.php">Timesheet</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="clients.php"><i class="la la-book"></i> <span>Courses</span></a>
                            </li>
                            <li class="menu-title">
                                <span>HR</span>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-files-o"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="estimates.php">Estimates</a></li>
                                    <li><a href="invoices.php">Invoices</a></li>
                                    <li><a href="payments.php">Payments</a></li>
                                    <li><a href="expenses.php">Expenses</a></li>
                                    <li><a href="provident-fund.php">Provident Fund</a></li>
                                    <li><a href="taxes.php">Taxes</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-money"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="salary.php"> Employee Salary </a></li>
                                    <li><a href="salary-view.php"> Payslip </a></li>
                                    <li><a href="payroll-items.php"> Payroll Items </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-pie-chart"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="expense-reports.php"> Expense Report </a></li>
                                    <li><a href="invoice-reports.php"> Invoice Report </a></li>
                                </ul>
                            </li>
                            <li class="menu-title">
                                <span>Administration</span>
                            </li>
                            <li>
                                <a href="assets.php"><i class="la la-object-ungroup"></i> <span>Assets</span></a>
                            </li>
                            <li>
                                <a href="knowledgebase.php"><i class="la la-question"></i> <span>Knowledgebase</span></a>
                            </li>
                            <li>
                                <a href="settings.php"><i class="la la-cog"></i> <span>Settings</span></a>
                            </li>
                            <li class="menu-title">
                                <span>Pages</span>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-columns"></i> <span> Policies </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="terms.php"> Terms </a></li>
                                    <li><a href="privacy-policy.php"> Privacy Policy </a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="clients.php"><i class="la la-close"></i> <span>Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Payroll Items</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Payroll Items</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Page Tab -->
					<div class="page-menu">
						<div class="row">
							<div class="col-sm-12">
								<ul class="nav nav-tabs nav-tabs-bottom">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#tab_additions">Additions</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tab_overtime">Overtime</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#tab_deductions">Deductions</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Tab -->
					
					<!-- Tab Content -->
					<div class="tab-content">
					
						<!-- Additions Tab -->
						<div class="tab-pane show active" id="tab_additions">
						
							<!-- Add Addition Button -->
							<div class="text-right mb-4 clearfix">
								<button class="btn btn-primary add-btn" type="button" data-toggle="modal" data-target="#add_addition"><i class="fa fa-plus"></i> Add Addition</button>
							</div>
							<!-- /Add Addition Button -->

							<!-- Payroll Additions Table -->
							<div class="payroll-table card">
								<div class="table-responsive">
									<table class="table table-hover table-radius">
										<thead>
											<tr>
												<th>Name</th>
												<th>Category</th>
												<th>Default/Unit Amount</th>
												<th class="text-right">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th>Leave balance amount</th>
												<td>Monthly remuneration</td>
												<td>$5</td>
												<td class="text-right">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_addition"><i class="fa fa-pencil m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_addition"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<th>Arrears of salary</th>
												<td>Additional remuneration</td>
												<td>$8</td>
												<td class="text-right">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_addition"><i class="fa fa-pencil m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_addition"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<th>Gratuity</th>
												<td>Monthly remuneration</td>
												<td>$20</td>
												<td class="text-right">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_addition"><i class="fa fa-pencil m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_addition"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- /Payroll Additions Table -->
							
						</div>
						<!-- Additions Tab -->
						
						<!-- Overtime Tab -->
						<div class="tab-pane" id="tab_overtime">
						
							<!-- Add Overtime Button -->
							<div class="text-right mb-4 clearfix">
								<button class="btn btn-primary add-btn" type="button" data-toggle="modal" data-target="#add_overtime"><i class="fa fa-plus"></i> Add Overtime</button>
							</div>
							<!-- /Add Overtime Button -->

							<!-- Payroll Overtime Table -->
							<div class="payroll-table card">
								<div class="table-responsive">
									<table class="table table-hover table-radius">
										<thead>
											<tr>
												<th>Name</th>
												<th>Rate</th>
												<th class="text-right">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th>Normal day OT 1.5x</th>
												<td>Hourly 1.5</td>
												<td class="text-right">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_overtime"><i class="fa fa-pencil m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_overtime"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<th>Public holiday OT 3.0x</th>
												<td>Hourly 3</td>
												<td class="text-right">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_overtime"><i class="fa fa-pencil m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_overtime"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<th>Rest day OT 2.0x</th>
												<td>Hourly 2</td>
												<td class="text-right">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_overtime"><i class="fa fa-pencil m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_overtime"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- /Payroll Overtime Table -->
							
						</div>
						<!-- /Overtime Tab -->
						
						<!-- Deductions Tab -->
						<div class="tab-pane" id="tab_deductions">
						
							<!-- Add Deductions Button -->
							<div class="text-right mb-4 clearfix">
								<button class="btn btn-primary add-btn" type="button" data-toggle="modal" data-target="#add_deduction"><i class="fa fa-plus"></i> Add Deduction</button>
							</div>
							<!-- /Add Deductions Button -->

							<!-- Payroll Deduction Table -->
							<div class="payroll-table card">
								<div class="table-responsive">
									<table class="table table-hover table-radius">
										<thead>
											<tr>
												<th>Name</th>
												<th>Default/Unit Amount</th>
												<th class="text-right">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th>Absent amount</th>
												<td>$12</td>
												<td class="text-right">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_deduction"><i class="fa fa-pencil m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_deduction"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<th>Advance</th>
												<td>$7</td>
												<td class="text-right">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_deduction"><i class="fa fa-pencil m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_deduction"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<th>Unpaid leave</th>
												<td>$3</td>
												<td class="text-right">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_deduction"><i class="fa fa-pencil m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_deduction"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- /Payroll Deduction Table -->
							
						</div>
						<!-- /Deductions Tab -->
						
					</div>
					<!-- Tab Content -->
					
                </div>
				<!-- /Page Content -->
				
				<!-- Add Addition Modal -->
				<div id="add_addition" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Addition</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label>Name <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
									<div class="form-group">
										<label>Category <span class="text-danger">*</span></label>
										<select class="select">
											<option>Select a category</option>
											<option>Monthly remuneration</option>
											<option>Additional remuneration</option>
										</select>
									</div>
									<div class="form-group">
										<label class="d-block">Unit calculation</label>
										<div class="status-toggle">
											<input type="checkbox" id="unit_calculation" class="check">
											<label for="unit_calculation" class="checktoggle">checkbox</label>
										</div>
									</div>
									<div class="form-group">
										<label>Unit Amount</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text">$</span>
											</div>
											<input type="text" class="form-control">
											<div class="input-group-append">
												<span class="input-group-text">.00</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="d-block">Assignee</label>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="addition_assignee" id="addition_no_emp" value="option1" checked>
											<label class="form-check-label" for="addition_no_emp">
											No assignee
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="addition_assignee" id="addition_all_emp" value="option2">
											<label class="form-check-label" for="addition_all_emp">
											All employees
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="addition_assignee" id="addition_single_emp" value="option3">
											<label class="form-check-label" for="addition_single_emp">
											Select Employee
											</label>
										</div>
										<div class="form-group">
											<select class="select">
												<option>-</option>
												<option>Select All</option>
												<option>John Doe</option>
												<option>Richard Miles</option>
											</select>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Add Addition Modal -->
				
				<!-- Edit Addition Modal -->
				<div id="edit_addition" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Addition</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label>Name <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
									<div class="form-group">
										<label>Category <span class="text-danger">*</span></label>
										<select class="select">
											<option>Select a category</option>
											<option>Monthly remuneration</option>
											<option>Additional remuneration</option>
										</select>
									</div>
									<div class="form-group">
										<label class="d-block">Unit calculation</label>
										<div class="status-toggle">
											<input type="checkbox" id="edit_unit_calculation" class="check">
											<label for="edit_unit_calculation" class="checktoggle">checkbox</label>
										</div>
									</div>
									<div class="form-group">
										<label>Unit Amount</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text">$</span>
											</div>
											<input type="text" class="form-control">
											<div class="input-group-append">
												<span class="input-group-text">.00</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="d-block">Assignee</label>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="edit_addition_assignee" id="edit_addition_no_emp" value="option1" checked>
											<label class="form-check-label" for="edit_addition_no_emp">
											No assignee
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="edit_addition_assignee" id="edit_addition_all_emp" value="option2">
											<label class="form-check-label" for="edit_addition_all_emp">
											All employees
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="edit_addition_assignee" id="edit_addition_single_emp" value="option3">
											<label class="form-check-label" for="edit_addition_single_emp">
											Select Employee
											</label>
										</div>
										<div class="form-group">
											<select class="select">
												<option>-</option>
												<option>Select All</option>
												<option>John Doe</option>
												<option>Richard Miles</option>
											</select>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Addition Modal -->
				
				<!-- Delete Addition Modal -->
				<div class="modal custom-modal fade" id="delete_addition" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Addition</h3>
									<p>Are you sure want to delete?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
											<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Delete Addition Modal -->
				
				<!-- Add Overtime Modal -->
				<div id="add_overtime" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Overtime</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label>Name <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
									<div class="form-group">
										<label>Rate Type <span class="text-danger">*</span></label>
										<select class="select">
											<option>-</option>
											<option>Daily Rate</option>
											<option>Hourly Rate</option>
										</select>
									</div>
									<div class="form-group">
										<label>Rate <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Add Overtime Modal -->
				
				<!-- Edit Overtime Modal -->
				<div id="edit_overtime" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Overtime</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label>Name <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
									<div class="form-group">
										<label>Rate Type <span class="text-danger">*</span></label>
										<select class="select">
											<option>-</option>
											<option>Daily Rate</option>
											<option>Hourly Rate</option>
										</select>
									</div>
									<div class="form-group">
										<label>Rate <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Overtime Modal -->
				
				<!-- Delete Overtime Modal -->
				<div class="modal custom-modal fade" id="delete_overtime" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Overtime</h3>
									<p>Are you sure want to delete?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
											<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Delete Overtime Modal -->
				
				<!-- Add Deduction Modal -->
				<div id="add_deduction" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Deduction</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label>Name <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
									<div class="form-group">
										<label class="d-block">Unit calculation</label>
										<div class="status-toggle">
											<input type="checkbox" id="unit_calculation_deduction" class="check">
											<label for="unit_calculation_deduction" class="checktoggle">checkbox</label>
										</div>
									</div>
									<div class="form-group">
										<label>Unit Amount</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text">$</span>
											</div>
											<input type="text" class="form-control">
											<div class="input-group-append">
												<span class="input-group-text">.00</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="d-block">Assignee</label>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="deduction_assignee" id="deduction_no_emp" value="option1" checked>
											<label class="form-check-label" for="deduction_no_emp">
											No assignee
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="deduction_assignee" id="deduction_all_emp" value="option2">
											<label class="form-check-label" for="deduction_all_emp">
											All employees
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="deduction_assignee" id="deduction_single_emp" value="option3">
											<label class="form-check-label" for="deduction_single_emp">
											Select Employee
											</label>
										</div>
										<div class="form-group">
											<select class="select">
												<option>-</option>
												<option>Select All</option>
												<option>John Doe</option>
												<option>Richard Miles</option>
											</select>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Add Deduction Modal -->
				
				<!-- Edit Deduction Modal -->
				<div id="edit_deduction" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Deduction</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label>Name <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
									<div class="form-group">
										<label class="d-block">Unit calculation</label>
										<div class="status-toggle">
											<input type="checkbox" id="edit_unit_calculation_deduction" class="check">
											<label for="edit_unit_calculation_deduction" class="checktoggle">checkbox</label>
										</div>
									</div>
									<div class="form-group">
										<label>Unit Amount</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text">$</span>
											</div>
											<input type="text" class="form-control">
											<div class="input-group-append">
												<span class="input-group-text">.00</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="d-block">Assignee</label>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="edit_deduction_assignee" id="edit_deduction_no_emp" value="option1" checked>
											<label class="form-check-label" for="edit_deduction_no_emp">
											No assignee
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="edit_deduction_assignee" id="edit_deduction_all_emp" value="option2">
											<label class="form-check-label" for="edit_deduction_all_emp">
											All employees
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="edit_deduction_assignee" id="edit_deduction_single_emp" value="option3">
											<label class="form-check-label" for="edit_deduction_single_emp">
											Select Employee
											</label>
										</div>
										<div class="form-group">
											<select class="select">
												<option>-</option>
												<option>Select All</option>
												<option>John Doe</option>
												<option>Richard Miles</option>
											</select>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Addition Modal -->
				
				<!-- Delete Deduction Modal -->
				<div class="modal custom-modal fade" id="delete_deduction" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Deduction</h3>
									<p>Are you sure want to delete?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
											<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Delete Deduction Modal -->
				
            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>		

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>
