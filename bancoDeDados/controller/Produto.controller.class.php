<?php
/*
* 	Descrição do Arquivo
* 	@autor - João Ricardo Gomes dos Reis
* 	@data de criação - 05/08/2019
*/

//Inclui a classe genérica CRUD
require_once("../../functions/crud.class.php");
class ProdutoController extends Crud {

    // ATRIBUTOS
    private $tabelafilha = "produtos";

    //Método construtor
    public function __construct() {
    //Passa como parâmetro a tabela
        parent::__construct($this->tabelafilha);
    }

    public function listaProdutoComCategoria($categoria=1){
        $sql =  "
                SELECT
                pro.*,
                cat.nome as categoria
                FROM ".$this->tabelafilha." as pro
                INNER JOIN categoria as cat ON cat.id_categoria = pro.id_categoria
                WHERE cat.id_categoria = ".$categoria."
                ORDER BY pro.nome
                ";
        return $this->execute_query($sql);
    }
}
?>
