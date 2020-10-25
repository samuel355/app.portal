<?php include "includes/header.php";?>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<span class="logo"><img src="images/logo.svg" alt="" /></span>
						<h1>Reset Password</h1>
						<p>Enter your ID and email. we will send you instructions on how to reset your password</p>

						<!-- Login Section-->
						<section>
							<form method="post" action="#">
								<div class="row gtr-uniform">
									<div class="col-6 col-12-xsmall">
										<input type="text" name="demo-name" value="" placeholder="Your ID" />
									</div>
								</div>
								<div class="row gtr-uniform" style="margin-top: 1rem">
									<div class="col-6 col-12-xsmall">
										<input type="email" name="email" value="" placeholder="Your Email" />
									</div>
								</div>
								<ul class="actions" style="margin-top: 2rem">
									<li><a href="#" class="button">Reset Password</a></li>
								</ul>
							</form>
						</section>
					</header>


				<!-- Footer -->
                <?php include "includes/footer.php";?>

			</div>

<?php include "includes/scripts.php";?>
