<?php
//Inclui as ckasses controladoras
require_once("../../controller/Medico.controller.class.php");

//Criando as novas instancias das classes
$controller = new MedicoController;

//Metodo de listahgem
$registros = $controller->contaMedicos();

//Guarda o retorno da consulta
$res = mysqli_fetch_array($registros);

//recupera a quantidade de medico
$qtd = $res["total"];
?>
Total de médicos: <?php echo $qtd;?>