<!-- Done thanks to : https://www.itsolutionstuff.com/post/php-mysql-simple-image-gallery-crud-example-from-scratchexample.html -->
<?php
    require("../db.php");
    $sql = "SELECT * FROM gallery";
    $res = mysqli_query($conn,$sql);
    $db = "gallery";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Le Crabe Croustillant- Contact.</title>
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
    <style>
        .form-image-upload{
            background: #e8e8e8 ;
            padding: 15px;
            margin:auto;
            }    
    </style>
  </head>
  <body>
    <div class="site bg-white">
        <?php include 'nav.php' ?>

        <!--  TITRE PAGE + INFO -->

        <div class="jumbotron jumbotron-fluid my-5">
            <div class="container text-center">
              <h1 class="display-4">Administration - Galerie images</h1>
              <p class="lead">Page d'administration des images du site.</p>
            </div>
        </div>
        <hr class="mt-5">

        <!-- WEBSITE - CONTENT -->
            <!-- Formulaire ajout image -->
        <form action="/admin/image_upload.php" class="form-image-upload bg-light" method="POST" enctype="multipart/form-data">


        <?php if(!empty($_SESSION['error'])){ ?>
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    <li><?php echo $_SESSION['error']; ?></li>
                </ul>
            </div>
        <?php unset($_SESSION['error']); } ?>


        <?php if(!empty($_SESSION['success'])){ ?>
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong><?php echo $_SESSION['success']; ?></strong>
        </div>
        <?php unset($_SESSION['success']); } ?>


        <div class="row align-items-center">
            <div class="col-md-5">
                <strong>Titre :</strong>
                <input type="text" name="name" class="form-control" placeholder="Nom de l'image">
            </div>
            <div class="col-md-5">
                <strong>Image :</strong>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="col-md-2 ">
                <br>
                <button type="submit" class="btn btn-danger text-white btn-lg">Envoyez</button>
            </div>
        </div>
    </form> 

    <!-- Affichage images -->

        <table class="table table-striped my-3 text-center align-items-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Nom</th>
                    <th>Image</th>
                    <th>URL</th>
                    <th>Éditer</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody">
                <?php while($i = mysqli_fetch_assoc($res)) {
                ?>
                <tr>
                    <th scope="row"><?php echo $i['id']; ?></th>
                    <td><?php echo $i['date']; ?></td>
                    <td><?php echo $i['name']; ?></td>
                    <td><a data-fancybox="gallery" class="thumbnail fancybox" rel="ligthbox" data-src="/upload/<?php echo $i['image'] ?>">
                        <img class="img-thumbnail" alt="" src="/upload/<?php echo $i['image'] ?>" />
                        <!-- <?php echo "<img src='/upload/".$i['image']."' :>"; ?> -->
                    </td>
                    <td><?php echo $i['image']; ?></td>
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
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
  <script>
      // Customization example
      Fancybox.bind('[data-fancybox="gallery"]', {
        infinite: false
      });
</script>
</html>