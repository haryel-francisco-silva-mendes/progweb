<?php
    ini_set('display_errors', 1);
    ini_set('log_errors',1);
    ini_set('error_log',dirname(__FILE__).'/error_log.txt');
    error_reporting(E_ALL);
    

    header("content-type:text/json");
    date_default_timezone_set('America/Sao_Paulo');

    $mysqli = new mysqli('localhost','root','','bd_appcelular');

    mysqli_query($mysqli,"SET NAMES,'utf-8'");
    mysqli_query($mysqli,'SET character_set_connection-utf8');
    mysqli_query($mysqli,'SET character_set_cliente=utf8');
    mysqli_query($mysqli,'SET character_set_results=utf8');

    $sql = " SELECT * FROM pergunta
             WHERE pergunta.is_visible = 1";
    
    $res = $mysqli->query($sql);

    $pergunta = array();

    while($row = mysqli_fetch_array($res)){
        $pergunta[] = array("id"=>$row['id_pergunta'],
                            "descricao"=>$row['descricao'],
                            "alternativa_a"=>$row['alternativa_a'],
                            "alternativa_b"=>$row['alternativa_b'],
                            "ponto"=>$row['ponto']);
    }

    echo json_encode($pergunta);
    $mysqli->close();
?>

