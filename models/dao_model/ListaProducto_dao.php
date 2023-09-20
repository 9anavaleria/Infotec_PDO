<?php
    class ListaProducto_dao{
        private $pdo;
        
		public function __construct(){
			try {
				$db = new DataBase();
				$this->pdo = $db->connection();				

			} catch (Exception $e) {
				die($e->getMessage());
			}
		}	
        public function crearListaProduto($listaProducto_dto){
            try {
                if($this->verificarExistenciaProduto($listaProducto_dto)){
                    $sql = "INSERT INTO `lista_productos_f`(`id_factura`, `id_producto`, `cantidad`, `valor_venta`) VALUES (?,?,?,?)";
                    $resultado = $this->pdo->prepare($sql);
                    $resultado->execute(array($listaProducto_dto->getIdFac(),$listaProducto_dto->getIdProducto(),$listaProducto_dto->getCantProducto(),$listaProducto_dto->getValorProducto()));
                    return $resultado->rowCount();
                }
            }catch (Exception $e) {
                die("....".$e->getMessage());	
            }
        }
        public function verificarExistenciaProduto($listaProducto_dto){
            $sql = "SELECT  exist_producto FROM productos WHERE id_producto=?";
            $resultado = $this->pdo->prepare($sql);
            $resultado->execute(array($listaProducto_dto->getIdProducto()));
            $value =$resultado->fetch();
            $cantidad = $value['exist_producto'] - $listaProducto_dto->getCantProducto();
            try {
                $sql = "UPDATE productos SET
                exist_producto=? WHERE id_producto=?";
                $resultado = $this->pdo->prepare($sql);
                $resultado->execute(array($cantidad,$listaProducto_dto->getIdProducto()));
                                
                return $resultado->rowCount()>=1 ?true:false;
            } 
            catch (Exception $e) {
				die("....".$e->getMessage());	
			}
        }


    }
?>
