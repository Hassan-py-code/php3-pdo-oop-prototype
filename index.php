


<?php

require_once "MyArticle.php";

if (isset($_POST['add'])) {

    $title = $_POST['title'];
    $content = $_POST['content'];
    
    $article = new Article();
    $article->createArticle($title, $content);
   
    echo "Article added successfully";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

  <form method="POST" action="">
    
    <input type="text" name="title" placeholder="Title" required>
    <br><br>

    <textarea name="content" placeholder="Content" required></textarea>
    <br><br>

    <button type="submit" name="add">Add Article</button>
</form>

<a href="create.php">result</a>


</body>
</html>