<?php
class homeController extends controller{
    
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        var_dump('aqui');
		die;
        $dados = array();

        $posts = new Posts();
        $dados['posts'] = $posts->getPosts((10));

        $this->loadTemplate('home', $dados);
    }
}