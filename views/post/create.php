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
    <title>Create Post - Anes Malit</title>

    <link rel="icon" href="../../img/favicon.png" type="image/png">
    <link rel="stylesheet" href="../../libs/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../libs/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../../libs/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../../libs/linericon/stylee.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/langstyle.css">
    <style>
        .content-wrapper {
            padding-top: 200px;
            padding-bottom: 30px;
        }

        .content-container {
            max-width: 600px;
            padding: 40px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
            margin-bottom: 30px;
        }

        .content-container form {
            display: flex;
            flex-direction: column;
        }

        .content-container input[type="text"],
        .content-container textarea,
        .content-container input[type="file"] {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .content-container input[type="submit"] {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .content-container input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .blog_right_sidebar {
            padding: 30px;
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .single_sidebar_widget {
            margin-bottom: -13px;
        }
    </style>
</head>

<body>
    <?php include __DIR__ . '/../layouts/header.php'; ?>

    <div class="container content-wrapper">
        <div class="row">
            <div class="col-lg-8">
                <div class="content-container">
                    <h2>Create Post</h2>
                    <form action="create_post.php" method="POST" enctype="multipart/form-data">
                        <input type="text" name="title" placeholder="Title" required>
                        <textarea name="content" placeholder="Content" required></textarea>
                        <input type="file" name="image">
                        <input type="submit" value="Create Post" style="background-color:#a8824e">
                    </form>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <!--Postimet me te klikuara-->
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Postimet me te klikuara</h3>
                        <div class="media post_item">
                            <div class="media-body">
                                <a href="blog.html">
                                    <h3>Kampi Internacional, Rugove 2022</h3>
                                </a>
                                <p>5 muaj me pare</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <div class="media-body">
                                <a href="blog.html">
                                    <h3>Ne i bekojme Bjeshket e Nemuna ;)</h3>
                                </a>
                                <p>Dje</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <div class="media-body">
                                <a href="blog.html">
                                    <h3>Jave e paharrueshme me alpinista fantastik</h3>
                                </a>
                                <p>3 jave me pare</p>
                            </div>
                        </div>
                    </aside>
                    
                </div>
            </div>
        </div>
    </div>

    <?php include __DIR__ . '/../layouts/footer.php'; ?>

    <script src="../../libs/jquery/jquery-3.2.1.min.js"></script>
    <script src="../../libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../../js/main.js"></script>
</body>

</html>
