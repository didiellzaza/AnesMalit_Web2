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

  <style>
    #div1,
    #div2 {
      float: left;
      width: 100px;
      height: 35px;
      margin: 10px;
      padding: 10px;
      border: none;
    }
  </style>
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

          </div>
        </div>
      </div>
    </div>


    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav">
              <li class="nav-item active"><a class="nav-link" href="index.html">Ballina</a></li>
              <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
              <li class="nav-item"><a class="nav-link" href="rreth-nesh.html">Rreth Nesh</a></li>
              <li class="nav-item"><a class="nav-link" href="kontakt.html">Kontakt</a></li>
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
                "img/vjeshta.jpg",
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
            <p>Nëse jeni një adhurues i natyrës të çfardo lloj bukurie të ashpër dhe të butë që ajo mundet të ketë dhe po kërkoni një pikënisje drejt kësaj sfide të re, atëhere gjendeni në vendin e duhur. </p>
            <p>Asnjëherë nuk është vonë dhe asnjëherë nuk është herët. Eja të shohësh se si ecim aty ku dielli ngroh lulet, e ujerat malet dhe fushat këndojn. </p>
            <a class="button button--active home-banner-btn mt-4" href="#">Më shumë</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <form class="form-search form-search-position">
    <!-- Form content -->
  </form>

  <section class="section-margin">
    <!-- Card content -->
  </section>

  <section class="section-padding bg-porcelain">
    <!-- Event content -->
  </section>

  <!--SVG-->
  <img src="img/face-smile.svg" alt="My Happy SVG" />

  <!--Pjesa e Footer-->
  <footer class="footer-area section-gap">
    <!-- Footer content -->
  </footer>

  <script src="libs/jquery/jquery-3.2.1.min.js"></script>
  <script src="libs/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="js/m