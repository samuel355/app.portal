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
					<div class="row">
						<div class="col-md-8 offset-md-2">
						
							<!-- Page Header -->
							<div class="page-header">
								<div class="row">
									<div class="col-sm-12">
										<h3 class="page-title">Theme Settings</h3>
									</div>
								</div>
							</div>
							<!-- /Page Header -->
						
							<form>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label">Website Name</label>
									<div class="col-lg-9">
										<input name="website_name" class="form-control" value="Dreamguy's Technologies" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label">Light Logo</label>
									<div class="col-lg-7">
										<input type="file" class="form-control">
										<span class="form-text text-muted">Recommended image size is 40px x 40px</span>
									</div>
									<div class="col-lg-2">
										<div class="img-thumbnail float-right"><img src="assets/img/logo2.png" alt="" width="40" height="40"></div>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label">Favicon</label>
									<div class="col-lg-7">
										<input type="file" class="form-control">
										<span class="form-text text-muted">Recommended image size is 16px x 16px</span>
									</div>
									<div class="col-lg-2">
										<div class="settings-image img-thumbnail float-right"><img src="assets/img/logo2.png" class="img-fluid" width="16" height="16" alt=""></div>
									</div>
								</div>
								<div class="submit-section">
									<button class="btn btn-primary submit-btn">Save</button>
								</div>
							</form>
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
