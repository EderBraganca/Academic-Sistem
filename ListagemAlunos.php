<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Alunos</title>
</head>
<body>

<?php
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

	//Insere novo Aluno
	if($_POST != null){
		if($_POST["Enviar"] == "Inserir Aluno"){
			$ComandoSQL = "Insert Into Academico.Aluno (Nome, Matricula, Curso, Turno) Values ('" . $_POST["Nome"] . "', '" . $_POST["Matricula"] . "', " . $_POST["Curso"] . " , " . $_POST["Turno"] . ");";

			mysqli_query($conexao, $ComandoSQL) or die("Erro ao inserir aluno" . mysql_error());
		}
		if($_POST["Enviar"] == "Excluir"){
			$ComandoSQL = "Delete From Academico.Aluno Where idAluno = " . $_POST["idAluno"] . ";";

			mysqli_query($conexao, $ComandoSQL) or die("Erro ao excluir aluno" . mysql_error());
		}
	}



//Execução de comando SQL (Select em uma tabela)
$sql = mysqli_query($conexao,"Select idAluno, Nome, Matricula, Curso, Turno from Academico.Aluno;") or die("Erro ao consultar alunos" . mysql_error());

//Percorrer tabela resultante do comando Select
echo('<b> Alunos </b><br>');
echo("<table border=1>");

echo("<tr><td>");
echo("<b>id</b>");
echo("</td><td>");
echo("<b>Nome</b>");
echo("</td><td>");
echo("<b>Matrícula</b>");
echo("</td><td>");
echo("<b>Curso</b>");
echo("</td><td>");
echo("<b>Turno</b>");
echo("</td><td>");
echo("<b></b>");
echo("</td></tr>");
while($dados = mysqli_fetch_assoc($sql)) {
	echo("<tr><td>");
	echo($dados["idAluno"]);
	echo("</td><td>");
	echo($dados["Nome"]);
	echo("</td><td>");
	echo($dados["Matricula"]);
	echo("</td><td>");
	echo($dados["Curso"]);
	echo("</td><td>");
	echo($dados["Turno"]);
	echo("</td><td>");

	echo("<form action='' method='POST'>");
	echo("<input type='hidden' name='idAluno' value='" . $dados["idAluno"] . "'>");
	echo("<input type='submit' name='Enviar' value='Excluir'>");
	echo("</form>");

	echo("</td></tr>");
}
echo("</table>");
?>

<hr>
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
</body>
</html>