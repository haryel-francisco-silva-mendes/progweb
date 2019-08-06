<?php 
/*
 * 	Descrição do Arquivo
 * 	@author - João Ricardo Gomes dos Reis
 * 	@date - 02/08/2019
 * 	@description  - Classe genérica do Crud
 */

//Importa as classes
require_once("../../functions/connection.class.php");

abstract class Crud {

	//Atributos
    private $tabela;

	//Construtor
    public function __construct($tabela) {
        $this->tabela = $tabela;
    }

    // Método de seleção das tabelas
    public function select() {
        $sql = "select * from ".$this->tabela.";";
        return $this->execute_query($sql);
    }

    // Método de seleção de tabelas com ordenação genérica
    public function selectWithOrderBy($field){
        $sql = "SELECT * FROM ".$this->tabela." ORDER BY ".$field."";
        return $this->execute_query($sql);
    }

    // Método de execução das consultas
    public function execute_query($sql) {
        $conn = new Connection;
        $conn->openConnection();
        $executed = mysqli_query(
                    $conn->getConnection(),
                    $sql)
                    or die("Erro: ". mysqli_error($conn->getConnection()). " na query ". $sql);
        $conn->closeConnection();
        return $executed;
    }
}
?>
