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
								<h3 class="page-title">Announcement</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Announcement</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Content Starts -->
					<div class="row">
                        <?php
                            if (isset($_GET['id'])){
                                $post_id = $_GET['id'];
                                $sql = "SELECT * FROM announcements WHERE id = :id";
                                $stmt = $db->prepare($sql);
                                $stmt->execute([
                                   ':id'=>$post_id
                                ]);
                                $announcement = $stmt->fetch(PDO::FETCH_ASSOC);
                                $an_title = $announcement['title'];
                                $an_content = $announcement['message'];
                                $an_author = $announcement['author_firstname'];
                                $an_date = $announcement['posted_date'];

                                $sql1 = "UPDATE announcements SET post_views = post_views + 1 WHERE post_id =:id";
                                $stmt = $db->prepare($sql1);
                                $stmt->execute([
                                    ':id' => $post_id
                                ]);

                            }else{
                                echo "<div class='alert alert-danger'> Soryy An error Occured</div>";
                            }
                        ?>
						<div class="col-md">
							<div class="card">
								<div class="card-body">
									<article class="post">
										<h1 class="post-title"><?php echo $an_title;?></h1>
										<ul class="meta">
											<li><span>Created :</span> <?php echo $an_date;?></li>
											<li><span>Author :</span> <?php echo $an_author; ?> </li>
										</ul>
										<p>
										   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
										</p>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
										</p>
										<h2>Sed ut perspiciatis unde omnis iste</h2>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
										</p>
										<h2>Sed ut perspiciatis unde omnis iste</h2>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
										</p>
									</article>
                                    <button class="btn btn-outline-primary btn-sm">Edit</button>
                                    <button class="btn btn-sm btn-outline-danger">Delete</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /Content End -->
					
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
