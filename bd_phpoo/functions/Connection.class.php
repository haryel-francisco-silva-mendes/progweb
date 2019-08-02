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
    }
?>