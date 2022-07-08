<?php
  require_once("../db.php");
  $readSql ="SELECT * FROM guest_book";
  $db = "guest_book";

  $res = mysqli_query($conn,$readSql);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Le Crabe Croustillant- Contact.</title>
    <link rel="stylesheet" href="/style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
  </head>
  <body>
    <div class="site bg-white">
        <?php include 'nav.php' ?>
        <!--  INTRODUCTION A LA PAGE -->
        
        <!-- Place aux recettes !!!  -->
        <div class="jumbotron jumbotron-fluid my-5">
            <div class="container text-center">
              <h1 class="display-4">Administration - Livre d'or</h1>
              <p class="lead">Page d'administration du livre d'or.</p>
            </div>
        </div>


        <hr class="mt-5">

        <!-- Wrapper container -->
        <div class="container col-xl-10 py-4">
        <a href="/guest_book.php">
             <button class="btn btn-primary" type="">
                Ajouter un message
            </button>
        </a>


        <table class="table table-striped my-3 text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Restaurant</th>
                    <th>Date</th>
                    <th>Message</th>
                    <th>Éditer</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody">
                <?php while($i = mysqli_fetch_assoc($res)) {
                ?>
                <tr>
                    <th scope="row"><?php echo $i['id']; ?></th>
                    <td><?php echo $i['name']; ?></td>
                    <td><?php echo $i['mail']; ?></td>
                    <td><?php echo $i['place']; ?></td>
                    <td><?php echo $i['date']; ?></td>
                    <td><?php echo $i['message']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $i['id']; ?>&db=<?php echo $db; ?>" class="m-2">
                            <i class="fa fa-edit fa-2x"></i>
                        </a>
                    </td>
                    <td>
                        <i class="fa fa-trash fa-2x text-danger" 
                        data-bs-toggle="modal" 
                        data-bs-target="#exampleModal<?php echo $i['id']; ?>"> 
                        </i>
                        
                            <div class="modal fade" id="exampleModal<?php echo $i['id']; ?>" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <p>Êtes-vous sûr de vouloir supprimer ? </p>
                                            <div class="modal-footer">
                                                <a href="<?php echo $db; ?>.php">
                                                <button type="button" class="btn btn-primary" data-bas-dismiss="modal">Annuler</button>
                                                <a href="delete.php?id=<?php echo $i['id']; ?>&db=<?php echo $db; ?>">
                                                <button class="btn btn-danger" type="button">Confirmer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
    <script src="https://kit.fontawesome.com/6dc915a3c8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>