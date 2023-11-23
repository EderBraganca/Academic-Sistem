<!DOCTYPE html>
<html>
<head>
	<title>Exibir Informações</title>
</head>
<body>
	<?php
	$VarNome = $_POST["Nome"];
	$VarMat = $_POST["Matricula"];
	$_SESSION["MeuNome"] = $VarNome;
	echo("O nome do aluno é <b>$VarNome</b> e a matrícula é <i>$VarMat</i>.");
	?>
</body>
</html>