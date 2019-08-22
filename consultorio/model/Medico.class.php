<?php
class Medico {

    // ATRIBUTOS
    private $id_medico;
    private $id_usuario;
    private $nome;
    private $telefone;
    private $celular;
    private $email;

    // MÉTODO CONSTRUTOR
    function __construct() {

    }

    // MÉTODOS GETTERS E SETTERS
    
    public function getId_medico(){
        return $this->id_medico;
    }

    public function setId_medico($id_medico){
        $this->id_medico = $id_medico;
    }

    public function getId_usuario(){
        return $this->id_usuario;
    }

    public function setId_usuario($id_usuario){
        $this->id_usuario = $id_usuario;
    }


    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getCelular(){
        return $this->celular;
    }

    public function setCelular($celular){
        $this->celular = $celular;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

}
?>
