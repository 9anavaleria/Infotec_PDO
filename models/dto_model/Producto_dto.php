<?php
    class Producto_dto{
        /* ATRIBUTOS */   
        private $idCategoria;
        private $idProducto;
        private $nombreProducto;
        private $precioProducto;
        private $existProducto;        
        // Constructor
        public function __construct($idCategoria,
        $idProducto,
        $nombreProducto,
        $precioProducto,
        $existProducto){
            $this->idCategoria = $idCategoria;
            $this->idProducto = $idProducto;
            $this->nombreProducto =$nombreProducto;
            $this ->precioProducto= $precioProducto;
            $this -> existProducto=$existProducto;
        }
        // Id Categoría
        public function setIdCategoria($idCategoria){
            $this->idCategoria = $idCategoria;
        }
        public function getIdCategoria(){
            return $this->idCategoria;
        }
        // Id Producto
        public function setIdProducto($idProducto){
            $this->idProducto = $idProducto;
        }
        public function getIdProducto(){
            return $this->idProducto;
        }
        // Nombre Producto
        public function setNombreProducto($nombreProducto){
            $this->nombreProducto =$nombreProducto;
        }
        public function getNombreProducto(){
            return $this->nombreProducto;
        }
        //Precio Producto
        public function setPrecioProducto($precioProducto){
            $this ->precioProducto= $precioProducto;
        }
        public function getPrecioProducto(){
            return $this ->precioProducto;
        }
        // Existencia Producto
        public function setExistProducto($existProducto){
            $this -> existProducto=$existProducto;
        }
        public function getExistProducto(){
            return $this -> existProducto;
        }
    }

?>
