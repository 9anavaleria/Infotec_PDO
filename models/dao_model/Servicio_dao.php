<?php
    class Servicio_dao{
        private $pdo;
        
		public function __construct(){
			try {
				$db = new DataBase();
				$this->pdo = $db->connection();				

			} catch (Exception $e) {
				die($e->getMessage());
			}
		}	
        public function verServicioDao(){
            $sql = "SELECT * FROM servicios";
            $resultado = $this->pdo->query($sql);
            $verServicio = $resultado->fetchall();
            return $verServicio;
        }
        public function consultarServicioDao ($idServicio){
            $sql = " SELECT * FROM servicios WHERE id_servicios='$idServicio'";
            $resultado = $this->pdo->query($sql);
			$consulta = $resultado->fetchAll();
			return $consulta;
        }
        public function crearServicioDao ($servicio_dto){
            try {
                $sql = "INSERT INTO servicios (`id_servicios`,`nombre_servicio`,`precio_servicio`) VALUES (?,?,?)";
                $resultado = $this->pdo->prepare($sql);
                $resultado->execute(array($servicio_dto->getIdServicio(),$servicio_dto->getNombreServicio(),$servicio_dto->getPrecioServicio()));
                return $resultado->rowCount();
            }catch (Exception $e) {
                die("....".$e->getMessage());	
            }
        }
        public function modificarServicioDao($servicio_dto){
            try{
                $sql = "UPDATE servicios SET nombre_servicio=?, precio_servicio=? WHERE id_servicios=?";
                $resultado = $this->pdo->prepare($sql);
				$resultado->execute(array($servicio_dto->getNombreServicio(), $servicio_dto->getPrecioServicio(),$servicio_dto->getIdServicio()));
				return $resultado->rowCount();
            }catch (Exception $e) {
				die($e->getMessage());
			}
        }
        public function eliminarServicioDao($id){
            try {
                $sql="DELETE FROM servicios WHERE id_servicios=?";
                $resultado = $this->pdo->prepare($sql);
				$resultado->execute(array($id));
				return $resultado->rowCount();
			}
			catch (Exception $e) {
				die("....".$e->getMessage());	
			}
        }
    }
?>
