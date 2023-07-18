<?php
require_once "models/dto_model/Proveedor_dto.php";
require_once "models/dao_model/Proveedor_dao.php";
    class Proveedor{
        private $proveedorDao;
        public function __construct(){
            $this->proveedorDao = new Proveedor_dao;
        }
        public function index(){
            $proveedor= $this->proveedorDao->readProveedorDao();
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id_proveedor'])){
                $resultp=$this->proveedorDao->consultarProveedorDao($_GET['id_proveedor']);
                $proveedor_dto=new proveedor_dto($resultp[0],$resultp[1]);   
                $proveedor_dto->setIdProveedor($resultp[0]);
            }
            elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
                $proveedor_dto= new Proveedor_dto($_POST['id_proveedor'],$_POST['nombre_proveedor']);
                $this->proveedorDao->createProveedor($proveedor_dto);
                header("Location: ?c=Proveedor");
            }
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_4proveedor/proveedor.view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function eliminar_proveedor(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET'){
                $this->proveedorDao->eliminarProveedoresDao($_GET['id_proveedor']);
            }
            $proveedor= $this->proveedorDao->readProveedorDao();
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_4proveedor/proveedor.view.php";
            require_once "views/roles/admin/footer.php";
        }
    }
?>