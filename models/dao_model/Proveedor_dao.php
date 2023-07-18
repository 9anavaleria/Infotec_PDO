<?php
    class Proveedor_dao{
        private $pdo;
        public function __construct(){
			try {
				$this->pdo = Database::connection();				
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}	
        public function createProveedor($proveedor_dto){
            try{
                $sql='INSERT INTO proveedrores VALUES(
                    '.$proveedor_dto->getIdProveedor().',"'.$proveedor_dto->getNombreProveedor().'"
                    )';
                mysqli_query($this->pdo,$sql);
                
			} catch (Exception $e) {
				die("....".$e->getMessage());
            }
        }
        public function readProveedorDao(){
            try{
                $sql='SELECT * FROM proveedores';
                $dbh = mysqli_query($this->pdo,$sql);
 				return $dbh;
 			} catch (Exception $e) {
 				die($e->getMessage());
            }
        }
        public function consultarProveedorDao($id){
            try {
                $sql='SELECT * FROM proveedores where id_proveedor='.$id.'';
            $dbh = mysqli_query($this->pdo,$sql);
                return mysqli_fetch_row($dbh);
            } catch (Exception $e) {
                die($e->getMessage());   
            }
        }
        public function eliminarProveedoresDao($proveid){
            try {
                $sql='DELETE FROM proveedores WHERE id_proveedor='.strval($proveid);
                $dbh = mysqli_query($this->pdo,$sql);
 				return $dbh;
				
 			} catch (Exception $e) {
 				die($e->getMessage());
            }
        }
        public function actualizarProveedorDao($idprov){
            try {
                $sql = 'SELECT * FROM proveedores where id_proveedor='.$idprov.'';
                $dbh = mysqli_query($this->pdo,$sql);
			return mysqli_fetch_row($dbh);
				
		} catch (Exception $e) {
			die($e->getMessage());
            }
        }
        public function modificarProveedoresDao($idProveedor,$nombreProveedor){
            try {
                $sql="UPDATE proveedores SET nombre_proveedor='$nombreProveedor' where id_proveedor";
                $dbh = mysqli_query($this->pdo,$sql);
			return $dbh;
		} catch (Exception $e) {
			die($e->getMessage());
            }
        }
    }
?>