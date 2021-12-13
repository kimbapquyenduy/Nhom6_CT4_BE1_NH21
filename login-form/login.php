<?php
session_start();
require "../config.php";
require "../models/db.php";
require "../models/account.php";
$account = new Account;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Login 07</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Welcome to login</h2>
								<p>Don't have an account?</p>
								<a href="../Register/Register.php" class="btn btn-white btn-outline-white">Sign Up</a>
							</div>
						</div>
						<div class="login-wrap p-4 p-lg-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Sign In</h3>
								</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
							</div>
							<form action="" class="signin-form" method="post">
								<div class="form-group mb-3">
									<label class="label" for="name">Username</label>
									<input type="text" name="Username" class="form-control" placeholder="Username" required>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="password">Password</label>
									<input type="password" name="Password" class="form-control" placeholder="Password" required>
								</div>
								<div class="form-group">
									<button type="submit" name="submit" value="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
								</div>

							</form>

						</div>
						<?php


						if (isset($_POST['submit'])) {


							$username = $_POST['Username'];
							$password = $_POST['Password'];
							if ($account->checklogin($username, $password)) {
								$_SESSION['username'] = $username;
								echo "<script>alert('Đăng Nhập Thành Công !')</script>";
								echo "<script>window.location='../admin/index.php'</script>";
							} else {
								echo "<script>alert('Đăng Nhập Thất bại !')</script>";
								echo "<script>window.location='../index.php'</script>";
							}
						}



						?>

					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>