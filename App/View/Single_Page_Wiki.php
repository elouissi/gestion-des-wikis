<!DOCTYPE html>
<html lang="en">
<head>
  
<title>Document</title>
</head>
<body> 
  <?php 
include __DIR__.('./includes/navbar.php');
?>
<section class="content-item grey" id="blog-item">
    <div class="container">
        <div class="row">
           
            <!-- BLOG POST - START -->
            <div class="col-sm-8 blog">
                  <h2 style="    margin-top: 41px;" ><?= $one_wiki->title ?></h2>
                    <ul class="blog-detail list-unstyled list-inline">
                      <li><i class="fa fa-calendar"></i><?= $one_wiki->dateCreate ?></li>
                      
                        <li><i class="fa fa-user"></i><?= $one_wiki->user_name ?></li>
               
                    </ul>
                    <p><img class="img-responsive pull-left" src="<?= URL_DIR ?>public/assets/images/logo.png" alt=""> <?= $one_wiki->content ?> .</p>
                <h5>Description</h5>
                   <p> <?= $one_wiki->description ?></p>                
                </div>
                <!-- BLOG POST - END -->
                
                <!-- SIDEBAR - START -->
                <div class="col-sm-4">
                  <div style="    margin-top: 41px;" class="sidebar">
                        <h3>Categorie</h3>
                        <div class="box categories">
                            <ul class="list-unstyled">
                                <li><a href="#"><?= $one_wiki->category_name ?></a></li>
                            
                            </ul>
                        </div>
                        
                        <h3>Tags</h3>
                        <div class="box tags">
                            <ul class="blog-tags list-unstyled list-inline">
                                <?php foreach($tags as $tag):?>
                                <li><a href="#"><i class="fa fa-tag"></i><?= $tag->name ?></a></li>
                                <?php endforeach ?>
                                                       
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- SIDEBAR - END -->
            </div>
        </div>
    </section>
    <?php include __DIR__.('./includes/footer.php');?>

 
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="<?= URL_DIR ?>public/assets/js/header.js"></script>

</body>
<!-- Remove the container if you want to extend the Footer to full width. -->

<!-- End of .container -->

</html>