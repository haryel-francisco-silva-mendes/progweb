<?php
    //inclui classe Crud
    require_once("../../functions/Crud.class.php");

    class TipoController extends Crud{
    //Atributos
        private $tabelafilha = "tipo";

        //metodo construtor
        public function __construct(){
            //passa tabela como patametro
            parent::__construct($this->tabelafilha);
        }
    }
?>