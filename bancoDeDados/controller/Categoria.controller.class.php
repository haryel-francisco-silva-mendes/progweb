<?php
/*
* 	Descrição do Arquivo
* 	@autor - João Ricardo Gomes dos Reis
* 	@data de criação - 05/08/2019
*/

//Inclui a classe genérica CRUD
require_once("../../functions/crud.class.php");
class CategoriaController extends Crud {

    // ATRIBUTOS
    private $tabelafilha = "categoria";

    //Método construtor
    public function __construct() {
    //Passa como parâmetro a tabela
        parent::__construct($this->tabelafilha);
    }

    public function listaCategoriaDoProduto($produto){
        $sql =  "
                SELECT
                cat.id_categoria as id,
                cat.nome as categoria
                FROM ".$this->tabelafilha." as cat
                INNER JOIN produto as pro ON pro.id_categoria = cat.id_categoria
                WHERE pro.id_produto = ".$produto."
                ";
        return $this->execute_query($sql);
    }
}
?>
