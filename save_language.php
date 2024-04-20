<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $selected_language = $_POST["language"];

    $_SESSION["preferred_language"] = $selected_language;

    header("Location: " . $_SERVER["HTTP_REFERER"]);
    exit;
}
?>