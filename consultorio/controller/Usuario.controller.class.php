<?php
/*
* 	Descrição do Arquivo
* 	@autor - João Ricardo Gomes dos Reis
* 	@data de criação - 09/08/2019
*/

//Inclui a classe genérica CRUD
require_once("../../functions/crud.class.php");
class UsuarioController extends Crud {

    // ATRIBUTOS
    private $tabelafilha = "usuario";

    //Método construtor
    public function __construct() {
    //Passa como parâmetro a tabela
        parent::__construct($this->tabelafilha);
    }

    public function loginDeUsuario($email,$senha){
        $sql = 
               "SELECT *
                FROM ".$this->tabelafilha. "
                INNER JOIN medico ON medico.id_usuario = usuario.id_usuario
                WHERE  medico.email = '$email' and usuario.senha = '$senha'
            ";
        
        $resultado = $this->execute_query($sql);
        $linhas = mysqli_num_rows($resultado);
        if($linhas>0){
            return true;
        }else{return false;}
    }



}
?>
