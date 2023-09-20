<?php
session_start();
    require_once "models/dto_model/ListaProducto_dto.php";
    require_once "models/dao_model/ListaProducto_dao.php";
    require_once "models/dto_model/Factura_dto.php";
    require_once "models/dao_model/Factura_dao.php";
    require_once "models/dto_model/Producto_dto.php";
    require_once "models/dao_model/Producto_dao.php";
    class ListaProducto{
        private $listaProductoDao;
        private $facturaDao;
        private $productoDao;
        public function __construct(){
            $this->listaProductoDao = new ListaProducto_dao;
            $this->facturaDao = new Factura_dao;
            $this->productoDao = new Producto_dao;
        }
        public function index(){
            $alerta = '';
            $verProducto = $this->productoDao->verproductoDao();
            $verFactura = $this->facturaDao->verFacturaDao();

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                if (!empty($_POST['id_factura']) && !empty($_POST['id_Producto']) && !empty($_POST['cantidad']) && !empty($_POST['valor_venta'])){
                    $listaProducto_dto = new ListaProducto_dto (($_POST['']), ($_POST['id_factura']), ($_POST['id_Producto']), ($_POST['cantidad']), ($_POST['valor_venta']));
                    //$this->listaProductoDao->crearListaProduto($listaProducto_dto);
                    header("Location: ?c=ListaProducto"); 
                }
                else{
                    $alerta ='Existen campos vacios';
                }
            }
            require_once "views/roles/admin/header_dash.php";
                require_once "views/modules/3_buy/listaproducto.view.php";
                require_once "views/roles/admin/footer.php";
        }
        public function precioProducto(){
            $this->productoDao->precioproductoDao($_GET['id']);
        }
        public function busquedaproducto(){
            echo json_encode($this->productoDao->verProductoDao());
        }
    }
?>