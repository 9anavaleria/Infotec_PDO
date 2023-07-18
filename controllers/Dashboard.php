<?php
    class Dashboard{
        public function __construct(){}
        public function index(){
            require_once "views/roles/admin/header_dash.php";
            require_once "views/roles/admin/dashboard.cont.php";
            require_once "views/roles/admin/footer.php";
        }
    }
?>