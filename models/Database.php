<?php
class DataBase{
        private $host;
        private $user;
        private $db;
        private $pass;
        private $port;
        public function __construct(){
            $this->host="localhost";
            $this->port="3310";
			$this->user="root";
			$this->pass="";
			$this->db="infotec";
        }
        function connection(){
            try{
                $pdo = new PDO("mysql:host=".$this->host.";dbname=".$this->db.";port=".$this->port,$this->user,$this->pass);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
            } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
                die();
            }
            return $pdo;   
			
        }
    } 

?>