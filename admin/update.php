<?php 

require_once ('../db.php');

  $id = $_GET['id'];
  $selSql = "SELECT * FROM `guest_book` WHERE id=$id";
  $res = mysqli_query($conn, $selSql);
  $r = mysqli_fetch_assoc($res);

  if (isset($_POST) & !empty($_POST)) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['emailAddress'], FILTER_SANITIZE_EMAIL);
    $place = $_POST['place'];
    $date = $_POST['date'];
    $message =filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    $UpdateSql = "UPDATE `guest_book` SET name='$name',  mail='$email', place='$place', date='$date', message='$message'  WHERE id=$id ";

    $res = mysqli_query($conn, $UpdateSql);
    if ($res) {
      header("location: guest_book.php");
    }else{
      $erreur = "la mise à jour a échoué.";
    }
  }

 ?>
 

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Le Crabe Croustillant- Administration.</title>
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
              <h1 class="display-4">Le livre d'or - Modification.</h1>
              <p class="lead">Modification des informations entrées dans le livre d'or.</p>
            </div>
        </div>


        <hr class="mt-5">

        <!-- Wrapper container -->
        <div class="container col-md-9 py-4">
            <?php if (isset($erreur)) { ?>
            <div class="alert alert-danger" role="alert">
            <?php echo $erreur; ?>
            </div> <?php } ?>

            <form id="contactForm"  action="" method="post" >
        
        <!-- Name input -->
        <div class="mb-3">
            <label class="form-label" for="name">Votre prénom</label>
            <input class="form-control" id="name" name="name" type="text" placeholder="Prénom et nom" value="<?php echo $r['name'] ?>"/>
        </div>
    
        <!-- Email address input -->
        <div class="mb-3">
            <label class="form-label" for="emailAddress">Votre adresse mail</label>
            <input class="form-control" id="emailAddress" name="emailAddress" type="email" placeholder="Adresse mail" value="<?php echo $r['mail'] ?>"/>
        </div>
        <!-- Restaurant input -->
        <div class="mb-3">
            <label class="form-label" for="place">Le restaurant visité</label>
            <select class="form-control" id="place" name="place" required="required">
                <option value="">Choisissez un de nos restaurants</option>
                <option value="Bikini Bottom" <?php if($r['place'] == 'Bikini Bottom'){ echo "selected";} ?>>Bikini Bottom</option>
                <option value="Brussels Krusty" <?php if($r['place'] == 'Brussels Krusty'){ echo "selected";} ?>>Brussels Krusty</option>
                <option value="Parisian Krab" <?php if($r['place'] == 'Parisian Krab'){ echo "selected";} ?>>Parisian Krab</option>
                <option value="Rusty Krab" <?php if($r['place'] == 'Rusty Krab'){ echo "selected";} ?>> The Rusty Krab</option>
            </select>
        </div>
        <!-- Date input -->
        <div class="mb-3">
            <label class="form-label" for="date">Date de votre visite</label>
            <input class="form-control" type="date" id="date" name="date" value="<?php echo $r['date'] ?>" min="2022-01-01" max="2022-12-31" required="required">
        </div>
    
        <!-- Message input -->
        <div class="mb-3">
            <label class="form-label" for="message">Votre message</label>
            <textarea class="form-control" id="message" type="text" name="message" placeholder="Message" style="height: 10rem;" required="required"><?php echo $r['message'] ?></textarea>
        </div>
    
    
        <!-- Form submit button -->
        <div class="d-grid">
            <button class="btn btn-danger text-white btn-lg" id="submitButton" type="submit">Envoyez</button>
        </div>
    
        </form>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>