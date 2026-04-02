<?php

require 'article.php';

$article1 = new Article();

$articles = $article1->readAll();

// $article1 -> create();


?>
<?php

echo "<table border='1'>
<tr><th>ID</th><th>Tittle</th><th>Content</th><th>UserID</th></tr>";
foreach ($articles as $article) {
    echo "<tr><td>{$article['id']}</td><td>{$article['title']}</td><td>{$article['content']}</td><td>{$article['id_user']}</td></tr>";
}
echo "</table>";
