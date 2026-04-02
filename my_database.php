


<?php  

  class Database{

     private $localhost;
     private $dbname;
     private $root;
     private $password;
     private $conn;
     

  public  function __construct($localhost , $dbname ,$root ,$password)
       {
           $this->localhost = $localhost;
           $this->dbname = $dbname;
           $this->password = $password;
           $this->root = $root;
       }


     public  function connection(){
          $this->conn=null;
          try{
              
              $this->conn = new PDO ("mysql:host={$this->localhost};dbname={$this->dbname};charset=utf8" , $this->root , $this->password);
              $this->conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
              echo "test";
          }catch(PDOException $e){
               die("err:" . $e->getMessage());
          }

          return $this->conn;
       }
 
 
    }


 


?>


