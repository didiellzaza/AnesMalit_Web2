<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


$currentPage = basename($_SERVER['SCRIPT_NAME']);


$language = isset($_SESSION['language']) ? $_SESSION['language'] : 'en';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['language'])) {
    $language = $_POST['language'];
    $_SESSION['language'] = $language;
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
</head>

<body>
    <?php include '../layouts/header.php'; ?>
    <form action="register.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="submit" value="Register">
    </form>
    <?php include '../layouts/footer.php'; ?>
    <script src="../../libs/jquery/jquery-3.2.1.min.js"></script>
    <script src="../../libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../../js/main.js"></script>
</body>

</html>