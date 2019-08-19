<?php
class Medico {

    // ATRIBUTOS
    private $id_medico;
    private $nome;
    private $telefone;
    private $celular;
    private $email;

    // MÉTODO CONSTRUTOR
    function __construct($p1,$p2,$p3,$p4,$p5) {

        $this->setId_medico($p1);
        $this->setNome($p2);
        $this->setTelefone($p3);
        $this->setCelular($p4);
        $this->setEmail($p5);

        return $this;
    }

    // MÉTODOS GETTERS E SETTERS
    
    public function getId_medico(){
        return $this->id_medico;
    }

    public function setId_medico($id_medico){
        $this->id_medico = $id_medico;
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
