<?php
require_once '../../db/db_konektimi.php';
require_once '../../controllers/CommentController.php';

$database = new Database();
$db = $database->getConnection();

$commentController = new CommentController($db);

$post_id = $_GET['post_id'];
$comments = $commentController->getByPostId($post_id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Comments</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h2>Comments</h2>
    <?php
    while ($row = $comments->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        echo "<div class='comment'>";
        echo "<p><strong>User ID:</strong> {$user_id}</p>";
        echo "<p>{$kontenti}</p>";
        echo "<p><small>Posted on: {$created_at}</small></p>";
        echo "</div>";
    }
    ?>

    <h3>Add a Comment</h3>
    <form action="add_comment.php" method="post">
        <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
        <label for="user_id">User ID:</label>
        <input type="text" id="user_id" name="user_id" required><br><br>
        <label for="kontenti">Comment:</label>
        <textarea id="kontenti" name="kontenti" required></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>