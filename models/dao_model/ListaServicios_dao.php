<?php
    class ListaServicios_dao{
        private $pdo;
        
		public function __construct(){
			try {
				$db = new DataBase();
				$this->pdo = $db->connection();				

			} catch (Exception $e) {
				die($e->getMessage());
			}
		}	
        public function crearListaServicio($listaServicios_dto){
            try {
                $sql = "INSERT INTO `lista_servicios_f`(`id_factura`, `id_servicios`, `cantidad`, `valor_venta`) VALUES (?,?,?,?)";
                $resultado = $this->pdo->prepare($sql);
                $resultado->execute(array($listaServicios_dto->getIdFac(),$listaServicios_dto->getIdServicio(),$listaServicios_dto->getCantServicio(),$listaServicios_dto->getValorServicio()));
                return $resultado->rowCount();
            }catch (Exception $e) {
                die("....".$e->getMessage());	
            }
        }
    }
?>