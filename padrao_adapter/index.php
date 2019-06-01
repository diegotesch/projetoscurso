<?php
//EXEMPLO DE CLASSE NO PADRAO ADAPTER
class Pessoa
{
    private $nome;
    private $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }
}

class PessoaAdapter
{
    private $sexo;
    private $pessoa;

    public function __construct(Pessoa $pessoa)
    {
        $this->pessoa = $pessoa;
    }

    public function setSexo($s)
    {
        $this->sexo = $s;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function getNome()
    {
        return $this->pessoa->getNome();
    }

    public function getIdade()
    {
        return $this->pessoa->getIdade();
    }
}

$pessoa = new Pessoa("Diego Tesch", 31);
$pa = new PessoaAdapter($pessoa);
$pa->setSexo("masculino");

echo $pa->getNome()."<br>";
echo $pa->getIdade()."<br>";
echo $pa->getSexo()."<br>";