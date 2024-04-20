<?php

session_start();

$language = "al";

if (isset($_SESSION["preferred_language"])) {
  $language = $_SESSION["preferred_language"];
} elseif (isset($_COOKIE["preferred_language"])) {

  $language = $_COOKIE["preferred_language"];
}


function setPreferredLanguage($lang)
{

  $_SESSION["preferred_language"] = $lang;

  setcookie("preferred_language", $lang, time() + (30 * 24 * 60 * 60), "/");
}


if (isset($_GET['lang'])) {
  $selected_language = $_GET['lang'];

  setPreferredLanguage($selected_language);

  header('Location: ' . $_SERVER['REQUEST_URI']);
  exit;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Anes Malit</title>

  <link rel="icon" href="img/favicon.png" type="image/png">
  <link rel="stylesheet" href="libs/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="libs/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="libs/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="libs/linericon/style.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/langstyle.css">
</head>

<body>
  <!--Pjesa e Header-->
  <header class="header_area">
    <div class="header-top">
      <div class="container">
        <div class="d-flex align-items-center">
          <div id="logo">
            <a href="index.html"><img src="img/logo1.png" style="height: 50px;" /></a>
          </div>
          <div class="ml-auto d-none d-md-block d-md-flex">
            <!--Language-->
            <div class="language-selection">
              <form action="save_language.php" method="POST">
                <label for="language">Zgjedh gjuhën:</label>
                <select name="language" id="language">
                  <option value="al">Shqip</option>
                  <option value="en">English</option>
                  <option value="fr">Français</option>
                </select>
                <button type="submit">Ruaj</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav">
              <?php if ($language === "fr") : ?>
                <li class="nav-item active <?php if ($currentPage === 'index.php')
                                              echo 'active'; ?>"><a class="nav-link" href="index.php">Accueil</a></li>
                <li class="nav-item <?php if ($currentPage === 'blog.php')
                                      echo 'active'; ?>"><a class="nav-link" href="blog.php">Blogue</a></li>
                <li class="nav-item <?php if ($currentPage === 'rreth-nesh.php')
                                      echo 'active'; ?>"><a class="nav-link" href="rreth-nesh.php">À propos de nous</a></li>
                <li class="nav-item <?php if ($currentPage === 'kontakt.php')
                                      echo 'active'; ?>"><a class="nav-link" href="kontakt.php">Contact</a></li>
                <li class="nav-item <?php if ($currentPage === 'tregimet.php')
                                      echo 'active'; ?>"><a class="nav-link" href="tregimet.php">Histoires</a></li>


              <?php elseif ($language === "al") : ?>
                <li class="nav-item active <?php if ($currentPage === 'index.php')
                                              echo 'active'; ?>"><a class="nav-link" href="index.php">Ballina</a></li>
                <li class="nav-item <?php if ($currentPage === 'blog.php')
                                      echo 'active'; ?>"><a class="nav-link" href="blog.php">Blogu</a></li>
                <li class="nav-item <?php if ($currentPage === 'rreth-nesh.php')
                                      echo 'active'; ?>"><a class="nav-link" href="rreth-nesh.php">Rreth nesh</a></li>
                <li class="nav-item <?php if ($currentPage === 'kontakt.php')
                                      echo 'active'; ?>"><a class="nav-link" href="kontakt.php">Kontakti</a></li>
                <li class="nav-item <?php if ($currentPage === 'tregimet.php')
                                      echo 'active'; ?>"><a class="nav-link" href="tregimet.php">Tregime</a></li>

              <?php else : ?>
                <li class="nav-item active <?php if ($currentPage === 'index.php')
                                              echo 'active'; ?>"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item <?php if ($currentPage === 'blog.php')
                                      echo 'active'; ?>"><a class="nav-link" href="blog.php">Blog</a></li>
                <li class="nav-item <?php if ($currentPage === 'rreth-nesh.php')
                                      echo 'active'; ?>"><a class="nav-link" href="rreth-nesh.php">About Us</a></li>
                <li class="nav-item <?php if ($currentPage === 'kontakt.php')
                                      echo 'active'; ?>"><a class="nav-link" href="kontakt.php">Contact</a></li>
                <li class="nav-item <?php if ($currentPage === 'tregimet.php')
                                      echo 'active'; ?>"><a class="nav-link" href="tregimet.php">Stories</a></li>

              <?php endif; ?>
            </ul>
          </div>

          <ul class="social-icons ml-auto">
            <li><a href="https://www.facebook.com/diellza.raqi.5"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://www.instagram.com/festina.mjeku/"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://twitter.com/AnesMalit"><i class="fab fa-twitter"></i></a></li>
          </ul>
        </div>
      </nav>
    </div>

    </div>
    </nav>
    </div>



  </header>

  <main class="site-main">

    <!--Pjesa e Banner-->
    <section class="home-banner-area" id="home">
      <div class="container h-100">
        <div class="home-banner">
          <div class="text-center">
            <h4>Eja me pa magjinë e natyrës!</h4>
            <h1>Përjetimi është personal</h1>
          </div>
        </div>
      </div>
    </section>


  </main>

  <?php

  $currentPage = basename($_SERVER['PHP_SELF']);
  ?>


  <form class="form-search form-search-position">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 gutters-19">
          <div class="form-group">
            <input class="form-control" type="text" placeholder="Shtyp fjalet kyçe..." required>
          </div>
        </div>
        <div class="col-lg-6 gutters-19">
          <div class="row">
            <div class="col-sm">
              <div class="form-group">
                <div class="form-select-custom">
                  <select name="" id="">
                    <option value="" disabled selected>Vështirësia</option>
                    <option value="E vështire">E vështire</option>
                    <option value="E lehtë">E lehtë</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm gutters-19">
              <div class="form-group">
                <div class="form-select-custom">
                  <select name="" id="">
                    <option value="" disabled selected>Aktiviteti</option>
                    <option value="Hiking">Hiking</option>
                    <option value="Sporte">Sporte</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm gutters-19">
          <div class="form-group">
            <div class="form-select-custom">
              <select name="" id="">
                <option value="" disabled selected>Data</option>
                <option value="Janar 2023">Janar 2023</option>
                <option value="Shkurt 2023">Shkurt 2023</option>
                <option value="Mars 2023">Mars 2023</option>
                <option value="Prill 2023">Prill 2023</option>
                <option value="Maj 2023">Maj 2023</option>
                <option value="Qershor 2023">Qershor 2023</option>
                <option value="Korrik 2023">Korrik 2023</option>
                <option value="Gusht 2023">Gusht 2023</option>
                <option value="Shtator 2023">Shtator 2023</option>
                <option value="Tetor 2023">Tetor 2023</option>
                <option value="Nentor 2023">Nentor 2023</option>
                <option value="Dhjetor 2023">Dhjetor 2023</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-sm gutters-19">
          <div class="form-group">
            <div class="form-select-custom">
              <select name="" id="">
                <option value="" disabled selected>Mosha</option>
                <option value="-18">-18</option>
                <option value="+18">+18</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-sm gutters-19">
          <div class="form-group">
            <div class="form-select-custom">
              <select name="" id="">
                <option value="" disabled selected>Pjesëmarrësit</option>
                <option value="Vetëm">Vetëm</option>
                <option value="Grup">Grup</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-lg-4 gutters-19">
          <div class="form-group">
            <button class="button button-form" type="submit" style="border-radius: 0; width: 290px;">KËRKO</button>
          </div>
        </div>

      </div>
    </div>
  </form>


  <section class="welcome">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 mb-4 mb-lg-0">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <?php
              // Define an array of image URLs
              $sliderImages = [
                "img/Rugove.jpg",
                "img/skijim.jpg",
                "img/Dimri.jpg"
              ];

              foreach ($sliderImages as $index => $image) :
              ?>
                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                  <img src="<?= $image ?>" class="d-block w-100" alt="Slider Image <?= $index ?>">
                </div>
              <?php endforeach; ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="welcome-content">
            <h2 class="mb-4"><span class="d-block">Mirë se vini</span> drejt eksplorimit</h2>
            <p>Nëse jeni një adhurues i natyrës të çfardo lloj bukurie të ashpër dhe të butë që ajo mundet të ketë dhe
              po kërkoni një pikënisje drejt kësaj sfide të re, atëhere gjendeni në vendin e duhur. </p>
            <p>Asnjëherë nuk është vonë dhe asnjëherë nuk është herët. Eja të shohësh se si ecim aty ku dielli ngroh
              lulet, e ujerat malet dhe fushat këndojn. </p>
            <a class="button button--active home-banner-btn mt-4" href="#">Më shumë</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div style="margin-left:625px;" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
    <img src="img/logomin.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
  </div>

  <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

  <section class="section-margin">
    <div class="container">
      <div class="section-intro text-center pb-80px">
        <div class="section-intro__style">

          <!--<div class="section-intro__style">
              <img src="img/logomin.png" alt style="width: 100px;">
            </div>-->
          <h2>Aktivitetet</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-explore">
              <div class="card-explore__img">
                <img class="card-img" src="img/Camping.jpg" alt="Kampingu">
              </div>
              <div class="card-body">
                <h3 class="card-explore__price">50€ <sub>/ 4 ditë</sub></h3>
                <h4 class="card-explore__title"><a href="blog.html">Kampingu në male</a></h4>
                <p>Mos u shqetëso për paisjet që të duhen apo transportin. Krejt cka te duhet është me u ba pjesë e
                  grupit
                  tonë. </p>
                <a class="card-explore__link" href="blog.html">Më shumë <i class="ti-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-explore">
              <div class="card-explore__img">
                <img class="card-img" src="img/Skijim.jpg" alt="Skijimi">
              </div>
              <div class="card-body">
                <h3 class="card-explore__price">20€ <sub>/ Një ditë</sub></h3>
                <h4 class="card-explore__title"><a href="blog.html">Skijimi</a></h4>
                <p>Mos u shqetëso për paisjet që të duhen apo transportin. Krejt cka te duhet është me u ba pjesë e
                  grupit
                  tonë. </p>
                <a class="card-explore__link" href="blog.html">Më shumë <i class="ti-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-explore">
              <div class="card-explore__img">
                <img class="card-img" src="img/Ciklizem.jpg" alt="Ciklizmi">
              </div>
              <div class="card-body">
                <h3 class="card-explore__price">10€ <sub>/ Një ditë</sub></h3>
                <h4 class="card-explore__title"><a href="blog.html">Ciklizmi</a></h4>
                <p>Mos u shqetëso për paisjet që të duhen apo transportin. Krejt cka te duhet është me u ba pjesë e
                  grupit
                  tonë. </p>
                <a class="card-explore__link" href="blog.html">Më shumë <i class="ti-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!--Pjesa e eventeve-->
  <section class="section-padding bg-porcelain">
    <div class="container">
      <div class="section-intro text-center pb-80px">
        <h2>Evente</h2>
      </div>
      <div class="special-img mb-30px">
        <img class="img-fluid" src="img/Fotonatyre3.jpg" alt="Foto e natyres">
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card card-special">
            <div class="media align-items-center mb-1">
              <span class="card-special__icon"><i class="ti-bell"></i></span>
              <div class="media-body">
                <h4 class="card-special__title">Maja e Musinces 1725m </h4>
              </div>
            </div>
            <div class="card-body">
              <p>Detajet e Organizimit dhe Rezervimit:
                Nisja: e Diel, 16.02.2023 / ora 07:00 Vendi i Nisjes:
                Para parkingut të RTV 21 Lloji i Transportit:
                Me Autobus Participimi për pjesëmarrje: 10 € (për person) Afati i Fundit për Rezervim: E Shtunë</p>
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card card-special">
            <div class="media align-items-center mb-1">
              <span class="card-special__icon"><i class="ti-bell"></i></span>
              <div class="media-body">
                <h4 class="card-special__title">Maja e Lubotenit <br>2498 m</h4>
              </div>
            </div>
            <div class="card-body">
              <p>Detajet e Organizimit dhe Rezervimit:
                Nisja: e Diel, 20.04.2023 / ora 07:00 Vendi i Nisjes:
                Para parkingut të RTV 21 Lloji i Transportit:
                Me Autobus Participimi për pjesëmarrje: 10 € (për person) Afati i Fundit për Rezervim: E Shtunë</p>
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card card-special">
            <div class="media align-items-center mb-1">
              <span class="card-special__icon"><i class="ti-bell"></i></span>
              <div class="media-body">
                <h4 class="card-special__title">Bjeshkët e Rusolisë</h4>
              </div>
            </div>
            <div class="card-body">
              <p>Detajet e Organizimit dhe Rezervimit:
                Nisja: e Diel, 16.02.2023 / ora 07:00 Vendi i Nisjes:
                Para parkingut të RTV 21 Lloji i Transportit:
                Me Autobus Participimi për pjesëmarrje: 10 € (për person) Afati i Fundit për Rezervim: E Shtunë</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--SVG-->
  <img src="img/face-smile.svg" alt="My Happy SVG" />


  <!--Pjesa e Footer-->
  <footer class="footer-area section-gap">
    <div class="container">
      <div class="row">
        <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
          <h4>Donatorët</h4>
          <ul>
            <li><a href="https://www.super-viva.com/">Super Viva</a></li>
            <li><a href="https://www.sabagroup.eu/">Saba Tours </a></li>
            <li><a href="https://www.raiffeisen-kosovo.com/">Raiffeisen Bank</a></li>
            <li><a href="https://rugove.eu/en/home-2/">Rugove</a></li>
          </ul>
        </div>
        <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
          <h4>Lidhjet</h4>
          <ul>
            <li><a href="https://theuiaa.org/">(UIAA)</a></li>
            <li><a href="https://www.scouts.org.uk/">(SCOUTS)</a></li>
            <li><a href="https://ifscc.org/">(IFSC)</a></li>
            <li><a href="https://www.bmumagazine.com/">(BMU)</a></li>
          </ul>
        </div>
        <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
          <h4>Kontakt</h4>
          <ul>
            <li><a href="tel:44367916">+383 44 367 916</a></li>
            <li><a href="mailto:AnesMAlit@gmail.com">AnesMalit@gmail.com</a></li>
            <li><a href="https://maps.google.com/maps?q=Lakrisht%C3%AB,%20Prishtin%C3%AB%2010000&t=k&z=13&ie=UTF8&iwloc=&output=embed">
                Anton Harapi, Nr 58, 10000 Prishtinë,</a></li>

          </ul>
        </div>
        <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
        </div>

      </div>
      <div class="footer-bottom row align-items-center text-center text-lg-left">
        <p class="footer-text m-0 col-lg-8 col-md-12">Copyright &copy; All rights reserved | FIEK</p>
        <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
          <a href="https://www.facebook.com/diellza.raqi.5"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.linkedin.com/in/festina-mjeku-02754722a/"><i class="fab fa-linkedin-in"></i></a>
          <a href="https://www.instagram.com/festina.mjeku/"><i class="fab fa-instagram"></i></a>
          <a href="https://twitter.com/AnesMalit"><i class="fab fa-twitter"></i></a>
        </div>
      </div>
    </div>
  </footer>


  <script src="libs/jquery/jquery-3.2.1.min.js"></script>
  <script src="libs/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>