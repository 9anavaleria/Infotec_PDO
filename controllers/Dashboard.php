<?php
session_start();
require_once "models/dto_model/Usuario_dto.php";
require_once "models/dao_model/Usuario_dao.php";
    class Dashboard{
        private $usuarioDao;
        public function __construct(){
            
            if (empty($_SESSION['profile'])) {
                $_SESSION['profile'] = null;
                $_SESSION['session'] = null;
                $this->usuarioDao = new Usuario_dao;
            }
        }
        public function index(){
                if (isset($_SESSION['session'])) {
                    $session = $_SESSION['session'];                
                    $usuario_dto = unserialize($_SESSION['profile']);   
                                                
                    // require_once "views/roles/". $session. "/". $session .".view.php";
                    require_once "views/roles/admin/header_dash.php";
                    require_once "views/roles/admin/dashboard.cont.php";
                    require_once "views/roles/admin/footer.php";
                } else {                
                    header("Location:?");
                }
                
            }
           
        }

?>