<?php
    class Servicio_dto{
        private $idServicios;
        private $nombreServicio;
        private $precioServicio;
        public function __construct(){
			$a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f='__construct'.$i)) {
				call_user_func_array(array($this, $f), $a);
			}
            
		}
        public function __construct3($idServicios,$nombreServicio,$precioServicio){
            $this->idServicios=$idServicios;
            $this->nombreServicio=$nombreServicio;
            $this->precioServicio=$precioServicio;
        }
        public function setIdServicio($idServicios){
            $this->idServicios=$idServicios;
        }
        public function getIdServicio(){
            return $this->idServicio;
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