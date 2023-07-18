<?php
    class Producto_dto{
        private $idCategoria;
        private $idProducto;
        private $nombreProducto;
        private $precioProducto;
        private $existProducto;

        public function __construct(){
			$a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f='__construct'.$i)) {
				call_user_func_array(array($this, $f), $a);
                
			}
            
		}
        
        // Constructor
        public function __construct5($idCategoria,
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
        public function setIdCategoria($idCategoria){
            $this->idCategoria = $idCategoria;
        }
        public function getIdCategoria(){
            return $this->idCategoria;
        }
        public function setIdProducto($idProducto){
            $this->idProducto = $idProducto;
        }
        public function getIdProducto(){
            return $this->idProducto;
        }
        public function setNombreProducto($nombreProducto){
            $this->nombreProducto =$nombreProducto;
        }
        public function getNombreProducto(){
            return $this->nombreProducto;
        }
        public function setPrecioProducto($precioProducto){
            $this ->precioProducto= $precioProducto;
        }
        public function getPrecioProducto(){
            return $this ->precioProducto;
        }
        public function setExistProducto($existProducto){
            $this -> existProducto=$existProducto;
        }
        public function getExistProducto(){
            return $this -> existProducto;
        }
        

    }

?>