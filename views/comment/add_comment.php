<?php
require_once 'db_konektimi.php';
require_once 'controllers/CommentController.php';

$database = new Database();
$db = $database->getConnection();

$commentController = new CommentController($db);

$data = [
    'user_id' => $_POST['user_id'],
    'post_id' => $_POST['post_id'],
    'kontenti' => $_POST['kontenti']
];

$commentController->create($data);

// Redirect back to the comments view page
header("Location: comments_view.php?post_id=" . $_POST['post_id']);
