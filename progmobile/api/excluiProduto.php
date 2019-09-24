
<?php
   

    ini_set('display_errors',1);
    ini_set('log_errors',1);
    ini_set('errors_log',dirname(__FILE__).'/error_log.txt');
    error_reporting(E_ALL);

    //INFORMANDO O CONTENT TYPE
    //esse codigo é para forcar o retorno em json, pois algumas aplicacoes podem dar erros se o mesmo nao for informado

    header("Content-type:text/json");

    date_default_timezone_set('America/Sao_Paulo');

    if(isset($_GET['id'])and !empty($_GET["id"])){

        $mysqli     =   new mysqli('localhost','root','','qfome');

        mysqli_query($mysqli,"SET NAMES,'utf-8'");
        mysqli_query($mysqli,'SET character_set_connection-utf8');
        mysqli_query($mysqli,'SET character_set_cliente=utf8');
        mysqli_query($mysqli,'SET character_set_results=utf8');

        //RECEBENDO PARAMETROS DE AQUISICAO 
        $id = $_GET["id"];

        //CRIANDO CONSULTA
        $sql = "DELETE FROM produtos WHERE id = ".$id."";

        //EXECUTA CONSULTA
        $res = $mysqli->query($sql);

        if($res){
            echo json_encode(array("Status"=>"ok","Mensagem"=>"Excluido com sucesso!"));
        }else{
            echo json_encode(array("Status"=>"Erro","Mensagem"=>"nao conseguiu excluir"));
        }

        $mysqli->close();
}else{
    echo json_encode(array("Status"=>"Erro","Mensagem"=>"Parametro nao recebido"));
}
?>