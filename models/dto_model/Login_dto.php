<?php
    class Login_dto{
        private $idUsuario;
        private $contraseña;
        public function __construct(){
			$a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f='__construct'.$i)) {
				call_user_func_array(array($this, $f), $a);
                
			}
            
		}
        
        // Constructor
        public function __construct5($idUsuario,$contraseña,){
            $this->idUsuario = $idUsuario;
            $this->contraseña = $contraseña;
            
        }
        public function setIdUsuario($idUsuario){
            $this->idUsuario = $idUsuario;
        }
        public function getIdUsuario(){
            return $this->idUsuario;
        }
        public function setContraseña($contraseña){
            $this->contraseña = $contraseña;
        }
        public function getContraseña(){
            return $this->contraseña;
        }
    
    }
    ?>
