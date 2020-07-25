<?php
	include_once('connect.php');
	if (isset($_POST["sbm"])) {
		$mail = $_POST["mail"] ;
		$password = $_POST["password"] ;
		// tạo câu truy vấn
		$sql = "SELECT * FROM accountlogin WHERE email = '$mail' AND pass = '$password'" ;
		$query =mysqli_query($conn , $sql) ;
		if ($row = mysqli_num_rows($query) > 0) {
			$_SESSION["user"]["mail"] = $mail ;
			$_SESSION["user"]["password"] = $password ;
			// chuyển về trang admin
			header("location:index.php") ;
		}else {
			header("location:login.php") ;
			$error = "Tài khoản không hợp lệ !" ;
		}
		
	}
?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="img/fav.png" />

		<!-- Title -->
		<title>Wafi Admin Template - Login</title>
		
		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />

		<!-- Master CSS -->
		<link rel="stylesheet" href="css/main.css" />

	</head>

	<body class="authentication">

		<!-- Container start -->
		<div class="container">
			
			<form action="" method="POST">
				<div class="row justify-content-md-center">
					<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
						<div class="login-screen">
							<div class="login-box">
								<a href="#" class="login-logo">
									<img src="img/logo-dark.png" alt="Wafi Admin Dashboard" />
								</a>
								<h5>Welcome back,<br />Please Login to your Account.</h5>
								<div class="form-group">
									<input type="text" class="form-control" name="mail" placeholder="Email Address" required />
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password" placeholder="Password" required />
								</div>
								<div class="actions mb-4">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="remember_pwd">
										<label class="custom-control-label" for="remember_pwd">Remember me</label>
									</div>
									<button type="submit" class="btn btn-primary" name="sbm">Login</button>
								</div>
								<div class="forgot-pwd">
									<a class="link" href="forgot-pwd.html">Forgot password?</a>
								</div>
								<hr>
								<div class="actions align-left">
									<span class="additional-link">New here?</span>
									<a href="signup.html" class="btn btn-dark">Create an Account</a>
								</div>
								<?php
									if (isset($error)) {
										echo $error ; 
									}
								?>
							</div>
						</div>
					</div>
				</div>
			</form>

		</div>
		<!-- Container end -->

	</body>
</html>