<?php


//Inclui a classe genérica CRUD
require_once("../../function/crud.class.php");
class PacienteController extends Crud {

    // ATRIBUTOS
    private $tabelafilha = "paciente";

    //Método construtor
    public function __construct() {
    //Passa como parâmetro a tabela
        parent::__construct($this->tabelafilha);
    }
}
?>