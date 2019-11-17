<?php
class Facebook{
    public function createPost(){
        return new Post();
    }
}

class Post{

    private $author;
    private $message;

    public function setAuthor($nome){
        $this->author = $nome;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function setMessage($mensagem){
        $this->message = $mensagem;
    }

    public function getMessage(){
        return $this->message;
    }
}