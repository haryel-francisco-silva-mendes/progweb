<?php
    try{
        $hostt      = 'localhost';
        $banco      = 'bd_consultorio';
        $usuario    = 'root';
        $senha      = '';

        $conexao    = new PDO("mysql:host=$host;dbname=$banco;charset=utf-8",$usuario,$senha);
        $conexao->setAtribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);
        
    }catch(PDOExeption $e){
        echo"erro de servidor";
    }
?>


    