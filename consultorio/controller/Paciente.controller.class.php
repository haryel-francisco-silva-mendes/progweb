<?php
/*
* 	Descrição do Arquivo
* 	@autor - João Ricardo Gomes dos Reis
* 	@data de criação - 09/08/2019
*/

//Inclui a classe genérica CRUD
require_once("../../functions/crud.class.php");
class PacienteController extends Crud {

    // ATRIBUTOS
    private $tabelafilha = "paciente";

    //Método construtor
    public function __construct() {
    //Passa como parâmetro a tabela
        parent::__construct($this->tabelafilha);
    }   

    //******************************************* *

    public function pesquisaDePaciente($expressao){
        $sql = "SELECT * FROM ".$this->tabelafilha."
                WHERE nome LIKE '".$expressao."%'";
        return $this->execute_query($sql);
    }

    //Exibe a quantidade de pacientes cadastrados
    public function contaMedicos(){
        $sql = "SELECT COUNT(*) AS total FROM ".$this->tabelafilha."";
        return $this->execute_query($sql);
    }

    //Método para cadastrar pacientes
    public function cadastraPaciente($p1,$p2,$p3,$p4,$p5){
        $sql =  "INSERT INTO ".$this->tabelafilha."
                (
                    
                    nome,
                    telefone,
                    email,
                    celular,
                    convenio
                )
                VALUES
                (
                    '".$p1."',
                    '".$p2."',
                    '".$p3."',
                    '".$p4."',
                    '".$p5."'
                )
                ";
        return $this->execute_query($sql);
    }

    //Método para editar médicos
    public function editaPaciente($p0,$p1,$p2,$p3,$p4,$p5){
        $sql =  "UPDATE ".$this->tabelafilha."
                SET
                    convenio ='".$p1."'
                    nome = '".$p2."',
                    telefone = '".$p3."',
                    email = '".$p4."',
                    celular = '".$p5."'
                
                WHERE
                    id_paciente = ".$p0."
                ";
        return $this->execute_query($sql);
    }

    
    //Método para excluir médicos
    public function excluiPaciente($p0){
        $sql = "DELETE FROM ".$this->tabelafilha."
                WHERE id_paciente = ".$p0."";
        return $this->execute_query($sql);
    }

    //Método que carrega os dados do médico
    public function carregaPaciente($paciente){
        $sql = "SELECT * FROM ".$this->tabelafilha."
                WHERE id_paciente = ".$paciente."";
        return $this->execute_query($sql);
    }

}
?>
