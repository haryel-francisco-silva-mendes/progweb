<?php

try
{
    // Conexão Local Xampp
    $host = 'localhost';
    $banco = 'db_blog';
    $usuario = 'root';
    $senha = '';

    $conexao = new PDO("mysql:host=$host;dbname=$banco;charset=utf8", $usuario, $senha);

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
}
catch(PDOException $e)
{
    echo "Opa, algo de errado não está certo.";
}





?>


