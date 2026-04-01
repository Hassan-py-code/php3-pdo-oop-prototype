<?php
require_once 'database.php';



class Article{
    // private $id;
    // private $title;
    // private $content;
    // private $date_publication;


    // public function __construct($title,$content,$date_publication,$id =-1){
            
    //     $this->title= $title;
    //     $this->content =$content;
    //     $this->date_publication =$date_publication;
    //     $this->id = $id;
    // }

  
    public function create($title,$content,$date_publication){

        $db = new Database("localhost","blog_db","root","");
        $query ="insert into article (title,content,date_publication)values(:title,:content,:date_publication)";
        $conn = $db->connection();
        $stmt=$conn->prepare($query);
        $stmt->execute(
            [
                "title" => $title,
                "content" => $content,
                "date_publication" => $date_publication

            ]
        );
        echo "object add to db";

        }


    public function read($id){
    $db = new Database("localhost","blog_db","root","");
    $query ="select * from article Where id=$id";
    $conn = $db->connection();
    $stmt =$conn->query($query);
    $article = $stmt->fetch(PDO::FETCH_ASSOC);
    return $article;
    }
    
    public function Update($id,$title,$content,$date_publication){
        $db = new Database("localhost","blog_db","root","");
        $query ="Update article set title=:title,content=:content,date_publication=:date_publication where id =:id";
        $conn = $db->connection();
        $stmt=$conn->prepare($query);
        $stmt->execute(
            [
                "title" => $title,
                "content"=>$content,
                "date_publication"=>$date_publication,
                "id"=> $id
            ]
        );
        echo"article updated";
    }
    public function delete($id){
        $db = new Database("localhost","blog_db","root","");
        $query ="delete from article where id =:id";
        $conn = $db->connection();
        $stmt=$conn->prepare($query);
        $stmt->execute(
            [
                "id"=> $id
            ]
        );
        echo"article deleted";
    }
    public function readAll(){
    $db = new Database("localhost","blog_db","root","");
    $query ="select * from article";
    $conn = $db->connection();
    $stmt =$conn->query($query);
    $article = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $article;
    }
}