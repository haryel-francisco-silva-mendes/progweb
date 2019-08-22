<?php
    class postagem{
        private $id_post ;
        private $data ;
        private $titulo ;
        private $conteudo ;
        private $status ;
        private $imagem_destaque ;
        private $video_destque ;
        private $id_usuario ;

        function __construct($id_post,$data,$titulo,$conteudo,$status,$imagem_destaque,$video_destaque,$id_usuario){}

            public function getId_post (){
                return this->id_post ;
            }
            public function setId_post ($id_post){
                $this->id_post = $id_post ;
            }

            public function getData (){
                return this->data ;
            }
            public function setData ($data){
                $this->data = $data ;
            }

            public function getTitulo (){
                return this->titulo ;
            }
            public function setTitulo ($titulo){
                $this->titulo = $titulo ;
            }

            public function getConteudo (){
                return this->conteudo ;
            }
            public function setConteudo ($conteudo){
                $this->conteudo = $conteudo ;
            }

            public function getStatus (){
                return this->status ;
            }
            public function setStatus ($status){
                $this->status = $status ;
            }

            public function getImagem_destaque(){
                return this->imagem_destaque ;
            }
            public function setImagem_destaque($imagem_destaque){
                $this->imagem_destaque = $imagem_destaque ;
            }

            public function getVideo_destaque (){
                return $this->video_destaque ;
            }
            public function setVideo_destaque ($video_destaque){
                $this->video_destaque = $video_destaque ;
            }

            public function getId_usuario (){
                return this->id_usuario ;
            }
            public function setId_usuario ($id_usuario){
                $this->id_usuario = $id_usuario ;
            }
    }
?>