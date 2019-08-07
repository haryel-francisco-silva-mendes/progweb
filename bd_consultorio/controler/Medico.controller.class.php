<?php

//Inclui a classe genérica CRUD
require_once("../../functions/crud.class.php");
class MedicoController extends Crud {

    // ATRIBUTOS
    private $medico = "medico";

    //Método construtor
    public function __construct() {
    //Passa como parâmetro a tabela
        parent::__construct($this->medico);
    }

}
?>