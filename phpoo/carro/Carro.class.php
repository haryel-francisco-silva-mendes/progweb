<?php

        class Carro{
        private $marca;
        private $anodefabricacao;
        private $modelo;
        private $cor;
        private $ligado;
        private $velocidade;
        private $velocidademaxima;

        //get e set das funcao

        public function getMarca(){
            return $this->$marca;
        }
        public function setMarca($marca){
            $this->marca = $marca;
        }

        public function getAnodefabricacao(){
            return $this->anodefabricacao;
        }
        public function setAnodefabricacao($anodefabricacao){
            $this->anodefabricacao = $anodefabricacao;
        }

        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo($modelo){
            $this->modelo = $modelo;
        }

        public function getCor(){
            return $this->cor;
        }
        public function setCor($cor){
            $this->cor = $cor;
        }

        public function getLigado(){
            return $this->ligado;
        }
        public function setLigado($ligado){
            $this->ligado = $ligado;
        }

        public function getVelocidade(){
            return $this->velocidade;
        }
        public function setVelocidade($velocidade){
            $this->velocidade = $velocidade;
        }

        public function getVelocidademaxima(){
            return $this->velocidademaxima;
        }
        public function setVelocidademaxima($velocidademaxima){
            $this->velocidademaxima = $velocidademaxima;
        }

        //Ligar e Desligar o Carro
        public function ligardesligar(){
            echo"INICIANDO INGNIÇÃO<br>";
            echo"STATUS atual:".$this->ligado."<br>";
            if($this->ligado==false){
                $this->ligado=true;
                echo"Ligando o carro...".$this->ligado."<br>";
            }else{
                $this->ligado=false;
                echo"Desligando o carro...".$this->ligado."<br>"; 
            }
            echo "FINALIZANDO A INGNIÇÃO<br>";
            echo"================================================================================================== <br><br>";
        }

        //acelerar
        public function acelerar(){
            echo "INICIANDO ACELERACAO<br>";
            echo "velocidade atual: ".$this->velocidade."<br>";
            echo "velocidade atual: ".$this->velocidademaxima."<br>";
            if($this->ligado==true){
                while($this->velocidade<$this->velocidademaxima){
                    echo "ACELERANDO...".$this->velocidade."<br>";
                    $this->velocidade++;
                }    
            }else{
                echo"O CARRO ESTA DELISGADO<br>";
            }
            echo"FINALIZANDO ACELERAÇÃO";
            echo"=================================================================================================== <br><br>";
        
        }

        //frear
        public function frear($velocidade){
            if($velocidade>$velocidademaxima){
                $velocidade--;
            }
        }

   

    }

?>