<?php
ini_set('display_errors',1);
ini_set('log_errors',1);
ini_set('errors_log',dirname(__FILE__).'/error_log.txt');
error_reporting(E_ALL);

//Informando o Content-type
header("Content-type: text/json");

//Definindo o Time zone
date_default_timezone_set('America/Sao_Paulo');

//Criando a conexão com o banco de dados
$mysqli = new mysqli('localhost','root','','qfome');

mysqli_query($mysqli,"SET NAMES 'utf8'");
mysqli_query($mysqli,'SET character_set_connection=utf8');
mysqli_query($mysqli,'SET character_set_client=utf8');
mysqli_query($mysqli,'SET character_set_results=utf8');


//Criando a consulta
if(isset($_GET["search"]) and !empty($_GET["search"])){
    $sql = "SELECT * FROM produtos WHERE 
            (nome LIKE '%".$_GET["search"]."%' OR 
            descricao LIKE '%".$_GET["search"]."%') AND
            status = 1
            ORDER BY nome";
}else{
    $sql = "SELECT * FROM produtos ORDER BY nome";
}

//Executando a consulta
$res = $mysqli->query($sql);

//Criando array para o JSON
$produtos = array();

//Exibindo os registros
while($row = mysqli_fetch_array($res)){
    
    $produtos[] = array("id"=>$row["id"],
                        "nome"=>$row["nome"],
                        "descricao"=>$row["descricao"],
                        "valor"=>$row["valor"],
                        "url"=>$row["url"],
                        "status"=>$row["status"]);
}
echo json_encode($produtos);
$mysqli->close();
?>