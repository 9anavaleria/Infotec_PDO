<?php
    require_once "models/dto_model/Servicio_dto.php";
    require_once "models/dao_model/Servicio_dao.php";
    class Servicio{
        private $servicioDao;
        public function __construct(){
            $this->servicioDao=new Servicios_dao;
        }
        public function index(){
            $servicios=$this->servicioDao->readServicioDao();
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id_servicios'])){
                $result=$this->servicioDao->consultarServicioDao($_GET['id_servicios']);
                $servicio_dto=new Servicios_dto($result[0],$result[1]);
                $servicio_dto->setIdServicio($result[0]);
            }
            elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
                $servicio_dto=new Servicios_dto($_POST['id_servicios'],$_POST['nombre_servicio'],$_POST['precio_servicio']);
                
                $this->servicioDao->createServicio($servicio_dto);
                header("Location: ?c=Servicio");
            }
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_3servicio/servicio.view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function eliminar_servicio(){ 
            if ($_SERVER['REQUEST_METHOD'] == 'GET'){
                $this->servicioDao->eliminarServicioDao($_GET['id_servicios']);
            }
            $servicios=$this->servicioDao->readServicioDao();
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_3servicio/servicio.view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function editar_servicio(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET'){
                $edtiser=$this->servicioDao->actualizarServicioDao($_GET['id_servicios']);
            }
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_3servicio/servicio.editar.php";
            require_once "views/roles/admin/footer.php";
        }
        public function modificar_servicio(){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $this->servicioDao->modificarServicioDao($_POST['id_servicios'],$_POST['nombre_servicio'],$_POST['precio_servicio']);
                header("Location: ?c=Servicio");
            }
        }
    }
?>