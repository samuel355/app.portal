<?php include "includes/header.php";?>
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
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">View Message</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">View Message</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="compose.php" class="btn add-btn"><i class="fa fa-plus"></i> Compose</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
			
					<div class="row">
						<div class="col-sm-12">
							<div class="card mb-0">
								<div class="card-body">
									<div class="mailview-content">
										<div class="mailview-header">
											<div class="row">
												<div class="col-sm-9">
													<div class="text-ellipsis m-b-10">
														<span class="mail-view-title">HRMS Bootstrap Admin Template</span>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="mail-view-action">
														<div class="btn-group">
															<button type="button" class="btn btn-white btn-sm" data-toggle="tooltip" title="Delete"> <i class="fa fa-trash-o"></i></button>
															<button type="button" class="btn btn-white btn-sm" data-toggle="tooltip" title="Reply"> <i class="fa fa-reply"></i></button>
															<button type="button" class="btn btn-white btn-sm" data-toggle="tooltip" title="Forward"> <i class="fa fa-share"></i></button>
														</div>
														<button type="button" class="btn btn-white btn-sm" data-toggle="tooltip" title="Print"> <i class="fa fa-print"></i></button>
													</div>
												</div>
											</div>
											<div class="sender-info">
												<div class="sender-img">
													<img width="40" alt="" src="assets/img/profiles/avatar-02.jpg" class="rounded-circle">
												</div>
												<div class="receiver-details float-left">
													<span class="sender-name">John Doe (johnjoe@example.com)</span>
													<span class="receiver-name">
														to
														<span>me</span>, <span>Richard</span>, <span>Paul</span>
													</span>	
												</div>	
												<div class="mail-sent-time">
													<span class="mail-time">18 Feb 2019 9:42 AM</span>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="mailview-inner">
											<p>Hello Richard,</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<p>Thanks,<br>
											John Doe</p>
										</div>
									</div>
									<div class="mail-attachments">
										<p><i class="fa fa-paperclip"></i> 2 Attachments - <a href="#">View all</a> | <a href="#">Download all</a></p>
										<ul class="attachments clearfix">
											<li>
												<div class="attach-file"><i class="fa fa-file-pdf-o"></i></div>
												<div class="attach-info"> <a href="#" class="attach-filename">daily_meeting.pdf</a> <div class="attach-fileize"> 842 KB</div></div>
											</li>
											<li>
												<div class="attach-file"><i class="fa fa-file-word-o"></i></div>
												<div class="attach-info"> <a href="#" class="attach-filename">documentation.docx</a> <div class="attach-fileize"> 2,305 KB</div></div>
											</li>
											<li>
												<div class="attach-file"><img src="assets/img/placeholder.jpg" alt="Attachment"></div>
												<div class="attach-info"> <a href="#" class="attach-filename">webdesign.png</a> <div class="attach-fileize"> 1.42 MB</div></div>
											</li>
											<li>
												<div class="attach-file"><img src="assets/img/placeholder.jpg" alt="Attachment"></div>
												<div class="attach-info"> <a href="#" class="attach-filename">webdevelopment.png</a> <div class="attach-fileize"> 1.1 MB</div></div>
											</li>
										</ul>
									</div>
									<div class="mailview-footer">
										<div class="row">
											<div class="col-sm-6 left-action">
												<button type="button" class="btn btn-white"><i class="fa fa-reply"></i> Reply</button>
												<button type="button" class="btn btn-white"><i class="fa fa-share"></i> Forward</button>
											</div>
											<div class="col-sm-6 right-action">
												<button type="button" class="btn btn-white"><i class="fa fa-print"></i> Print</button>
												<button type="button" class="btn btn-white"><i class="fa fa-trash-o"></i> Delete</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
				
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

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>

    </body>
</html>