<div class="jumbotron jumbotron-fluid my-5">
            <div class="container text-center">
              <h1 class="display-4">Galerie - Modification.</h1>
              <p class="lead">Modification des informations entrées dans la galerie.</p>
            </div>
        </div>


        <hr class="mt-5">

        <!-- WEBSITE Content- container -->
        <div class="container col-md-9 py-4">
            <?php if (isset($erreur)) { ?>
            <div class="alert alert-danger" role="alert">
            <?php echo $erreur; ?>
            </div> <?php } ?>

            <?php 

            require_once ('../db.php');

            $id = $_GET['id'];
            $db = $_GET['db'];
            $selSql = "SELECT * FROM `$db` WHERE id=$id";
            $res = mysqli_query($conn, $selSql);
            $r = mysqli_fetch_assoc($res);

            if (isset($_POST) & !empty($_POST)) {
                $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
                $image = filter_var($_POST['emailAddress'], FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED);
                $date = $_POST['date'];

                $UpdateSql = "UPDATE `$db` SET name='$name',  image='$image', date='$date'  WHERE id=$id ";

                $res = mysqli_query($conn, $UpdateSql);
                if ($res) {
                header("location: $db.php");
                }else{
                $erreur = "la mise à jour a échoué.";
                }
            }

        ?>

            <form id="contactForm"  action="" method="post" >
        
                <!-- Name input -->
                <div class="mb-3">
                    <label class="form-label" for="name">Titre le l'image</label>
                    <input class="form-control" id="name" name="name" type="text" value="<?php echo $r['name'] ?>"/>
                </div>
            
                <!-- Email address input -->
                <div class="mb-3">
                    <label class="form-label" for="image">Image</label>
                    <input class="form-control" id="image" name="image" type="file"  value="<?php echo $r['image'] ?>"/>
                </div>
                <!-- Date input -->
                <div class="mb-3">
                    <label class="form-label" for="date">Date d'ajout</label>
                    <input class="form-control" type="input" id="date" name="date" value="<?php echo $r['date'] ?>" >
                </div>
            
                <!-- Message input -->
                <div class="mb-3">
                    <label class="form-label" for="preview">Aperçu</label>
                    <a data-fancybox="gallery" name="preview" class="thumbnail fancybox" rel="ligthbox" data-src="/upload/<?php echo $i['image'] ?>">
                        <img class="img-thumbnail" alt="" src="/upload/<?php echo $i['image'] ?>" />
                </div>
            
            
                <!-- Form submit button -->
                <div class="d-grid">
                    <button class="btn btn-danger text-white btn-lg" id="submitButton" type="submit">Envoyez</button>
                </div>
                <!-- back button -->
                
            
            </form>
            <div class="d-grid text-center mt-3">
                <a href="<?php echo $db.'.php' ?>">
                    <button class="btn btn-light text-secondary btn-lg">Retourner à la page précédente</button>
                 </a>
            </div>