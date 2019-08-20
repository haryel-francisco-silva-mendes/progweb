<?php 
/*
 * 	Descrição do Arquivo
 * 	@author - João Ricardo Gomes dos Reis
 * 	@date - 09/08/2019
 * 	@description  - Classe genérica do Crud
 */

//Importa as classes
require_once("../../functions/Reflection.class.php");
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

    public function save($object){
        $ref    = new Reflection();
        $values = $ref->convert($object);
        $sql    = "INSERT INTO".$this->tabela;
        $sql    = " (".implode(",",$values['fields']).")VALUES (";
        $size   = count($values['fields']);
        $loop   = 1;
        
        for($i = 0 ; $i < $size; $i++){
            $sql .= $ref->get_value_by_type($values['values'][$j]);
            $sql .= ($loop < $size)?",":"";
            $loop++;
        }
        $sql .= ");";

        $this->execute_query($sql);
        $sqlmax     = "select MAX(id_".$this->tabela.") AS ultimo FROM ".$this->tabela;
        $ressave    = $this->execute_query($sqlmax);
        $regsave    = mysqli_fetch_array($ressave);
        return $regsave["ultimo"];
    }

    //metodo de alteracao de informacoes nas tabelas

    public function update($object, $attr){
        id(empty($attr)){ return false; }

        $ref    = new Refection();
        $values = $ref->convert($object);
        $sql    = "UPDATE" . $this->tabela . "SET";
        $size   = count($values['fields']);
        $loop   = 1;
        
        for($J = 0 ; $j < $size ; $j++){
            if($values['fields'][$j] != $attr){
                $sql .= $values['fields'][$j] .'='.$ref->get_value_by_type($values['values'][$j]);
                $sql .= ($loop < $size)? ", ":" ";
            }
            $loop++;
        }

        $atribute = $ref->get_value_by_type($values['values'][array_search($attr, $values['fields'])]);
        $sql     .= "WHERE".$attr."=".$atribute.";";
        return $this->execute_query($sql);
    }

    // Método de seleção de tabelas com ordenação genérica
    public function selectWithWhereAndOrderBy($field,$value,$order){
        $sql = "SELECT * FROM ".$this->tabela." WHERE ".$field." = ".$value." ORDER BY ".$order."";
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
