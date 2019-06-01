<?php
require 'config.php';

$h = $_GET['h'];

if(!empty($h)){
	$pdo->query("update usuarios set status = '1' where MD5(id) = '$h'");

	echo "<h2>Cadastro confirmado com sucesso!</h2>";

	
}