<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="get" action="exercicio1.php">
        <input type="number" name="number" id="number"></input>
    </form>
</body>
</html>

<?php

if(isset($_GET["number"])){
    $numero = floor($_GET["number"]);
    if($numero >= 0){

    if(($numero %2)==0){
        echo $numero." é par";
        
    }else{echo $numero."é impar";}
    }else{
        echo "seu numero é negativo";
}}
?>