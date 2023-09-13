<?php
class ListaProducto_dto{
    private $idListP;
    private $idFac;
    private $idProducto;
    private $cantProducto;
    private $valorProducto;
     /* SOBRECARGA DE CONSTRUCTORES */
        // Constructor
        public function __construct($idFac, $idProducto, $cantProducto, $valorProducto){
			$this->idFac = $idFac;
			$this->idProducto= $idProducto;
            $this->cantProducto = $cantProducto;
            $this->valorProducto = $valorProducto;
		}
        /* MÉTODOS DE ACCESO: SETTER Y GETTERS*/
        // Código Id Factura
        public function setIdListP($idListP){
            $this->idListP = $idListP;
        }
        public function getIdListP(){
            return $this->idListP;
        }
        public function setIdFac($idFac){
            $this->idFac = $idFac;
        }
        public function getIdFac(){
            return $this->idFac;
        }
        // Id Usuario
        public function setIdProduct($idProducto){
            $this->idProducto= $idProducto;
        }
        public function getIdProducto(){
            return $this->idProducto;
        }
        // Id Cliente
        public function setCantProducto($cantProducto){
            $this->cantProducto = $cantProducto;
        }
        public function getCantProducto(){
            return $this->cantProducto;
        }
        public function setValorProducto($valorProducto){
            $this->valorProducto = $valorProducto;
        }
        public function getValorProducto(){
            return $this->valorProducto;
        }
}
?>