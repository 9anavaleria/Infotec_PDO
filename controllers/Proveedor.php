<?php
require_once "models/dto_model/Proveedor_dto.php";
require_once "models/dao_model/Proveedor_dao.php";
    class Proveedor{
        private $proveedorDao;
        public function __construct(){
            $this->proveedorDao = new Proveedor_dao;
        }
        public function index(){
            $verProveedor = $this->proveedorDao->verProveedorDao();
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id_proveedor'])){
                $resultp=$this->proveedorDao->consultarProveedorDao($_GET['id_proveedor']);
                $proveedor_dto=new proveedor_dto($resultp[0],$resultp[1],$resultp[2]);   
                $proveedor_dto->setIdProveedor($resultp[0]);
            }
            elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
                if (!empty($_POST['id_proveedor']) && (!empty($_POST['nombre_proveedor'])) && (!empty($_POST['telefono_proveedor']))){
                $proveedor_dto= new Proveedor_dto($_POST['id_proveedor'],$_POST['nombre_proveedor'], $_POST['telefono_proveedor']);
                $this->proveedorDao->createProveedorDao($proveedor_dto);
                header("Location: ?c=Proveedor");
            }
            else{
                $alerta ='Existen campos vacios';
            } 
            }
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_4proveedor/proveedor.view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function editar_proveedor(){
            $proveedor = $this->proveedorDao->consultarProveedorDao($_GET['id_proveedor'])[0];
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_4proveedor/proveedor.editar.php";
            require_once "views/roles/admin/footer.php";
        }
        public function modificar_proveedor(){
            $proveedor_dto = new Proveedor_dto ($_POST['id_proveedor'], $_POST['nombre_proveedor'], $_POST['telefono_proveedor']);
            
            $this->proveedorDao->modificarProveedorDao($proveedor_dto);
            header("location: ?c=Proveedor");
        }
        public function eliminar_proveedor(){
            $this->proveedorDao->eliminarProveedorDao($_GET['id_proveedor']);
            header("location: ?c=proveedores");
        }
    }
?>