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
  <title>Anes Malit - Rreth Nesh</title>

  <link rel="icon" href="img/favicon.png" type="image/png">
  <link rel="stylesheet" href="libs/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="libs/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="libs/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="libs/linericon/style.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/langstyle.css">

  <style>
    .video {
      width: 100%;
    }

    table {
      border-collapse: collapse;
      width: 850px;
      margin-top: 25px;
      margin-bottom: 100px;
    }

    th,
    td {
      padding: 8px;
      text-align: center;
      border-bottom: 1px solid #fff;
    }

    tr:hover {
      background-color: #eebc4c;
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

                <!--.-->
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
  </header>

  <!--Pjesa e Banner-->
  <section class="rrethnesh-banner-area" id="about">
    <div class="container h-100">
      <div class="rrethnesh-banner">
        <div class="text-center">
          <h1>Rreth nesh</h1>
        </div>
      </div>
    </div>
  </section>
  <!--.-->

  <!--Pjesa kryesore Kush jemi ne-->

  <section class="welcome">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 mb-4 mb-lg-0">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <?php
              // Define an array of image paths
              $imagePaths = [
                "img/Rugove.jpg",
                "img/Vera.jpg",
                "img/Camping.jpg"
              ];

              // Iterate through the image paths
              foreach ($imagePaths as $index => $imagePath) {
                // Add 'active' class to the first item
                $activeClass = $index === 0 ? 'active' : '';
                echo '<div class="carousel-item ' . $activeClass . '">
                      <img src="' . $imagePath . '" class="d-block w-100" alt="Slider Image ' . $index . '">
                    </div>';
              }
              ?>
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
            <h2 class="mb-4"><span class="d-block">Kush jemi ne?</span></h2>
            <p>AnesMalit është një OJQ e përkushtuar për promovimin e Kosovës dhe Shqipërisë si destinacione për ecje
              dhe ekoturizëm për vizitorët ndërkombëtarë dhe vendasit.</p>
            <p>Qofshit një entuziast me përvojë i natyrës apo dikush thjesht i etur për të filluar eksplorimin,
              AnesMalit është këtu për të ndihmuar në lidhjen e të gjithëve me gjithçka që kanë për të ofruar trojet
              shqiptare.</p>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Pjesa e videos-->
  <div style="display:flex; justify-content: center;">
    <video controls autoplay style="width:960px;">
      <source src="bjeshka-e-preilepit-bjeshket-e-nemuna-kosove-easysave.net.mp4" type="video/mp4">
    </video>
  </div>

  <!--Pjesa e stafit-->
  <section class="testimonials">
    <h2 style="margin-bottom:30px;">Stafi</h2>

    <?php
    // Staff comments array
    $staffComments = array(
      array(
        'name' => 'Diellza',
        'comment' => '“Nese mendon se aventura eshte e rrezikshme, provo rutinen, eshte vdekjeprurese.”'
      ),
      array(
        'name' => 'Rina',
        'comment' => '“Nëse vërtet e do natyrën, ti mund të gjesh bukurinë e saj kudo”.'
      ),
      array(
        'name' => 'Festina',
        'comment' => 'You can\'t climb up a mountain with downhill thoughts!'
      )
    );


    function sortByStaffName($a, $b)
    {
      return strcmp($a['name'], $b['name']);
    }


    usort($staffComments, 'sortByStaffName');


    foreach ($staffComments as $staff) {
      echo '<div class="testimonial-col" style="margin-left: 60px;width: 960px;">';
      echo '<img src="img/' . strtolower(str_replace(' ', '', $staff['name'])) . '.jpg">';
      echo '<div>';
      echo '<p>' . $staff['comment'] . '</p>';
      echo '<h4 style="color: #004034;">' . $staff['name'] . '</h4>';
      echo '</div>';
      echo '</div>';
    }
    ?>
  </section>

  <!--Tabela per majat e shkelura-->
  <h2 style="display:flex; justify-content: center;">Majat e shkelura</h2>
  <div style="display:flex; justify-content: center;">
    <table>
      <tr>
        <th>Maja</th>
        <th>Lartesia</th>
      </tr>
      <tr>
        <td>Rudoke</td>
        <td>2658m</td>
      </tr>
      <tr>
        <td>Gjeravice</td>
        <td>2656m</td>
      </tr>
      <tr>
        <td>Luboten</td>
        <td>2498m</td>
      </tr>
      <tr>
        <td>Pogled</td>
        <td>2154m</td>
      </tr>
    </table>
  </div>

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
            <li><a href="#">+383 44 367 916</a></li>
            <li><a href="mailto:AnesMAlit@gmail.com">AnesMalit@gmail.com</a></li>
            <li><a href="https://maps.google.com/maps?q=Lakrisht%C3%AB,%20Prishtin%C3%AB%2010000&t=k&z=13&ie=UTF8&iwloc=&output=embed">
                Lakrishte, Prishtine</a></li>

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

</body>

</html>