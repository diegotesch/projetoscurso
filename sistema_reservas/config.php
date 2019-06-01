<?php
require 'classes/carros.php';
require 'classes/reservas.php';

try{
	$pdo = new PDO("mysql:dbname=projeto_cadastro;host=localhost", "root", "");
}catch(PDOException $e){
	die("ERRO: ".$e->getMessage());
}