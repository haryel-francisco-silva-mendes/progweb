<?php
    try{
        $host='localhost';
        $banco='bd_assistentes';
        $usuario='root';
        $senha='';

        $conexao = new PDO("mysql:host=$host;dbname=$banco;charset=utf8",$usuario,$senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo"conexão bem sucedida";
    }
    catch(PDOException $e){
        echo"CORRE NEGADAA!";
    }
?>