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
                        <!-- Navigation menu -->
                    </div>
                </div>
            </div>
        </div>

        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav">
                            <li class="nav-item <?php if ($currentPage === 'index.php') echo 'active'; ?>"><a class="nav-link" href="index.php">Ballina</a></li>
                            <li class="nav-item <?php if ($currentPage === 'blog.php') echo 'active'; ?>"><a class="nav-link" href="blog.php">Blog</a></li>
                            <li class="nav-item <?php if ($currentPage === 'rreth-nesh.php') echo 'active'; ?>"><a class="nav-link" href="rreth-nesh.php">Rreth nesh</a></li>
                            <li class="nav-item <?php if ($currentPage === 'kontakt.php') echo 'active'; ?>"><a class="nav-link" href="kontakt.php">Kontakt</a></li>
                            <li class="nav-item active <?php if ($currentPage === 'tregimet.php') echo 'active'; ?>"><a class="nav-link" href="tregimet.php">Tregimet</a></li>
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

    <!-- Tregimet content -->
    <div class="header1">
        <div class="coheader">
            <div class="udhetimetf">
                <div class="udhetimetfcon">
                    <img src="img/Fotonatyre.jpg" height="184" width="319" alt="Keshille">
                    <h4 style="text-align:left;">Tregim</h4>
                    <h4 style="text-align:left;"><?php

                                                    class Tregim
                                                    {
                                                        public $titull;
                                                        function Tregim()
                                                        {
                                                            $this->titull = "TREGIM";
                                                        }
                                                    }

                                                    $objekti = new Tregim();


                                                    echo $objekti->titull;
                                                    ?></h4>
                    <h5 style="margin-top:-8px; text-align:left;">Ne malet e bogës</h5>
                    <p>
                        Sipas gojëdhënave Boga ishte emri i djalit të dytë të Kelmecës (të parit të Kelmendit…). Nga djali i dytë rrodhi fisi i vogël i Bogës, i cili bënte pjesë në Fisin e Kelmendasve. Deri në shekullin e XVII ky fshat ka qenë pjesë e Kelmendit, duke qenë një ndër katër bajraqet e tij.
                    </p>
                </div>
                <div class="udhetimetfcon">
                    <img src="img/lubeteni.jpg" height="184" width="319" alt="Keshille">
                    <h4 style="text-align:left;">Tregim</h4>
                    <h5 style="
margin-top:-8px; text-align:left;">
                        <?php

                        define("TREGIM", "Lybeteni ne Verë");
                        echo TREGIM;
                        ?> </h5>
                    <p>
                        Me rastin e përvjetorit të pavarësisë së Kosovës ShBA Prishtina organizon pushtimin e Majes se Lybetenit te Dielen me 14 Shkurt 2016.

                        Do te jetë ngjitje alpine ne kushte dimri ku janë të domosdoshme pajisjet dimerore bjeshkatare e sidomos kthetrat, veshmbathje adekuate, syze, shkoponjte, doreza etj. Poashtu kërkohet pergatitje e mire fizike.

                    </p>

                </div>
                <div class="udhetimetfcon">
                    <img src="img/Fotonatyre1.jpg" height="184" width="319" alt="Keshille">
                    <h4 style="text-align:left;">Tregim</h4>
                    <h5 style="
margin-top:-8px; text-align:left;">
                        <?php
                        class destruktoriKlase
                        {
                            public $emri;
                            function __construct()
                            {
                                echo "Malet e Rugoves \n";
                                $this->emri = "";
                            }

                            function __destruct()
                            {
                                echo "   " . $this->emri . "\n";
                            }
                        }

                        $obj = new destruktoriKlase();
                        ?>
                    </h5>
                    <p>
                        Në Rugovë ka shumë shpella, ujëvara, liqene glaciale, maja të larta dhe tunele . Maja më e lartë është Hajla (2403 m), pastaj është Volujaku i cili është pothuajse aq i lartë. Peja mund të shihet nga maja Qafës së Qyqes. Maja e Gurit të Kuq (1522 m) gjithashtu ofron pamje të jashtëzakonshme.
                </div>


            </div>
            <div class="udhetimetf" style="margin-top:-55px;">
                <br>
                <div class="udhetimetfcon">

                    <img src="img/Fotonatyre2.jpg" height="184" width="319" alt="Keshille">
                    <h4 style="text-align:left;">Tregim</h4>
                    <h5 style="
