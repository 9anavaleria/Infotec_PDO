<?php
class Proveedor_dto{
    private $idProveedor;
    private $nombreProveedor;
    private $telefonoProveedor;
    
    // Constructor
    public function __construct($idProveedor, $nombreProveedor, $telefonoProveedor){
        $this->idProveedor = $idProveedor;
        $this->nombreProveedor = $nombreProveedor;
        $this->telefonoProveedor = $telefonoProveedor;
    }
    public function setIdProveedor($idProveedor){
        $this->idProveedor =$idProveedor;
    }
    public function getIdProveedor(){
        return $this->idProveedor;
    }
    public function setNombreProveedor($nombreProveedor){
        $this->nombreProveedor= $nombreProveedor;
    }
    public function getNombreProveedor(){
        return $this->nombreProveedor;
    }
    public function setTelefonoProveedor($telefonoProveedor){
        $this->telefonoProveedor= $telefonoProveedor;
    }
    public function gettelefonoProveedor(){
        return $this->telefonoProveedor;
    }





}
?>