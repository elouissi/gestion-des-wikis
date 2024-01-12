  
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
 
            <div class="d-flex justify-content-between mx-4" >
            <h2>Upcoming Matchs</h2>
            <a href="Wikis/Addwikis"> <button type="submit" class="btn btn-primary">add a new wiki</button>
</a>
            </div> 

   <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content" style="   width: 670px; height: 636px;     padding: 27px;">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
     
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger">Understood</button>
      </div>
  </div>

    </div>
    </div>
  </div>
</div>
    <div class="row mx-4"   >
    <?php foreach ($allWikis as $wiki): ?>
        <div class="col-sm-4" style="margin-bottom: 20px;" >
          <div class="card" >
            <div class="card-body">
              <h5 class="card-title"><?= $wiki['title'] ?></h5>
              <p class="card-text"><?= $wiki['content'] ?></p>
              <p>date creation: <?= $wiki['dateCreate'] ?></p>
              <a href="Wikis/affichage_wiki/?id=<?= $wiki['id']?>" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
     <?php endforeach ?>   
      
      </div>
      <?php include __DIR__.('./includes/footer.php');?>

 
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
      <script src="<?= URL_DIR ?>public/assets/js/header.js"></script>

</body>
<!-- Remove the container if you want to extend the Footer to full width. -->

<!-- End of .container -->

</html>














