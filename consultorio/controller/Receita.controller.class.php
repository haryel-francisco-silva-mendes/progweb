<?php
/*
* 	Descrição do Arquivo
* 	@autor - João Ricardo Gomes dos Reis
* 	@data de criação - 09/08/2019
*/

//Inclui a classe genérica CRUD
require_once("../../functions/crud.class.php");
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
