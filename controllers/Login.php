<?php
require_once "models/dto_model/Login_dto.php";
require_once "models/dao_model/Login_dao.php";
class Login{
    private $loginDao;
    public function __construct(){
        $this->loginDao = new Login_dao;
    }
    public function index(){
        $alerta = "";
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once "views/business/inicio.php";
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $login_dto = new Login_dto($_POST['id_usuario'], $_POST['pass_usuario']);   
            $user = $this->loginDao->login($login_dto);         
            if ($user) {
                header("Location: ?c=Dashboard");
            } else {                    
                $alerta = "Usuario Incorrecto";
                require_once "views/business/inicio.php";
                // echo "<script>alert('Usuario Incorrecto')</script>";
            }
        }
    }
}
?>
