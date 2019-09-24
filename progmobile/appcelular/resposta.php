
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
        if(isset($_GET["id_usuario"])&& isset($_GET["id_pergunta"])&& isset($_GET["resposta"])){
        $id_usuario     = $_GET["id_usuario"];
        $id_pergunta    = $_GET["id_pergunta"];
        $resposta       = $_GET["resposta"];
        
        $sqlverifica    = "SELECT * FROM responde 
                        WHERE responde.id_usuario = ".$id_usuario." AND 
                        responde.id_pergunta =".$id_pergunta."";

                        $resverifica = $mysqli->query($sqlverifica);
                        
                        
        if(mysqli_num_rows($resverifica)>0){
            
            $resultado = mysqli_fetch_array($resverifica);

            if($resultado["resposta"] == $resposta ){
                echo json_encode(array("Status"=>"erro","Mensagem"=>"ja esta cadastrado!"));
            }else{

                $sql = "UPDATE responde SET
                responde.resposta = '".$resposta."'
                WHERE 
                responde.id_usuario  = ".$id_usuario." AND
                responde.id_pergunta = ".$id_pergunta."";

                $res = $mysqli->query($sql);
                if($res){
                    echo json_encode(array("Status"=>"ok","Mensagem"=>"resposta atualizada"));
                }else{
                    echo json_encode(array("Status"=>"erro","Mensagem"=>"nao conseguiu atualizar"));
                }
            }
        }else{


            //parei nesse ponto precisa terminar de implementar 
        

                $sql = "INSERT INTO responde 
                        (id_usuario,id_pergunta,resposta)
                        VALUES
                        (".$id_usuario.",".$id_pergunta.",'".$resposta."')";

            
                //EXECUTANDO CONSULTAS
                $res = $mysqli->query($sql);

                //CRIANDO ARRAY PARA JSON
                $resposta = array();

                //EXIBINDO OS REGISTROS
                while($row = mysqli_fetch_array($res)){
                        $resposta[] = array ("id"=>$row["id_usuario"],
                                            "nome"=>$row['nome'],
                                            "pontosdousuario"=>$row['pontosdousuario'],
                                            "resposta"=>$row['resposta']
                                        );
                }

                echo json_encode($ranking);

                if($res){
                    echo json_encode(array("Status"=>"ok","Mensagem"=>"resposta cadastrado"));
                }else{
                    echo json_encode(array("Status"=>"Erro","Mensagem"=>"Nao consegui cadastrar"));
                }
        }
            $mysqli->close();
    }else{
        echo json_encode(array("Status"=>"Erro","Mensagem"=>"parametros nao recebidos"));
    }


?>
