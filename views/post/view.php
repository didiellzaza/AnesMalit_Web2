<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

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
    <style>
        .content-wrapper {
            padding-top: 180px;
            padding-bottom: 30px;
            display: flex;
            justify-content: center;
        }

        .content-container {
            max-width: 400px;
            padding: 40px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <?php include __DIR__ . '/../layouts/header.php'; ?>

    <div class="content-wrapper">
        <div class="container content-container">
            <h2>Postimet</h2>

            <?php
            // Ensure $posts is defined and not empty
            if (isset($posts) && !empty($posts)) {
                foreach ($posts as $post) {
                    echo "<h3>" . htmlspecialchars($post['title']) . "</h3>";
                    echo "<p>" . nl2br(htmlspecialchars($post['content'])) . "</p>";
                    echo "<hr>";
                }
            } else {
                echo "<p>Asnje postim per te shfaqur.</p>";
            }
            ?>
        </div>
    </div>

    <?php include __DIR__ . '/../layouts/footer.php'; ?>

    <script src="../../libs/jquery/jquery-3.2.1.min.js"></script>
    <script src="../../libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../../js/main.js"></script>
</body>

</html>