<?php


//Inclui a classe genérica CRUD
require_once("../../function/crud.class.php");
class MedicoController extends Crud {

    // ATRIBUTOS
    private $tabelafilha = "medico";

    //Método construtor
    public function __construct() {
    //Passa como parâmetro a tabela
        parent::__construct($this->tabelafilha);
    }
    //pesquisar medico
    public function pesquisaDeMedico($expressao){
        $sql = "SELECT * FROM medico WHERE nome LIKE '".$expressao."%'";
        return $this->execute_query($sql);
    }
    
    public function infoDoMedico(){
        $sql =  "
        SELECT medico.id_medico,
        medico.nome,
        medico.email,
        usuario.senha,
        usuario.status
        FROM medico
        INNER JOIN  usuario ON  medico.id_usuario = usuario.id_usuario
        ";
        return $this->execute_query($sql);
    }
}
?>