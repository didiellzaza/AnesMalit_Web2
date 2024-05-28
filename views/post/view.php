<?php include 'views/layouts/header.php'; ?>
<h2>Posts</h2>
<?php
foreach ($posts as $post) {
    echo "<h3>" . htmlspecialchars($post['title']) . "</h3>";
    echo "<p>" . nl2br(htmlspecialchars($post['content'])) . "</p>";
    echo "<hr>";
}
?>
<?php include 'views/layouts/footer.php'; ?>