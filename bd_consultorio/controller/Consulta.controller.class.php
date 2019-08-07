<?php

//Inclui a classe genérica CRUD
require_once("../../functions/crud.class.php");
class ConsultaController extends Crud {

    // ATRIBUTOS
    private $consulta = "consulta";

    //Método construtor
    public function __construct() {
    //Passa como parâmetro a tabela
        parent::__construct($this->consulta);
    }

}
?>