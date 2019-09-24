<?php
ini_set('display_errors',1);
ini_set('log_errors',1);
ini_set('errors_log',dirname(__FILE__).'/error_log.txt');
error_reporting(E_ALL);

//Informando o Content-type
header("Content-type: text/json");

//Definindo o Time zone
date_default_timezone_set('America/Sao_Paulo');

if(isset($_GET["id"]) and !empty($_GET["id"])){

    //Criando a conexão com o banco de dados
    $mysqli = new mysqli('localhost','root','','qfome');

    mysqli_query($mysqli,"SET NAMES 'utf8'");
    mysqli_query($mysqli,'SET character_set_connection=utf8');
    mysqli_query($mysqli,'SET character_set_client=utf8');
    mysqli_query($mysqli,'SET character_set_results=utf8');

    //Recebendo o parâmetro da requisição
    $id = $_GET["id"];

    //Criando a consulta
    $sql = "DELETE FROM produtos WHERE id = ".$id."";

    //Executando a consulta
    $res = $mysqli->query($sql);

    if($res){
        echo json_encode(array("Status"=>"Ok","Mensagem"=>"Excluído com sucesso!"));
    }else{
        echo json_encode(array("Status"=>"Erro","Mensagem"=>"Não consegui excluir!"));
    }
        
    $mysqli->close();
    
}else{
    echo json_encode(array("Status"=>"Erro","Mensagem"=>"Parâmetro não recebido!"));
}
?>