margin-top:-8px; text-align:left;">
                        <?php
                        class klasa
                        {
                            private $antariPare;


                            public function __get($vetin)
                            {
                                if (property_exists($this, $vetin)) {
                                    return $this->$vetin;
                                }
                            }

                            public function __set($vetin, $vlera)
                            {
                                if (property_exists($this, $vetin)) {
                                    $this->$vetin = $vlera;
                                }
                            }
                        }

                        $klasa = new klasa();

                        $klasa->antariPare = "Bjeshket e Nemuna ";


                        echo $klasa->antariPare;

                        ?></h5>
                    <p>
                        Udhëtarët që duan shtigje të largëta, të thepisura dhe mikpritje ky vend ballkanik është më i shkëlqyeri për të kaluar disa ditë plot aventurë.Nje thenje qe e ka thene gazeta angleze “Mos u mashtroni nga emri që kanë këto male, sepse kur të arrini në majën e tyre do të ndiheni të bekuar”
                </div>

                <div class="udhetimetfcon">
                    <img src="img/shpella.jpg" height="184" width="319" alt="Keshille">
                    <h4 style="text-align:left;">Tregim</h4>
                    <h5 style="
margin-top:-8px; text-align:left;">Shpella e Gadimes</h5>
                    <p>
                        Për ta vizituar brendësinë e saj të duhen vetëm pak minuta, mirëpo për të dëgjuar ciceronin dhe për të parë nga afër çdo stalaktit dhe stalagmit, kjo të merrte kohë më shumë.Pikat e ujit rridhnin mbi kokat e vizitorëve, e kjo nga ciceronët shpjegohej si ‘fatsjellës’.
                </div>
                <div class="udhetimetfcon">
                    <img src="img/ujevara.jpg" height="184" width="319" alt="Keshille">
                    <h4 style="text-align:left;">Tregim</h4>
                    <h5 style="
margin-top:-8px; text-align:left;">Ujevara e Mirushes</h5>
                    <p>
                        Temperaturat e ulëta deri në -20 C të cilat kanë mbizotëruar në vendin tonë ditëve të fundit kanë bërë që Ujëvara e Mirushes të ngrihet e tëra, njofton indeksonline.

                        Nuk mbahet mend nëse ndonjëherë të jetë ngrirë në këtë mënyrë njëra ndër bukuritë e rralla natyrore të Kosovës.</p>

                </div>


            </div>
            <div class="udhetimetf " style="margin-top:-55px;">
                <br>
                <div class="udhetimetfcon">

                    <img src="img/Prizren.jpg" height="184" width="319" alt="Keshille">
                    <h4 style="text-align:left;">Tregim</h4>
                    <h5 style="
margin-top:-8px; text-align:left;">Prizreni Naten</h5>
                    <p>
                        Nje vend shum i bukur
                        nje vend me gjelbrime
                        eshte dhe do te mbetet
                        gjithmon vendlindja ime.
                        Jetoj ne Prizren
                        ne vendlindjen time
                        qe eshte nje vend i shrenjt
                        dhe me shume kuptime.
                    </p>
                </div>

                <div class="udhetimetfcon">
                    <img src="img/Ciklizem.jpg" height="184" width="319" alt="Keshille">
                    <h4 style="text-align:left;">Tregim</h4>
                    <h5 style="
margin-top:-8px; text-align:left;"><?php

                                    class klasa1
                                    {
                                        public function printo($string)
                                        {
                                            echo 'Ne ' . $string . PHP_EOL;
                                        }
                                    }

                                    class klasa2 extends klasa1
                                    {
                                        public function printo($string)
                                        {
                                            echo 'e ' . $string . PHP_EOL;
                                        }
                                    }

                                    $obj1 = new klasa1();
                                    $obj2 = new klasa2();
                                    $obj1->printo('malet ');

                                    $obj2->printo('Boges');


                                    ?></h5>
                    <p>
                        Nesi keni vendosur që të shkoni për pushime në mal, për skijim gjatë dimrit, apo për të thithur ajrin e pastër të Rugovës, atje do të gjeni vednin te quajtur Boge i cili do të jetë shtëpia juaj e dytë.

                    </p>
                </div>
                <div class="udhetimetfcon">
                    <img src="img/Mbremje_natyre.jpg" height="184" width="319" alt="Keshille">
                    <h4 style="text-align:left;">Tregim</h4>
                    <h5 style="
margin-top:-8px; text-align:left;">Mbremje ne natyre</h5>
                    <p>
                        U zhduk dita e ra mbremja,
                        Dielli mbylli syte dhe hena u zgjua
                        Qielli ri i ndricuar
                        Perderisa une takova dy duar
                        Dy duar te bukura .
                        Pashe dy sy qielli dhe buzet si qershi
                        Dhe nje arome te bukur trendafili.
                        Ra mbremja e zemra me gufon
                        Perqafimi yt ndjenjat mua mi zgjoi
                        Ra mbremja Kjo mbremje e bukur.
                    </p>
                </div>





            </div>
        </div>

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
                            <li><a href="https://maps.google.com/maps?q=Lakrisht%C3%AB,%20Prishtin%C3%AB%2010000&t=k&z=13&ie=UTF8&iwloc=&output=embed"> Lakrishte, Prishtine</a></li>

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