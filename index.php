<?php
echo("Funciona!!");
echo("<link href='meu_css.css'>");
echo("<br><b>Teste</b><br>Outro Teste<br><br><br>");

echo("<table border=1><tr><td>Nome</td><td>Email</td></tr><tr><td>Carlos Alexandre</td><td>email@gmail.com</td></tr></table>");

$Nome = "Carlos";
$Profissao = "Professor";
$AulasPI = 2;
$AulasPW = 2;
$AulasTotal = $AulasPI + $AulasPW;

echo("<br><br>Esse código está sendo processado no computador do Professor!<br><br>");

echo("$Nome é $Profissao<br>");
echo("$Nome leciona $AulasTotal aulas<br>");
echo($Nome . " leciona " . ($AulasPI + $AulasPW) . " aulas<br>");
$Cont = "Teste";
echo("Cont é $Cont<br>");

if($Nome == "Carlos"){
	echo("Sim<br>");
}
else{
	echo("Não<br>");
}

for($Cont = 0; $Cont < 5; $Cont++){
	echo("FOR - Cont é $Cont<br>");
}
echo("Fim do FOR - Cont é $Cont<br>");

$Cont = 0;
while($Cont < 5){
	echo("WHILE - Cont é $Cont<br>");
	$Cont++;
}
echo("Fim do WHILE - Cont é $Cont<br>");

?>
