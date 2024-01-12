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
     <link href="<?= URL_DIR ?>public/assets/css/bootstrap_home.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<!--===============================================================================================-->
</head>

<body>
 
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				 
            <form class="login100-form validate-form" style="margin: auto;" action="ajouter_wiki" method="POST">
    <span class="login100-form-title">
        Add Wiki
    </span>

    <!-- Titre -->
    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
        <input class="input100" type="text" name="title" placeholder="Title">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-envelope" aria-hidden="true"></i>
        </span>
    </div>

    <!-- Contenu -->
    <div class="wrap-input100 validate-input" data-validate="Password is required">
        <textarea class="input100" type="text" name="content" placeholder="Content"></textarea>
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-lock" aria-hidden="true"></i>
        </span>
    </div>

    <!-- Description -->
    <div class="wrap-input100 validate-input" data-validate="Password is required">
        <textarea class="input100" type="text" name="description" placeholder="Description"></textarea>
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-lock" aria-hidden="true"></i>
        </span>
    </div>

    <!-- Sélecteur -->
    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
        <select class="input100" name="category">
        <option value="1"  selected disabled>choisir une categorie</option>
            <?php foreach($categorys as $cat){?>
            <option  value="<?= $cat['id']?>"><?= $cat['name']?></option>
            <?php } ?>
        </select>
    
    </div>
<h6>Selectionner Tags</h6>
<div class="row">
    <?php $count = 0; ?>
    <?php foreach ($tags as $tag) : ?>
        <div class="col-md-6">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="<?= $tag['id'] ?>" name="tags[]"id="flexCheckDefault<?= $count ?>">
                <label class="form-check-label" for="flexCheckDefault<?= $count ?>">
                    <?= $tag['name'] ?>
                </label>
            </div>
        </div>
        <?php if (++$count % 2 == 0) : ?>
            </div>
            <?php if ($count < count($tags)) : ?>
                <div class="row">
            <?php endif; ?>
        <?php endif; ?>
    <?php endforeach; ?>
 

 
 
    <div class="container-login100-form-btn">
        <button class="login100-form-btn">
            Add
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
	<?php include __DIR__.('../includes/footer.php');?>
 
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














