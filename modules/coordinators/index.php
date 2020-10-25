<?php include "includes/header.php"?>
	
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <?php include "includes/top-nav.php";?>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <?php include "includes/sidebar.php";?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome Admin!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

                    <!-- main top -->
					<?php include "includes/main-top.php"?>
                    <!-- /main top -->

                    <div class="row">
						<div class="col-md-6 d-flex">
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h3 class="card-title mb-0">Invoices</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-nowrap custom-table mb-0">
											<thead>
												<tr>
													<th>Invoice ID</th>
													<th>Client</th>
													<th>Due Date</th>
													<th>Total</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="invoice-view.php">#INV-0001</a></td>
													<td>
														<h2><a href="#">Global Technologies</a></h2>
													</td>
													<td>11 Mar 2019</td>
													<td>$380</td>
													<td>
														<span class="badge bg-inverse-warning">Partially Paid</span>
													</td>
												</tr>
												<tr>
													<td><a href="invoice-view.php">#INV-0002</a></td>
													<td>
														<h2><a href="#">Delta Infotech</a></h2>
													</td>
													<td>8 Feb 2019</td>
													<td>$500</td>
													<td>
														<span class="badge bg-inverse-success">Paid</span>
													</td>
												</tr>
												<tr>
													<td><a href="invoice-view.php">#INV-0003</a></td>
													<td>
														<h2><a href="#">Cream Inc</a></h2>
													</td>
													<td>23 Jan 2019</td>
													<td>$60</td>
													<td>
														<span class="badge bg-inverse-danger">Unpaid</span>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<a href="invoices.php">View all invoices</a>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex">
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h3 class="card-title mb-0">Payments</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">	
										<table class="table custom-table table-nowrap mb-0">
											<thead>
												<tr>
													<th>Invoice ID</th>
													<th>Client</th>
													<th>Payment Type</th>
													<th>Paid Date</th>
													<th>Paid Amount</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="invoice-view.php">#INV-0001</a></td>
													<td>
														<h2><a href="#">Global Technologies</a></h2>
													</td>
													<td>Paypal</td>
													<td>11 Mar 2019</td>
													<td>$380</td>
												</tr>
												<tr>
													<td><a href="invoice-view.php">#INV-0002</a></td>
													<td>
														<h2><a href="#">Delta Infotech</a></h2>
													</td>
													<td>Paypal</td>
													<td>8 Feb 2019</td>
													<td>$500</td>
												</tr>
												<tr>
													<td><a href="invoice-view.php">#INV-0003</a></td>
													<td>
														<h2><a href="#">Cream Inc</a></h2>
													</td>
													<td>Paypal</td>
													<td>23 Jan 2019</td>
													<td>$60</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<a href="payments.php">View all payments</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6 d-flex">
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h3 class="card-title mb-0">Students</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table custom-table mb-0">
											<thead>
												<tr>
													<th>Name</th>
													<th>Email</th>
                                                    <th>ID</th>
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="student-profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-19.jpg"></a>
															<a href="student-profile">Barry Cudd</a>
														</h2>
													</td>
													<td>barrycuda@example.com</td>
													<td>
														#STD_977
													</td>
													<td class="text-right">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_student"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_student"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="student-profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-19.jpg"></a>
															<a href="student-profile">Tressa Wexler</a>
														</h2>
													</td>
													<td>tressawexler@example.com</td>
													<td>
                                                        #STD_977
													</td>
													<td class="text-right">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_student"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_student"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="student-profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-07.jpg"></a>
															<a href="student-profile">Ruby Bartlett</a>
														</h2>
													</td>
													<td>rubybartlett@example.com</td>
													<td>
                                                        #STD_977
													</td>
													<td class="text-right">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_student"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_student"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="student-profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-06.jpg"></a>
															<a href="student-profile"> Misty Tison <span>CEO</span></a>
														</h2>
													</td>
													<td>mistytison@example.com</td>
													<td>
                                                        #STD_977
													</td>
													<td class="text-right">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_student"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_student"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="client-profile.php" class="avatar"><img alt="" src="assets/img/profiles/avatar-14.jpg"></a>
															<a href="client-profile.php"> Daniel Deacon <span>CEO</span></a>
														</h2>
													</td>
													<td>danieldeacon@example.com</td>
													<td>
                                                        #STD_977
													</td>
													<td class="text-right">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_student"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_student"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<a href="students-list">View all Students</a>
								</div>
							</div>
						</div>
                        <div class="col-md-6 d-flex">
                            <div class="card card-table flex-fill">
                                <div class="card-header">
                                    <h3 class="card-title mb-0">Coordinators</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table custom-table mb-0">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>ID</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="coordinator-profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-19.jpg"></a>
                                                        <a href="coordinator-profile">Barry Cuda <span>CEO</span></a>
                                                    </h2>
                                                </td>
                                                <td>barrycuda@example.com</td>
                                                <td>
                                                    #CO-547
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_coordinator"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_coordinator"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="coordinator-profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-19.jpg"></a>
                                                        <a href="coordinator-profile">Tressa Wexler <span>Manager</span></a>
                                                    </h2>
                                                </td>
                                                <td>tressawexler@example.com</td>
                                                <td>
                                                    #CO-547
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_coordinator"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_coordinator"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="coordinator-profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-07.jpg"></a>
                                                        <a href="coordinator-profile">Ruby Bartlett <span>CEO</span></a>
                                                    </h2>
                                                </td>
                                                <td>rubybartlett@example.com</td>
                                                <td>
                                                    #CO-547
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_coordinator"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_coordinator"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="coordinator-profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-06.jpg"></a>
                                                        <a href="coordinator-profile"> Misty Tison <span>CEO</span></a>
                                                    </h2>
                                                </td>
                                                <td>mistytison@example.com</td>
                                                <td>
                                                    #STD_977
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_coordinator"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_coordinator"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="coordinator-profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-14.jpg"></a>
                                                        <a href="coordinator-profile"> Daniel Deacon <span>CEO</span></a>
                                                    </h2>
                                                </td>
                                                <td>danieldeacon@example.com</td>
                                                <td>
                                                    #CO-547
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_coordinator"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_coordinator"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="coordinators-list">View all Coordinators</a>
                                </div>
                            </div>
                        </div>
					</div>
				
				</div>
				<!-- /Page Content -->

                <!-- Edit Coordinator Modal -->
                <div id="edit_coordinator" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Coordinator</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                                <input class="form-control" value="John" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Last Name</label>
                                                <input class="form-control" value="Doe" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Username <span class="text-danger">*</span></label>
                                                <input class="form-control" value="johndoe" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                                <input class="form-control" value="johndoe@example.com" type="email">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Password</label>
                                                <input class="form-control" value="johndoe" type="password">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Confirm Password</label>
                                                <input class="form-control" value="johndoe" type="password">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Coordinator ID <span class="text-danger">*</span></label>
                                                <input type="text" value="FT-0001" readonly class="form-control floating">
                                            </div>
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
                <!-- /Edit Coordinator Modal -->

                <!-- Delete Coordinator Modal -->
                <div class="modal custom-modal fade" id="delete_coordinator" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-header">
                                    <h3>Delete Coordinator</h3>
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
                <!-- /Delete Coordinator Modal -->

                <!-- Edit Student Modal -->
                <div id="edit_student" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Student</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                                <input class="form-control" value="John" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Last Name</label>
                                                <input class="form-control" value="Doe" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Username <span class="text-danger">*</span></label>
                                                <input class="form-control" value="johndoe" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                                <input class="form-control" value="johndoe@example.com" type="email">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Password</label>
                                                <input class="form-control" value="johndoe" type="password">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Confirm Password</label>
                                                <input class="form-control" value="johndoe" type="password">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Student ID <span class="text-danger">*</span></label>
                                                <input type="text" value="FT-0001" readonly class="form-control floating">
                                            </div>
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
                <!-- /Edit Coordinator Modal -->

                <!-- Delete Student Modal -->
                <div class="modal custom-modal fade" id="delete_student" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-header">
                                    <h3>Delete Student</h3>
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
                <!-- /Delete Coordinator Modal -->

            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
    <?php include "includes/script.php"?>
