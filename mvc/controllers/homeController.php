<?php
class homeController extends controller
{
    
    public function index()
    {
        $dados = array(
            'quantidade' => 5,
            'nome' => 'Diego'
        );

        $this->loadTemplate('home', $dados);
    }
    
}