<?php
    class Servicios_dao{
        private $pdo;
        
		public function __construct(){
			try {
				$this->pdo = Database::connection();				
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}	
        public function createServicio($servicio_dto){
            try {
                $sql='INSERT INTO servicios VALUES (
                    '.$servicio_dto->getIdServicio().',
                    "'.$servicio_dto->getNombreServicio().'",'.$servicio_dto->getPrecioServicio().')';
                    
                    mysqli_query($this->pdo,$sql);
               
                } catch (Exception $e) {
                    die("....".$e->getMessage());	
                }
        }
        public function readServicioDao(){
            try{
                $sql='SELECT * FROM servicios';
                $dbh = mysqli_query($this->pdo,$sql);
 				return $dbh;
 			} catch (Exception $e) {
 				die($e->getMessage());
            }
        }
        public function consultarServicioDao($servicio){
            try {
                $sql='SELECT * From servicios where id_servicios='.$servicio.'';
                $dbh = mysqli_query($this->pdo,$sql);
 				return mysqli_fetch_row($dbh);
 			} catch (Exception $e) {
 				die($e->getMessage());
            }
        }
        public function eliminarServicioDao($servicioid){
            try {
                $sql='DELETE FROM servicio WHERE id_servicios='.strval($servicioid);
                $dbh = mysqli_query($this->pdo,$sql);
                         return $dbh;
                        
                     } catch (Exception $e) {
                         die($e->getMessage());
            }
        }
        public function actualizarServicioDao($sermod){
            try {
                $sql='SELECT * From servicios where id_servicios="'.$sermod.'"';
                $dbh = mysqli_query($this->pdo,$sql);
 				return mysqli_fetch_row($dbh);
 			} catch (Exception $e) {
 				die($e->getMessage());
            }
        }
        public function modificarServicioDao($idServicios,$nombreServicio,$precioServicio){
            try {
                $sql= "UPDATE servicios SET nombre_servicio='$nombreServicio', precio_servicio='$precioServicio' WHERE id_servicios='$idServicios'";
                $dbh = mysqli_query($this->pdo,$sql);
			return $dbh;
		} catch (Exception $e) {
			die($e->getMessage());
            }
        }
    }
?>