<?php

define('HOME','/home/roshan/Documents/php/www/sns/');
include_once(HOME."config/config.php");
include_once($error);
include_once($postModel);
include($userModel);

class dbConnect{

    private $conn;
 

    function __construct(){
        $servername = "localhost";
        $username = "roshan";
        $password = "EnterPassword";
        $dbname = "mysns";
        $this->conn = new mysqli($servername,$username,$password,$dbname);
    }

    function getPosts($limit){

        $post = array();
        //$sql = "Select * from Post limit $limit";
        $data = $this->conn->prepare("Select * from Post limit ?");
        $data->bind_param("i",$limit);
        $data->execute();
        
        $result = $data->get_result();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $p = new Post($row['id'],$row['title'],$row['likes'],$row['content'],$row['date'],$row['postedby']);
                array_push($post,$p);
            }
            
        }
        return $post;

    }

    function addUser($user,$t){
        if($t== 'a')
        {
            $sql =$this->conn->prepare("Insert into Admin (email,username,password) Values(?,?,?)");
        }
        else if($t=='u')
        {
        $sql =$this->conn->prepare("Insert into User (email,username,password) Values(?,?,?)");
        }
        $email = $user->getEmail();
        $password = $user->getPassword();
        $username = $user->getUsername();
        $sql->bind_param('sss',$email,$username,$password);
        if(!$sql->execute()){
            return "error".$this->conn->error;
        };
        $sql->close();
        $this->conn->close();
        

    }

    function addPost($post){
        $sql = $this->conn->prepare("INSERT INTO Post (title,likes,content,postedby) VALUES (?,?,?,?)");
        $title = $post->getTitle();
        $likes = $post->getLikes();
        $content = $post->getContent();
        $postedby=1;
        $sql->bind_param('sisi',$title,$likes,$content,$postedby);
        if(!$sql->execute()){
            return "error".$this->conn->error;
        };
        
        $sql->close();
        $this->conn->close();
    }


    function getUnapprovedUser($t){
        $user = array();
        //$sql = "Select * from Post limit $limit";
        if($t=='u'){
        $data = $this->conn->prepare("Select * from User where approvedby=1");
        }
        else if($t=='a')
        {
            $data = $this->conn->prepare("Select * from Admin where approvedby=1");
        }
        $data->execute();
        
        $result = $data->get_result();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                
                $p = new User($row['id'],$row['email'],$row['username'],$row['password'],$row["approvedby"]);
                array_push($user,$p);
            }
            
        }
        return $post;
        
    }

    function getApprovedUser($t){
        $user = array();
        //$sql = "Select * from Post limit $limit";
        if($t=='u'){
        $data = $this->conn->prepare("Select * from User where approvedby!=1");
        }
        else if($t=='a')
        {
            $data = $this->conn->prepare("Select * from Admin where approvedby!=1");
        }
        $data->execute();
        
        $result = $data->get_result();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                
                $p = new User($row['id'],$row['email'],$row['username'],$row['password'],$row["approvedby"]);
                array_push($user,$p);
            }
            
        }
        return $user;

    }


}



?>