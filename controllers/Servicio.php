<?php
    require_once "models/dto_model/Servicio_dto.php";
    require_once "models/dao_model/Servicio_dao.php";
    class Servicio{
        private $servicioDao;
        public function __construct(){
            $this->servicioDao = new Servicio_dao;
        }
        public function index(){
            $verServicios = $this->servicioDao->verServicioDao();
            $alerta = '';
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id_servicios'])){
                $result=$this->servicioDao->consultarServicioDao($_GET['id_servicios']);
                $servicio_dto=new Servicio_dto($result[0],$result[1]);
                $servicio_dto->setIdServicio($result[0]);
            }
            elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
                if(!empty($_POST['id_servicios']) && !empty($_POST['nombre_servicio']) && !empty($_POST['precio_servicio'])){
                $servicio_dto=new Servicio_dto($_POST['id_servicios'],$_POST['nombre_servicio'],$_POST['precio_servicio']);
                
                $this->servicioDao->crearServicioDao($servicio_dto);
                header("Location: ?c=Servicio");
                }else{
                    $alerta = 'Existen campos vacios';
                }
            }
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_3servicio/servicio.view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function editar_servicio(){
            $servicio_dto = $this->servicioDao->consultarServicioDao($_GET['id_servicios'])[0];
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_3servicio/servicio.editar.php";
            require_once "views/roles/admin/footer.php";
        }
        public function modificar_servicio(){
            $servicio_dto = new Servicio_dto ($_POST['id_servicios'],$_POST['nombre_servicio'],$_POST['precio_servicio']);
            $this->servicioDao->modificarServicioDao($servicio_dto);
            header("Location: ?c=Servicio");
        }
        
        public function eliminar_servicio(){ 
            $this->servicioDao->eliminarServicioDao($_GET['id_servicios']);
            header("Location: ?c=Servicio");
        }
}
?>
