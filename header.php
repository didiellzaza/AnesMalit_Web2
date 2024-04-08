<!DOCTYPE HTML>
<html manifest="demo.appcache">

<head>
    <link href="files/style.css" rel="stylesheet" type="text/css" />
    <link href="files/hmenu.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <script src="files/hmenu.js"></script>
    <script type="text/javascript" src="files/jquery-1.11.2.min.js"></script>
    <meta charset="UTF-8" />
    <title><?php echo $pagetitle; ?></title>
</head>

<body class="body">
    <?php include 'functions.php'; ?>
    <div class="wrapper">
        <div style="background:#000000; width:100%; height:80px; position:absolute;">
            <div class="hkmenu">
                <img src="images/logo.png" style="height:30px; width:90px; position:absolute; margin-left:124px;">
                <div id="cssmenu" style="float:left;">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="destinacionet.php">Destinacionet</a>
                            <ul>
                                <li><a href="#">Bjeshka e Liqeantit</a></li>
                                <li><a href="#">Lugina e Valbones</a></li>
                                <li><a href="#">Liqenet e Mirushes</a></li>
                                <li><a href="#">Maja e Lubotenit</a></li>
                                <li><a href="#">Bjeshka e Vrelles</a></li>
                                <li><a href="#">Malet e Boges</a></li>
                                <li><a href="#">Maja e Koritnikut</a></li>
                            </ul>
                        </li>
                        <li><a href="tregimet.php">Tregimet</a></li>
                        <li><?php if (kyqur()) {
                                echo '<a href="login.php">Profili</a>';
                            } else {
                                echo '<li><a href="regform.php">Regjistrimi</a></li>';
                            } ?></li>
                        <li><a href="galeria.php">Galeria</a></li>
                    </ul>
                </div>
                <div id="planheader"><a href="login.php">
                        <?php
                        if (kyqur()) {
                            echo "Miresevjen, " . $emri . "!";
                        } else echo "PERDORUESI / KYQJA";
                        ?></a></div>

            </div>
        </div>