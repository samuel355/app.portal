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
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Payments</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Payments</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">	
								<table class="table table-striped custom-table datatable mb-0">
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
											<td>8 Feb 2019</td>
											<td>$500</td>
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
											<td>8 Feb 2019</td>
											<td>$500</td>
										</tr>
									</tbody>
								</table>
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
		
		<!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>
