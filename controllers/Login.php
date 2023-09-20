<?php
session_start();
require_once "models/dto_model/Usuario_dto.php";
require_once "models/dao_model/Usuario_dao.php";
class Login
{
    private $usuarioDao;
    public function __construct()
    {
        $this->usuarioDao = new Usuario_dao;
    }
    public function index()
    {
        $alerta = "";
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once "views/business/inicio.php";
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = $this->usuarioDao->login($_POST['id_usuario'], $_POST['pass_usuario']);
            if ($user) {
                $rol = $user->getIdRol();
                $nombre = $user->getNombresUsuario();
                if ($rol == 1) {
                    $_SESSION['session'] = "Administrador";
                    $_SESSION['rol'] = $rol;
                    $_SESSION['nombre'] = $nombre;
                    $user = serialize($user);
                    $_SESSION['profile'] = $user;
                    header("Location: ?c=Dashboard");
                } elseif ($rol == 2) {
                    $_SESSION['session'] = "Vendedor";
                    $_SESSION['rol'] = $rol;
                    $_SESSION['nombre'] = $nombre;
                    $user = serialize($user);
                    $_SESSION['profile'] = $user;
                    header("Location: ?c=Dashboard");
                }
            } else {
                $alerta = "Usuario Incorrecto";
                require_once "views/business/inicio.php";
                //echo "<script>alert('Usuario Incorrecto')</script>";
            }
        }
    }
}
?>