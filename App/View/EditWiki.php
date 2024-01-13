  
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

	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			 
		 
						<form class="login100-form validate-form" style="margin: auto;" action="../editwiki" method="POST">
					<span class="login100-form-title">
					 Edit
					</span>

						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="title" placeholder="title"value="<?=  $one_wiki->title ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
				 
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz"  >
						<input class="input100" type="text" name="content" placeholder="content"value="<?=  $one_wiki->content?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz"  >
						<input class="input100" type="text" name="description" placeholder="description"value="<?=  $one_wiki->description?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz" hidden >
						<input class="input100" type="text" name="id" placeholder="Email"value="<?=  $one_wiki->id?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <select class="input100" name="category">
                        <option value="1"  selected disabled>choisir une categorie</option>
                            <?php foreach($categorys as $cat){?>
                            <option  value="<?= $cat['id']?>"><?= $cat['name']?></option>
                            <?php } ?>
                        </select>
                    
                    </div>
                    <h4>Selectionner Tags</h4>
                        <div class="row">
                        
                            <?php foreach ($tags as $tag) : ?>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="<?= $tag['id'] ?>" name="tags[]"">
                                        <label class="form-check-label"">
                                            <?= $tag['name'] ?>
                                        </label>
                                    </div>
                                </div>
                               
                            <?php endforeach; ?>
                        
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Edit
						</button>
					</div>

				 

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							exit
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
  
					
					
			</div>
		</div>
	</div>
	<?php include __DIR__.('./includes/footer.php');?>
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
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

</body>

 
 
      
 
</html>














