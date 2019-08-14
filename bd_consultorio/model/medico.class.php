<?php
    class Paciente {

        // ATRIBUTOS
        private $id_medico;
        private $id_usuario;
        private $telefone;
        private $celular;
        private $nome;
        private $email;
       
        // MÉTODO CONSTRUTOR
        function __construct($p1,$p2,$p3,$p4,$p5,$p6) {
    
            $this->setId_medico($p1);
            $this->setTelefone($p2);
            $this->setCelular($p3);
            $this->setNome($p4);
            $this->setEmail($p5);
            $this->setId_usuario($p6);
            return $this;
        }
    
        // MÉTODOS GETTERS E SETTERS
        
        public function getId_medico(){
            return $this->id_medico;
        }
    
        public function setId_medico($id_medico){
            $this->id_medico = $id_medico;
        }
    
        public function getCelular(){
            return $this->celular;
        }
    
        public function setCelular($celular){
            $this->celular = $celular;
        }
    
        public function getTelefone(){
            return $this->telefone;
        }
        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }
    
        public function getNome(){
            return $this->nome;
        }
    
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getId_usuario(){
            retun $this->id_usuario;
        }
        public function setId_usuario( $Id_usuario){
            $this->id_usuario =  $id_usuario;
        }
    
    }
?>