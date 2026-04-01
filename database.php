<?php


class Database{
    
    private $host = "localhost";
    private $dbname ="blog_db";
    private $username = "root";
    private $password ="";
    public $conn ;


    public function __construct($host,$dbname,$username,$password){
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;
    }

    public function connection(){
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname};charset=utf8", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("err: ".$e->getMessage());
            
        }
        return $this->conn;
    }
}           