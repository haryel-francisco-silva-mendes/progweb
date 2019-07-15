<?php
    class Usuario{
        private $email  ;
        private $senha  ;
        private $nome   ;
        private $sobrenome;
        private $ativo  ;
        /*atributos= Caracteristicas da classe representada 
            e
          metodos= comportamento (ações) da classe representada */
          public function getNome(){
              return $this->nome;
          }

          public function setNome($nome){
              $this->nome=$nome;
          }

          public function getSobrenome(){
              return $this->sobrenome;
          }

          public function setsobrenome($sobrenome){
              $this->sobrenome=$sobrenome;
          }

          public function getSenha(){
              return $this->email;
          }

          public function setSenha($senha){
              $this->senha=$senha;
          }

          public function getEmail(){
              return $this->email;
          }

          public function serEamil($email){
              $this->email=$email;
          }

          public function getAtivo(){
              return $this->ativo;
          }

          public function setAtivo($ativo){
              $this->ativo=$ativo;
          }

    }
?>