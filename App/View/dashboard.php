<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?= URL_DIR ?>public/assets/css/dash.css">
     <title>Document</title>
</head>


  

<body>

    <div class="menu">
        <ul class="menu__list">
            <li class="menu__list__item menu__list__item__profile">
                <div class="menu__profile">
                    <img src="<?= URL_DIR ?>public/assets/images/nadi.JPG" alt="">
                </div>
                <h4 class="menu__profile__name">Yassine elouissi</h4>
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
                    <p class="container__statistique__detail"><?=count($categorys ) ?></p>
                    

                </div>
            </div>
 

<!-- Modal -->


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
           <?php foreach($wikis  as $wiki) : ?>
           
                    <tr>
                        <td><?= $wiki['title'] ?></td>
                        <td><?=$wiki['content'] ?></td>
                        <td><?=$wiki['dateCreate'] ?></td>
                        <td><?=$wiki['description'] ?></td>
                        <td><?=$wiki['status'] ?></td>
                        <td>
                            <a href="Wikis/acceptewikis/?id=<?= $wiki['id']?>"><div class="btn btn-outline-success">accpter</div></a>
                            <a href="Wikis/deletewikis/?id=<?= $wiki['id']?>"><div class="btn btn-outline-danger">supprimer</div></a>
                            <a href="Wikis/hashwikis/?id=<?= $wiki['id']?>"><div class="btn btn-outline-warning">hash</div></a>
                        </td>
                    </tr>
           <?php endforeach ?>
            </tbody>
            
        </table>
        <div class="container__header">
            <h3>Tags Statistiques</h3>
            <i class="fas fa-tag"></i>
        </div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">add tag</div></button>
        <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="Tags/index"method="POST">
  <div class="modal-content" style="   width: 670px; height: 436px;     padding: 27px;">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"style="color:black ">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" style="color:black ">name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="name_tag">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div> 
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">add</button>
      </div>
  </div>

    </div>
    </div>
  </div>
</div>
</form>


        <table class="container__table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nom</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
               <?php 
          
               
               foreach($tags as $tag) :?>

                 
                    <tr>
                        
                        <td><?= $tag["id"] ?></td>
                        <td><?= $tag["name"] ?></td>
                        <td>
                             <a href="Tags/readOneTags/?id=<?= $tag['id']?>"><div class="btn btn-outline-primary ">modifier</div></a>
                            <a href="Tags/deletetags/?id=<?= $tag['id']?>"><div class="btn btn-outline-danger">supprimer</div></a>

                        </td>
                    </tr>
            <?php endforeach; ?>
            
            </tbody>
        </table>

        <div class="container__header">
            <h3>categorys Statistiques</h3>
            <i class="fas fa-table"></i>
        </div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">add category</div></button>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form action="Categorys/index"method="POST">
  <div class="modal-content" style="   width: 670px; height: 406px;     padding: 27px;">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" style="color:black " required >name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="name_category">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div> 
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">add</button>
      </div>
  </div>

    </div>
    </div>
  </div>
</div>

        <table class="container__table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($categorys  as $category) : ?>
                    <tr>
                        <td><?= $category["id"] ?></td>
                        <td><?= $category["name"] ?></td>
                  
                        <td>
                        
                        <a href="Categorys/readOneCtegory/?id=<?= $category['id']?>"><div class="btn btn-outline-primary ">modifier</div></a>
                        <a href="Categorys/deletCategory/?id=<?= $category['id']?>"><div class="btn btn-outline-danger">supprimer</div></a>                     
                       </td>
                    </tr>
                    <?php endforeach; ?>
           
            </tbody>
        </table>
        <div class="container__header">
            <h3>Users Statistiques</h3>
            <i class="fas fa-user-group"></i>
        </div>

        <table class="container__table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>role</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $user["id"] ?></td>
                        <td><?= $user["username"] ?></td>
                        <td><?= $user["email"] ?></td>
                        <td><?= $user["roleId"]?></td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>


<script src="<?= URL_DIR ?>public/assets/js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>