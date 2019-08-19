<?php
class Consulta {

    // ATRIBUTOS
    private $id_consulta;
    private $datadaconsulta;
    private $id_medico;
    private $id_paciente;
    private $id_receita;

    // MÉTODO CONSTRUTOR
    function __construct($p1,$p2,$p3,$p4,$p5) {

        $this->setId_consulta($p1);
        $this->setdatadaconsulta($p2);
        $this->setid_medico($p3);
        $this->setId_paciente($p4);
        $this->setId_receita($p5);

        return $this;
    }

    // MÉTODOS GETTERS E SETTERS
    
    public function getId_consulta(){
        return $this->id_consulta;
    }

    public function setId_consulta($id_consulta){
        $this->id_consulta = $id_consulta;
    }

    public function getDatadaconsulta(){
        return $this->datadaconsulta;
    }

    public function setDatadaconsulta($datadaconsulta){
        $this->datadaconsulta = $datadaconsulta;
    }

    public function getId_medico(){
        return $this->id_medico;
    }

    public function setId_medico($id_medico){
        $this->id_medico = $id_medico;
    }

    public function getId_paciente(){
        return $this->id_paciente;
    }

    public function setId_paciente($id_paciente){
        $this->id_paciente = $id_paciente;
    }

    public function getId_receita(){
        return $this->id_receita;
    }

    public function setId_receita($id_receita){
        $this->id_receita = $id_receita;
    }

}
?>
