<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="public/assets/css/dash.css">
    <title>Document</title>
</head>


  

<body>

    <div class="menu">
        <ul class="menu__list">
            <li class="menu__list__item menu__list__item__profile">
                <div class="menu__profile">
                    <img src="/assets/images/profile.jpg" alt="">
                </div>
                <h4 class="menu__profile__name">Yssine elouissi</h4>
            </li>
            <li class="menu__list__item">
                <a href="">
                    <i class="fas fa-home"></i>
                    <p>home</p>
                </a>
            </li>
          
             
            

            <li class="menu__list__item__logout">
                <a href="">
                    <i class="fas fa-sign-out"></i>
                    <p>Log Out</p>
                </a>
            </li>
        </ul>

    </div>


    <main class="container">
        <div class="container__header">
            <h3>dashboard</h3>
            <i class="fas fa-chart-pie"></i>
        </div>
        <div class="container__statistique">
            <div class="container__statistique__data">
                <i class="fas fa-user"></i>
                <div class="container__statistique__info">
                    <p>users</p>
                    <p class="container__statistique__detail"><?= count($users) ?></p>
                </div>
            </div>
            <div class="container__statistique__data">
                <i class="fas fa-pen"></i>
                <div class="container__statistique__info">
                    <p>wikis</p>
                    <p class="container__statistique__detail"><?= count($wikis) ?></p>
                </div>
            </div>
            <div class="container__statistique__data">
                <i class="fas fa-tag"></i>
                <div class="container__statistique__info">
                    <p>tags</p>
                    <p class="container__statistique__detail"><?=count($tags) ?></p>
                </div>
            </div>
            <div class="container__statistique__data">
                <i class="fas fa-table"></i>
                <div class="container__statistique__info">
                    <p>categories</p>
                    

                </div>
            </div>

        </div>
        <div class="container__header">
            <h3>Wikis Statistiques</h3>
            <i class="fas fa-pen"></i>
        </div>

        <table class="container__table">
            <thead>
                <tr>
                    <th>titre</th>
                    <th>content </th>
                    <th>date creation </th>
                    <th>description </th>
                    <th>status </th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
           <?php foreach($wikis as $wiki) : ?>
           
                    <tr>
                        <td><?= $wiki['title'] ?></td>
                        <td><?=$wiki['content'] ?></td>
                        <td><?=$wiki['dateCreate'] ?></td>
                        <td><?=$wiki['description'] ?></td>
                        <td><?=$wiki['status'] ?></td>
                        <td>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                voir wiki
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5 text-dark " id="exampleModalLabel"><?= $wiki['ttitle'] ?></h1>
                                            <h1 class="modal-title fs-5 text-dark " id="exampleModalLabel"><?= $wiki['content'] ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-dark ">
                                         
                                        </div>
                                        <div class="modal-footer">
                                            <a  href="" class="btn btn-outline-primary">accepter</a>
                                            <a  href="" class="btn btn-outline-danger">supprimer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
           <?php endforeach ?>
            </tbody>
            
        </table>
        <div class="container__header">
            <h3>Tags Statistiques</h3>
            <i class="fas fa-tag"></i>
        </div>

        <table class="container__table">
            <thead>
                <tr>
                    <th>nom</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
               <?php 
          
               
               foreach($tags as $tag) :?>

                 
                    <tr>
                        
                        <td><?= $tag["nom_tag"] ?></td>
                        <td>
                            <div class="btn btn-outline-primary">modifier</div>
                            <div class="btn btn-outline-danger">supprimer</div>
                        </td>
                    </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <div class="container__header">
            <h3>Tags Statistiques</h3>
            <i class="fas fa-table"></i>
        </div>

        <table class="container__table">
            <thead>
                <tr>
                    <th>nom</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
               
                    <tr>
                        <td></td>
                        <td>
                            <div class="btn btn-outline-primary">modifier</div>
                            <div class="btn btn-outline-danger">supprimer</div>
                        </td>
                    </tr>
           
            </tbody>
        </table>
        <div class="container__header">
            <h3>Users Statistiques</h3>
            <i class="fas fa-user-group"></i>
        </div>

        <table class="container__table">
            <thead>
                <tr>
                    <th>nom</th>
                    <th>email</th>
                    <th>role</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $user->nom ?></td>
                        <td><?= $user->email ?></td>
                        <td><?= $user->role ?></td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>