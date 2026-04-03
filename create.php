<?php
require "MyArticle.php";

$article = new Article();
$articles = $article->readAll();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>Articles</h1>

<a href="index.php">+ Add Article</a>

<?php foreach ($articles as $art): ?>

<div class="article">
    <h2><?= htmlspecialchars($art['title']) ?></h2>
    <p><?= htmlspecialchars($art['content']) ?></p>
</div>

<?php endforeach; ?>

</div>

</body>
</html>