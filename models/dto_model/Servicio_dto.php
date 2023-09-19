<?php
    class Servicio_dto{
        private $idServicios;
        private $nombreServicio;
        private $precioServicio;
        public function __construct($nombreServicio,$precioServicio){
            $this->nombreServicio=$nombreServicio;
            $this->precioServicio=$precioServicio;
        }
        public function setIdServicio($idServicios){
            $this->idServicios=$idServicios;
        }
        public function getIdServicio(){
            return $this->idServicios;
        }
        public function setNombreServico($nombreServicio){
            $this->nombreServicio=$nombreServicio;
        }
        public function getNombreServicio(){
            return $this->nombreServicio;
        }
        public function setPrecioServicio($precioServicio){
            $this->precioServicio=$precioServicio;
        }
        public function getPrecioServicio(){
            return $this->precioServicio;
        }
    }

?>