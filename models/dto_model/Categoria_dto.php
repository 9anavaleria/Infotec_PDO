<?php
class Categoria_dto{
    private $idCategoria;
    private $nombreCategoria;
     /* SOBRECARGA DE CONSTRUCTORES */
        
        // Constructor de Constructores
		public function __construct(){
			$a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f='__construct'.$i)) {
				call_user_func_array(array($this, $f), $a);
			}
            
		}
        public function __construct2($idCategoria,$nombreCategoria){
            $this ->idCategoria =$idCategoria;
            $this ->nombreCategoria =$nombreCategoria;
        }

        //Id categoria
        public function setIdCategoria($idCategoria){
            $this->idCategoria=$idCategoria;
        }
        public function getIdCategoria(){
            return $this->idCategoria;
        }
        //Nombre categoria
        public function setNombreCategoria($nombreCategoria){
            $this ->nombreCategoria =$nombreCategoria;
        }
        public function getNombreCategoria(){
            return  $this ->nombreCategoria;
        }
    }
?>
