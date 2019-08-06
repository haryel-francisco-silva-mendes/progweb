<?php
    //inclui a classe generica
    require_once("../../functions/Crud.class.php");

    class AtributoController extends Crud{
        private $tabelafilha = "atributo";
        public function __construct(){
            parent::__construct($this->tabelafilha);
        }
    }
?>