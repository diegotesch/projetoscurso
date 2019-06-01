<?php
require 'config.php';

$reservas = new Reservas($pdo);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<h1>Reservas</h1>

		<a href="reservar.php">Adicionar Reservas</a><br><br>

		<form method="get">
			<select name="ano">
				<?php for($a = 2018; $a <= date(Y) + 1; $a++): ?>
				<option value="<?= $a ?>"><?= $a ?></option>
				<?php endfor; ?>
			</select>

			<select name="mes">
				<?php for($m = 1; $m <= 12; $m++): ?>
				<option <?= ($m == date('m') ? 'selected' : '') ?> value="<?= $m ?>"><?= $m ?></option>
				<?php endfor; ?>
			</select>
			<input type="submit" value="Mostrar Reservas">
		</form>

		<?php
		if(empty($_GET['ano'])){
			exit;
		}

		$data = $_GET['ano'].'-'.$_GET['mes'];
		$dia1 = date('w', strtotime($data));
		$dias = date('t', strtotime($data));
		$linhas = ceil(($dia1+$dias) / 7);
		$dia1 = -$dia1;
		$inicio = date('Y-m-d', strtotime($dia1.' days', strtotime($data)));
		$fim = date('Y-m-d', strtotime((($dia1 + ($linhas*7) -1) ).' days', strtotime($data)));
		

		$lista = $reservas->getReservas($inicio, $fim);


		echo "<br><hr>";
		require 'calendario.php';
		echo "<hr><br>";

		foreach($lista as $item):
			$data_inicio = date('d/m/Y', strtotime($item['data_inicio']));
			$data_fim = date('d/m/Y', strtotime($item['data_fim']));
			echo "{$item['pessoa']} reservou o carro {$item['id_carro']} entre {$data_inicio} e {$data_fim}.<br>";
		endforeach;
		?>

</body>
</html>