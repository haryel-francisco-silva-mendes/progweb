<?php
    class Categoria{
        /*atributos*/
        private $id_categoria;
        private $nome;

        //METODO CONSTRUTOR
        function __construct($p1,$p2){
            $this->setId_categoria($p1);
            $this->setNome($p2);

            return $this;
        }

        //MÈTODOS GETTERS E SETTERS

        public function getId_categoria(){
            return $this->id_categoria;
        }

        public function getNome(){
            return $this->nome;
        }

    }
?>