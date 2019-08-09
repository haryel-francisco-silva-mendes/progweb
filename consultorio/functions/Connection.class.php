<?php
/*
 * 	Descrição do Arquivo
 * 	@author - João Ricardo Gomes dos Reis
 * 	@date - 08/08/2019
 * 	@description  - Classe de Conexão com o BD utilizando Mysqli inicialmente
 */

date_default_timezone_set("Brazil/East");

class Connection{
    //Definição dos atributos
	private $connection;
    private $parameters = array(
                                "host"=>"localhost",
                                "user"=>"root",
                                "password"=>"",
                                "database"=>"bd_consultorio"
                            );
    
    // Método de abertura de conexão
    public function openConnection(){
		$this->connection = mysqli_connect(
                                            $this->parameters["host"],
                                            $this->parameters["user"],
                                            $this->parameters["password"]
                                        );
		if (!$this->connection) {
			die ("Erro ao estabelecer conexão com a base de dados");
		}else{
			$this->selectDatabase();
		}
	}
    
    //Método de seleção do database
	private function selectDatabase(){
		$database = mysqli_select_db($this->connection, $this->parameters["database"]);
		if (!$database) {
			die ("Base de dados não encontrada");
		}
		mysqli_query($this->connection,"SET NAMES 'utf8'");
		mysqli_query($this->connection,'SET character_set_connection=utf8');
		mysqli_query($this->connection,'SET character_set_client=utf8');
		mysqli_query($this->connection,'SET character_set_results=utf8');
	}
    
    //Método de retorno da conexão
	public function getConnection(){
		return $this->connection;
	}
    
    //Método de fechamento da conexão
	public function closeConnection(){
		mysqli_close($this->connection);
	}
}
?>
