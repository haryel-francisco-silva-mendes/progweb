<?php
    class consulta{
        private $id_medico;
        private $id_paciente;
        private $id_receita;
        private $datadaconsulta;

       public function __construct($p1,$p2,$p3,$p4){
            $this->setId_medico($p1);
            $this->setId_paciente($p2);
            $this->setId_receita($p3);
            $this->getDataDaConsulta($p4);

            return $this;
        }

        public function getId_medico(){
            return $this->id_medico;
        }
        public function setId_medico(){
            $this->id_medico = $id_medico;
        }

        public function getId_paciente(){
            return $this->id_paciente;
        }
        public function setId_paciente(){
            $this->id_paciente = $id_paciente;
        }

        public function getId_receita(){
            return $this->id_receita;
        }
        public function setId_receita(){
            $this->id_receita = $id_receita;
        }

        public function getDataDaConsulta(){
            return $this->datadaconsulta;
        }
        public function getDataDaConsulta(){
            $this->datadaconsulta = $datadaconsulta;
        }
    }
?>