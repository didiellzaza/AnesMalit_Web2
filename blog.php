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
    <title>Anes Malit - Blog</title>

    <link rel="icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="libs/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="libs/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="libs/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="libs/linericon/style.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/langstyle.css">

</head>

<body>
    <!-- Pjesa e Header -->
    <header class="header_area">
        <div class="header-top">
            <div class="container">
                <div class="d-flex align-items-center">
                    <div id="logo">
                        <a href="index.html"><img src="img/logo1.png" alt="" title="" style="height: 50px;" /></a>
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
<<<<<<< Updated upstream
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
=======
                        <?php if ($language === "fr"): ?>
                <li class="nav-item <?php if ($currentPage === 'index.php')
                  echo 'active'; ?>"><a class="nav-link" href="index.php">Accueil</a></li>
                <li class="nav-item active <?php if ($currentPage === 'blog.php')
                  echo 'active'; ?>"><a class="nav-link" href="blog.php">Blogue</a></li>
                <li class="nav-item <?php if ($currentPage === 'rreth-nesh.php')
                  echo 'active'; ?>"><a class="nav-link" href="rreth-nesh.php">À propos de nous</a></li>
                <li class="nav-item <?php if ($currentPage === 'kontakt.php')
                  echo 'active'; ?>"><a class="nav-link" href="kontakt.php">Contact</a></li>
                <li class="nav-item <?php if ($currentPage === 'tregimet.php')
                  echo 'active'; ?>"><a class="nav-link" href="tregimet.php">Histoires</a></li>

<!--.-->
              <?php elseif ($language === "al"): ?>
                <li class="nav-item <?php if ($currentPage === 'index.php')
                  echo 'active'; ?>"><a class="nav-link" href="index.php">Ballina</a></li>
                <li class="nav-item active <?php if ($currentPage === 'blog.php')
                  echo 'active'; ?>"><a class="nav-link" href="blog.php">Blogu</a></li>
                <li class="nav-item <?php if ($currentPage === 'rreth-nesh.php')
                  echo 'active'; ?>"><a class="nav-link" href="rreth-nesh.php">Rreth nesh</a></li>
                <li class="nav-item <?php if ($currentPage === 'kontakt.php')
                  echo 'active'; ?>"><a class="nav-link" href="kontakt.php">Kontakti</a></li>
                <li class="nav-item <?php if ($currentPage === 'tregimet.php')
                  echo 'active'; ?>"><a class="nav-link" href="tregimet.php">Tregime</a></li>

              <?php else: ?>
                <li class="nav-item <?php if ($currentPage === 'index.php')
                  echo 'active'; ?>"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item active <?php if ($currentPage === 'blog.php')
                  echo 'active'; ?>"><a class="nav-link" href="blog.php">Blog</a></li>
                <li class="nav-item <?php if ($currentPage === 'rreth-nesh.php')
                  echo 'active'; ?>"><a class="nav-link" href="rreth-nesh.php">About Us</a></li>
                <li class="nav-item <?php if ($currentPage === 'kontakt.php')
                  echo 'active'; ?>"><a class="nav-link" href="kontakt.php">Contact</a></li>
                <li class="nav-item <?php if ($currentPage === 'tregimet.php')
                  echo 'active'; ?>"><a class="nav-link" href="tregimet.php">Stories</a></li>
