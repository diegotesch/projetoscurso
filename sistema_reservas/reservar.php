<?php
require 'config.php';

$reservas = new Reservas($pdo);
$carros = new Carros($pdo);

if(!empty($_POST['carro'])){
	$carro = addslashes($_POST['carro']);
	$data_inicio = addslashes($_POST['data_inicio']);
	$data_fim = addslashes($_POST['data_fim']);
	$pessoa = addslashes($_POST['pessoa']);

	//FORMATAR DATA
	// $data_inicio = explode($data_inicio);
	// $dt_inicio = $data_inicio[2].'-'.$data_inicio[1].'-'.$data_inicio[0];
	// $data_fim = explode($data_fim);
	// $dt_fim = $data_fim[2].'-'.$data_fim[1].'-'.$data_fim[0];

	if($reservas->verificarDisponibilidade($carro, $data_inicio, $data_fim)){
		$reservas->reservar($carro, $data_inicio, $data_fim, $pessoa);
		header('Location: index.php');
		exit;
	}else{
		echo "Este carro já está reservado durante o período solicitado<br>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Adicionar Reserva</h1>

	<form method="post">
		Carro:<br>
		<select name="carro">
			<?php
			$lista = $carros->getCarros();
			foreach($lista as $carro): 
			?>
			<option value="<?= $carro['id'] ?>"><?= $carro['nome'] ?></option>
			<?php 
			endforeach;
			?>
		</select><br>

		Data de ínicio:<br>
		<input type="date" name="data_inicio"><br>

		Data de devolução:<br>
		<input type="date" name="data_fim"><br>

		Nome da pessoa:<br>
		<input type="text" name="pessoa"><br>

		<input type="submit" name="Reservar">
	</form>


</body>
</html>
