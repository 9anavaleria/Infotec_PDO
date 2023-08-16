<?php
    require_once "models/dto_model/Categoria_dto.php";
    require_once "models/dao_model/Categoria_dao.php";

    class Categoria{
        private $categoriaDao;
        public function __construct(){
            $this->categoriaDao = new Categoria_dao;
        }
        public function index(){

            $verCategoria = $this->categoriaDao->verCategoriaDao();
            $alerta = '';
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id_categoria'])) {
                $result =$this->categoriaDao->consultarCategoriaDao($_GET['id_categoria']); 
                $categoria_dto=new Categoria_dto($result[0],$result[1]);   
                $categoria_dto->setIdCategoria($result[0])   ;        
            }
            elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
                if (!empty($_POST['id_categoria'])&&!empty($_POST['nombre_categoria'])){
                    $categoria_dto=new Categoria_dto($_POST['id_categoria'],$_POST['nombre_categoria']);
                    $this->categoriaDao->crearCategoriaDao($categoria_dto);               
                    header("Location: ?c=Categoria");
                }
                else{
                    $alerta ='Existen campos vacios';
                }
            }
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_1categoria/categoria.view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function editar_categoria(){    
            $categoria = $this->categoriaDao->consultarCategoriaDao($_GET['id_categoria'])[0];
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/2_products/2_1categoria/categoria.editar.php";
            require_once "views/roles/admin/footer.php";
        }
        public function modificar_categoria(){
           $categoria_dto = new Categoria_dto ($_POST['id_categoria'],$_POST['nombre_categoria']);
           $this->categoriaDao->modificarCategoriaDao($categoria_dto);               
           header("Location: ?c=Categoria");   
        }
        public function eliminar_categoria(){
            $this->categoriaDao->eliminarCatergoriaDao($_GET['id_categoria']); 
            header("Location: ?c=Categoria");
        } 
    }
?>
