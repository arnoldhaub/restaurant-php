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
              <h1 class="display-4">Dites-nous bonjour !</h1>
              <p class="lead">Qu'importe la raison de votre message, nous adorons vous entendre, répondre à vos questions et tenter de mieux satisfaire.</p>
            </div>
        </div>


        <hr class="mt-5">

        <!-- Wrapper container -->
        <div class="container col-md-9 py-4">

            <!-- Bootstrap 5 starter form -->
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
        
            <!-- Name input -->
            <div class="mb-3">
                <label class="form-label" for="name">Votre prénom</label>
                <input class="form-control" id="name" type="text" placeholder="Prénom et nom" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="name:required">Vous avez oublié d'entrer votre nom et votre prénom.</div>
            </div>
        
            <!-- Email address input -->
            <div class="mb-3">
                <label class="form-label" for="emailAddress">Votre adresse mail</label>
                <input class="form-control" id="emailAddress" type="email" placeholder="Adresse mail" data-sb-validations="required, email" />
                <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Vous avez oublié d'entrer votre adresse mail.</div>
                <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Votre adresse n'est pas valide. :(</div>
            </div>
        
            <!-- Message input -->
            <div class="mb-3">
                <label class="form-label" for="message">Votre message</label>
                <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
                <div class="invalid-feedback" data-sb-feedback="message:required">Vous avez oublié d'écrire votre message.</div>
            </div>
        
            <!-- Form submissions success message -->
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">Votre message a bien été envoyé ! Merci pour vos mots !</div>
            </div>
        
            <!-- Form submissions error message -->
            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Une erreur s'est glissée. Rééssayer pour voir ? :)</div>
            </div>
        
            <!-- Form submit button -->
            <div class="d-grid">
                <button class="btn btn-danger text-white btn-lg disabled" id="submitButton" type="submit">Envoyez</button>
            </div>
        
            </form>
        
        </div>
        
        <!-- SB Forms JS -->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>