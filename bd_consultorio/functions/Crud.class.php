<?php

    require_once("../../functions/Connection.class.php");

    abstract class Crud{
        private $tabela;

        public function __construct($tabela){
            $this->tabela = $tabela;
        }

        public function select(){
            $sql = "select *from ".$this->tabela";";
            return $this->execute_query($sql);
        }

        public function selectWithOrderBy($field){
            $sql = "SELECT * FROM".$this->tabela."ORDER BY".$field."";
            return $this->execute_query($sql);
        }

        public function execute_query($sql){
            $conn = new connection;
            $conn->closeConnection();
            return $executed;
        }
    }
?>