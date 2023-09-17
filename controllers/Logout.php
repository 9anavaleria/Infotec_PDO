<?php session_start();
    class Logout{
        public function __construct(){}
        # CU02 - Cerrar Sesión
        public function index(){
            session_destroy();
            header("Location: ?c=Login");
        }
    }
?>