<?php
    require_once "models/dto_model/Rol_dto.php";
    require_once "models/dao_model/Rol_dao.php";

    class Roles{
        private $rolDao;
        public function __construct(){
            $this->rolDao = new Rol_dao;
        }
        public function index(){
            $ver = $this->rolDao->verRolDao();
            $alerta = '';
            if ($_SERVER ['REQUEST_METHOD'] == 'GET' && isset($_GET['id_rol'])){
                $result= $this->rolDao->consultarRolDao($_GET['id_rol']);
                $rol_dto = new Rol_dto($result[0],$result[1]);
                $rol_dto->setCodigoRol($result[0]);
            }
            elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
                if (!empty($_POST['id_rol']) && (!empty($_POST['nombre_rol']))){
                    $rol_dto = new Rol_dto ($_POST['id_rol'], $_POST['nombre_rol']);
                    $this->rolDao->createRolDao($rol_dto);
                    header("location: ?c=Roles");
                }
                else{
                    $alerta ='Existen campos vacios';
                }              
            }           
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/0_rol/rol.view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function editar_rol(){
            $rol = $this->rolDao->consultarRolDao($_GET['id_rol'])[0];
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/0_rol/rol.editar.php";
            require_once "views/roles/admin/footer.php";
        }
        public function modificar_rol(){
            $rol_dto = new Rol_dto ($_POST['nombre_rol']);
            $this->rolDao->modificarRolDao($rol_dto);
            header("location: ?c=Roles");
        }
        public function eliminar_rol(){
            $this->rolDao->eliminarRolDao($_GET['id_rol']);
            header("location: ?c=Roles");
        }

      
    }
?>