<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta name="keywords" content="webstite, prijs, html, css, webdesign, thegoodsiteoflife, javascript, freelancer ">
    <meta name="description" content="Welkom bij the good SITE of life, de plek waar je jou website kan laten realiseren. U vraagt en wij maken!">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Home</title>
    <!--code voor de header-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!--cpde voor de header-->

<link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a  class="navbar-brand " href="#">The good SITE of life</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="html/werking.php">Hoe werkt het</a>
            <li class="nav-item">
              <a class="nav-link" href="html/prijs.php">Prijs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="html/contact.php">Contact</a>
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
            <div class=" carousel-caption">
              <h5>Prijs/kwaliteit</h5>
              <p>We gaan tot het uiterste voor jou site aan een mooie prijs</p>
            </div>
          </div>
          <div class="afb2 carousel-item" >
            <div class="carousel-caption ">
              <h5>Luisteren</h5>
              <p>Ons luisterend oor staat hier centraal, heeft u vragen neem gerust contact met ons op</p>
            </div>
          </div>
          <div class="afb3 carousel-item">
            <div class="carousel-caption">
              <h5>Geheime korting</h5>
                <p>Ga naar het tablad <a class="code" href="html/werking.php">hoe werkt het</a> om meer te weten over de geheime kortingscode</p>
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

    <!-- Page Content -->

    <section class="py-5 text-focus-in ">
      <div class="container">
        <h1 class="fw-light">Welkom</h1>
        <p class="text-light lead">Bij the good SITE of life, de plek waar jij jou perfecte website kunt creëren. <br>
          een plek waar we altijd voor jou klaarstaan. geen offerte gewoon een vaste prijs, We antwoorden binnen de 24 uur op jou mail of u kunt direct contact opemen via het mobiele nummer.
         u vraagt en wij maken! Omdat ik een freelancer ben probeer ik naast mijn vast werk <br> zoveel mogelijk tijd te steken in het realiseren van websites.</p>
         <h3 class="fw-light">Ons kenmerk</h3>
         <p class="text-light lead"> Wij luisteren naar wat jou eisen zijn en stoppen niet voor je jou droomsite hebt.<br>
         we gebruiken HTML en CSS zodat we tot in de kleinste detail uw website kunnen maken dit vraagt wat meer tijd maar voor resultaat <br>
          gaan we tot het uiterste.</p>
          <h3 class="fw-light">Nieuwsbrief</h3>
          <p  class="text-light lead">Schrijf je zeker in voor onze nieuwsbrief voor intressante weetjes, kortingen en meer! geen zorgen we steken je mailbox niet vol met spam, dit is hoogstens
          1 keer per maand. Zeker interessant voor klanten er zou zomaar in kunnen staan dat je een maand geen onderhoud moet betalen.</p>
      </div>
    </section>
    <footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Form -->
    <section class="">
      <form  class="contact-form" action="contactform.php" method="post">
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
  <div  class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    <p>© 2021 Copyright:
    <a class="text-white" href="https://www.thegoodsiteoflife.be/">the good SITE of life</a></p>
  </div>
</footer>
<div class="snowflakes" aria-hidden="true">
<div class="snowflake">
❅
</div>
<div class="snowflake">
❆
</div>
<div class="snowflake">
❅
</div>
<div class="snowflake">
❆
</div>
<div class="snowflake">
❅
</div>
<div class="snowflake">
❆
</div>
<div class="snowflake">
❅
</div>
<div class="snowflake">
❆
</div>
<div class="snowflake">
❅
</div>
<div class="snowflake">
❆
</div>
<div class="snowflake">
❅
</div>
<div class="snowflake">
❆
</div>
</div>
  </body>
</html>
