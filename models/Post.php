<?php

class Post{
    private $id;
    private $title;
    private $likes;
    private $content;
    private $date;
    private $postedby;



    function __construct($title="",$content="",$postedby=1,$id=1,$date="",$likes=1){
        $this->id = $id;
        $this->title = $title;
        $this->likes = $likes;
        $this->content = $content;
        $this->date = $date;
        $this->postedby = $postedby;
    }

    public function getId(){
        return $this->id;
    }
    public function getTitle(){
        return $this->title;
    }
     public function getDate(){
        return $this->date;
    }
    public function getContent(){
        return $this->content;
    }
    public function getLikes(){
        return $this->likes;
    }
    public function getPostedBy(){
        return $this->postedby;
    }

    public function setTitle($title){
        $this->title = $title;
    }
    public function setContent($content){
        $this->content = $content;
    }
    public function setDate($date){
        $this->date = $date;
    }

    public function setPostedBy($pid)
    {
        $this->postedby = $pid;
    }

    public function updateLikes(){
        $this->likes +=1;
    }
  
    public function toString(){
        echo "<br>id : $this->id <br> Title : $this->title <br>Content : $this->content<br>date : $this->date <Br>by : $this->postedby";
    }

}
?>