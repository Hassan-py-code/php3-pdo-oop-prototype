


<?php  
 
  require_once "my_database.php";

   class Article {
       
        
   public  static function readAll(){
      
       $db = new Database("localhost","blog_solicode","root","");
       
       $conn = $db->connection();
       $sql = "SELECT * FROM articles";
       $stmt = $conn->query($sql);
       return $stmt->fetchAll(PDO::FETCH_ASSOC);
       
   }

    
   

   
   
   
   }
  



?>