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

    $complemento = "";
    $id = $_GET["id"];

    if(isset($_GET["nome"])){
        $complemento .= "nome = '".$_GET["nome"]."', ";
    }
    if(isset($_GET["descricao"])){
        $complemento .= "descricao = '".$_GET["descricao"]."', ";
    }
    if(isset($_GET["valor"])){
        $complemento .= "valor = ".$_GET["valor"].", ";
    }
    if(isset($_GET["url"])){
        $complemento .= "url = '".$_GET["url"]."', ";
    }
    if(isset($_GET["status"])){
        $complemento .= "status = ".$_GET["status"].", ";
    }

    if($complemento!=""){
        
        //Removendo a vírgula do final da string
        $complemento = substr($complemento,0,-2);
        //Criando a consulta
        $sql = "UPDATE produtos 
                SET
                ".$complemento."
                WHERE id = ".$id."";
                echo $sql."<br><br>";
        //Executando a consulta
        $res = $mysqli->query($sql);

        if($res){
            echo json_encode(array("Status"=>"Ok","Mensagem"=>"Produto atualizado"));
        }else{
            echo json_encode(array("Status"=>"Erro","Mensagem"=>"Não consegui atualizar!"));
        }
        
    }else{
        echo json_encode(array("Status"=>"Erro","Mensagem"=>"Campo não recebido!"));
    }

$mysqli->close();
    
}else{
    echo json_encode(array("Status"=>"Erro","Mensagem"=>"Código não recebido!"));
}
?>