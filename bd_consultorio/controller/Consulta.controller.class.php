<?php


//Inclui a classe genérica CRUD
require_once("../../function/crud.class.php");
class consultaController extends Crud {

    // ATRIBUTOS
    private $tabelafilha = "consulta";

    //Método construtor
    public function __construct() {
    //Passa como parâmetro a tabela
        parent::__construct($this->tabelafilha);
    }

    //metodo de listagem
    public function consultaDoMedico($datadaconsulta,$id_medico){
        $sql = "SELECT * FROM ".$this->tabelafilha." AS con 
        INNER  JOIN  medico AS med ON med.id_medico = con.id_medico 
        WHERE con.id_medico = ".$id_medico." AND con.datadaconsulta BETWEEN '".$datadaconsulta." 00:00:00' AND '".$datadaconsulta." 23:59:59';
        ";
        return $this->execute_query($sql);
    }
}
?>