>>>>>>> Stashed changes

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

    <!-- Pjesa e bannerit -->
    <section class="blog-banner-area" id="blog">
        <div class="container h-100">
            <div class="blog-banner">
                <div class="text-center">
                    <h1>Blogu</h1>
                </div>
            </div>
        </div>



    </section>

    <!--Kategorite e blogut-->
    <section class="blog_categorie_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="categories_post">
                        <img class="card-img rounded-0" src="img/Vera.jpg" alt="Vera">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-artikulli.php">
                                    <h5>Vera</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Stina e veres</p>
                            </div>
                        </div>
                        <!--.-->
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="categories_post">
                        <img class="card-img rounded-0" src="img/kategoriavjeshte.jpg" alt="Vjeshta">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-artikulli.php">
                                    <h5>Vjeshta</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Stina e vjeshtes</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="categories_post">
                        <img class="card-img rounded-0" src="img/Dimri.jpg" alt="Dimri">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-artikulli.php">
                                    <h5>Dimri</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Stina e dimrit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Pjesa e blogut-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="blog-artikulli.php">Kamping,</a>
                                        <a class="active" href="blog-artikulli.php">Vera,</a>
                                        <a href="blog-artikulli.php">Rugove,</a>
                                        <a href="blog-artikulli.php">Gusht</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li>
                                            <a href="blog-artikulli.php">Diellza Raçi
                                                <i class="lnr lnr-user"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-artikulli.php">23 Gusht, 2022
                                                <i class="lnr lnr-calendar-full"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-artikulli.php">52 Shikime
                                                <i class="lnr lnr-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-artikulli.php">09 Komente
                                                <i class="lnr lnr-bubble"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="img/kampi.jpg" alt="Kampi">
                                    <div class="blog_details">
                                        <a href="blog-artikulli.php">
                                            <h2>Kampi Internacional, Rugove 2022</h2>
                                        </a>
                                        <p>Kete Gusht organizuam Kampin Internacional
                                            ne Rugove, me pjesetare nga mbare Evropa.</p>
                                        <a class="button button-blog" href="blog-artikulli.php" style="border-radius: 0; width:210px; height: 40px; justify-content-center; align-items-center;">Shiko artikullin e plote</a>

                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="blog-artikulli.php">Yoga,</a>
                                        <a class="active" href="blog-artikulli.php">Vera,</a>
                                        <a href="blog-artikulli.php">Prevallë,</a>
                                        <a href="blog-artikulli.php">Korrik</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li>
                                            <a href="blog-artikulli.php">Rina Halili
                                                <i class="lnr lnr-user"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-artikulli.php">25 Korrik, 2022
                                                <i class="lnr lnr-calendar-full"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-artikulli.php">78 Shikime
                                                <i class="lnr lnr-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-artikulli.php">22 Komente
                                                <i class="lnr lnr-bubble"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="img/yoga.jpg" alt="Yoga">
                                    <div class="blog_details">
                                        <a href="#">
                                            <h2>Entuziazmi per Yoga nuk njeh moshe!!</h2>
                                        </a>
                                        <p>Gjate punetorise Yoga, u befasuam me pjesemarresit nga thuajse te gjitha
                                            kategorite e moshave.</p>
                                        <a class="button button-blog" href="blog-artikulli.php" style="border-radius: 0; width:205px; height: 40px; justify-content-center; align-items-center;">Shiko artikullin e
                                            plote</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="blog-artikulli.php">Hiking,</a>
                                        <a class="active" href="blog-artikulli.php">Vera,</a>
                                        <a href="blog-artikulli.php">Brod,</a>
                                        <a href="blog-artikulli.php">Qershor</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li>
                                            <a href="blog-artikulli.php">Festina Mjeku
                                                <i class="lnr lnr-user"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-artikulli.php">22 Qershor, 2021
                                                <i class="lnr lnr-calendar-full"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-artikulli.php">112 Shikime
                                                <i class="lnr lnr-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-artikulli.php">31 Komente
                                                <i class="lnr lnr-bubble"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="img/Vera.jpg" alt="Vera">
                                    <div class="blog_details">
                                        <a href="blog-artikulli.php">
                                            <h2>A ka me mire se me e nise veren me hiking ne Brod?</h2>
                                        </a>
                                        <p>22 Qershorin e kaluam duke ecur maleve te Brodit.</p>
                                        <a class="button button-blog" href="blog-artikulli.php" style="border-radius: 0; width:210px; height: 40px; justify-content-center; align-items-center;">Shiko artikullin e
                                            plote</a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!--Numri i faqeve-->
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-left"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="index.html" class="page-link">01</a>
                                </li>
                                <li class="page-item active">
                                    <a href="blog.html" class="page-link">02</a>
                                </li>
                                <li class="page-item">
                                    <a href="rreth-nesh.html" class="page-link">03</a>
                                </li>
                                <li class="page-item">
                                    <a href="kontakt.html" class="page-link">04</a>
                                </li>
                                <li class="page-item">
                                    <a href="rreth-nesh.html" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-right"></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <!--Search bar per kerkim te postimeve-->
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Kerko postime">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="lnr lnr-magnifier"></i>
                                    </button>
                                </span>
                            </div>

                            <div class="br"></div>
                        </aside>
                        <!--Autorja e blogut-->
                        <aside class="single_sidebar_widget author_widget">
                            <img class="author_img rounded-circle" src="img/diellza.jpg" alt style="width:100px;">
                            <h4>Diellza Raçi</h4>
                            <p>Bloggere e AnesMalit</p>
                            <div class="social_icon">
                                <a href="https://www.facebook.com/diellza.raqi.5">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com/AnesMalit">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://github.com/didiellzaza">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                            <p>Fan of touching grass :)
                            </p>
                            <div class="br"></div>
                        </aside>
                        <!--Postimet me te klikuara-->
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Postimet me te klikuara</h3>
                            <div class="media post_item">
                                <div class="media-body">
                                    <a href="blog-artikulli.php">
                                        <h3>Kampi Internacional, Rugove 2022</h3>
                                    </a>
                                    <p>5 muaj me pare</p>
                                </div>
                            </div>
                            <div class="media post_item">

                                <div class="media-body">
                                    <a href="blog-artikulli.php">
                                        <h3>Ne i bekojme Bjeshket e Nemuna ;)
                                        </h3>
                                    </a>
                                    <p>Dje</p>
                                </div>
                            </div>
                            <div class="media post_item">

                                <div class="media-body">
                                    <a href="blog-artikulli.php">
                                        <h3>Jave e paharrueshme me alpinista fantastik</h3>
                                    </a>
                                    <p>3 jave me pare</p>
                                </div>
                            </div>
                            <div class="br"></div>
                        </aside>
                        <!--Abonimi - Newsletter-->
                        <aside class="single-sidebar-widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>
                            <p>
                                Abonohu per t'u njoftuar rreth me te rejave te klubit.
                            </p>
                            <div class="form-group d-flex flex-row">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="E-mail adresa juaj" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                </div>
                                <a href="#" class="bbtns">Abonohu</a>
                            </div>
                            <div class="br"></div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>


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



    <!--
    <script>
        // Define a PHP array containing paths to your banner images
        <?php
        /*
        $slideArray = [
            "img/noti.jpg",
            "img/Camping.jpg",
            "img/Ciklizem.jpg"
        ];
        */
        ?>

        // Output the JavaScript array using PHP
        var slideArray = [

            
            <?php
            /*
            // Loop through the PHP array and output image paths
            foreach ($slideArray as $index => $imagePath) {
                // Add each image path to the JavaScript array
                echo "'" . $imagePath . "'";
                // Add a comma after each image path except for the last one
                if ($index < count($slideArray) - 1) {
                    echo ",";
                }
            }
            */
            ?>
            
        ];

        // Function to display banners
        function displayBanner() {
            var bannerIndex = Math.floor(Math.random() * slideArray.length);
            var bannerImage = document.querySelector(".blog-banner");
            bannerImage.style.backgroundImage = "url('" + slideArray[bannerIndex] + "')";
        }

        // Call the displayBanner function when the page loads
        window.onload = function() {
            displayBanner();
        };
    </script>

    -->

    <script src="libs/jquery/jquery-3.2.1.min.js"></script>
    <script src="libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>