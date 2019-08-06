<?php
    class atributo{
        //atributos
        private $id_atributo;
        private $nome;
        private $grupo;
        private $ativo;

        //metodo construtor
        function __construct($p1,$p2,$p3,$p4,){
            $this->setId_atributo($p1);
            $this->setNome($p2);
            $this->setGrupo($p3);
            $this->setAtivo($p4);

            return $this;
        }

        public function getId_atributo(){
            return $this->id_atributo;
        }
        public function setId_atributo(){
            $this->id_atributo = $id_atributo;
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome(){
            $this->nome = $nome;
        }

        public function getGrupo(){
            return $this->grupo;
        }
        public function setGrupo(){
            $this->grupo = $grupo;
        }

        public function getAtivo(){
            return $this->ativo;
        }
        public function setAtivo(){
            $this->ativo = $ativo;
        }
    }
?>