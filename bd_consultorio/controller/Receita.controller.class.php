<?php


//Inclui a classe genérica CRUD
require_once("../../function/crud.class.php");
class ReceitaController extends Crud {

    // ATRIBUTOS
    private $tabelafilha = "receita";

    //Método construtor
    public function __construct() {
    //Passa como parâmetro a tabela
        parent::__construct($this->tabelafilha);
    }
    
}
?>