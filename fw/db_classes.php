<?php

class Author {
    private $name = null;
    private $link = null;
    
    public function set($name=null, $link=null) {
        $this->name = $name;
        $this->link = $link;
    }
    
    public function name() {
        return $this->name;
    }
    public function link() {
        return $this->link;
    }
}

class Article {
    private $id = null;
    private $title = null;
    private $text = null;
    private $author = null;
    private $date = null;
    
    public function set($id=null, $title=null, $text=null, $author=null, $date=null) {
        $this->id = $id;
        $this->title = $title;
        $this->text = $text;
        $this->author = $author;
        $this->date = $date;
    }
    
    public function id() {
        return $this->id;
    }
    public function title() {
        return $this->title;
    }
    public function text() {
        return $this->text;
    }
    public function author() {
        return $this->author;
    }
    public function date() {
        return $this->date;
    }
}

?>