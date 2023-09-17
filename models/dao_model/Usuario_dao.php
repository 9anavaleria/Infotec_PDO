<?php 
	class Usuario_dao{
		private $pdo;
		// Conexión base de datos
		public function __construct(){
			try {
				$db = new DataBase();
				$this->pdo = $db->connection();				
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}	
		public function login($usuario, $pass){
			$sql = "SELECT * FROM usuarios WHERE id_usuario=:usuario AND pass_usuario=:pass";
			
			$resultado = $this->pdo->prepare($sql);
			$resultado->bindValue(':usuario',$usuario);
			$resultado->bindValue(':pass',sha1($pass));
			$resultado->execute();
			$userDb = $resultado->fetch();
			if ($userDb) {
				$user = new Usuario_dto(			
					$userDb['id_rol'],
					$userDb['id_usuario'],
					$userDb['nombres_usuario'],
					$userDb['apellidos_usuario'],
					$userDb['correo_usuario'],
					$userDb['telefono_usuario'],
					$userDb['pass_usuario'],

				);
				return $user;
			} else {
				return false;
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
				
				$resultado->execute(array($usuario_dto->getIdRol(), $usuario_dto->getIdUsuario(), $usuario_dto->getNombresUsuario(), $usuario_dto->getApellidosUsuario(),$usuario_dto->getCorreoUsuario(), $usuario_dto->getTelefonoUsuario(),sha1($usuario_dto->getPassUsuario())));
				
				return $resultado->rowCount();
			}
			catch (Exception $e) {
				die("....".$e->getMessage());	
			}
		}
		public function modificarUsuarioDao($usuario_dto){
			try{
				$sql = "UPDATE usuarios SET id_rol=?, nombres_usuario=? ,apellidos_usuario=?,correo_usuario=?,telefono_usuario=?, pass_usuario=?  where id_usuario=?";
				$resultado = $this->pdo->prepare($sql);
				$resultado->execute(array($usuario_dto->getIdRol(), $usuario_dto->getNombresUsuario(), $usuario_dto->getApellidosUsuario(),$usuario_dto->getCorreoUsuario(), $usuario_dto->getTelefonoUsuario(),sha1($usuario_dto->getPassUsuario()),$usuario_dto->getIdUsuario()));
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
