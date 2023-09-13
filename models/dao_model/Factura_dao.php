<?php
    class Factura_dao{
        private $pdo;
		public function __construct(){
			try {
				$db = new DataBase();
                $this->pdo = $db->connection();	
                
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}
        // leer datos
        public function verFacturaDao(){
			$sql = "SELECT f.*,v.placa_vehiculo as vehiculo, CONCAT(c.nombre_cliente, ' ', c.apellido_cliente)  as cliente FROM factura f inner join vehiculos v on v.id_vehiculo=f.placa_vehiculo inner join clientes c on c.id_cliente=f.identificacion_cliente;";
			$resultado = $this->pdo->query($sql);
            $verfactura = $resultado->fetchAll();
            return $verfactura;
		}
		public function crearFacturaDao($factura_dto){
			try{ 
				$sql = "INSERT INTO `factura`(`id_usuarios`, `identificacion_cliente`, `placa_vehiculo`, `fecha_factura`, `total_pedido`) VALUES (?,?,?,?,?)";
				$resultado = $this->pdo->prepare($sql);
			$resultado->execute(array($factura_dto->getUsuario(),$factura_dto->getIdCliente(),$factura_dto->getPlaca(),$factura_dto->getFecha(),$factura_dto->getTotal()));
			return $this->pdo->lastInsertId();
			}
			catch (Exception $e) {
				die("....".$e->getMessage());	
			}
		}
		public function consultarFacturaId($idFact){
			$sql = "SELECT f.id_producto, p.nombre_producto, f.valor_venta, f.cantidad FROM lista_productos_f f inner join productos p on p.id_producto=f.id_producto where id_factura=".$idFact." union all SELECT f.id_servicios, s.nombre_servicio, f.valor_venta, f.cantidad FROM `SERVICIOS` s INNER JOIN lista_servicios_f f ON s.id_servicios =f.id_servicios WHERE ID_factura=".$idFact.";";
			
			$resultado = $this->pdo->query($sql);
            $verfactura = $resultado->fetchAll();
			$sql = "SELECT f.*,v.placa_vehiculo as vehiculo, CONCAT(c.nombre_cliente, ' ', c.apellido_cliente) as cliente FROM factura f inner join vehiculos v on v.id_vehiculo=f.placa_vehiculo inner join clientes c on c.id_cliente=f.identificacion_cliente where id_factura=".$idFact.";";
			$resultado = $this->pdo->query($sql);
			$infoFactura = $resultado->fetchAll();
            return [$verfactura , $infoFactura];
		}
		public function idFactura(){
			try{
				$sql = "SELECT MAX(id_factura) as max_id FROM factura";
				$resultado = $this->pdo->query($sql);
				$verIdfac = $resultado->fetch();
				return $verIdfac;

			}catch (Exception $e) {
				die("....".$e->getMessage());	
			}
		}

    }
