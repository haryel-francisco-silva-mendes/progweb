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
$mysqli = new mysqli('localhost','root','','db_happyworld');

mysqli_query($mysqli,"SET NAMES 'utf8'");
mysqli_query($mysqli,'SET character_set_connection=utf8');
mysqli_query($mysqli,'SET character_set_client=utf8');
mysqli_query($mysqli,'SET character_set_results=utf8');


$sql =  "
        SELECT
        us.nome, 
        res.id_usuario,
        SUM(IF(res.resposta = 'a', (per.pontos*-1),per.pontos)) AS pontosdousuario,
        COUNT(res.id_usuario) AS respostas
        FROM responde AS res
        INNER JOIN usuario AS us ON us.id_usuario = res.id_usuario
        INNER JOIN pergunta AS per ON per.id_pergunta = res.id_pergunta
        GROUP BY res.id_usuario
        ORDER BY pontosdousuario DESC
        ";

//Executando a consulta
$res = $mysqli->query($sql);

//Criando array para o JSON
$ranking = array();

//Exibindo os registros
while($row = mysqli_fetch_array($res)){
    $ranking[] = array("id"=>$row["id_usuario"],
                        "nome"=>$row["nome"],
                        "pontosdousuario"=>$row["pontosdousuario"],
                        "respostas"=>$row["respostas"]);
}
echo json_encode($ranking);
$mysqli->close();
?>