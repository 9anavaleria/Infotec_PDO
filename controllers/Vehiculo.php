<?php
    require_once "models/dto_model/Cliente_dto.php";
    require_once "models/dao_model/Cliente_dao.php";
    require_once "models/dto_model/Vehiculo_dto.php";
    require_once "models/dao_model/Vehiculo_dao.php";
    class Vehiculo{
        private $vehiculoDao;
        private $clienteDao;
        public function __construct(){
            $this->vehiculoDao = new Vehiculo_dao;
            $this->clienteDao = new Cliente_dao;
        }
        public function index(){

            $verVehiculo = $this->vehiculoDao->verVehiculoDao();
            $verCliente = $this->clienteDao->verClienteDao();
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id_cliente'])){
                
                $result= $this->vehiculoDao->consultarVehiculoDao($_GET['id_cliente']);
                $Vehiculo_dto=new Vehiculo_dto($result[0],$result[1]);
                $Vehiculo_dto->setCliente($result[0]);
            }
                elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
                    if (!empty($_POST['placa_vehiculo']) && !empty($_POST['id_cliente'])){
                    $Vehiculo_dto=new Vehiculo_dto($_POST['placa_vehiculo'],$_POST['id_cliente']);
                    $this->vehiculoDao->crearVehiculoDao($Vehiculo_dto);
                    header("Location: ?c=Vehiculo"); 
                    }
                    else{
                        $alerta ='Existen campos vacios';
                    }    
                }
                require_once "views/roles/admin/header_dash.php";
                require_once "views/modules/1_users/1_3_vehiculos/vehiculo.view.php";
                require_once "views/roles/admin/footer.php";
        }
        public function editar_vehiculo(){
            $vehiculo = $this->vehiculoDao->consultarVehiculoDao($_GET['placa_vehiculo'])[0];
            $cliente = $this->clienteDao->verClienteDao();
             
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/1_users/1_3_vehiculos/vehiculo.editar.php";
            require_once "views/roles/admin/footer.php";   
        }
        public function modificar_vehiculo(){
            $vehiculo_dto = new Vehiculo_dto ($_POST['placa_vehiculo'],$_POST['id_cliente']);
            $this->vehiculoDao->modificarVehiculoDao($vehiculo_dto);
            header("Location: ?c=Vehiculo");

        }
        public function eliminar_vehiculo(){
            
            $this->vehiculoDao->eliminarVehiculoDao($_GET['placa_vehiculo']);
            $cliente = $this->clienteDao->verClienteDao();
            $vehiculo =$this->vehiculoDao->verVehiculoDao();
           
            require_once "views/roles/admin/header_dash.php";
            require_once "views/modules/1_users/1_3_vehiculos/vehiculo.view.php";
            require_once "views/roles/admin/footer.php";
        }
        
    
    }

?>