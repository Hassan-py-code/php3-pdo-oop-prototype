
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>



   <?php

     require "MyArticle.php";
     

     $articles1 = new Article();

     $art = $articles1->readAll();

     foreach ($art as $tbn){
      
         echo "<h1>" . $tbn['id'] . "</h1>";
         echo "<p>" . $tbn["title"] . "</p>";
         echo "<p>" . $tbn["content"] . "</p>";

     }

   ?>

</body>

</html>