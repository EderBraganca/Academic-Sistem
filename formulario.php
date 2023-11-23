<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Página de Teste</title>
</head>
<body>
<form action="exibeinformacao.php" method="POST">
	Nome: <input type="text" name="Nome">
	<br>
	Matricula: <input type="text" name="Matricula">
	<br>
	<input type="submit" name="Enviar">
</form>
<?php
	echo("<br><br>Variável de Sessão 'MeuNome' é ".$_SESSION["MeuNome"]);
?>
</body>
</html>
