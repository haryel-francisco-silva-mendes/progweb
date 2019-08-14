<?php
    <?php
    class Usuario {

        // ATRIBUTOS
        private $id_usuario;
        private $senha;
        private $status;
       
        // MÉTODO CONSTRUTOR
        function __construct($p1,$p2;$p3) {
    
            $this->setId_usuario($p1);
            $this->setSenha($p2);
            return $this;
        }
    
        // MÉTODOS GETTERS E SETTERS
        
        public function getId_usuario(){
            return $this->id_usuario;
        }
    
        public function setId_usuario($id_usuario){
            $this->id_usuario = $id_usuario;
        }
    
        public function getSenha(){
            return $this->senha;
        }
    
        public function setSenha($senha){
            $this->senha = $senha;
        }

        public function getStatus(){
            return $this->status;
        }
    
        public function setStatus($status){
            $this->status = $status;
        }
    
        
?>