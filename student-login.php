<?php include "includes/header.php";?>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<span class="logo"><img src="images/logo.svg" alt="" /></span>
						<h1>Login</h1>
						<p>Access the student portal with correct credentials</p>

						<!-- Login Section-->
						<section>
							<form method="post" action="#">
								<div class="row gtr-uniform">
									<div class="col-6 col-12-xsmall">
										<input type="text" name="demo-name" value="" placeholder="Your Username" />
									</div>
								</div>
								<div class="row gtr-uniform" style="margin-top: 1rem">
									<div class="col-6 col-12-xsmall">
										<input type="email" name="password" value="" placeholder="Your Password" />
									</div>
								</div>
								<ul class="actions" style="margin-top: 2rem">
									<li><a href="#" class="button">Login</a></li>
									<li><a href="student-reset-password">Forgot your password?</a></li>
								</ul>
							</form>
						</section>
					</header>


				<!-- Footer -->
                <?php include "includes/footer.php";?>

			</div>
<?php include "includes/scripts.php";?>
