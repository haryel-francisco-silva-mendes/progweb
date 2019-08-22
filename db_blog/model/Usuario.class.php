<?php
    class usuario {
        private $id_usuario;
        private $nome;
        private $senha ;
        private $email ;
        private $previlegio ;
        private $status ;

        function __construct($id, $nome, $senha, $email){

        }
        //geters e setters
        public function getId_usuario(){
            return $this->id_usuario;
        }
        public function setId_usuario (){
            $this->id_usuario = $id_usuario ;
        }

        public function getNome (){
            return $this->nome ;
        }
        public function setNome (){
            $this->nome = $nome ;
        }

        public function getSenha (){
            return $this->senha ;
        }
        public function setSenha (){
            $this->senha = $senha ;
        }

        public function getEmail (){
            return $this->email ;
        }
        public function setEmail (){
            $this->email = $email ;
        }

        public function getPrevilegio (){
            return $this->previlegio ;
        }
        public function setPrevilegio (){
            $this->previlegio = $previlegio ;
        }

        public function getStatus (){
            return $this->status ;
        }
        public function setStatus (){
            $this->status = $status ;
        }
    }
?>