<?php
    class produto{
        //ATRIBUTOS
        private $id_produto;
        private $nome;
        private $descricao;
        private $SKU;
        private $EAN;
        private $valorunitario;
        private $id_categoria;
    }

    function __construct($p1,$p2,$p3,$p4,$p5,$p6,$p7){
        $this->setId_produto($p1);
        $this->setNome($p2);
        $this->setDescricao($p3);
        $this->setSku($p4);
        $this->setEan($p5);
        $this->setValorunitario($p6);
        $this->setId_categoria($p7);
        return $this;
    }

    public function getId_produto(){
        return $this->id_produto;
    }
    public function setId_produto(){
        $this->id_produto   = $id_produto;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome(){
        $this->nome = $nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao(){
        $this->descricao    = $descricao;
    }

    public function getSku(){
        return this->SKU;
    }
    public function setSku(){
        $this->SKU  = $SKU;
    }

    public function getEan(){
        return this->Ean;
    }
    public function setEan(){
        $this->EAN  = $EAN;
    }

    public function getValorunitario(){
        return this->valorunitario;
    }
    public function setValorunitario(){
        $this->valorunitario  = $valorunitario;
    }

    public function getId_categoria(){
        return $this->id_categoria;
    }
    public function setId_categoria(){
        $this->id_categoria   = $id_categoria;
    }
?>