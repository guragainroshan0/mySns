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


        $sql =$this->conn->prepare("Insert into $t (email,username,password) Values(?,?,?)");
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
       
        $data = $this->conn->prepare("Select * from $t where approvedby=1");
        
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

    function getApprovedUser($t){

        //$t parameter to check if it is admin or for user 
        $user = array();
        //$sql = "Select * from Post limit $limit";

        $data = $this->conn->prepare("Select * from $t where approvedby!=1");
        echo $this->conn->error;
        
        
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

    function approveUser($user,$admin,$t){
        //$user is the username to approve and $admin is approved by which admin, $t to check if is user or admin
        $sql = "Update $t set approvedby=? where username=?";
        
        $data = $this->conn->prepare($sql);
       
        $data->bind_param('is',$admin,$user);
        $data->execute();
        $data->close();



    }


}



?>