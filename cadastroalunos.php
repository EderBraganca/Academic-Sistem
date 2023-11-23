<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Alunos</title>
</head>
<body>
	<form action="" method="POST">
		<table>
		<tr><td>Nome:</td><td>
			<input type="text" name="Nome">
		</td></tr>
		<tr><td>Matrícula:</td><td>
			<input type="text" name="Matricula">
		</td></tr>
		<tr><td>Curso:</td><td>
		<select name="Curso">
			<option value="0"></option>
			<option value="1">Técnico em Agroindústria</option>
			<option value="2">Técnico em Agropecuária</option>
			<option value="3" selected>Técnico em Informática</option>
		</select>
		</td></tr>
		<tr><td>Turno:</td><td>
		<input type="radio" name="Turno" value="1">Matutino
		<input type="radio" name="Turno" value="2">Vespertino
		<input type="radio" name="Turno" value="3">Noturno
		<input type="radio" name="Turno" value="4" checked>Integral
		</td></tr>
		<tr><td>
		<input type="Submit" name="Enviar" value="Inserir Aluno">
		</td></tr>
		</table>
	</form>

<?php
	echo("<br><br>");
	if($_POST == null){
		echo("Nenhum SQL para exibir!<br>");
	}

//Insert Into Tabela (Nome, Matricula, Curso, Turno)
//Values ('Carlos', '1234', 1, 3);

	else{
		$ComandoSQL = "Insert Into Academico.Aluno (Nome, Matricula, Curso, Turno) Values ('" . $_POST["Nome"] . "', '" . $_POST["Matricula"] . "', " . $_POST["Curso"] . " , " . $_POST["Turno"] . ");";
		echo($ComandoSQL);

		//Declaração de variáveis
		$servidor = 'localhost';
		$usuario = 'root';
		$senha = 'root';
		$schema = 'Academico';

		//Abertura de conexão com MySQL
		$conexao = mysqli_connect($servidor, $usuario, $senha, $schema);
		if (!$conexao) {
			die('Não foi possível conectar: ' . mysql_error());
		}
		mysqli_query($conexao, $ComandoSQL) or die("Erro ao inserir aluno" . mysql_error());
	}
?>

</body>
</html>