<?php include "includes/header.php";?>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<span class="logo"><img src="images/logo.svg" alt="" /></span>
						<h1>Login</h1>
						<p>Access Your Dashboard with correct credentials</p>

                        <!--notifications-->


                        <div id="alert" style="color: red">
                            <h4 style="align-items: center" id="messages"></h4>
                        </div>
                        <div id="succ" style="color: green">
                            <h4 style="align-items: center" id="done"></h4>
                        </div>
                        <!--/notifications-->

						<!-- Login Section-->
						<section>

							<form method="POST" action="#" id="admin-login" role="form" enctype="multipart/form-data">
								<div class="row gtr-uniform">
									<div class="col-6 col-12-xsmall">
										<input type="text" name="username_id" value="" placeholder="Your Username or Admin ID" />
									</div>
								</div>
								<div class="row gtr-uniform" style="margin-top: 1rem">
									<div class="col-6 col-12-xsmall">
										<input type="password" name="password" value="" placeholder="Your Password" />
									</div>
								</div>
								<ul class="actions" style="margin-top: 2rem">
                                    <li><input type="submit" name="submit" id="submit" value="Login"></li>
									<li><a href="admin-reset-password">Forgot your password?</a></li>
								</ul>
							</form>
						</section>
					</header>


				<!-- Footer -->
                <?php include "includes/footer.php";?>

			</div>

<?php include "includes/scripts.php";?>
