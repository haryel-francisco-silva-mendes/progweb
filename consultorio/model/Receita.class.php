<?php
class Receita {

    // ATRIBUTOS
    private $id_receita;
    private $descricao;


    // MÉTODO CONSTRUTOR
    function __construct($p1,$p2) {

        $this->setId_receita($p1);
        $this->setDescricao($p2);

        return $this;
    }

    // MÉTODOS GETTERS E SETTERS
    
    public function getId_receita(){
        return $this->id_receita;
    }

    public function setId_receita($id_receita){
        $this->id_receita = $id_receita;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

}
?>
