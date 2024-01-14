<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Document</title>
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= URL_DIR ?>public/assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= URL_DIR ?>public/assets/css/main.css">
<!--===============================================================================================-->
</head>

<body>
<?php 
include __DIR__.('./includes/navbar.php');
?>
		
        <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?= URL_DIR ?>public/assets/images/logo.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="create" method="POST" id="registerForm" >
					<span class="login100-form-title">
						Register
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="name" id="username" placeholder="name" required> 
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<span id="usernameError" class="error"></span>

<br>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz "required>
						<input class="input100" type="email" name="email" id="email"  placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<span id="emailError" class="error"></span>

<br>
					<div class="wrap-input100 validate-input" required>
						<input class="input100" type="password" name="password" id="password" required placeholder="password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<span id="passwordError" class="error"></span>

<br>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="confirmation_password" id="password"  required placeholder="password validation">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<span id="passwordError" class="error"></span>

<br>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" onclick="validateForm()">
							create account
						</button>
					</div>

			 
 
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
 
<!--===============================================================================================-->
	<script src="js/main.js"></script>
 

</body>
	<?php include __DIR__.('./includes/footer.php');?>
 
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?= URL_DIR ?>public/assets/js/main.js"></script>
    <script src="<?= URL_DIR ?>public/assets/js/header.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
      <script src="<?= URL_DIR ?>public/assets/js/header.js"></script>
      <script src="<?= URL_DIR ?>public/assets/js/register.js"></script>


</body>

 
 
      
 
</html>














