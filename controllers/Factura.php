<?php
session_start();
    require_once "models/dto_model/Factura_dto.php";
    require_once "models/dao_model/Factura_dao.php";
    require_once "models/dto_model/Cliente_dto.php";
    require_once "models/dao_model/Cliente_dao.php";
    require_once "models/dto_model/Vehiculo_dto.php";
    require_once "models/dao_model/Vehiculo_dao.php";
    require_once "models/dto_model/Usuario_dto.php";
    require_once "models/dao_model/Usuario_dao.php";
    require_once "models/dto_model/ListaProducto_dto.php";
    require_once "models/dao_model/ListaProducto_dao.php";
    require_once "models/dto_model/ListaServicios_dto.php";
    require_once "models/dao_model/ListaServicios_dao.php";
    class Factura{
        private $facturaDao;
        private $vehiculoDao;
        private $clienteDao;
        private $usuarioDao;
        private $listaProductoDao;
        private $listaServicioDao;
        public function __construct(){
            $this->facturaDao = new Factura_dao;
            $this->vehiculoDao = new Vehiculo_dao;
            $this->clienteDao = new Cliente_dao;
            $this->usuarioDao = new Usuario_dao;
            $this->listaProductoDao = new ListaProducto_dao;
            $this->listaServicioDao = new ListaServicios_dao;
        }
        public function index(){
            $verfactura = $this->facturaDao->verFacturaDao();
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/3_buy/facturas.php";
            require_once "views/roles/admin/footer.php";
        }
        public function ver_factura(){
            if ($_SERVER ['REQUEST_METHOD'] == 'GET' && isset ($_GET['id_factura'])){
                $factura =$this->facturaDao->consultarFacturaId($_GET['id_factura']);

            }
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/3_buy/factura.view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function crear_factura(){
            $verCliente = $this->clienteDao->verClienteDao();
            $verVehiculo = $this->vehiculoDao->verVehiculoDao();
            $verUsuario = $this->usuarioDao->verUsuarioDao();
            $verIdFac = $this->facturaDao->idFactura();
           if($_SERVER['REQUEST_METHOD'] == 'POST'){        
                if (!empty($_POST['id_cliente']) ){
                    $factura_dto = new Factura_dto($_POST['id_usuario'],$_POST['id_cliente'],$_POST['id_vehiculo'],$_POST['fecha_factura'],$_POST['total_pedido']);
                    $idFac = $this->facturaDao->crearFacturaDao($factura_dto);
                    for ($i=1; $i<=$_POST['cant_ids']  ; $i++) { 
                       if ($_POST['tipo_'.$i] == 'servicio'){
                        $listaServicios_dto = new ListaServicios_dto($idFac, $_POST['pos_'.$i], $_POST['cantidad_'.$i], $_POST['total_'.$i]);
                        $this->listaServicioDao->crearListaServicio($listaServicios_dto);
                       }
                       elseif ($_POST['tipo_'.$i] == 'producto'){
                        $listaProducto_dto = new ListaProducto_dto($idFac, $_POST['pos_'.$i], $_POST['cantidad_'.$i], $_POST['total_'.$i]);
                        $this->listaProductoDao->crearListaProduto($listaProducto_dto);
                        }
                    }
                    header("Location: ?c=Factura");
                }
                else{
                    $alerta ='Existen campos vacios';
                }
                
            }
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/3_buy/factura.create.php";
            require_once "views/roles/admin/footer.php";
        }
        public function vehiculoCliente(){
            echo json_encode($this->vehiculoDao->buscarVehiculoDao($_GET['id']));
            
        }
        public function busquedaVehiculo(){
            echo json_encode($this->vehiculoDao->verVehiculoDao());
        }
        public function imprimirFactura(){
            $factura =$this->facturaDao->consultarFacturaId($_GET['id_factura']);
            print($factura); exit;
            require_once "views/modules/3_buy/factura.print.php";

        }
    }
?>