<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mareco</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo ROOT_PATH; ?>assets/UserLogin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo ROOT_PATH; ?>assets/UserLogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo ROOT_PATH; ?>assets/UserLogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo ROOT_PATH; ?>assets/UserLogin/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo ROOT_PATH; ?>assets/UserLogin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo ROOT_PATH; ?>assets/UserLogin/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo ROOT_PATH; ?>assets/UserLogin/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo ROOT_PATH; ?>assets/UserLogin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo ROOT_PATH; ?>assets/UserLogin/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ROOT_PATH; ?>assets/UserLogin/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
				<form class="login100-form validate-form" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
					<span class="login100-form-title p-b-43">
						Prijava
					</span>
					
					<div class="wrap-input100 rs1 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username">
						<span class="label-input100">Username</span>
					</div>
					
					
					<div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="label-input100">Password</span>
					</div>

					<div class="container-login100-form-btn">
						<input class="login100-form-btn" name="submit" type="submit" value="Submit">

					</div>
					
					
				</form>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="<?php echo ROOT_PATH; ?>assets/UserLogin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo ROOT_PATH; ?>assets/UserLogin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo ROOT_PATH; ?>assets/UserLogin/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo ROOT_PATH; ?>assets/UserLogin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo ROOT_PATH; ?>assets/UserLogin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo ROOT_PATH; ?>assets/UserLogin/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo ROOT_PATH; ?>assets/UserLogin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo ROOT_PATH; ?>assets/UserLogin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo ROOT_PATH; ?>assets/UserLogin/js/main.js"></script>

</body>
</html>