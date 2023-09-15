<?php 
	class Login_dao{
        private $pdo;
		public function __construct(){
			try {
				$db = new DataBase();
				$this->pdo = $db->connection();				

			} catch (Exception $e) {
				die($e->getMessage());
			}
		}	
		public function login($login_dto){
			$sql = "SELECT * FROM usuarios WHERE id_usuario=:usuario AND pass_usuario=:pass";
			$resultado = $this->pdo->prepare($sql);
			$usuario = $login_dto->getUsuario();
			$getPass = $login_dto->getPass();
			//falta encriptar

			$resultado->bindValue(':usuario',$usuario);
			$resultado->bindValue(':pass',sha1($getPass));
			$resultado->execute();
			
			$userDb = $resultado->fetch();
			if ($userDb) {
				$user = new Login_dto(			
					$userDb['correo_usuario'],
					$userDb['pass_usuario']
				);
				return $user;
			} else {
				return false;
			}
		}
    }