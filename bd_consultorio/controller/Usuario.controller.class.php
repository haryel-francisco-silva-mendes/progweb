<?php


//Inclui a classe genérica CRUD
require_once("../../function/crud.class.php");
class UsuarioController extends Crud {

    // ATRIBUTOS
    private $tabelafilha = "usuario";

    //Método construtor
    public function __construct() {
    //Passa como parâmetro a tabela
        parent::__construct($this->tabelafilha);
    }

    //metodo de listagem
    public function consultaDoUsuario($expressao){
        $sql = "SELECT * FROM ".$this->tabelafilha." AS con 
        INNER  JOIN  medico AS med ON med.id_usuario = con.id_usuario 
        WHERE med.nome LIKE   '".$expressao."%'" ;
        return $this->execute_query($sql);
    }
//talvez esteja errado*******************************************************************************************************************************************************************
        public function usuarioAtivo(){
            $ativo = "SELECT usr.status,
            med.*
            FROM medicos As med
            INNER JOIN usuario AS usr ON med.id=usr.id
            WHERE med.status =1";
        }

    }

?>

