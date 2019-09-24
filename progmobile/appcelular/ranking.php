
<?php
    ini_set('display_errors', 1);
    ini_set('log_errors', 1);
    ini_set('error_log',dirname(__FILE__).'/error_log.txt');
    error_reporting(E_ALL);

    header("content-type:text/json");

    date_default_timezone_set('America/Sao_Paulo');

    $mysqli = new mysqli('localhost','root','','bd_appcelular');

    mysqli_query($mysqli,"SET NAMES,'utf-8'");
    mysqli_query($mysqli,'SET character_set_connection-utf8');
    mysqli_query($mysqli,'SET character_set_cliente=utf8');
    mysqli_query($mysqli,'SET character_set_results=utf8');

    //parei nesse ponto precisa terminar de implementar 
    $sql = "SELECT 
            us.nome,
            res.id_usuario,
            SUM(if(res.resposta = 'a', (per.ponto*-1), per.ponto)) AS pontosdousuario,
            COUNT(res.id_usuario) AS resposta
            FROM responde AS res
            INNER JOIN usuario AS us ON us.id_usuario = res.id_usuario
            INNER JOIN pergunta AS per ON per.id_pergunta = res.id_pergunta
            GROUP BY res.id_usuario
            ORDER BY pontosdousuario DESC";
    //EXECUTANDO CONSULTAS
    $res = $mysqli->query($sql);

    //CRIANDO ARRAY PARA JSON
    $ranking = array();

    //EXIBINDO OS REGISTROS
    while($row = mysqli_fetch_array($res)){
            $ranking[] = array ("id"=>$row["id_usuario"],
                                "nome"=>$row['nome'],
                                "pontosdousuario"=>$row['pontosdousuario'],
                                "resposta"=>$row['resposta']
                            );
    }

    echo json_encode($ranking);

    $mysqli->close();
  
?>