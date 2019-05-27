<table border="1">
	<tr>
		<th>Dom</th>
		<th>Seg</th>
		<th>Ter</th>
		<th>Qua</th>
		<th>Qui</th>
		<th>Sex</th>
		<th>Sab</th>
	</tr>
	<?php
	for($l = 0; $l < $linhas; $l++):
	?>
	<tr>
		<?php
		for($q = 0; $q<7; $q++):
			$w = date('Y-m-d', strtotime(($q+($l*7)).' days', strtotime($inicio)));
			echo "<td>{$w}<br>";

			foreach($lista as $item):
				$dt_inicio = strtotime($item['data_inicio']);
				$dt_fim = strtotime($item['data_fim']);
				$w = strtotime($w);
				if($w >= $dt_inicio && $w <= $dt_fim):
					echo $item['pessoa']."</td>";
				endif;
			endforeach;

		endfor;
		?>
	</tr>
	<?php
	endfor;
	?>
</table>