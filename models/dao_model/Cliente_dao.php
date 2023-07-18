<?php
class Cliente_dao{
		private $pdo;
		public function __construct(){
			try {
				$db = new DataBase();
                $this->pdo = $db->connection();	
                
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}
        public function verClienteDao(){
            $sql = "SELECT * FROM clientes;";
            $resultado = $this->pdo->query($sql);
            
            $vercliente = $resultado->fetchAll();
            return $vercliente;
        }
        public function consultarClienteDao($idCliente){
            $sql = "SELECT * FROM clientes where id_cliente=$idCliente";
            $resultado = $this->pdo->query($sql);
            $consulta = $resultado->fetchAll();
            return $consulta;
        }
        public function crearClienteDao($cliente_dto){
            try{
                $sql = "INSERT INTO clientes (`id_cliente`, `identificacion_cliente`, `nombre_cliente`, `apellido_cliente`, `telefono_cliente`, `correo_cliente`) VALUE (?, ?, ?, ?, ?, ?)";
                $resultado = $this->pdo->prepare($sql);                
                $resultado->execute(array($cliente_dto->getIdCliente(), $cliente_dto->getIdentificacionCliente(), $cliente_dto-> getNombreCliente(), $cliente_dto-> getApellidoCliente(), $cliente_dto-> getTelefonoCliente(), $cliente_dto-> getCorreoCliente()));
                return $resultado->rowCount();
            }
            catch (Exception $e) {
                die("....".$e->getMessage());	
            }
        }
        public function modificarClienteDao($cliente_dto){
            try{
                $sql = "UPDATE CLIENTES SET identificacion_cliente=?, nombre_cliente=?, apellido_cliente=?, telefono_cliente=?, correo_cliente=? WHERE id_cliente=?";
                $resultado = $this->pdo->prepare($sql);
                $resultado->execute(array($cliente_dto->getIdentificacionCliente(), $cliente_dto-> getNombreCliente(), $cliente_dto-> getApellidoCliente(), $cliente_dto-> getTelefonoCliente(), $cliente_dto-> getCorreoCliente(), $cliente_dto->getIdCliente()));
                return $resultado->rowCount();
            }
            catch (Exception $e) {
                die("....".$e->getMessage());	
            }
        }
        public function eliminarClienteDao($id){
            try{
                $sql = "DELETE FROM CLIENTES WHERE id_cliente=?";
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