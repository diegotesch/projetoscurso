<?php
require './classes/classes.php';

$carga = new Carga(60000);

$moto = new Moto();
$carro = new Carro();
$caminhao = new Caminhao();

$moto->setSucessor($carro);
$carro->setSucessor($caminhao);

$moto->transport($carga);