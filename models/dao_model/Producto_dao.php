<?php
    class Producto_dao{
        private $pdo;
        public function __construct(){
			try {
				$this->pdo = Database::connection();				
			} catch (Exception $e) {
				die($e->getMessage());
			}
            
		}	
       public function createProducto ($producto_dto){
        try {
            $sql='INSERT INTO productos VALUES(
                '.$producto_dto->getIdCategoria().',
                "'.$producto_dto->getIdProducto().'",
                
                "'.$producto_dto->getNombreProducto().'",
                '.$producto_dto->getPrecioProducto().',
                '.$producto_dto->getExistProducto().'
                )';
                
                mysqli_query($this->pdo,$sql);
                
			} catch (Exception $e) {
				die("....".$e->getMessage());
        }
       } 
       public function readProductoDao(){
        try {
            $sql='SELECT p.id_categoria,p.id_producto,p.nombre_producto,p.precio_producto,p.exist_producto,c.id_categoria,c.nombre_categoria FROM productos p inner join categoria c on p.id_categoria=c.id_categoria ';
        
			$dbh = mysqli_query($this->pdo,$sql);
            return $dbh;
            } catch (Exception $e) {
            die($e->getMessage());
            }
       }
       public function consultarProductoDao($idprodu){
        try {
            $sql= 'SELECT * FROM productos WHERE id_producto='.$idprodu.'';
            $dbh = mysqli_query($this->pdo,$sql);
            return mysqli_fetch_row($dbh);
        } catch (Exception $e) {
            die($e->getMessage());
        }
       }
       public function eliminarProductoDao($elimpro){
        try{
            $sql='DELETE FROM productos WHERE id_producto='.strval($elimpro);
            $dbh = mysqli_query($this->pdo,$sql);
            return $dbh;
           
        } catch (Exception $e) {
            die($e->getMessage());
        }
       }
       public function actualizarProductoDao($actua){
        try{
            $sql ='SELECT * FROM productos WHERE id_producto="' .$actua.'"';
            $dbh = mysqli_query($this->pdo,$sql);
            
				return mysqli_fetch_row($dbh);
					
			} catch (Exception $e) {
				die($e->getMessage());
        }
       }
       public function modificarProductoDao($idCategoria,$idProducto,$nombreProducto,$precioProducto,$existProducto){
        try {
            $sql= "UPDATE productos SET id_categoria='$idCategoria',nombre_producto='$nombreProducto',precio_producto='$precioProducto',
            exist_producto='$existProducto' WHERE id_producto= '$idProducto'";
          
            $dbh = mysqli_query($this->pdo,$sql);
			return $dbh;
		    } catch (Exception $e) {
			die($e->getMessage());
		    }
        }
    }

?>