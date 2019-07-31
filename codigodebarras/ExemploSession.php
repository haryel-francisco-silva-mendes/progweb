<?php
// Arquivo de exemplo de Session

session_start();
$_SESSION["nome"] = "Aula Teste";
$_SESSION["valor"] = 10;

echo "SESSION NOME = ".$_SESSION["nome"]."<br>";
echo "SESSION VALOR = ".$_SESSION["valor"]."<br>";

echo "<br>==============================================<br><br>";

$nome = "Aula Teste";
$valor = 10;

echo "VARIÁVEL COMUM NOME = ".$nome."<br>";
echo "VARIÁVEL COMUM VALOR = ".$valor."<br>";
?>