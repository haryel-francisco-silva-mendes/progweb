<?php
    class Paciente {

        // ATRIBUTOS
        private $id_paciente;
        private $telefone;
        private $celular;
        private $nome;
        private $email;
        private $convenio;
       
        // MÉTODO CONSTRUTOR
        function __construct($p1,$p2,$p3,$p4,$p5) {
    
            $this->setId_paciente($p1);
            $this->setTelefone($p2);
            $this->setCelular($p3);
            $this->setNome($p4);
            $this->setEmail($p5)
            return $this;
        }
    
        // MÉTODOS GETTERS E SETTERS
        
        public function getId_paciente(){
            return $this->id_paciente;
        }
    
        public function setId_paciente($id_paciente){
            $this->id_paciente = $id_paciente;
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

        public function getConvenio(){
            retun $this->convenio;
        }
        public function setConvenio( $convenio){
            $this->convenio =  $convenio;
        }
    
    }
?>