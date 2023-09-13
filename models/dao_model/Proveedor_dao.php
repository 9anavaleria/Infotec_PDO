<?php
    class Proveedor_dao{
        private $pdo;
        public function __construct(){
			try {
				$db = new DataBase();
				$this->pdo = $db->connection();				

			} catch (Exception $e) {
				die($e->getMessage());
			}
		}
        public function verProveedorDao(){
            $sql= "SELECT * FROM proveedores";
            $resultado = $this->pdo->query($sql);
            $verProveedor = $resultado->fetchall();
            return $verProveedor;
        }
        public function consultarProveedorDao($codigoProv){
            $sql = "SELECT * FROM proveedores where id_proveedor='$codigoProv'";
			
			$resultado = $this->pdo->query($sql);
			
			$consulta = $resultado->fetchAll();
			
			return $consulta;
        }
        public function createProveedorDao($proveedor_dto){
            try {
                $sql = "INSERT INTO proveedores (`id_proveedor`, `nombre_proveedor`, `telefono_proveedor`) VALUES (?,?,?)";
				$resultado = $this->pdo->prepare($sql);
				$resultado->execute(array($proveedor_dto->getIdProveedor(),$proveedor_dto->getNombreProveedor(),$proveedor_dto->gettelefonoProveedor()));
				return $resultado->rowCount();
            } catch (Exception $e) {
                die($e->getMessage());   
            }
        }
        public function modificarProveedorDao($proveedor_dto){
            try {
                $sql = "UPDATE proveedores SET nombre_proveedor=?, telefono_proveedor=? where id_proveedor=?";
                $resultado = $this->pdo->prepare($sql);
				$resultado->execute(array($proveedor_dto->getNombreProveedor(),$proveedor_dto->gettelefonoProveedor(),$proveedor_dto->getIdProveedor()));
				return $resultado->rowCount();
        } catch (Exception $e) {
            die($e->getMessage());
            }
        }
        public function eliminarProveedorDao($proveid){
            try {
                $sql="DELETE FROM proveedores WHERE id_proveedor=?";
                $resultado = $this->pdo->prepare($sql);
				$resultado->execute(array($proveid));
				return $resultado->rowCount();
				
 			} catch (Exception $e) {
 				die($e->getMessage());
            }
        }
    }
?>