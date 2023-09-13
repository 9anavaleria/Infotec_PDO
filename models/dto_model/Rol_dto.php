<?php
    class Rol_dto{
        /* ATRIBUTOS */        
        private $codigoRol;
        private $nombreRol;
        // Constructor
        public function __construct($codigoRol,$nombreRol){
			$this->codigoRol = $codigoRol;
			$this->nombreRol = $nombreRol;
		}
        /* MÉTODOS DE ACCESO: SETTER Y GETTERS*/
        // Código Rol
        public function setCodigoRol($codigoRol){
            $this->codigoRol = $codigoRol;
        }
        public function getCodigoRol(){
            return $this->codigoRol;
        }
        // Nombre Rol
        public function setNombreRol($nombreRol){
            $this->nombreRol = $nombreRol;
        }
        public function getNombreRol(){
            return $this->nombreRol;
        }


    }

?>