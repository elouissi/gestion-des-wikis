  
    <title>Document</title>
</head>
<body>
<?php 
include __DIR__.('./includes/navbar.php');
?>
  


    <section class="hero-section d-flex flex-column align-items-center  " id="hero-section" >
        <img class="w-100" src="<?= URL_DIR ?>public/assets/images/youWiki.svg" alt="backgraound-hero" >
        
        <div class="input-group" id="hero-field" >
            <input type="text"id="hero_field" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons">
            <button class="btn btn-primary "  id="btn-search" type="button"><i class="bi bi-search"></i></button>
            <button class="btn btn-info  " id="btn-search" type="button"><i class="bi bi-calendar3"></i></button> 
          </div> 
    </section>
    <section class="frist-slider">
        <div class="d-flex justify-content-between m-4" >
        <h2>Upcoming wikis</h2>
 
        </div> 
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">ajouter</div></button>

   <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content" style="   width: 670px; height: 636px;     padding: 27px;">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" style="color:black ">name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" style="color:black ">content</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" style="color:black ">description</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
 
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
    <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
  </div>

    </div>
    </div>
  </div>
</div>
    <div class="row mx-4" >
    <?php foreach ($allWikis as $wiki): ?>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?= $wiki['title'] ?></h5>
              <p class="card-text"><?= $wiki['content'] ?></p>
              <p>date creation: <?= $wiki['dateCreate'] ?></p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
     <?php endforeach ?>   
      
      </div>
    <script src="header.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
      <script src="<?= URL_DIR ?>public/assets/js/header.js"></script>

</body>
<!-- Remove the container if you want to extend the Footer to full width. -->
<?php include __DIR__.('./includes/footer.php');?>

<!-- End of .container -->

</html>














