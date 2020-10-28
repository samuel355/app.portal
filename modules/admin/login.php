<?php include "includes/header.php";?>
    <body class="account-page">
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				<div class="container">
				
					<!-- Account Logo -->
					<div class="account-logo">
						<a href="index.php"><img src="assets/img/logo2.png" alt="Dreamguy's Technologies"></a>
					</div>
					<!-- /Account Logo -->
					
					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Login</h3>
							<p class="account-subtitle">Access to our dashboard</p>

                            <!--notifications-->
                            <div class="row">
                                <div class="col-md-12">

                                    <div id="process" class="alert alert-primary alert-dismissible fade show" role="alert" style="margin-top:20px; display:none;">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        <span>Processing ! ....</span>
                                    </div>

                                    <div id="alert" class="alert alert-danger alert-dismissible fade show text-center" role="alert" style="margin-top:20px; display:none;">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        <span class="text-center" id="messages"></span>
                                    </div>

                                    <div id="succ" class="alert alert-info alert-dismissible fade show text-center" role="alert" style=" display:none;">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        <span class="text-center" id="done"></span>
                                    </div>
                                </div>
                            </div>
                            <!--/notifications-->
							
							<!-- Account Form -->
							<form id="admin-login">
								<div class="form-group">
									<label>Username or ID</label>
									<input class="form-control" type="text" name="username_id" id="username_id">
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label>Password</label>
										</div>
										<div class="col-auto">
											<a class="text-muted" href="forgot-password">
												Forgot password?
											</a>
										</div>
									</div>
									<input class="form-control" type="password" name="password" id="password">
								</div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label class="text-muted" for="Me"> Remember Me</label>
                                        </div>
                                        <div class="col">
                                            <input type="checkbox" id="remember_me" name="remember_me">
                                        </div>
                                        <div class="col"></div>
                                    </div>
                                </div>
								<div class="form-group text-center">
									<button name="submit" id="submit" class="btn btn-primary account-btn" type="submit">Login</button>
								</div>
								<div class="account-footer">
									<p>International School Portal</p>
								</div>
							</form>
							<!-- /Account Form -->
							
						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
        <script src="ajax/admin-login.js"></script>
		
    </body>
</html>
