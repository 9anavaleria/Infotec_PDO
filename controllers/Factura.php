<?php
    require_once "models/dto_model/Factura_dto.php";
    require_once "models/dao_model/Factura_dao.php";
    require_once "models/dto_model/Cliente_dto.php";
    require_once "models/dao_model/Cliente_dao.php";
    require_once "models/dto_model/Vehiculo_dto.php";
    require_once "models/dao_model/Vehiculo_dao.php";
    class Factura{
        public function index(){
        require_once "views/roles/admin/header_dash.php";
        require_once "views/modules/3_buy/factura.view.php";
        require_once "views/roles/admin/footer.php";
    }
    public function crearFactura(){
        require_once "views/roles/admin/header_dash.php";
        require_once "views/modules/3_buy/factura.php";
        require_once "views/roles/admin/footer.php";
    }
    }

?>