<?php
class Proveedor_dto{
    private $idProveedor;
    private $nombreProveedor;
    public function __construct(){
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this, $f='__construct'.$i)) {
            call_user_func_array(array($this, $f), $a);
        }
    }
    // Constructor
    public function __construct12($idProveedor,$nombreProveedor){
        $this->id_proveedor = $idProveedor;
        $this->nombre_proveedor=$nombreProveedor;
    }
    public function setIdProveedor($idProveedor){
        $this->id_proveedor =$idProveedor;
    }
    public function getIdProveedor(){
        return $this->id_proveedor;
    }
    public function setNombreProveedor($nombreProveedor){
        $this->nombre_proveedor= $nombreProveedor;
    }
    public function getNombreProveedor(){
        return $this->nombre_proveedor	
;
    }




}
?>