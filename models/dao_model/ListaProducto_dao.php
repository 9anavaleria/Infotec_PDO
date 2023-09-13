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
                $sql = "INSERT INTO `lista_productos_f`(`id_factura`, `id_producto`, `cantidad`, `valor_venta`) VALUES (?,?,?,?)";
                $resultado = $this->pdo->prepare($sql);
                $resultado->execute(array($listaProducto_dto->getIdFac(),$listaProducto_dto->getIdProducto(),$listaProducto_dto->getCantProducto(),$listaProducto_dto->getValorProducto()));
                return $resultado->rowCount();
            }catch (Exception $e) {
                die("....".$e->getMessage());	
            }
        }
    }
?>
