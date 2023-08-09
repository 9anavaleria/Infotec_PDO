 <?php 
	class Rol_dao{
		private $pdo;
		public function __construct(){
			try {
				$db = new DataBase();
                $this->pdo = $db->connection();	
                
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}		
		public function verRolDao(){
			$sql = "SELECT * FROM ROLES;";
			$resultado = $this->pdo->query($sql);
			$ver = $resultado->fetchAll();
			return $ver;
		}
		public function consultarRolDao($codigoRol){
			$sql = "SELECT * FROM ROLES where id_rol='$codigoRol'";
			
			$resultado = $this->pdo->query($sql);
			
			$consulta = $resultado->fetchAll();
			
			return $consulta;
		}
		public function createRolDao($rol_dto){
			try {
				$sql = "INSERT INTO roles (`id_rol`, `nombre_rol`) VALUES (?,?)";
				$resultado = $this->pdo->prepare($sql);
				$resultado->execute(array($rol_dto->getCodigoRol(),$rol_dto->getNombreRol()));
				return $resultado->rowCount();
			} catch (Exception $e) {
				die("....".$e->getMessage());	
			}
		}
		public function modificarRolDao($rol_dto){
			try {
				$sql = "UPDATE roles set nombre_rol=? where id_rol=?";
				$resultado = $this->pdo->prepare($sql);
				$resultado->execute(array($rol_dto->getNombreRol(),$rol_dto->getCodigoRol()));
				
				return $resultado->rowCount();
				
			} catch (Exception $e) {
				die("....".$e->getMessage());	
			}
		}
		public function eliminarRolDao($rolid){
			try {
				$sql = "DELETE from roles where id_rol=?";
				$resultado = $this->pdo->prepare($sql);
				$resultado->execute(array($rolid));
				return $resultado->rowCount();
			}
			catch (Exception $e) {
				die("....".$e->getMessage());	
			}
		}
	}

 		
?> 
