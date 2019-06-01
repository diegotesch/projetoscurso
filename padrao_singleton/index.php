<?php
//EXEMPLO DE CLASSE NO PADRAO SINGLETON

class Pessoa
{
    private $nome;
    private $idade;

    public static function getInstace()
    {
        static $instance = null;
        if($instance === null){
            $instance = new Pessoa();
        }

        return $instance;
    }

    private function __construct(){}

    public function setNome($n)
    {
        $this->nome = $n;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setIdade($i)
    {
        $this->idade = $i;
    }

    public function getIdade()
    {
        return $this->idade;
    }

}


$cara = Pessoa::getInstace();
$cara->setNome("Diego");
echo "Nome: ".$cara->getNome();

$cara_novo = Pessoa::getInstace();
$cara_novo->setIdade(31);
echo "Idade: ".$cara->getIdade();