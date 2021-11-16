<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>gevorderd</title>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="../css/style.css">


  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a  class="navbar-brand " href="../index.php">The good SITE of life</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../html/werking.php">Hoe werkt het</a>

            <li class="nav-item">
              <a class="nav-link" href="../html/prijs.php">Prijs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../html/contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header>

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="afb1 carousel-item active">
            <div class="carousel-caption">
              <h5>Prijs/kwaliteit</h5>
              <p>We gaan tot het uiterste voor jou site aan een mooie prijs</p>
            </div>
          </div>
          <div class="afb2 carousel-item" >
            <div class="carousel-caption">
              <h5>Luisteren</h5>
              <p>Ons luisterend oor staat hier centraal, heeft u vragen neem gerust contact met ons op</p>
            </div>
          </div>
          <div class="afb3 carousel-item">
            <div class="carousel-caption">
              <h5>Geheime korting</h5>
                <p>Ga naar het tablad <a class="code" href="../html/werking.php">hoe werkt het</a> om meer te weten over de geheime kortingscode</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Vorige</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Volgende</span>
        </button>
      </div>
    </header>

<section class="py-5 text-focus-in ">
<div class="container">
<div class="basis text-light">
  <h3 class="fw-light">Gevorderd</h3>
  <h4 class="fw-light">Wat houd het in?</h4>
  <ul>
    <li>tot 10 pagina's</li>
    <li>E-mail verkeer</li>
    <li>html,css en javascript(beperkt) </li>
    <li>compatibel op smartphones</li>
    <li>Gratis reclame (wij maken reclame voor jou pagina)</li>
    <li>4 maanden gratis onderhoud</li>
  </ul>
  <p>Voor uw website effectief online wilt laten zetten door ons komt er nog 55 euro per jaar bij, maar als u liever heeft mag u ook natuurlijk zelf een provider zoeken. <br>
  En voor onderhoud komt er nog 30euro/maand bij.</p>
</div>
<fieldset>
  <form action="../php/prijzen.php" method="post">
    <div  class="form-group">
      <label for="naam">Uw Naam + Voornaam</label>
      <input type="text" name="name" class="form-control" id="naam" placeholder="Naam + Voornaam">
    </div>
    <div class="form-group">
      <label for="email">Email adres</label>
      <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="E-mail">
      <small id="emailHelp" class="form-text text-dark">We delen nooit jou email! dit is enkel voor in contact te komen.</small> <br>
    </div>
    <div class="form-group">
      <label for="nummer">Gsm/Telefoonnummer</label>
      <input type="text" name="nummer" class="form-control" id="nummer" placeholder="Nummer">
    </div> <br>
    <div>
    Geef een bescrijving hoe jou droomsite eruit moet zien.<br>

    <textarea class="container" name="beschrijving" rows="8" cols="80" placeholder="Een korte beschrijving is goed zodat we al een basis kunnen maken. Hierna nemen we nog contact met u op."></textarea>
    </div> <br>
    <div class="form-group">
      <label for="Korting">Eventuele kortingscode</label>
      <input type="text" name="Korting" id="Korting" class="form-control" placeholder="Kortingscode">
    </div>
    <br>
    <div class="form-group">
      Wilt u het door ons online laten zetten of zelf?
      <div class="form-check">
        <input type="checkbox" name="online" class="form-check-input" id="online">
        <label class="form-check-label"  for="online">Online (extra: 55euro/jaar)</label>
      </div>
      <div class="form-check">
        <input type="checkbox" name="niet-online" class="form-check-input" id="online">
        <label class="form-check-label" for="online">Zelf doen (geen extra kosten)</label>
      </div>
        </div> <br>

        <div class="form-group">
          Onderhoud door ons gedaan?
          <div class="form-check">
            <input type="checkbox" name="onderhoud-ja" class="form-check-input" id="contact">
            <label class="form-check-label"  for="contact">ja (extra: 30euro/jaar) </label>
          </div>
          <div class="form-check">
            <input type="checkbox" name="onderhoud-nee" class="form-check-input" id="contact">
            <label class="form-check-label" for="contact">nee</label>
          </div>
        </div> <br>

  <div class="form-group">
    Hoe wil je dat we met je in contact komen?
    <div class="form-check">
      <input type="checkbox" name="mail" class="form-check-input" id="contact">
      <label class="form-check-label"  for="contact">mail</label>
    </div>
    <div class="form-check">
      <input type="checkbox" name="gsm" class="form-check-input" id="contact">
      <label class="form-check-label" for="contact">gsm</label>
    </div>
  </div> <br>

    <button type="submit" name="submit" class="btn btn-primary">bevestigen</button>
  </form>
</fieldset>
</div>
</section>




    <footer class="bg-dark text-center text-white">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Form -->
        <section class="">
          <form class="contact-form" action="../contactform.php" method="post">
            <!--Grid row-->
            <div class="row d-flex justify-content-center">
              <!--Grid column-->
              <div class="col-auto">
                <p class="pt-2">
                  <strong>Registreer je voor onze nieuwsbrief</strong>
                </p>
              </div>
              <div class="col-md-5 col-12">
                <div class="form-outline form-white mb-4">
                  <input type="email" name="nieuwsbrief" id="form5Example29" class="form-control" />
                  <label class="form-label" for="form5Example29">Email address</label>
                </div>
              </div>

              <div class="col-auto">

                <button type="submit" name="submit" class="btn btn-outline-light mb-4">
                  Inschrijven
                </button>
              </div>
            </div>
          </form>
        </section>
      </div>
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-white" href="https://www.thegoodsiteoflife.be/">the good SITE </a>
      </div>
    </footer>
      </body>
    </html>
