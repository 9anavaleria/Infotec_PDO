<?php
    class Login_dto{
        private $usuario;
        private $pass;        
        // Constructor
        public function __construct($usuario,$pass){
            $this->usuario = $usuario;
            $this->pass = $pass;
            
        }
        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }
        public function getUsuario(){
            return $this->usuario;
        }
        public function setPass($pass){
            $this->pass = $pass;
        }
        public function getPass(){
            return $this->pass;
        }
    
    }
    ?>
