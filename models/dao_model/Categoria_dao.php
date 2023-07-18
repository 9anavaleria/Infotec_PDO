<?php
    class Categoria_dao{
        public function __construct(){
			try {
				$this->pdo = Database::connection();				
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}	
        public function createCategoria($categoria_dto){
            try {
                $sql = 'INSERT INTO categoria VALUE (
                    '.$categoria_dto->getIdCategoria().',
                    "'.$categoria_dto->getNombreCategoria().'"
                    )';
                    
                 mysqli_query($this->pdo,$sql);
                
                } catch (Exception $e) {
                    die("....".$e->getMessage());	
                }
            }
        public function readCategoriaDao(){
            try{
                $sql = 'SELECT * FROM categoria';
	// Creamos las variable $dbh y le asignamos la conexión y la consulta $sql
			$dbh = mysqli_query($this->pdo,$sql);
 				return $dbh;
 			} catch (Exception $e) {
 				die($e->getMessage());
 			}
        }
        public function consultarCategoriaDao($id){
            try {
            $sql = 'SELECT * FROM categoria where id_categoria='.$id.'';
// Creamos las variable $dbh y le asignamos la conexión y la consulta $sql
	$dbh = mysqli_query($this->pdo,$sql);
 				return mysqli_fetch_row($dbh);
 			} catch (Exception $e) {
 				die($e->getMessage());
 			}
        }
        public function eliminarCatergoriaDao($catid){
            try {
                $sql= 'DELETE FROM categoria WHERE id_categoria='.strval($catid);
		$dbh = mysqli_query($this->pdo,$sql);
 				return $dbh;
				
 			} catch (Exception $e) {
 				die($e->getMessage());
 			}
        }
        public function actualizarCategoriaDao($catmod){
            try{
               $sql = 'SELECT * FROM categoria where id_categoria='.$catmod.'';
			
               $dbh = mysqli_query($this->pdo,$sql);
			return mysqli_fetch_row($dbh);
				
		} catch (Exception $e) {
			die($e->getMessage());
            }
        }
        public function modificarCategoriaDao($idCategoria,$nombreCategoria){
            try{
                $sql = "UPDATE categoria SET nombre_categoria='$nombreCategoria' where id_categoria=$idCategoria";
                $dbh = mysqli_query($this->pdo,$sql);
                return $dbh;
            } catch (Exception $e) {
                die($e->getMessage());
		
            }
        }   
    }
?>