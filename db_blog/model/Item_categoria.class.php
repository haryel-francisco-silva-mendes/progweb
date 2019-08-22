<?php

    class item_categoria{

        private $id_cat;
        private $id_post;

        function __construct($id_cat, ){}

        public function getId_cat (){
            return this->id_cat ;
        }
        public function setId_cat ($id_cat){
            $this->id_cat = $id_cat ;
        }

        public function get (){
            return this->id_post ;
        }
        public function set ($id_post){
            $this->id_post = $id_post ;
        }

    }

?>