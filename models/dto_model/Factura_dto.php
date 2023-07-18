<?php

class Factura_dto{

    private $idfactura;
    private $idusuario;
    private $idcliente;
    private $placa;
    private $fecha;
    private $antesdeiva;
    private $iva;
    private $total;


     /* SOBRECARGA DE CONSTRUCTORES */
        
        // Constructor de Constructores
		public function __construct(){
			$a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f='__construct'.$i)) {
				call_user_func_array(array($this, $f), $a);
			}
		}
        // Constructor
        public function __construct8($idfactura, $idusuario, $idcliente, $placa, $fecha, $antesdeiva, $iva, $total){
			$this->idfactura = $idfactura;
			$this->idusuario= $idusuario;
            $this->idcliente = $idcliente ;
            $this->placa= $placa ;
            $this->fecha= $fecha;
            $this->antesdeiva= $antesdeiva ;
            $this->iva= $iva ;
            $this->total= $total ;
		}
        /* MÉTODOS DE ACCESO: SETTER Y GETTERS*/
        
        // Código Rol
        public function setIdFactura($idfactura){
            $this->idfactura = $idfactura;
        }
        public function getIdFactura(){
            return $this->idfactura;
        }

        // Nombre Rol
        public function setUsuario($idusuario){
            $this->idusuario= $idusuario;
        }
        public function getUsuario(){
            return $this->idusuario;
        }
        public function setIdCliente($idcliente){
            $this->idcliente = $idcliente;
        }
        public function getIdCliente(){
            return $this->idcliente;
        }

        public function setPlaca($placa){
            $this->placa = $placa;
        }
        public function getPlaca(){
            return $this->placa;
        }

        public function setFecha($fecha){
            $this->fecha = $fecha;
        }
        public function getFecha(){
            return $this->fecha;
        }

        public function setAntIva($antesdeiva){
            $this->antesdeiva = $antesdeiva;
        }
        public function getAntIva(){
            return $this->antesdeiva;
        }

        public function setIva($iva){
            $this->iva = $iva;
        }
        public function getIva(){
            return $this->iva;
        }

        public function setTotal($total ){
            $this->total  = $total ;
        }
        public function getTotal(){
            return $this->total ;
        }
    }





?>