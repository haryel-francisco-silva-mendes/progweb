<?php
//Inclui as classes controladoras
require_once("../../controller/Medico.controller.class.php");
//Criando as novas instâncias das classes
$controller = new MedicoController;
//Método de Listagem
$registros 	= $controller->contaMedicos();
//Guarda o retorno da consulta
$res = mysqli_fetch_array($registros);
//Recupera a quantidade de médicos
$qtd = $res["total"];
?>
Total de médicos: <?php echo $qtd;?>
