<?php
/

//Inclui a classe genérica CRUD
require_once("../../functions/crud.class.php");
class consultaController extends Crud {

    // ATRIBUTOS
    private $tabelafilha = "consulta";

    //Método construtor
    public function __construct() {
    //Passa como parâmetro a tabela
        parent::__construct($this->tabelafilha);
    }
}
?>