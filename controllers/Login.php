<?php
    class Login{
        public function __construct(){}
        public function index(){
            
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                
                require_once "views/business/inicio.php";
            }
            elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Capturar Datos
                // Validar los Datos
                // Crear el Objeto
                // Comprobar en la base de datos
                // Redireccionar al Dashboard
                header("Location: ?c=Dashboard");
            }
    
        }
    }
?>