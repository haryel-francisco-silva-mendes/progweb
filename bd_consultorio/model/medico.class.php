<?php
    class Medico{
        private $id_medico;
        private $nome;
        private $telefone;
        private $celular;
        private $email;

        function __construct($p1,$p2,$p3,$p4,$p5){
            $this->setId_medico($p1);
            $this->setNome($p2);
            $this->setTelefone($p3);
            $this->setCelular($p4);
            $this->setEmail($p5);

            return $this;
        }

        public function getId_medico(){
            return $this->id_medico;
        }
        public function setId_medico(){
            $this->id_medico = $id_medico;
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome(){
            $this->nome = $nome;
        }

        public function getCelular(){
            return $this->celular;
        }
        public function setCelular(){
            $this->celular = $celular;
        }

        public function getTelefone(){
            return $this->telefone;
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
    }
?>