<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Le Crabe Croustillant.</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  <div class="site bg-white">
        <!-- MENU - début -->
        <div id="menu" class="row sticky-top bg-dark justify-content-around">
            <nav class="col-lg-12  navbar navbar-expand-lg px-5 ">
                <div class="container-fluid">
                  <a class="navbar-brand tex" href="index.html"><img src="img/logo.png" alt="logo"></a>
                  <button class="navbar-toggler bg-white" style="--bs-bg-opacity: .2;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Accueil</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-secondary" href="menu.php">Notre menu</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-secondary" href="pictures.php">Les coulisses</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-secondary" href="restaurants.php">Le restaurant</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-secondary" href="guest_book.php">Le livre d'or</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-secondary" href="contact.php">Contactez-nous!</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-secondary" href="./admin/">Admin</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
        <!-- MENU - fin -->
        <!--  Un Jumbotron comme entrée ? - BIENVENUE -->
        <div id="head" class="row justify-content-around text-center " >
          <div class="jumbotron col-lg-6 my-5 p-5 bg-light rounded-4" style="--bs-bg-opacity: .7;">
              <h1 class="display-4 ">Le Crabe Croustillant, vous ouvre ses portes!</h1>
              <p class="lead mt-5">Découvrez l'univers culinaire qui se cache sous la mer à travers la spatule de notre cuisinier et artiste Patrick, chef étoilé, 4ème dan, ceinture multicolore en art culinaire.</p>
              <hr class="my-4 ">
              <p>Laissez-vous tenter par nos menus aux saveurs nouvelles, fraiches, uniques et intemporelles.</p>
              <p class="lead" >
                <a class="btn btn-warning text-white btn-lg"  href="menu.html" role="button">Découvrir notre menu croustillant</a>
              </p>
          </div>
        </div>
        <!-- EVENEMENT - début  -->


        <div class="jumbotron jumbotron-fluid text-center my-5">
          <div class="container">
            <h1 class="display-4 p-1 border-bottom rounded-4 text-danger" >Nos évènements spéciaux</h1>
            <p class="lead p-3 mt-3 text-center bg-light rounded-4">Vous aussi vous aimez casser la routine ? <br>Rejoignez-nous durant nos évènements spéciaux, vous découvrirez une nouvelle carte, un décor repensé ainsi qu'une ambiance à donner envie de revenir.</p>
          </div>
      </div>

        <div class="jumbotron jumbotron-fluid text-center my-5 row-md-6" height="500px">
          <div class="container">
            <div id="carousel" class="carousel slide" data-bs-ride="false">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/champetreSmall.jpg" alt="First slide">
              <div class="carousel-caption p-5 bg-light rounded-4 text-dark" style="--bs-bg-opacity: .7;">
                <h5>Diner champêtre</h5>
                <p>Rédécouvrez avec nous les plaisirs simples du diner champêtre remis au goût du jour par notre chef étoilé, Patrick.</p>
                <a href="#" class="btn btn-warning text-white d-flex justify-content-center ">Réserver</a>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/sauvageSmall.jpg" alt="Second slide">
              <div class="carousel-caption p-5 bg-light rounded-4 text-dark" style="--bs-bg-opacity: .7;">
                <h5>À l'état sauvage</h5>
                <p>Éveiller le chasseur-cueilleur qui sommeille en vous. Notre chef Patrick revisite l'art culinire en aliant le côté sauvage, brûte avec une touche raffinée et équilibrée offrant des mêts de qualités, de caractères et explosifs. </p>
                <a href="#" class="btn btn-warning text-white d-flex justify-content-center ">Réserver</a>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>



