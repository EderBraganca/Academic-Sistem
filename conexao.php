<?php
//Declaração de variáveis
$servidor = 'localhost';
$usuario = 'root';
$senha = 'root';
$schema = 'Biblioteca';

//Abertura de conexão com MySQL
$conexao = mysqli_connect($servidor, $usuario, $senha, $schema);
if ($conexao == null) {
	die('Não foi possível conectar: ' . mysql_error());
}
?>
