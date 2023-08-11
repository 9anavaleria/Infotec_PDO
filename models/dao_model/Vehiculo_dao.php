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
            
            $sql = "SELECT v.id_vehiculo, v.placa_vehiculo, c.nombre_cliente, c.apellido_cliente FROM vehiculos v inner join clientes c on v.id_cliente=c.id_cliente";
            $resultado = $this->pdo->query($sql);
            $verVehiculo = $resultado->fetchAll();
            
            return $verVehiculo;
           
        }
        public function consultarVehiculoDao($idvehiculo){
            $sql = "SELECT * from vehiculos where id_vehiculo='$idvehiculo'";
            $resultado = $this->pdo->query($sql);
            $consulta = $resultado->fetchAll();
            return $consulta; 
        }
        public function crearVehiculoDao($vehiculo_dto){
            try{
                $sql ="INSERT INTO vehiculos(`id_vehiculo`,`id_cliente`,`placa_vehiculo`)VALUES(?,?,?)";
                $resultado = $this->pdo->prepare($sql);
                $resultado->execute(array($vehiculo_dto->getIdVehiculo(), $vehiculo_dto->getCliente(), $vehiculo_dto->getPlaca()));
                
                return $resultado->rowCount();                
                } 
                catch (Exception $e) {
                    die("....".$e->getMessage());	
                }
        }
        public function modificarVehiculoDao($vehiculo_dto){
            try{
                $sql = "UPDATE vehiculos SET  id_cliente=?, placa_vehiculo=? where id_vehiculo=?";
                $resultado = $this->pdo->prepare($sql);
                $resultado->execute(array($vehiculo_dto->getCliente(), $vehiculo_dto->getPlaca(), $vehiculo_dto->getIdVehiculo()));
                return $resultado->rowCount();
            } 
            catch (Exception $e) {
                die($e->getMessage());
    
            }
        }    
        public function eliminarVehiculoDao($placavehiculo){
            try{
                $sql="DELETE FROM vehiculos WHERE id_vehiculo=?";
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
