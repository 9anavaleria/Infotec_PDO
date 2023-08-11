<?php

class Vehiculo_dto{

    private $idvehiculo;
    private $placavehiculo;
    private $idclientev;

    public function __construct($idvehiculo,$idclientev,$placavehiculo){
        $this->idvehiculo = $idvehiculo;
	    $this->idclientev= $idclientev;
        $this->placavehiculo = $placavehiculo;
	}
        /* MÉTODOS DE ACCESO: SETTER Y GETTERS*/
        // Código vehiculo
    public function setIdVehiculo($idvehiculo){
        $this->idvehiculo = $idvehiculo;
    }
    public function getIdVehiculo(){
        return $this->idvehiculo;
    }

        // cliente
    public function setCliente($idclientev){
        $this->idclientev= $idclientev;
    }
    public function getCliente(){
        return $this->idclientev;
    }
     // placa
     public function setPlaca($placavehiculo){
        $this->placavehiculo = $placavehiculo;
    }
    public function getPlaca(){
        return $this->placavehiculo;
    }
}





?>