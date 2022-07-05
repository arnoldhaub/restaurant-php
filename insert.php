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
        
        <!-- Place aux recettes !!!  -->
        <div class="jumbotron jumbotron-fluid my-5">
            <div class="container text-center">
              <h1 class="display-4">Livre d'or - Votre avis nous intéresse !</h1>
              <p class="lead">C'est toujours un plaisir pour nous de recevoir vos retours et de pouvoir les partager au monde entier. Vous satisfaire a toujours été notre but premier, mais qui mieux que vous peut nous recommander et proposer un retour constructif apràs avoir dégustés un de nos mêts fait avec amour et passion ?</p>
            </div>
        </div>


        <hr class="mt-5">

        <!-- Wrapper container -->
        <div class="container col-md-9 py-4 text-center">
        <?php
 
            // Database information for connection
            $conn = mysqli_connect("localhost", "root", "root", "restaurant-php");
            
            // Check connection
            if($conn === false){
                die("ERROR: Could not connect. "
                    . mysqli_connect_error());
            }
            
            // Taking all 5 values from the form data(input)
            $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            $email = filter_var($_POST['emailAddress'], FILTER_SANITIZE_EMAIL);
            $place = $_POST['place'];
            $date = $_POST['date'];
            $message =filter_var($_POST['message'], FILTER_SANITIZE_STRING);
            
            // Performing insert query execution
            // here our table name is college
            $sql = "INSERT INTO guest_book  VALUES (NULL,'$name',
                '$email','$place','$date','$message')";
            
            if(mysqli_query($conn, $sql)){
                echo "<h3>Merci pour votre retour $name !</h3>"
                    . "<p>C'est toujours un plaisir de vous lire qu'importe votre expérience ! On espère vous revoir très bientôt :)</p>";

                echo nl2br("\n$name\n $email\n "
                    . "$place\n $date\n $message");
            } else{
                echo "ERROR: Hush! Sorry $sql. "
                    . mysqli_error($conn);
            }
            
            // Close connection
            mysqli_close($conn);
        ?>

 
        
        </div>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>