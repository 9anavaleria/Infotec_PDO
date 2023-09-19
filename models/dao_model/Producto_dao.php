<?php
    class Producto_dao{
        private $pdo;
        public function __construct(){
			try {
				$db = new DataBase();
                $this->pdo = $db->connection();	
                
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}
        public function verProductoDao(){
            $sql="SELECT p.id_categoria,p.id_producto,p.nombre_producto,p.precio_producto,p.exist_producto,c.id_categoria,c.nombre_categoria FROM productos p inner join categoria c on p.id_categoria=c.id_categoria;";
            $resultado = $this->pdo->query($sql);
			$verProducto = $resultado->fetchAll();
			return $verProducto;
        }
        public function consultarProductoDao($idProducto){
            $sql= "SELECT * FROM productos WHERE id_producto='$idProducto'";
            $resultado = $this->pdo->query($sql);
            $consulta = $resultado->fetchAll();
            return $consulta; 
        }
        public function crearProductoDao($producto_dto){
            try{
                $sql = "INSERT INTO productos (`id_categoria`,`nombre_producto`,`precio_producto`,`exist_producto`) values (?, ?, ?, ?)";
                $resultado = $this->pdo->prepare($sql);
                $resultado->execute(array($producto_dto->getIdCategoria(),$producto_dto->getNombreProducto(),$producto_dto->getPrecioProducto(),$producto_dto->getExistProducto()));
            	return $resultado->rowCount();
			} 
            catch (Exception $e) {
				die("....".$e->getMessage());	
			}
        }
        public function modificarProductoDao($producto_dto){
            try {
                $sql = "UPDATE productos SET id_categoria=?,nombre_producto=?,precio_producto=?,
                exist_producto=? WHERE id_producto=?";
                $resultado = $this->pdo->prepare($sql);
                $resultado->execute(array($producto_dto->getIdCategoria(),$producto_dto->getNombreProducto(),$producto_dto->getPrecioProducto(),$producto_dto->getExistProducto(),$producto_dto->getIdProducto()));
                
                
                return $resultado->rowCount();
            } 
            catch (Exception $e) {
				die("....".$e->getMessage());	
			}
        }
        public function eliminarProductoDao($productoid){
            try{
                $sql = "DELETE FROM productos WHERE id_producto=?";
                $resultado = $this->pdo->prepare($sql);
                
                $resultado->execute(array($productoid));
                return $resultado->rowCount();
            
            }
            catch (Exception $e) {
                die("....".$e->getMessage());	
            }
        }
        public function precioProductoDao($id){
            $sql = " SELECT precio_producto FROM productos WHERE id_producto='$id'";
            $resultado = $this->pdo->query($sql);
			$consulta = $resultado->fetch();
            echo $consulta[0];
        }
    }

?>
