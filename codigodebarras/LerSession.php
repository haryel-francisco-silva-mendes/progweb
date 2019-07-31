<?php
// Arquivo para recuperar dados da Session

session_start();

echo "VALOR RECUPERADO DA SESSION NOME = ".$_SESSION["nome"]."<br>";
echo "VALOR RECUPERADO DA SESSION VALOR = ".$_SESSION["valor"]."<br>";

echo "<br>======================================================<br><br>";

echo "VALOR RECUPERADO DA VARIÁVEL NOME = ".$nome."<br>";
echo "VALOR RECUPERADO DA VARIÁVEL VALOR = ".$valor."<br>";
?>