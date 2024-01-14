<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Inclure jQuery depuis le CDN -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Inclure Bootstrap CSS depuis le CDN si nécessaire -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
</head>
<body>

<?php include __DIR__.'/includes/navbar.php'; ?>

<section class="hero-section d-flex flex-column align-items-center" id="hero-section">
    <img class="w-100" src="<?= URL_DIR ?>public/assets/images/youWiki.svg" alt="background-hero">
    
    <div class="input-group" id="hero-field">
        <input type="text" id="hero_field" class="form-control" placeholder="Recipient's username" >
        <button class="btn btn-primary" id="btn-search" type="button"><i class="bi bi-search"></i></button>
        <button class="btn btn-info" id="btn-calendar" type="button"><i class="bi bi-calendar3"></i></button> 
    </div> 
</section>

<section class="frist-slider">
    <div class="d-flex justify-content-between mx-4">
        <h2>Upcoming Wikis</h2>
        <a href="<?= URL_DIR ?>Wikis/Addwikis">
            <button type="submit" class="btn btn-primary">Add a new wiki</button>
        </a>
    </div> 

    <!-- ... Autres éléments du slider ... -->

    <div class="row mx-4" id="search_list">
        <?php foreach ($allWikis as $wiki): ?>
            <div class="col-sm-4" style="margin-bottom: 20px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $wiki['title'] ?></h5>
                        <p class="card-text"><?= $wiki['content'] ?></p>
                        <p>Date creation: <?= $wiki['dateCreate'] ?></p>
                        <a href="<?= URL_DIR ?>Wikis/affichage_wiki/?id=<?= $wiki['id'] ?>" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>   
    </div>
</section>


 
<script>
     // Assurez-vous que le DOM est chargé avant d'exécuter du code jQuery
    $(document).ready(function(){
      

        $("#hero_field").keyup(function(){
            var input = $(this).val(); 
            if(input == "") input = 'all';

            $.ajax({
                url: "http://localhost/gestion-des-wikis/Home/search",
                method: "POST",
                data: {input: input},
                success: function(data){
                    $("#search_list").html(data);
                }
            });
        });
    });
</script>
<?php include __DIR__.'/includes/footer.php'; ?>



</body>
</html>