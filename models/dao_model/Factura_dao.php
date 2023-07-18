<?php
    class Vehiculo_dao{
        private $pdo;
		public function __construct(){
			try {
				$this->pdo = Database::connection();				
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}	
        // leer datos
        public function readVehiculoDao(){
            try{
                $sql = 'SELECT f.id_factuta, f.id_usuarios, f.identificacion_cliente f.placa_vehiculo f.fecha_factura, f.total_antesiva, f.iva_pedido, f.total_servicio, f.total_pedido FROM factura v inner join clientes c on v.id_cliente=f.id_cliente ';
                $dbh = mysqli_query($this->pdo,$sql);
                return $dbh;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }
