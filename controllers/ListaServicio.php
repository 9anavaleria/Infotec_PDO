<?php
    require_once "models/dto_model/ListaServicios_dto.php";
    require_once "models/dao_model/ListaServicios_dao.php";
    require_once "models/dto_model/Factura_dto.php";
    require_once "models/dao_model/Factura_dao.php";
    require_once "models/dto_model/Servicio_dto.php";
    require_once "models/dao_model/Servicio_dao.php";
    class ListaServicio{
        private $listaServiciosDao;
        private $facturaDao;
        private $servicioDao;
        public function __construct(){
            $this->listaServiciosDao = new ListaServicios_dao;
            $this->facturaDao = new Factura_dao;
            $this->servicioDao = new Servicio_dao;
        }
        public function index(){
            $alerta = '';
            $verServicio = $this->servicioDao->verServicioDao();
            $verFactura = $this->facturaDao->verFacturaDao();

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                if (!empty($_POST['id_factura']) && !empty($_POST['id_servicios']) && !empty($_POST['cantidad']) && !empty($_POST['valor_venta'])){
                    $listaServicios_dto = new ListaServicios_dto (($_POST['']), ($_POST['id_factura']), ($_POST['id_servicios']), ($_POST['cantidad']), ($_POST['valor_venta']));
                    $this->listaServiciosDao->crearListaServicio($listaServicios_dto);
                    
                    header("Location: ?c=ListaServicio"); 
                }
                else{
                    $alerta ='Existen campos vacios';
                }
            }
            require_once "views/roles/admin/header_dash.php";
                require_once "views/modules/3_buy/listaServicio.view.php";
                require_once "views/roles/admin/footer.php";
        }
        public function precioServicio(){
            $this->servicioDao->precioServicioDao($_GET['id']);
            
        }
        public function busquedaServicio(){
            echo json_encode($this->servicioDao->verServicioDao());
        }
        


    }
?>