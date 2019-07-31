<?php
// Arquivo de exemplo de Session

session_start();
echo "ID: ".$_SESSION["id"]."<br>";
echo "NOME: ".$_SESSION["nome"]."<br>";
echo "DESCRIÇÃO: ".$_SESSION["descricao"]."<br>";
echo "SKU: ".$_SESSION["sku"]."<br>";
echo "EAN: ".$_SESSION["ean"]."<br>";
echo "VALOR: ".$_SESSION["valorunitario"]."<br>";
echo "CATEGORIA: ".$_SESSION["id_categoria"]."<br>";

?>