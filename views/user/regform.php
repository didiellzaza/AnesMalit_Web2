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
    <title>Tregimet Inspiruese</title>

    <link rel="icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="libs/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="libs/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="libs/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="libs/linericon/style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/langstyle.css">
    <link rel="stylesheet" href="css/reg.css">

    <style>
        * {
            font-family: "Roboto", sans-serif;

        }
    </style>
</head>

<body>
    <!-- Header -->
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
                                <li class="nav-item <?php if ($currentPage === 'index.php')
                                                        echo 'active'; ?>"><a class="nav-link" href="index.php">Accueil</a></li>
                                <li class="nav-item <?php if ($currentPage === 'blog.php')
                                                        echo 'active'; ?>"><a class="nav-link" href="blog.php">Blogue</a></li>
                                <li class="nav-item <?php if ($currentPage === 'rreth-nesh.php')
                                                        echo 'active'; ?>"><a class="nav-link" href="rreth-nesh.php">À propos de nous</a></li>
                                <li class="nav-item <?php if ($currentPage === 'kontakt.php')
                                                        echo 'active'; ?>"><a class="nav-link" href="kontakt.php">Contact</a></li>
                                <li class="nav-item <?php if ($currentPage === 'tregimet.php')
                                                        echo 'active'; ?>"><a class="nav-link" href="tregimet.php">Histoires</a></li>
                                <li class="nav-item active <?php if ($currentPage === 'regform.php')
                                                                echo 'active'; ?>"><a class="nav-link" href="regform.php">Inscription</a></li>


                                <!--.-->
                            <?php elseif ($language === "al") : ?>
                                <li class="nav-item  <?php if ($currentPage === 'index.php')
                                                            echo 'active'; ?>"><a class="nav-link" href="index.php">Ballina</a></li>
                                <li class="nav-item <?php if ($currentPage === 'blog.php')
                                                        echo 'active'; ?>"><a class="nav-link" href="blog.php">Blogu</a></li>
                                <li class="nav-item <?php if ($currentPage === 'rreth-nesh.php')
                                                        echo 'active'; ?>"><a class="nav-link" href="rreth-nesh.php">Rreth nesh</a></li>
                                <li class="nav-item <?php if ($currentPage === 'kontakt.php')
                                                        echo 'active'; ?>"><a class="nav-link" href="kontakt.php">Kontakti</a></li>
                                <li class="nav-item  <?php if ($currentPage === 'tregimet.php')
                                                            echo 'active'; ?>"><a class="nav-link" href="tregimet.php">Tregime</a></li>
                                <li class="nav-item active <?php if ($currentPage === 'regform.php')
                                                                echo 'active'; ?>"><a class="nav-link" href="regform.php">Regjistrimi</a></li>

                            <?php else : ?>
                                <li class="nav-item <?php if ($currentPage === 'index.php')
                                                        echo 'active'; ?>"><a class="nav-link" href="index.php">Home</a></li>
                                <li class="nav-item <?php if ($currentPage === 'blog.php')
                                                        echo 'active'; ?>"><a class="nav-link" href="blog.php">Blog</a></li>
                                <li class="nav-item <?php if ($currentPage === 'rreth-nesh.php')
                                                        echo 'active'; ?>"><a class="nav-link" href="rreth-nesh.php">About Us</a></li>
                                <li class="nav-item <?php if ($currentPage === 'kontakt.php')
                                                        echo 'active'; ?>"><a class="nav-link" href="kontakt.php">Contact</a></li>
                                <li class="nav-item  <?php if ($currentPage === 'tregimet.php')
                                                            echo 'active'; ?>"><a class="nav-link" href="tregimet.php">Stories</a></li>
                                <li class="nav-item active <?php if ($currentPage === 'regform.php')
                                                                echo 'active'; ?>"><a class="nav-link" href="regform.php">Registration</a></li>

                            <?php endif; ?>
                        </ul>
                    </div>

                    <ul class="social-icons ml-auto">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>


    <!-- Kryesorja -->

    <div class="rheader">
        <div id="mbajtesi">
            <?php
            $emri = "";
            $mbiemri = "";
            $perdoruesi = "";
            $email = "";
            $fjalekalimi = "";
            $konfirmofjalekalimin = "";
            $emriErr = "";
            $mbiemriErr = "";
            $emailErr = "";
            $fjalekalimiErr = "";
            $konfirmofjalekaliminErr = "";
            $perdoruesiErr = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (!empty($_POST["emri"]) && !empty($_POST["mbiemri"]) && !empty($_POST["perdoruesi"]) && !empty($_POST["email"]) && !empty($_POST["fjalekalimi"]) && !empty($_POST["konfirmofjalekalimin"])) {
                    require("konektimi.php");
                    $emri = testoTeDhenen($_POST["emri"]);
                    $mbiemri = testoTeDhenen($_POST["mbiemri"]);
                    $email = testoTeDhenen($_POST["email"]);
                    $fjalekalimi = testoTeDhenen($_POST["fjalekalimi"]);
                    $konfirmofjalekalimin = testoTeDhenen($_POST["konfirmofjalekalimin"]);
                    $perdoruesi = testoTeDhenen($_POST["perdoruesi"]);
                    if (preg_match("/^[a-zA-Z ]*$/", $emri) && preg_match("/^[a-zA-Z ]*$/", $mbiemri) && preg_match("/^[a-zA-Z0-9]{5,}$/", $perdoruesi) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        if (kontrolloPerdoruesin($perdoruesi) == false) {
                            $perdoruesiErr = "Perdoruesi i tille ekziston!";
                            $regjnukukrye = '<img src="images/error-cross.png" alt="error" width="20px" height="20px">Regjistrimi deshtoj, ju lutem permisoni fushat!';
                            if (kontrolloEmailin($email) == false) {
                                $emailErr = "Email i tille ekziston!";
                            }
                        } else if (kontrolloEmailin($email) == false) {
                            $emailErr = "Email i tille ekziston!";
                            $regjnukukrye = '<img src="images/error-cross.png" alt="error" width="20px" height="20px">Regjistrimi deshtoj, ju lutem permisoni fushat!';
                        } else {
                            if ($_POST["fjalekalimi"] == $_POST["konfirmofjalekalimin"]) {
                                $fjalekalimihash = sha1($_POST['fjalekalimi']);
                                $sql = "INSERT INTO Perdoruesi(Emri, Mbiemri, Perdoruesi, Email, Fjalekalimi, GID) 
                                    VALUES('" . $_POST['emri'] . "','" . $_POST['mbiemri'] . "','" . $_POST['perdoruesi'] . "','" . $_POST['email'] . "','" . $fjalekalimihash . "','2')";
                                if (!mysqli_query($konektimi, $sql)) {
                                    die('<img src="images/error-cross.png" alt="error" width="20px" height="20px">Lidhja me bazen e te dhenave nuk mund te realizohet: ' . mysqli_error($konektimi));
                                } else {
                                    $regjkrye = '<img src="images/green-tick.png" alt="error" width="20px" height="20px">Regjistrimi perfundoj me sukses, ju faleminderit!';
                                }

                                mysqli_close($konektimi);
                            }
                        }
                    }
                }
                if (empty($_POST["emri"])) {
                    $emriErr = "Duhet te plotesohet emri!";
                    $regjnukukrye = '<img src="images/error-cross.png" alt="error" width="20px" height="20px">Regjistrimi deshtoj, ju lutem permisoni fushat!';
                } else {
                    $emri = testoTeDhenen($_POST["emri"]);
                    if (!preg_match("/^[a-zA-Z ]*$/", $emri)) {
                        $emriErr = "Emri duhet te permbaje shkronja dhe hapesira!";
                        $regjnukukrye = '<img src="images/error-cross.png" alt="error" width="20px" height="20px">Regjistrimi deshtoj, ju lutem permisoni fushat!';
                    }
                }
                if (empty($_POST["mbiemri"])) {
                    $mbiemriErr = "Duhet te plotesohet mbiemri!";
                    $regjnukukrye = '<img src="images/error-cross.png" alt="error" width="20px" height="20px">Regjistrimi deshtoj, ju lutem permisoni fushat!';
                } else {
                    $mbiemri = testoTeDhenen($_POST["mbiemri"]);

                    if (!preg_match("/^[a-zA-Z ]*$/", $mbiemri)) {
                        $mbiemriErr = "Mbiemri duhet te permbaje shkronja dhe hapesira!";
                        $regjnukukrye = '<img src="images/error-cross.png" alt="error" width="20px" height="20px">Regjistrimi deshtoj, ju lutem permisoni fushat!';
                    }
                }
                if (empty($_POST["perdoruesi"])) {
                    $perdoruesiErr = "Duhet te plotesohet Perdoruesi!";
                    $regjnukukrye = '<img src="images/error-cross.png" alt="error" width="20px" height="20px">Regjistrimi deshtoj, ju lutem permisoni fushat!';
                } else {
                    $perdoruesi = testoTeDhenen($_POST["perdoruesi"]);
                    if (!preg_match('/^[a-zA-Z0-9]{5,}$/', $perdoruesi)) {
                        $perdoruesiErr = "Perdoruesi duhet te permbaje se paku 5 karaktere shkronja dhe numra!";
                        $regjnukukrye = '<img src="images/error-cross.png" alt="error" width="20px" height="20px">Regjistrimi deshtoj, ju lutem permisoni fushat!';
                    }
                }
                if (empty($_POST["email"])) {
                    $emailErr = "Duhet te plotesohet email!";
                    $regjnukukrye = '<img src="images/error-cross.png" alt="error" width="20px" height="20px">Regjistrimi deshtoj, ju lutem permisoni fushat!';
                } else {
                    $email = testoTeDhenen($_POST["email"]);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Formati i email-it gabim!";
                        $regjnukukrye = '<img src="images/error-cross.png" alt="error" width="20px" height="20px">Regjistrimi deshtoj, ju lutem permisoni fushat!';
                    }
                }
                if (empty($_POST["fjalekalimi"])) {
                    $fjalekalimiErr = "Duhet te plotesohet fjalekalimi!";
                    $regjnukukrye = '<img src="images/error-cross.png" alt="error" width="20px" height="20px">Regjistrimi deshtoj, ju lutem permisoni fushat!';
                } else {
                    $fjalekalimi = testoTeDhenen($_POST["fjalekalimi"]);
                }
                if (empty($_POST["konfirmofjalekalimin"])) {
                    $konfirmofjalekaliminErr = "Duhet te plotesohet konfirmo fjalekalimin!";
                    $regjnukukrye = '<img src="images/error-cross.png" alt="error" width="20px" height="20px">Regjistrimi deshtoj, ju lutem permisoni fushat!';
                } else {
                    $konfirmofjalekalimin = testoTeDhenen($_POST["konfirmofjalekalimin"]);
                }
                if ($_POST["fjalekalimi"] != $_POST["konfirmofjalekalimin"]) {
                    $fjalekalimiErr = "Fjalekalimet ndryshojn!";
                    $konfirmofjalekaliminErr = "Fjalekalimet ndryshojn!";
                    $regjnukukrye = '<img src="images/error-cross.png" alt="error" width="20px" height="20px">Regjistrimi deshtoj, ju lutem permisoni fushat!';
                }
            }

            function testoTeDhenen($eDhena)
            {
                $eDhena = trim($eDhena);
                $eDhena = stripslashes($eDhena);
                $eDhena = htmlspecialchars($eDhena);
                return $eDhena;
            }
            function kontrolloPerdoruesin($perdoruesi1)
            {
                require("konektimi.php");
                $sql = mysqli_query($konektimi, "SELECT Perdoruesi from perdoruesi WHERE Perdoruesi='$perdoruesi1'");
                if (mysqli_num_rows($sql) == 0) {
                    return true;
                }
                return false;
            }
            function kontrolloEmailin($email1)
            {
                require("konektimi.php");
                $sql = mysqli_query($konektimi, "SELECT Email from perdoruesi WHERE Email='$email1'");
                if (mysqli_num_rows($sql) == 0) {
                    return true;
                }
                return false;
            }
            ?>
            <div class="kontaktmesazhi">
                <h2>Rregullat mbi regjistrimin</h2>
                <p>
                    Forma per regjistrimin tuaj ne faqen tone, ju mundeson qe ju te njoftoheni me email per qdo organizim te organizuar nga ne, te beni rezervime,
                    te jepni rekomandime, te dergoni fotografit tuaja si dhe te beni rezervime.<br>
                    <br>
                    Te dhenat qe u jane kerkuar, duhet te plotesohen ashtu siq u jane kerkuar (duke ju siguruar per kredibilitetin e tyre), ne te kunderten ekipi
                    mirmbajtes me paralajmrim paraprak mund te ju fshij nga baza e te dhenave.<br>
                    <br>
                    Ju kerkojme qe me maturi ta respektoni kodin e miresjelljes, per bashkpunim sa me te mire dhe afatgjate.
                    <br>
                    <br>
                    <span style="font-style:italic">Space is an inspirational concept that allows you to dream big. </span>
                    <span style="font-style:italic">Peter Diamandis </span>
                </p>
                <br>
                <br>
                <span style="font-style:italic">le ta ndajme kete hapsire se bashku...</span>
            </div>
            <div class="regforma">
                <h2>Regjistrohuni</h2>
                <form id="Regjistrimi" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" style="margin-right:0px;">
                    <input type="text" id="emri" name="emri" placeholder="Emri" value="<?php echo $emri; ?>">
                    <span class="error" style="color:red; font-style:italic; font-size:11px"><?php echo $emriErr; ?></span><br>

                    <input type="text" id="mbiemri" name="mbiemri" placeholder="Mbiemri" value="<?php echo $mbiemri; ?>">
                    <span class="error" style="color:red; font-style:italic; font-size:11px"><?php echo $mbiemriErr; ?></span><br>

                    <input type="text" id="perdoruesi" name="perdoruesi" placeholder="Perdoruesi" value="<?php echo $perdoruesi; ?>">
                    <span class="error" style="color:red; font-style:italic; font-size:11px"><?php echo $perdoruesiErr; ?></span><br>

                    <input type="email" id="mail" name="email" placeholder="Email" value="<?php echo $email; ?>">
                    <span class="error" style="color:red; font-style:italic; font-size:11px"><?php echo $emailErr; ?></span><br>

                    <input type="password" id="pass" name="fjalekalimi" placeholder="Fjalekalimi">
                    <span class="error" style="color:red; font-style:italic; font-size:11px"><?php echo $fjalekalimiErr; ?></span><br>
                    <input type="password" id="cpass" name="konfirmofjalekalimin" placeholder="Konfirmo fjalekalimin">
                    <span class="error" style="color:red; font-style:italic; font-size:11px"><?php echo $konfirmofjalekaliminErr; ?></span><br><br>
                    <input type="submit" name="submit" value="Regjistrohu">
                </form>
                <h3 style="color:#535353; font-weight:400;"><?php echo $regjkrye; ?></h3>
                <h3 style="color:#535353; font-weight:400;"><?php echo $regjnukukrye; ?></h3>
            </div>
        </div>
    </div>

    <script>
        function validimiFjalekalimit() {
            var pass = document.getElementById("pass").value;
            var cpass = document.getElementById("cpass").value;
            var neRregull = true;
            if (pass != cpass) {
                document.getElementById("pass").style.borderColor = "#FF0000";
                document.getElementById("cpass").style.borderColor = "#FF0000";
                neRregull = false;
            }
            return neRregull;
        }
    </script>

    <!-- Footer -->
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