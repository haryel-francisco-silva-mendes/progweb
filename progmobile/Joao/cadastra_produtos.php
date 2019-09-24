<?php
ini_set('display_errors',1);
ini_set('log_errors',1);
ini_set('errors_log',dirname(__FILE__).'/error_log.txt');
error_reporting(E_ALL);

//Informando o Content-type
header("Content-type: text/json");

//Definindo o Time zone
date_default_timezone_set('America/Sao_Paulo');

if(
    isset($_GET["nome"]) or
    isset($_GET["descricao"]) or
    isset($_GET["valor"]) or
    isset($_GET["url"]) or
    isset($_GET["status"])
){

    //Criando a conexão com o banco de dados
    $mysqli = new mysqli('localhost','root','','qfome');

    mysqli_query($mysqli,"SET NAMES 'utf8'");
    mysqli_query($mysqli,'SET character_set_connection=utf8');
    mysqli_query($mysqli,'SET character_set_client=utf8');
    mysqli_query($mysqli,'SET character_set_results=utf8');

    $nome = (!isset($_GET["nome"])?'Indisponível':$_GET["nome"]);
    $descricao = (!isset($_GET["descricao"])?'Indisponível':$_GET["descricao"]);
    $valor = (!isset($_GET["valor"])?0.0:$_GET["valor"]);
    $url = (!isset($_GET["url"])?'Indisponível':$_GET["url"]);
    $status = (!isset($_GET["status"])?0:$_GET["status"]);

    //Criando a consulta
    $sql = "INSERT INTO produtos 
            (nome,descricao,valor,url,status)
            VALUES
            ('".$nome."','".$descricao."',".$valor.",'".$url."',".$status.")";

    //Executando a consulta
    $res = $mysqli->query($sql);

    if($res){
        echo json_encode(array("Status"=>"Ok","Mensagem"=>"Produto cadastrado"));
    }else{
        echo json_encode(array("Status"=>"Erro","Mensagem"=>"Não consegui cadastrar"));
    }

    //Fechar a conexão
    $mysqli->close();

}else{
    echo json_encode(array("Status"=>"Erro","Mensagem"=>"Parâmetros não recebidos"));  
}
?>