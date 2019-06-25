<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercicio_3</title>
    
</head>
<body>
    <form method="GET" action="exercicio2.php">
        <input type="number" name="salario" id="salario" placeholder="digite seu salario"></input>
        <input type="number" name="emprestimo" id="emprestimo" placeholder="quantos que voce deseja?"></input>
        <input type="submit" name="submit" id="submit" value="enviar">
    </form>
</body>
</html>

<?php
if(isset($_GET["salario"]) and isset($_GET["emprestimo"])){
    

    $salario = $_GET["salario"];
    $emprestimo = $_GET["emprestimo"];
   
    if(($salario*5)>=$emprestimo){
        echo "seu pedido de ".$emprestimo." foi aprovado";
    }else {echo "seu pedido foi negado";}
    
    echo " obrigado por nos consultar";
}else{echo "informe seu salario e valor desejado";}
?>