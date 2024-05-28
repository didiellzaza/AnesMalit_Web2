<?php include 'views/layouts/header.php'; ?>
<form action="create_post.php" method="POST">
    <input type="text" name="title" placeholder="Title" required>
    <textarea name="content" placeholder="Content" required></textarea>
    <input type="submit" value="Create Post">
</form>
<?php include 'views/layouts/footer.php'; ?>