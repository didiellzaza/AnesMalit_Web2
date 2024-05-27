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
<?php include '../layouts/header.php'; ?>
<form action="login.php" method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" value="Login">
</form>
<?php include '../layouts/footer.php'; ?>