<?php
    require_once "models/dto_model/Usuario_dto.php";
    require_once "models/dao_model/Usuario_dao.php";
    require_once "models/dto_model/Rol_dto.php";
    require_once "models/dao_model/Rol_dao.php";
    class Usuario{
            private $usuarioDao;
            private $rolDao;
            public function __construct(){
                $this->usuarioDao = new Usuario_dao;
                $this->rolDao = new Rol_dao;

            }
            public function index(){
                $verUsuario = $this->usuarioDao->verUsuarioDao();
                $verRol = $this->rolDao->verRolDao();
                $alerta = '';
                if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id_rol'])){
                    $result = $this->usuarioDao->consultarUsuarioDao($_GET['id_rol']);
                    $usuario_dto = new Usuario_dto($result[0],$result[1]);
                    $usuario_dto->setIdUsuario($result[0]);
                }
                elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
                    if (!empty($_POST['id_rol']) && !empty($_POST['id_usuario']) && !empty($_POST['nombres_usuario']) && !empty($_POST['apellidos_usuario']) && !empty($_POST['correo_usuario']) && !empty($_POST['telefono_usuario']) && !empty($_POST['pass_usuario'])){
                        $usuario_dto = new Usuario_dto ($_POST['id_rol'],$_POST['id_usuario'],$_POST['nombres_usuario'],$_POST['apellidos_usuario'],$_POST['correo_usuario'],$_POST['telefono_usuario'],$_POST['pass_usuario']);
                        $this->usuarioDao->crarUsuarioDao($usuario_dto);
                        
                        header("Location: ?c=Usuario"); 
                    }
                    else{
                        $alerta ='Existen campos vacios';
                    }
                }
                require_once "views/roles/admin/header_dash.php";
                require_once "views/modules/1_users/1_1_usuario/usuario.view.php";
                require_once "views/roles/admin/footer.php";
            }
            public function editar_usuario(){
                $usuario = $this->usuarioDao->consultarUsuarioDao($_GET['id_usuario'])[0];
                $rol = $this->rolDao->verRolDao();
                require_once "views/roles/admin/header_dash.php";
                require_once "views/modules/1_users/1_1_usuario/usuario.editar.php";
                require_once "views/roles/admin/footer.php";
            }
            public function modificar_usuario(){
                $usuario_dto = new Usuario_dto ($_POST['id_rol'],$_POST['id_usuario'],$_POST['nombres_usuario'],$_POST['apellidos_usuario'],$_POST['correo_usuario'],$_POST['telefono_usuario'],$_POST['pass_usuario']);
                $this->usuarioDao->modificarUsuarioDao($usuario_dto);
                header("Location: ?c=Usuario"); 
            }
            public function eliminar_usuario(){
                $this->usuarioDao->eliminarUsuarioDao($_GET['id_usuario']);
                header("Location: ?c=Usuario"); 
            }
    }
?>
