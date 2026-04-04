<?php

require "Article.php";

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

        <a href="create.php">Add Article</a>

        <?php foreach ($articles as $art) {
            
            echo   "<div class='article'>";
            echo  "<h2>" . htmlspecialchars($art['title'])  . "</h2>";
            echo  "<p>" . htmlspecialchars($art['content'])  . "</p>";
            echo "</div>";
        }
        ?>






    </div>

</body>

</html>