<!--         VERSION 1 - Jumbotron
          

        <div class="row justify-content-around ">

            <div class="card col-md-5 p-3 border-white">
                <img src="img/champetre.jpg" class="card-img-top" alt="Diner champêtre / image">
                <div class="card-body">
                <h5 class="card-title">Diner champêtre</h5>
                <p class="card-text">Rédécouvrez avec nous les plaisirs simples du diner champêtre remis au goût du jour par notre chef étoilé, Patrick.</p>
                <a href="#" class="btn btn-warning text-white d-flex justify-content-center">Réserver</a>
                </div>
            </div>

            <div class="card col-md-5 p-3 border-white">
                <img src="img/sauvage.jpg" class="card-img-top" alt="À l'état sauvage / image">
                <div class="card-body">
                <h5 class="card-title">À l'état sauvage</h5>
                <p class="card-text">Éveiller le chasseur-cueilleur qui sommeille en vous. Notre chef Patrick revisite l'art culinire en aliant le côté sauvage, brûte avec une touche raffinée et équilibrée offrant des mêts de qualités, de caractères et explosifs. </p>
                <a href="#" class="btn btn-warning text-white d-flex justify-content-center ">Réserver</a>
                </div>
            </div>
        </div> -->
        <!-- EVENEMENT - fin  -->

        <!-- RECETTES - début  -->
        <div class="jumbotron jumbotron-fluid my-5">
            <div class="container text-center">
              <h1 class="display-4 p-1 border-bottom rounded-4 text-danger">Envie de surpasser notre chef ?</h1>
              <div class="bg-light lead p-3 mt-3 rounded-4">
                <p class="lead ">Nous vous avons entendus. Comment rester insensible à votre envie d'emmener chez vous notre art culinaire ? Notre chef, Patrick, s'est demené pour vous offrir, en de simples recettes, facilement concoctables, légères et raffinées, ses oeuvres d'art.</p>
                <p class="lead">À votre tour de mettre la main à la pâte !</p></div>
            </div>
        </div>
        <!-- RECETTES - Première  -->
        <div class="row justify-content-around">
            <div class="card mb-3 col-md-10 border-white">
                <div class="row g-0 vertical-center">
                    <div class="col-md-4">
                        <img src="img/leradin.jpg" class="img-fluid border border-3 rounded-4" alt="Burger - Le radin / image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-5">
                            <h5 class="card-title">Le Radin - le burger qu'on ne partage pas.</h5>
                            <p class="card-text">Notre burger, aux saveurs de la mer, un régale si incroyable qu'il fera de vous un radin, incapable de partager un bout. Une telle recette ne se partage normalement pas, mais pour vous, nous sommes prêts à tout !</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RECETTES - deuxième  -->

            <div class="card mb-3 col-md-10  border-white bg-light rounded-4">
                <div class="row g-0 vertical-center">
                <div class="col-md-4 order-md-2">
                    <img src="img/leCroustillant.jpg" class="img-fluid border border-3 rounded-4" alt="Croustillon - Le croustillant / image">
                </div>
                <div class="col-md-8">
                    <div class="card-body p-5">
                    <h5 class="card-title">Le Croustillant - les papilles en redemandent.</h5>
                    <p class="card-text">Laissez-vous tenter par cette recette novatrice. Elle vous menera en des lieux culinaires entièrement inconnus. Qui aurait-cru qu'un croustillon puisse ramener l'homme à la vie, les papilles à ne plus désirer de s'arrêter de manger ?</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                </div>
            </div>

            <!-- RECETTES - Troisième  -->

            <div class="card mb-3 col-md-10 border-white ">
                <div class="row g-0 vertical-center">
                <div class="col-md-4">
                    <img src="img/laTruite.jpg" class="img-fluid border border-3 rounded-4" alt="La Truite / image">
                </div>
                <div class="col-md-8">
                    <div class="card-body p-5">
                    <h5 class="card-title">La Truite - le poisson qui vous donne envie de plonger.</h5>
                    <p class="card-text">Une recette qui revisite entièrement la truite. Une chose est sûre, vous aurez envie de vous mettre à la pêche, vous nourrir exclusivement de poisson et ce, dès la première bouchée.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- RECETTES - fin  -->

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>