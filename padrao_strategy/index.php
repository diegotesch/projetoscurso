<?php
require './classes/Produtos.class.php';
require './classes/JsonOutput.class.php';
require './classes/ArrayOutput.class.php';
// require './classes/OutputInterface.php';

$produtos = new Produtos();
$produtos->getLista();
// $produtos->setOutput(new ArrayOutput());
$produtos->setOutput(new JsonOutput());

$dados = $produtos->getOutput();

var_dump($dados);