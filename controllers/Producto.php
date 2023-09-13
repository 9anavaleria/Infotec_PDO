<?php
    require_once "models/dto_model/Producto_dto.php";
    require_once "models/dao_model/Producto_dao.php";
    require_once "models/dto_model/Categoria_dto.php";
    require_once "models/dao_model/Categoria_dao.php";
    class Producto{
        private $productoDao;
        private $categoriaDao;
        public function __construct(){
            $this->productoDao = new Producto_dao;
            $this->categoriaDao = new Categoria_dao;
            
        }
        public function index(){
            // Vista de datos 
            $verProducto = $this->productoDao->verProductoDao();
            $verCategoria = $this->categoriaDao->verCategoriaDao();
            $alerta = '';
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id_categoria'])){
                $result =$this->productoDao->consultarProductoDao($_GET['id_categoria']);
                $Producto_dto=new Producto_dto($result[0],$result[1],$result[2],$result[3],$result[4]);
                $Producto_dto->setIdCategoria($result[0]);
            }
            elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
                if(!empty($_POST['id_categoria']) && !empty($_POST['id_producto']) && !empty($_POST['nombre_producto']) && !empty($_POST['precio_producto']) && !empty($_POST['exist_producto'])){
                    // Capturar datos
                    $producto_dto=new Producto_dto($_POST['id_categoria'],$_POST['id_producto'],$_POST['nombre_producto'],$_POST['precio_producto'],$_POST['exist_producto']);
                    $producto_dto->getIdProducto();
                    $this->productoDao->crearProductoDao($producto_dto);
                    header("Loaction: ?c=Producto");
                }
                else{
                    $alerta ='Existen campos vacios';
                }
            }
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_2producto/producto.view.php";
            require_once "views/roles/admin/footer.php";   
        }
        public function editar_producto(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET'){
                $producto = $this->productoDao->consultarProductoDao($_GET['id_producto'])[0];
                $categoria =$this->categoriaDao->verCategoriaDao();
                
            }
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_2producto/producto.editar.php";
            require_once "views/roles/admin/footer.php";
        }
        public function modificar_producto(){
            $producto_dto = new Producto_dto ($_POST['id_categoria'],$_POST['id_producto'],$_POST['nombre_producto'],$_POST['precio_producto'],$_POST['exist_producto']);
            
            $this->productoDao->modificarProductoDao($producto_dto);
            header("Loaction: ?c=Producto");
        
            
        }
        public function eliminar_producto(){
            $this->productoDao->eliminarProductoDao($_GET['id_producto']); 
            header("Loaction: ?c=Producto");
        }
           
    }    
?>
