<?php 
	class Usuario_dao{
		private $pdo;
		public function __construct(){
			try {
				$db = new DataBase();
				$this->pdo = $db->connection();				

			} catch (Exception $e) {
				die($e->getMessage());
			}
		}	
		public function verUsuarioDao(){
			$sql = "SELECT  pass_usuario,u.telefono_usuario,u.correo_usuario,u.apellidos_usuario,u.nombres_usuario,u.id_usuario,r.nombre_rol FROM usuarios u inner join roles r on r.id_rol=u.id_rol;";
			$resultado = $this->pdo->query($sql);
			$ver = $resultado->fetchall();
			return $ver;
		}
		public function consultarUsuarioDao($idUsuario){
			$sql = "SELECT * From usuarios where id_usuario=$idUsuario";
			$resultado = $this->pdo->query($sql);
			$consulta = $resultado->fetchAll();
			return $consulta;
		}
		public function crarUsuarioDao($usuario_dto){
			try{
				$sql = "INSERT INTO usuarios (`id_rol`,`id_usuario`,`nombres_usuario`,`apellidos_usuario`,`correo_usuario`,`telefono_usuario`,`pass_usuario`) VALUES (?, ?, ?, ?, ?, ?, ?)";
				$resultado = $this->pdo->prepare($sql);
				
				$resultado->execute(array($usuario_dto->getIdRol(), $usuario_dto->getIdUsuario(), $usuario_dto->getNombresUsuario(), $usuario_dto->getApellidosUsuario(),$usuario_dto->getCorreoUsuario(), $usuario_dto->getTelefonoUsuario(),$usuario_dto->getPassUsuario()));
				
				return $resultado->rowCount();
			}
			catch (Exception $e) {
				die("....".$e->getMessage());	
			}
		}
		public function modificarUsuarioDao($usuario_dto){
			try{
				$sql = "UPDATE usuarios SET id_rol=?, nombres_usuario=? ,apellidos_usuario=?,correo_usuario=?,telefono_usuario=?, pass_usuario=? where id_usuario=?";
				$resultado = $this->pdo->prepare($sql);
				$resultado->execute(array($usuario_dto->getIdRol(), $usuario_dto->getNombresUsuario(), $usuario_dto->getApellidosUsuario(),$usuario_dto->getCorreoUsuario(), $usuario_dto->getTelefonoUsuario(),$usuario_dto->getPassUsuario(),$usuario_dto->getIdUsuario()));
				return $resultado->rowCount();
			}
			catch (Exception $e) {
				die("....".$e->getMessage());	
			}
		}
		public function eliminarUsuarioDao($id){
			try{
				$sql = "DELETE FROM usuarios WHERE id_usuario=?";
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
