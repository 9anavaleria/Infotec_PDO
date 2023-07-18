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
            $producto = $this->productoDao->readProductoDao();
            $categoria =$this->categoriaDao->readCategoriaDao();
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id_categoria'])){
                $result =$this->productoDao->consultarProductoDao($_GET['id_categoria']);
                $Producto_dto=new Producto_dto($result[0],$result[1]);
                $Producto_dto->setIdCategoria($result[0]);
            }
            elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Capturar datos
                $Producto_dto=new Producto_dto($_POST['id_categoria'],$_POST['id_producto'],$_POST['nombre_producto'],$_POST['precio_producto'],$_POST['exist_producto']);
                
                $this->productoDao->createProducto($Producto_dto);
                header("Loaction: ?c=Producto");
            }
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_2producto/producto.view.php";
            require_once "views/roles/admin/footer.php";   
        }
        public function crear_producto(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/admin/header_dash.php";
                require_once "views/modules/2_products/2_2producto/producto.view.php";
                require_once "views/roles/admin/footer.php";  
        }
        elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
            $Producto_dto=new Producto_dto($_POST['id_categoria'],$_POST['id_producto'],$_POST['nombre_producto'],$_POST['precio_producto'],$_POST['exist_producto']);
            $this->productoDao->createProducto($Producto_dto);
            header("Location: ?c=Producto&a=crear_producto");
            } else{
                header("Location: ?c=Producto&a=crear_producto");
            }
        }
        public function eliminar_producto(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET'){
                    
                // Capturar Datos
                $this->productoDao->eliminarProductoDao($_GET['id_producto']); 
            }
            $producto = $this->productoDao->readProductoDao();
            $categoria =$this->categoriaDao->readCategoriaDao();
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_2producto/producto.view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function editar_producto(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET'){
                $editpro=$this->productoDao->actualizarProductoDao($_GET['id_producto']);
                $categoria =$this->categoriaDao->readCategoriaDao();
                
            }
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_2producto/producto.editar.php";
            require_once "views/roles/admin/footer.php";
        }
        public function modificar_producto(){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                $this->productoDao->modificarProductoDao($_POST['id_categoria'],$_POST['id_producto'],$_POST['nombre_producto'],$_POST['precio_producto'],$_POST['exist_producto'],);
                header("Location:?c=Producto");
            }
        }
    }
?>