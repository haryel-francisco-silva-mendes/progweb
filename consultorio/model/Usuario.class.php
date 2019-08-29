
<?php
    class usuario{
        private $id_usuario;
        private $senha;
        private $status;
        //metodo construtor esta vazio pois usamos a classe reflection para complementa-lo
        function __construct() {}

        //getters e setters

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
    }   
?>
