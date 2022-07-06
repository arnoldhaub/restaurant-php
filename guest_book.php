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
              <p class="lead">C'est toujours un plaisir pour nous de recevoir vos retours et de pouvoir les partager au monde entier. Vous satisfaire a toujours été notre but premier, mais qui mieux que vous peut nous recommander et proposer un retour constructif après avoir dégustés un de nos mêts fait avec amour et passion ?</p>
            </div>
        </div>


        <hr class="mt-5">

        <!-- Wrapper container -->
        <div class="container col-md-9 py-4">

            <!-- Bootstrap 5 starter form -->
            <form id="contactForm"  action="insert.php" method="post" >
        
            <!-- Name input -->
            <div class="mb-3">
                <label class="form-label" for="name">Votre prénom</label>
                <input class="form-control" id="name" name="name" type="text" placeholder="Prénom et nom" required="required"/>
            </div>
        
            <!-- Email address input -->
            <div class="mb-3">
                <label class="form-label" for="emailAddress">Votre adresse mail</label>
                <input class="form-control" id="emailAddress" name="emailAddress" type="email" placeholder="Adresse mail" required="required"/>
            </div>
            <!-- Restaurant input -->
            <div class="mb-3">
                <label class="form-label" for="place">Le restaurant visité</label>
                <select class="form-control" id="place" name="place" required="required">
                    <option value="">Choisissez un de nos restaurants</option>
                    <option value="Bikini Bottom">Bikini Bottom</option>
                    <option value="Brussels Krusty">Brussels Krusty</option>
                    <option value="Parisian Krab">Parisian Krab</option>
                    <option value="Rusty Krab">The Rusty Krab</option>
                </select>
            </div>
            <!-- Date input -->
            <div class="mb-3">
                <label class="form-label" for="date">Date de votre visite</label>
                <input class="form-control" type="date" id="date" name="date" value="2022-07-04" min="2022-01-01" max="2022-12-31" required="required">
            </div>
        
            <!-- Message input -->
            <div class="mb-3">
                <label class="form-label" for="message">Votre message</label>
                <textarea class="form-control" id="message" type="text" name="message" placeholder="Message" style="height: 10rem;" required="required"></textarea>
            </div>
        
        
            <!-- Form submit button -->
            <div class="d-grid">
                <button class="btn btn-danger text-white btn-lg" id="submitButton" type="submit">Envoyez</button>
            </div>
        
            </form>
        
        </div>
        
        <!-- SB Forms JS -->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>