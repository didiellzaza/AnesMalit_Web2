<?php
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the selected language from the form
    $selected_language = $_POST["language"];

    // Store the selected language in a session variable
    $_SESSION["preferred_language"] = $selected_language;

    // Redirect the user back to the previous page
    header("Location: " . $_SERVER["HTTP_REFERER"]);
    exit;
}
