<?php
    class Categoria_dao{
        public function __construct(){
			try {
				$db = new DataBase();
				$this->pdo = $db->connection();				

			} catch (Exception $e) {
				die($e->getMessage());
			}
		}	
        public function verCategoriaDao(){
            $sql = "SELECT * FROM categoria";
            $resultado = $resultado = $this->pdo->query($sql);
			$verCategoria = $resultado->fetchall();
			return $verCategoria;
        }
        public function consultarCategoriaDao($idCategoria){
            $sql = "SELECT * FROM categoria where id_categoria=$idCategoria";
            $resultado = $this->pdo->query($sql);
			$consulta = $resultado->fetchAll();
			return $consulta;            
        }
        public function crearCategoriaDao($categoria_dto){
            try{     
                $sql = "INSERT INTO categoria (`id_categoria`,`nombre_categoria`) VALUE (?,?)";
                $resultado = $this->pdo->prepare($sql);
                $resultado->execute(array($categoria_dto->getIdCategoria(),$categoria_dto->getNombreCategoria()));
                return $resultado->rowCount();
            }
            catch (Exception $e) {
                die("....".$e->getMessage());	
            }
        }
        public function modificarCategoriaDao($categoria_dto){
            try{
                $sql = "UPDATE categoria SET nombre_categoria=? where id_categoria=?";
                $resultado = $this->pdo->prepare($sql);
                $resultado->execute(array($categoria_dto->getNombreCategoria(),$categoria_dto->getIdCategoria()));
                return $resultado->rowCount();
            } 
            catch (Exception $e) {
                die($e->getMessage());
        
            }
        }   
        
        public function eliminarCatergoriaDao($id){
            try {
                $sql= "DELETE FROM categoria WHERE id_categoria=?";
                $resultado = $this->pdo->prepare($sql);
		$resultado->execute(array($id));
		return $resultado->rowCount();		
 		} 
	    catch (Exception $e) {
 		die($e->getMessage());
 		}
        }
    }
?>
