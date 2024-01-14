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

				<form class="login100-form validate-form" action="login" method="POST" id="registerForm"" >
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" id="email" name="email" placeholder="Email" required> 
						<p id="emailError" ></p>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" id="password" name="password" placeholder="Password" required >
					 <p id="passwordError" ></p>	
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" onclick="validateForm()" >
							Login
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

<!--===============================================================================================-->
	<script src="<?= URL_DIR ?>public/assets/js/main.js"></script>
    <script src="<?= URL_DIR ?>public/assets/js/header.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Inclure Bootstrap JS (et jQuery) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="<?= URL_DIR ?>public/assets/js/header.js"></script>
      <script src="<?= URL_DIR ?>public/assets/js/log_in.js"></script>

</body>

 
 
      
 
</html>














