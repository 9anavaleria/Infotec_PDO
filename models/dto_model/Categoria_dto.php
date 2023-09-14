<?php
class Categoria_dto{
    private $idCategoria;
    private $nombreCategoria;
    	public function __construct($nombreCategoria){
        	$this ->nombreCategoria =$nombreCategoria;
	}

        //Id categoria
	public function setIdCategoria($idCategoria){
            $this->idCategoria=$idCategoria;
        }
        public function getIdCategoria(){
            return $this->idCategoria;
        }
        //Nombre categoria
        public function setNombreCategoria($nombreCategoria){
            $this ->nombreCategoria =$nombreCategoria;
        }
        public function getNombreCategoria(){
            return  $this ->nombreCategoria;
        }
    }
?>
