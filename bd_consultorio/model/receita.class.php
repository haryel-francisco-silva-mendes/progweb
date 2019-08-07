<?php
    class Receita{
        private $id_receita;
        private $descricao;

        function __construct($p1,$p2){
            $this->setId_receita($p1);
            $this->setDescricao($p2);

            return $this;
        }
    }
?>