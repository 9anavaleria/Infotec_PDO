<?php
class ListaServicios_dto{
    private $idListaS;
    private $idFac;
    private $idServicio;
    private $cantServicio;
    private $valorServicio;
     /* SOBRECARGA DE CONSTRUCTORES */
        // Constructor
        public function __construct( $idFac, $idServicio, $cantServicio, $valorServicio){
			$this->idFac = $idFac;
			$this->idServicio= $idServicio;
            $this->cantServicio = $cantServicio;
            $this->valorServicio = $valorServicio;
		}
        /* MÉTODOS DE ACCESO: SETTER Y GETTERS*/
        // Código Id Factura
        public function setIdListS($idListaS){
            $this->idListaS = $idListaS;
        }
        public function getIdListS(){
            return $this->idListaS;
        }
        public function setIdFac($idFac){
            $this->idFac = $idFac;
        }
        public function getIdFac(){
            return $this->idFac;
        }
        // Id Usuario
        public function setIdServicio($idServicio){
            $this->idServicio= $idServicio;
        }
        public function getIdServicio(){
            return $this->idServicio;
        }
        // Id Cliente
        public function setCantServicio($cantServicio){
            $this->cantServicio = $cantServicio;
        }
        public function getCantServicio(){
            return $this->cantServicio;
        }
        public function setValorServicio($valorServicio){
            $this->valorServicio = $valorServicio;
        }
        public function getValorServicio(){
            return $this->valorServicio;
        }
}
?>