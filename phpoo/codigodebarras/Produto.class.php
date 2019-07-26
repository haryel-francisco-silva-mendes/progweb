<?php
class Produto{

    // ATRIBUTOS
    private $id;
    private $nome;
    private $descricao;
    private $sku;
    private $ean;
    private $valorunitario;
    private $id_categoria;

    // MÉTODO CONSTRUTOR
    function __construct($p1,$p2,$p3,$p4,$p5,$p6,$p7) {
        $this->setId($p1);
        $this->setNome($p2);
        $this->setDescricao($p3);
        $this->setSku($p4);
        $this->setEan($p5);
        $this->setValorunitario($p6);
        $this->setId_categoria($p7);
        return $this;
    }

    // MÉTODOS GETTERS E SETTERS
    
    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getSku(){
        return $this->sku;
    }

    public function setSku($sku){
        $this->sku = $sku;
    }

    public function getEan(){
        return $this->ean;
    }

    public function setEan($ean){
        $this->ean = $ean;
    }


    public function getValorunitario(){
        return $this->valorunitario;
    }

    public function setValorunitario($valorunitario){
        $this->valorunitario = $valorunitario;
    }

    public function getId_categoria(){
        return $this->id_categoria;
    }

    public function setId_categoria($id_categoria){
        $this->id_categoria = $id_categoria;
    }
}
?>
