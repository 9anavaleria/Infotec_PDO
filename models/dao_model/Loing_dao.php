<?php 
	class Rol_dao{
		private $pdo;
		public function __construct(){
			try {
				$this->pdo = Database::connection();				
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}	
        public function consultarRolDao($entrar){
            try {
    // Asignar una consulta al atributo $sql
            $sql = 'SELECT id_usuario, pass_usuario FROM usuarios where id_usuario='.$entrar.'';
    // Creamos las variable $dbh y le asignamos la conexión y la consulta $sql
        $dbh = mysqli_query($this->pdo,$sql);
                     return mysqli_fetch_row($dbh);
                 } catch (Exception $e) {
                     die($e->getMessage());
                 }
             }
    function iniciarSesion($usuario, $pass){
        try{
    $sql = "SELECT id_usuario, pass_usuario FROM usuarios where usuario='".$usuario." and password = '".$pass."'";
    $dbh = mysqli_query($this->pdo,$sql);
    return mysqli_fetch_row($dbh);
} catch (Exception $e) {
    die($e->getMessage());
}
}
    

}
    ?>
