<?php
	if(isset($_POST['nome']) && !empty($_POST['nome'])){
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);

		require 'config.php';

		$pdo->query("insert into usuarios set nome = '$nome', email = '$email'");
		$id = $pdo->lastInsertId();

		$md5 = md5($id);
		$link = 'http://localhost/projetoscurso/projeto_cadastro/confirmar.php?h='.$md5;
		$assunto = 'Confirme seu cadastro';
		$msg = "Clique no link abaixo para confirmar seu cadstro:\n\n".$link;
		$header = "From: diego.tesch@gmail.com"."\r\n"."X-Mailer: PHP/".phpversion();

		mail($email, $assunto, $msg, $header);

		echo "<h2>OK! Confirmw seu cadastro agora!</h2>";
		exit;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post">
		Nome:<br>
		<input type="text" name="nome"><br><br>

		E-mail:<br>
		<input type="email" name="email"><br><br>

		<input type="submit" value="Cadastrar" >
	</form>

</body>
</html>