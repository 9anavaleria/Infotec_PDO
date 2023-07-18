<?php
    require_once "models/dto_model/Categoria_dto.php";
    require_once "models/dao_model/Categoria_dao.php";

    class Categoria{
        private $categoriaDao;
        public function __construct(){
            $this->categoriaDao= new Categoria_dao;
        }
        public function index(){
            $categoria = $this->categoriaDao->ReadCategoriaDao();
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id_categoria'])) {
                $result =$this->categoriaDao->consultarCategoriaDao($_GET['id_categoria']); 
                $categoria_dto=new Categoria_dto($result[0],$result[1]);   
                $categoria_dto->setIdCategoria($result[0])   ;        
            }
            elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Capturar Datos
                $categoria_dto=new Categoria_dto($_POST['id_categoria'],$_POST['nombre_categoria']);
                
                $this->categoriaDao->createCategoria($categoria_dto);               
                header("Location: ?c=Categoria");
            }
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_1categoria/categoria.view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function eliminar_categoria(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET'){
                // Capturar Datos
                $this->categoriaDao->eliminarCatergoriaDao($_GET['id_categoria']); 
            }
            $categoria = $this->categoriaDao->readCategoriaDao();
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_1categoria/categoria.view.php";
            require_once "views/roles/admin/footer.php";
        } 
        public function editar_categoria(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $editcate=$this->categoriaDao->actualizarCategoriaDao($_GET['id_categoria']);
                

            }
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_1categoria/categoria.editar.php";
            require_once "views/roles/admin/footer.php";
        }
         public function modificar_categoria(){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
               

                $this->categoriaDao->modificarCategoriaDao($_POST['id_categoria'],$_POST['nombre_categoria']);               
                header("Location: ?c=Categoria");
            }
            
        }
    }
?>