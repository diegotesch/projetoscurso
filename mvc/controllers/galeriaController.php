<?php

class galeriaController extends controller
{
    public function index()
    {
        $dados = array(
            'qt' => 12
        );

        $this->loadTemplate('galeria', $dados);
    }
}