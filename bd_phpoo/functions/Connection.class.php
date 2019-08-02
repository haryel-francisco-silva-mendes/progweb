<?php
//calsse de conexão com o banco de dados utilizando Mysqli inicialmente; professor:Joao Ricardo Gomes dos Reis 
    date_default_timezone_set("Brazil/East");
    class Connection{
        private $connection;
        private $parameters = array("host"=> "localhost", "user"=> "root", "password"=>"", "database"=>"bd_caixa");
        //metodo de abertura de conexao
        public function openConnection(){
            $this->connection   = mysqli_connect($this->parameters["host"], $this->parameters["user"], $this->parameters["password"]);
            if(!$this->connection){
                die("erro ao estabelecer conexão com a vase de dados");
            }else{
                $this->selectDatabase();
            }
        }

        //metodo de seleção do database 
        private function selectDatabase(){
            $database= mysqli_select_db($this->connection, $this->parameters["database"]);
            if(!$database){
                die("Base de dados nao encontrada");
            }
            mysqli_query($this->connection, "SET NAMES 'utf8'");
            mysqli_query($this->connection, 'SET character_set_connection=utf8');
            mysqli_query($this->connection, 'SET character_set_client=utf8');
            mysqli_query($this->connection, 'SET charset_set_results=utf8');
        }

        //metodo de retorno de conexão
        public function getConnection(){
            return $this->connection;
        }

        //metodo de fechamento da conexao

        public function closeConnection(){
            mysqli_close($this->connection);
        }
    }
?>