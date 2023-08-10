<?php
    class Vehiculo_dao{
        private $pdo;
		public function __construct(){
            try {
				$db = new DataBase();
                $this->pdo = $db->connection();	
                
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}	
        public function verVehiculoDao(){
            
            $sql = "SELECT v.placa_vehiculo, c.nombre_cliente, c.apellido_cliente FROM vehiculos v inner join clientes c on v.id_cliente=c.id_cliente";
            $resultado = $this->pdo->query($sql);
            $verVehiculo = $resultado->fetchAll();
            return $verVehiculo;
           
        }
        public function consultarVehiculoDao($idplaca){
            $sql = "SELECT * from vehiculos where placa_vehiculo='$idplaca'";
            $resultado = $this->pdo->query($sql);
            $consulta = $resultado->fetchAll();
            return $consulta; 
        }
        public function crearVehiculoDao($vehiculo_dto){
            try{
                $sql ="INSERT INTO vehiculos(`placa_vehiculo`, `id_cliente`)VALUES(?,?)";
                $resultado = $this->pdo->prepare($sql);
                $resultado->execute(array($vehiculo_dto->getPlaca(), $vehiculo_dto->getCliente()));
                return $resultado->rowCount();                
                } 
                catch (Exception $e) {
                    die("....".$e->getMessage());	
                }
        }
        public function modificarVehiculoDao($vehiculo_dto){
            try{
                $sql = "UPDATE vehiculos SET id_cliente =? where placa_vehiculo=?";
                $resultado = $this->pdo->prepare($sql);
                $resultado->execute(array($vehiculo_dto->getCliente(), $vehiculo_dto->getPlaca()));
                return $ $resultado->rowCount();
            } 
            catch (Exception $e) {
                die($e->getMessage());
    
            }
        }    
        public function eliminarVehiculoDao($placavehiculo){
            try{
                $sql="DELETE FROM vehiculos WHERE placa_vehiculo=?";
                $resultado = $this->pdo->prepare($sql);
                $resultado->execute(array($placavehiculo));
                return $resultado->rowCount();
            } 
            catch (Exception $e) {
                die($e->getMessage());
            }
        }
        
        
    }
    


?>
