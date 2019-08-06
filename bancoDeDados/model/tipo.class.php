<?php
    class Tipo{
        //atributos
        $id_tipo;
        $nome;
        $descricao;
        $ativo;

        //metodo construtor

        function __construct($p1,$p2,$p3,$p4,){
            $this->id_tipo($p1);
            $this->nome($p2);
            $this->descricao($p3);
            $this->ativo($p4);

            return $this;
        }

        //geters e setters
        public function getId_tipo(){
            return $this->id_tipo;
        }
        public function setId_tipo(){
            $this->id_tipo = $id_tipo;
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome(){
            $this->
        }

        public function getDescricao(){
            return $this->descricao;
        }
    
        public function setDescricao(){
            $this->descricao = $descricao;
        }

        public function getAtivo(){
            return $this->ativo;
        }
    
        public function setAtivo(){
            $this->ativo = $ativo;
        }
    }
?>