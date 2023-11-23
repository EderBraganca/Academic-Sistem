<!DOCTYPE html>
<html>
<head>
	<title>Editar alunos</title>
</head>
<body>
<table border=1>
	<tr>
		<td><b>Nome</b></td>
		<td><b>Matrícula</b></td>
		<td><b>Curso</b></td>
		<td><b>Turno</b></td>
		<td><b>Editar</b></td>
		<td><b>Excluir</b></td>
	</tr>
	<tr>
		<?php
			if(($_POST == null) || ($_POST["Editar"] == null)){
				echo("<td>Carlos</td>");
				echo("<td>1234</td>");
				echo("<td>3</td>");
				echo("<td>4</td>");
			}
			else{
				echo("<td><input type='text' name='Nome' value='Carlos'></td>");
				echo("<td><input type='text' name='Matricula' value='1234'></td>");
				echo("<td><input type='text' name='Curso' value='3'></td>");
				echo("<td><input type='text' name='Turno' value='4'></td>");
			}
		?>
		<!--
		<td>Carlos</td>
		<td>1234</td>
		<td>3</td>
		<td>4</td>
		-->
		<td>
		<form action="" method="POST">
			<input type="hidden" name="idAluno" value="1">
			<input type="submit" value=" " name="Editar">
		</form>
		</td>
		<td>
		<form action="" method="POST">
			<input type="hidden" name="idAluno" value="1">
			<input type="submit" value=" " name="Excluir">
		</form>			
		</td>
	</tr>
	<tr>
		<td>Teste</td>
		<td>5678</td>
		<td>2</td>
		<td>3</td>
		<td></td>
		<td>
		<form action="" method="POST">
			<input type="hidden" name="idAluno" value="2">
			<input type="submit" value=" " name="Excluir">
		</form>
		</td>
	</tr>
</table>

<?php
	echo("<br><br>");
	if($_POST == null){
		echo("Nenhum SQL para exibir!<br>");
	}
	else{
		if($_POST["Excluir"] == " "){
			$ComandoSQL = "Delete From Academico.Aluno Where idAluno = " . $_POST["idAluno"] . ";";
			echo($ComandoSQL);
		}
	}

?>

</body>
</html>