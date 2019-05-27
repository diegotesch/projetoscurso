<?php

try{
	$dsn = 'mysql:dbname=projeto_cadastro;host=localhost';
	$user = 'root';
	$pass = '';
	$pdo = new PDO($dsn, $user, $pass);
}catch(PDOException $e){
	die($e->getMessage());
}