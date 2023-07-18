<?php
    require_once "models/dto_model/Cliente_dto.php";
    require_once "models/dao_model/Cliente_dao.php";

    class Cliente{
        private $clienteDao;
        public function __construct(){
            $this->clienteDao = new Cliente_dao;
        }
        public function index(){
            $vercliente = $this->clienteDao->verClienteDao();
            if ($_SERVER ['REQUEST_METHOD'] == 'GET' && isset ($_GET['id_cliente'])){
                $result =$this->clienteDao->consultarClienteDao($_GET['id_cliente']);
                $cliente_dto=new Cliente_dto($result[0],$result[1]);
                $cliente_dto->setIdCliente($result[0]);
            }
            elseif($_SERVER['REQUEST_METHOD'] == 'POST'){        
                if (!empty($_POST['id_cliente']) && !empty($_POST['identificacion_cliente']) && !empty($_POST['nombre_cliente']) && !empty($_POST['apellido_cliente']) && !empty($_POST['telefono_cliente']) && !empty($_POST['correo_cliente'])){
                    $cliente_dto = new Cliente_dto($_POST['id_cliente'],$_POST['identificacion_cliente'],$_POST['nombre_cliente'],$_POST['apellido_cliente'],$_POST['telefono_cliente'],$_POST['correo_cliente']);
                    $this->clienteDao->crearClienteDao($cliente_dto);
                    
                    header("Location: ?c=Cliente");
                }
                else{
                    $alerta ='Existen campos vacios';
                }
                
            }
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/1_users/1_2_cliente/cliente.view.php";
            require_once "views/roles/admin/footer.php";
        }
        public function editar_cliente(){
            $cliente = $this->clienteDao->consultarClienteDao($_GET['id_cliente'])[0]; 

            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/1_users/1_2_cliente/cliente.editar.php";
            require_once "views/roles/admin/footer.php";
        }
        public function modificar_cliente(){
            $cliente_dto = new Cliente_dto($_POST
            ['id_cliente'],$_POST['identificacion_cliente'],$_POST['nombre_cliente'],$_POST['apellido_cliente'],$_POST['telefono_cliente'],$_POST['correo_cliente']);
            $this->clienteDao->modificarClienteDao($cliente_dto);
            header("Location: ?c=Cliente");
        }
        public function eliminar_cliente(){
            $this->clienteDao->eliminarClienteDao($_GET['id_cliente']); 
            
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/1_users/1_2_cliente/cliente.view.php";
            require_once "views/roles/admin/footer.php";
        }

        
}