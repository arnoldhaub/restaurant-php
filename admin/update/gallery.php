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
            session_start();
            require ('../db.php');

            $id = $_GET['id'];
            $db = $_GET['db'];
            $selSql = "SELECT * FROM `$db` WHERE id=$id";
            $res = mysqli_query($conn, $selSql);
            $r = mysqli_fetch_assoc($res);

            if(isset($_POST) && empty($_FILES['image']['name']) && !empty($_POST['name'])){


                $name = $r['image'];
                list($txt, $ext) = explode(".", $name);
                $title = $_POST['name'];
                $image_name = $title.".".$ext;
                $date = $_POST['date'];

                rename('../upload/'.$name,'../upload/'.$image_name);

                $sql = "UPDATE `$db` 
                            SET name ='$title', 
                            image = '$image_name',
                            date = '$date' 
                            WHERE id=$id" ;

                    $conn->query($sql);
                
                
                    $_SESSION['success'] = 'Image Uploaded successfully.';
                    header("Location: /admin/$db.php");
                
                
                
            }
            elseif(isset($_POST) && empty($_FILES['image']['name']) && !empty($_POST['name'])){


                $name = $_FILES['image']['name'];
                list($txt, $ext) = explode(".", $name);
                $title = $_POST['name'];
                $image_name = $title.".".$ext;
                $tmp = $_FILES['image']['tmp_name'];
                $date = $_POST['date'];
                
                
                
                if(move_uploaded_file($tmp, '../upload/'.$image_name)){
                
                
                    $sql = "UPDATE `$db` 
                            SET name ='$title', 
                            image = '$image_name',
                            date = '$date' 
                            WHERE id=$id" ;

                    $conn->query($sql);
                
                
                    $_SESSION['success'] = 'Image Uploaded successfully.';
                    header("Location: /admin/$db.php");
                }
                else{
                    $_SESSION['error'] = 'image uploading failed';
                    header("Location: /admin/index.php");
                }
            }
            else{
                $_SESSION['error'] = 'Please Select Image or Write title';
                
            }
            

        ?>


            <form id="contactForm"  action="" method="post" enctype="multipart/form-data">

                <!-- Name input -->
                <div class="mb-3">
                    <label class="form-label" for="name">Titre le l'image</label>
                    <input class="form-control" id="name" name="name" type="text" value="<?php echo $r['name'] ?>"/>
                </div>
            
                <!-- Email address input -->
                <div class="mb-3">
                    <label class="form-label" for="image">Image</label>
                    <input class="form-control" id="image" name="image" type="file" /> 
                    <!-- src="/upload/<?php echo $r['image'] ?>" -->
                </div>
                <!-- Date input -->
                <div class="mb-3">
                    <label class="form-label" for="date">Date d'ajout</label>
                    <input class="form-control" type="input" id="date" name="date" value="<?php echo $r['date'] ?>" >
                </div>
            
                <!-- Message input -->
                <div class="mb-3">
                    <label class="form-label" for="preview">Aperçu</label>
                    <a data-fancybox="gallery" name="preview" class="thumbnail fancybox" rel="ligthbox" data-src="/upload/<?php echo $r['image'] ?>">
                        <img class="img-thumbnail" alt="" src="/upload/<?php echo $r['image'] ?>" />
                    </a>
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