<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_header.css">
    <link href="bootstrap_home.css" rel="stylesheet">
    <link href="home.css" rel="stylesheet">
    <link href="<?= URL_DIR ?>public/assets/css/home.css" rel="stylesheet">
    <link href="<?= URL_DIR ?>public/assets/css/bootstrap_home.css" rel="stylesheet">
    <link href="<?= URL_DIR ?>public/assets/css/style_header.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
 




    <title>Document</title>
</head>

<body>
    <header>
        <nav class="nav">
            <div class="logo-container">
                <img class="logo__img" src="<?= URL_DIR ?>public/assets/images/logo.png" alt="StadiumStream logo" style="    width: 90px;">
                <p class="logo__label" style="margin-left: 10px;">You Wiki</p>
            </div>
            <div class="nav__links" style="    margin: auto;">
                <ul>
                  <a href="list_stagiaires.html"> <li>Home</li> </a> 
             
                </ul>
            </div>
            <div class="nav__group__burger" style="    margin-inline-start: auto;
        ">
                <a class="nav__group__btn">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
                </a>
            </div>
            <div class="side_nav__actions">
            <?php if(isset($_SESSION['name'])){ ?>
                    <a href="#" class="btn btn-primary"><?= $_SESSION['name']?></a>
                    <a href="<?= URL_DIR ?>Auth/log_out" class="nav__actions__login">Log out</a>
                <?php } else{ ?>
                    <a href="#"> <button class="nav__actions1__login">Log In</button></a>
                <a href="<?= URL_DIR ?>Auth/Register"><button class="nav__actions1__signup">Sign Up</button></a>
                <?php } ?>
            
            </div>
            
    
            <div class="nav__actions">
             
            </div>
    
        </nav>
        <nav class="side__nav side__nav--active">
            <div class="side_nav__header">
                <div class="logo-container">
    
                    <img class="logo__img" src="<?= URL_DIR ?>public/assets/images/logo.png" alt="StadiumStream logo"style="    width: 90px;">
    
                    <p class="logo__label">YouWiki</p>
                </div>
                <div class="nav__group__burger">
                    <a class="side_nav__group__btn">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                    </a>
                </div>
            </div>
            <div class="side__nav__links">
                <ul>
                    <li>home</li>
                    <li>about</li>
               
                </ul>
            </div>
            <div class="side_nav__actions">
              <a href=""> <button class="nav__actions__login">Log In</button></a> 
            <a href=""> <button class="nav__actions__signup">Sign Up</button></a> 
            </div>
        </nav>
    </header>

 