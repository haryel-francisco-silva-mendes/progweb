<?php
    ini_set('display_errors',1);
    ini_set('log_errors',1);
    ini_set('errors_log',dirname(__FILE__).'/error_log.txt');
    error_reporting(E_ALL);

    //INFORMANDO O CONTENT TYPE
    //esse codigo é para forcar o retorno em json, pois algumas aplicacoes podem dar erros se o mesmo nao for informado

    header("Content-type:text/json");

    //DEFININDO TIME ZONE
    date_default_timezone_set('America/Sao_Paulo');

    //CRIANDO CONEXÃO
    $mysqli = new mysqli('localhost','root','','qfome');

    mysqli_query($mysqli,"SET NAMES,'utf-8'");
    mysqli_query($mysqli,'SET character_set_connection-utf8');
    mysqli_query($mysqli,'SET character_set_cliente=utf8');
    mysqli_query($mysqli,'SET character_set_results=utf8');


    if(isset($_GET['search'])and !empty($_GET["search"])){

        $search     =   $_GET["search"];
        
        $sql    =    "SELECT * FROM produtos WHERE (produtos.nome LIKE '%".$_GET['search']."%' OR produtos.descricao LIKE '%".$_GET['search']."%')
                      AND status = 1 ORDER BY nome" ;
                      
        
    }else{
         //CRIANDO CONSULTA
        $sql = "SELECT * FROM produtos ORDER BY nome";
    }
   

    //EXECUTANDO CONSULTAS
    $res = $mysqli->query($sql);

    //CRIANDO ARRAY PARA JSON
    $produtos = array();

    //EXIBINDO OS REGISTROS
    while($row = mysqli_fetch_array($res)){
        $produtos[] = array ("id"=>$row["id"],
                            "nome"=>$row['nome'],
                            "descricao"=>$row['descricao'],
                            "valor"=>$row['valor'],
                            "url"=>$row['url'],
                            "status"=>$row['status']);
    }

    echo json_encode($produtos);

    $mysqli->close();
  


?>

  

