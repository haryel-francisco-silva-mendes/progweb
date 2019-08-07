<?php
    $id_paciente;
    $nome;
    $telefone;
    $celular;
    $email;
    $convenio;

    function __construct($p1,$p2,$p3,$p4,$p5,$p6){
        $this->setId_medico($p1);
        $this->setNome($p2);
        $this->setTelefone($p3);
        $this->setCelular($p4);
        $this->setEmail($p5);
        $this->setConvenio($p6);

        return $this;
    }

    public function getId_paciente(){
        return $this->id_paciente;
    }
    public function setId_paciente(){
        $this->id_paciente = $id_paciente;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome(){
        $this->nome = $nome;
    }

    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone(){
        $this->telefone = $telefone;
    }

    public function getCelular(){
        return $this->celular;
    }
    public function setCelular(){
        $this->celular = $celular;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail(){
        $this->email = $email;
    }
?>