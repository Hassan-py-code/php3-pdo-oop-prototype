



<?php  


 require_once "MyArticle.php";

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php 

   $articles = Article::readAll();

   foreach ($articles as $tn){
      echo "<p>" . $tn['title']."</p>";
      echo "<h2>" . $tn["content"] . "</h2>";
   }



?>
    
</body>
</html>