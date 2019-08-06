<?php
    //classe generica Crud
    //importar a classe
    require_once("../../functions/connection.class.php");

    abstract class Crud{
        //Atributos
        private $tabela;

        //constructor
        public function __construct($tabela){
            $this->tabela=$tabela;
        }

        //metodos de selecao de tabelas
        public function select(){
            $sql    = "select * from".$this->tabela.";";
            return mysqli_fetch_array($this->execute_query($sql));
        }

        //metodo de execusao consultas 
        public function excute_query($sql){
            $conn       = new Connectio;
            $conn->openConection();
            $executed   = mysqli_query($conn->getConnection(),$sql) or die("ERRO:".mysqli_error($conn->getConnection())."na query".$sql);
            $conn->closeConnection();
            return $executed;
        }
    }
?>