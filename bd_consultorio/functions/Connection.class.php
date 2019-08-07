<?php
    date_default_timezone_set("Brazil/East");

    class Connection{
        //definir atributos
        private $connection;
        private $parameters = array("host"=>"localhost","user"=>"root","password"=>"","database"=>"bd_consultorio");

        //abrir conexao
        public function openPonnection(){
            $this->connection = mysqli_connect($this->parameters["host"],$this->parameters["user"],$this->parameters["password"]);

            if(!$this->connection){
                die("erro de conexao");
            }else{
                $this->selectDatabase();
            }
        }

        //metodo de selecao
        private function selectDatabase(){
            $database = mysqli_select_db($this->connection,$this->parameters["database"]);

            if(!$database){
                die("base de dados nao encontrada");
            }else{
             mysqli_query($this->connection,"SET NAMES'utf-8'"); 
             mysqli_query($this->connection,"SET character_set_connection = utf8");  
             mysqli_query($this->connection,"SET caracter_set_client = utf8");
             mysqli_query($this->connection,"SET character_set_results = utf8");
            }
        }

        //retorno
        public function getConexao(){
            return $this->connection;
        }

        public function closeConnection(){
            mysqli_close($this->connection);
        }
    }
?>