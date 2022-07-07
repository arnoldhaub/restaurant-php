<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Le Crabe Croustillant- Contact.</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="site bg-white">
      <?php include 'nav.php' ?>
        <!--  INTRODUCTION A LA PAGE -->
        
        <div class="jumbotron jumbotron-fluid my-5">
            <div class="container text-center">
              <h1 class="display-4">Dites-nous bonjour !</h1>
              <p class="lead">Qu'importe la raison de votre message, nous adorons vous entendre, répondre à vos questions et tenter de mieux satisfaire.</p>
            </div>
        </div>


        <hr class="mt-5"> 

        <!-- WEBSITE - Container -->
        <div class="container col-md-9 py-4">
          <div class="bg-light text-center text-secondary">
            <?php
              if (isset($_POST) & !empty($_POST)) {
                require_once("db.php");
                // Taking all 3 values from the form data(input)
                $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
                date_default_timezone_set('Europe/Brussels');
                $date = date('Y-m-d h:i:s');
                $email = filter_var($_POST['emailAddress'], FILTER_SANITIZE_EMAIL);
                $message =filter_var($_POST['message'], FILTER_SANITIZE_STRING);
                
                // Performing insert query execution
                // here our table name is college
                $sql = "INSERT INTO contact  VALUES (NULL,'$date','$name',
                    '$email','$message')";
                
                if(mysqli_query($conn, $sql)){
                    echo "<h3>Merci pour votre message $name !</h3>"
                        . "<p>On vous répondra le plus rapidement possible ! </p>";

                    echo nl2br("<h4>Récapitulatif :</h4><p><b>Nom : </b>$name\n <b>Adresse mail :</b> $email\n "
                        . "<p><b> Votre message : </b>\n$message</p>");

                        $buttonStatut = true;
                } else{
                    echo "ERROR: Hush! Sorry $sql. "
                        . mysqli_error($conn);
                }
                
                // Close connection
                mysqli_close($conn);
                }
            ?>
          </div>

            <!-- CONTACT - FORM-->
            <form id="contactForm" action="" method="post">
        
            <!-- Name input -->
            <div class="mb-3">
                <label class="form-label" for="name">Votre prénom</label>
                <input class="form-control" id="name" name="name" type="text" placeholder="Prénom et nom" required="required" />
                <div class="invalid-feedback" data-sb-feedback="name:required">Vous avez oublié d'entrer votre nom et votre prénom.</div>
            </div>
        
            <!-- Email address input -->
            <div class="mb-3">
                <label class="form-label" for="emailAddress">Votre adresse mail</label>
                <input class="form-control" id="emailAddress" name="emailAddress" type="email" placeholder="Adresse mail" required="required" />
                <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Vous avez oublié d'entrer votre adresse mail.</div>
                <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Votre adresse n'est pas valide. :(</div>
            </div>
        
            <!-- Message input -->
            <div class="mb-3">
                <label class="form-label" for="message">Votre message</label>
                <textarea class="form-control" id="message" name="message" type="text" placeholder="Message" style="height: 10rem;" required="required"></textarea>
                <div class="invalid-feedback" data-sb-feedback="message:required">Vous avez oublié d'écrire votre message.</div>
            </div>
        
        
            <!-- Form submit button -->
            <div class="d-grid">
                <button class="btn btn-danger text-white btn-lg <?php if ($buttonStatut == true) echo'disabled'; ?>" id="submitButton" type="submit">Envoyez</button>
            </div>
        
            </form>
        
        </div>
        
        <!-- SB Forms JS -->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>