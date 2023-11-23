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
echo 'Conexão bem sucedida<br><br>';

//Execução de comando SQL (Select em uma tabela)
$sql = mysqli_query($conexao,"select IdAluno, Nome from Academico.Aluno;") or die("Erro ao consultar alunos" . mysql_error());

//Percorrer tabela resultante do comando Select
echo '<b> Alunos </b><br>';
while($dados=mysqli_fetch_assoc($sql)) {
	echo $dados["Nome"].'<br>';
}

//Fechamento da conexão
mysqli_close($conexao);
?>
