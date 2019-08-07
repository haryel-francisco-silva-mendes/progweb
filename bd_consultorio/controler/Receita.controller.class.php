<?php

//Inclui a classe genérica CRUD
require_once("../../functions/crud.class.php");
class ReceitaController extends Crud {

    // ATRIBUTOS
    private $receita = "receita";

    //Método construtor
    public function __construct() {
    //Passa como parâmetro a tabela
        parent::__construct($this->receita);
    }

}
?>