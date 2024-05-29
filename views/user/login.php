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

    <link rel="icon" href="../../img/favicon.png" type="image/png">
    <link rel="stylesheet" href="../../libs/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../libs/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../../libs/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../../libs/linericon/stylee.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/langstyle.css">
    <style>
        .form-wrapper {
            padding-top: 180px;
            padding-bottom: 30px;
            display: flex;
            justify-content: center;
        }
        .form-container {
            max-width: 400px;
            padding: 40px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <?php include '../layouts/header.php'; ?>

    <div class="form-wrapper">
        <div class="form-container">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block" style="background-color:#eebc4c; border:none">Login</button>
            </form>
            <button onclick="location.href='register.php'" class="btn btn-secondary btn-block mt-3" style="background-color:#a8824e; border:none">New? Register!</button>
        </div>
    </div>

    <?php include '../layouts/footer.php'; ?>

    <script src="../../libs/jquery/jquery-3.2.1.min.js"></script>
    <script src="../../libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../../js/main.js"></script>
</body>

</html>
