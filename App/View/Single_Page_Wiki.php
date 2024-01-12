<!DOCTYPE html>
<html lang="en">
<head>
  
<title>Document</title>
</head>
<body>
<?php 
include __DIR__.('./includes/navbar.php');
?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<section class="content-item grey" id="blog-item">
    <div class="container">
        <div class="row">
            <!-- BLOG POST - START -->
            <div class="col-sm-8 blog">
                  <h2>Lorem ipsum dolor sit amet</h2>
                    <ul class="blog-detail list-unstyled list-inline">
                      <li><i class="fa fa-calendar"></i>27/02/2014</li>
                        <li><i class="fa fa-clock-o"></i>19:41</li>
                        <li><i class="fa fa-user"></i>John Doe</li>
                        <li><i class="fa fa-comments"></i>124 Comments</li>
                    </ul>
                    <p><img class="img-responsive pull-left" src="https://www.bootdey.com/image/200x200/FFB6C1/000000" alt="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In venenatis lacus ac semper viverra. Etiam consequat odio sollicitudin metus condimentum, quis hendrerit erat adipiscing. Cras non turpis ut eros varius laoreet a ut felis. Aliquam sodales, purus pulvinar tincidunt congue, elit mauris sodales nisl, consequat iaculis urna enim in lectus. Proin at ornare lacus. Curabitur sodales imperdiet ante, eget fermentum nulla consequat id. Vestibulum quis tellus ac lectus luctus varius nec sit amet nunc. Aliquam elit orci, semper vitae aliquet vel, ultrices nec sem. Morbi lorem ligula, tempus eu ultrices sit amet, varius id quam. Donec vestibulum arcu et augue porta, at mattis neque facilisis. Donec vulputate eu risus ut volutpat. Praesent vel rhoncus velit, quis vestibulum dui. Phasellus sodales sapien ligula, quis consequat diam tristique id. Donec vel rhoncus sem, id elementum quam. Aliquam erat volutpat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In venenatis lacus ac semper viverra. Etiam consequat odio sollicitudin metus condimentum, <a href="#">quis hendrerit</a> erat adipiscing. Cras non turpis ut eros varius laoreet a ut felis. Aliquam sodales, purus pulvinar tincidunt congue, elit mauris sodales nisl, consequat iaculis urna enim in lectus. Proin at ornare lacus. Curabitur sodales imperdiet ante, eget fermentum nulla consequat id. Vestibulum quis tellus ac lectus luctus varius nec sit amet nunc. Aliquam elit orci, semper vitae aliquet vel, ultrices nec sem.</p>
              <ul>
                      <li>Lorem ipsum dolor sit amet</li>
                        <li>In venenatis lacus ac semper viverra</li>
                        <li>Etiam consequat odio sollicitudin metus condimentum</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, <b>consectetur adipiscing elit. In venenatis lacus ac semper viverra</b>. Etiam consequat odio sollicitudin metus condimentum, <i>quis hendrerit erat adipiscing</i>. Cras non turpis ut eros varius laoreet a ut felis. Aliquam sodales, purus pulvinar tincidunt congue, elit mauris sodales nisl, consequat iaculis urna enim in lectus. Proin at ornare lacus. Curabitur sodales imperdiet ante, eget fermentum nulla consequat id. Vestibulum quis tellus ac lectus luctus varius nec sit amet nunc. Aliquam elit orci, semper vitae aliquet vel, ultrices nec sem.</p>
                  <ul class="blog-tags list-unstyled list-inline">
                      <li><a href="#"><i class="fa fa-tag"></i>book</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i>music</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i>nature</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i>read</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i>songs</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i>sunshine</a></li>   
                    </ul>
                </div>
                <!-- BLOG POST - END -->
                
                <!-- SIDEBAR - START -->
                <div class="col-sm-4">
                  <div class="sidebar">
                        <h3>Categories</h3>
                        <div class="box categories">
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-female"></i>Fashion</a></li>
                                <li><a href="#"><i class="fa fa-paint-brush"></i>Design</a></li>
                                <li><a href="#"><i class="fa fa-music"></i>Music</a></li>
                                <li><a href="#"><i class="fa fa-plane"></i>Travel</a></li>
                                <li><a href="#"><i class="fa fa-hashtag"></i>Uncategorized</a></li>
                            </ul>
                        </div>
                        <h3>Recent Posts</h3>
                        <div class="box posts">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-chevron-right"></i><a href="#">Introducing WordPress 4.0 “Benny”</a><div>27/02/2014</div></li>
                                <li><i class="fa fa-chevron-right"></i><a href="#">Nature Center: Earth Day Festival</a><div>18/02/2014</div></li>
                                <li><i class="fa fa-chevron-right"></i><a href="#">Two New Stores Set to Open in Downtown</a><div>05/02/2014</div></li>
                            </ul>
                        </div>
                        <h3>Tags</h3>
                        <div class="box tags">
                            <ul class="blog-tags list-unstyled list-inline">
                                <li><a href="#"><i class="fa fa-tag"></i>book</a></li>
                                <li><a href="#"><i class="fa fa-tag"></i>music</a></li>
                                <li><a href="#"><i class="fa fa-tag"></i>nature</a></li>
                                <li><a href="#"><i class="fa fa-tag"></i>read</a></li>
                                <li><a href="#"><i class="fa fa-tag"></i>songs</a></li>
                                <li><a href="#"><i class="fa fa-tag"></i>sunshine</a></li>                            
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