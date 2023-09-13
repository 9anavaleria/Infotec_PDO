<?php
class Factura_dto{
    private $idfactura;
    private $idusuario;
    private $idcliente;
    private $placa;
    private $fecha;
    private $total;
     /* SOBRECARGA DE CONSTRUCTORES */
        // Constructor
        public function __construct($idusuario, $idcliente, $placa, $fecha, $total){
			$this->idusuario= $idusuario;
            $this->idcliente = $idcliente ;
            $this->placa= $placa ;
            $this->fecha= $fecha;
            $this->total= $total ;
		}
        /* MÉTODOS DE ACCESO: SETTER Y GETTERS*/
        // Código Id Factura
        public function setIdFactura($idfactura){
            $this->idfactura = $idfactura;
        }
        public function getIdFactura(){
            return $this->idfactura;
        }
        // Id Usuario
        public function setUsuario($idusuario){
            $this->idusuario= $idusuario;
        }
        public function getUsuario(){
            return $this->idusuario;
        }
        // Id Cliente
        public function setIdCliente($idcliente){
            $this->idcliente = $idcliente;
        }
        public function getIdCliente(){
            return $this->idcliente;
        }
        // Placa
        public function setPlaca($placa){
            $this->placa = $placa;
        }
        public function getPlaca(){
            return $this->placa;
        }
        // Fecha
        public function setFecha($fecha){
            $this->fecha = $fecha;
        }
        public function getFecha(){
            return $this->fecha;
        }
        // Total
        public function setTotal($total ){
            $this->total  = $total ;
        }
        public function getTotal(){
            return $this->total ;
        }
    }
?>