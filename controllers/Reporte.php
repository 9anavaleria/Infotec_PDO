<?php
session_start();
require_once "models/dto_model/Producto_dto.php";
require_once "models/dao_model/Producto_dao.php";
require_once "models/dto_model/Categoria_dto.php";
require_once "models/dao_model/Categoria_dao.php";
require_once "models/dto_model/Servicio_dto.php";
require_once "models/dao_model/Servicio_dao.php";
require_once "models/dto_model/Factura_dto.php";
require_once "models/dao_model/Factura_dao.php";
require_once "models/dto_model/Cliente_dto.php";
require_once "models/dao_model/Cliente_dao.php";
class Reporte
{
    private $facturaDao;
    private $categoriaDao;
    private $clienteDao;
    private $usuarioDao;
    private $productoDao;
    private $servicioDao;
    public function __construct()
    {
        $this->productoDao = new Producto_dao;
        $this->facturaDao = new Factura_dao;
        $this->clienteDao = new Cliente_dao;
        $this->servicioDao = new Servicio_dao;
        $this->categoriaDao = new Categoria_dao;

    }
    public function index()
    {
        require_once "views/roles/admin/header_dash.php";
        require_once "views/modules/4_reports/reporte.view.php";
        require_once "views/roles/admin/footer.php";
    }
    public function reportProductos()
    {
        $productos = $this->productoDao->verProductoDao();
        // Define el nombre del archivo CSV
        $csvFileName = 'InventarioProducto.csv';

        // Abre el archivo CSV para escritura
        $csvFile = fopen($csvFileName, 'w');

        // Establece el separador personalizado (por ejemplo, punto y coma)
        $separator = ';';
        $data = array('ID', 'Categoria', 'Nombre', 'Cantidad', 'Precio');
        fputcsv($csvFile, $data, $separator);

        // Escribe los datos en el archivo CSV con el separador personalizado
        foreach ($productos as $row) {
            $data = array($row['id_producto'], utf8_decode($row['nombre_categoria']), utf8_decode($row['nombre_producto']), $row['exist_producto'], $row['precio_producto']);
            fputcsv($csvFile, $data, $separator);
        }

        // Cierra el archivo CSV
        fclose($csvFile);

        // Establece las cabeceras HTTP para descargar el archivo CSV
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $csvFileName . '"');

        // Lee y envía el contenido del archivo CSV al navegador
        readfile($csvFileName);

        // Elimina el archivo CSV temporal (opcional)
        unlink($csvFileName);
    }
    public function reportServicios()
    {
        $servicios = $this->servicioDao->verServicioDao();
        // Define el nombre del archivo CSV
        $csvFileName = 'InventarioServicios.csv';
        // Abre el archivo CSV para escritura
        $csvFile = fopen($csvFileName, 'w');

        // Establece el separador personalizado (por ejemplo, punto y coma)
        $separator = ';';
        $data = array('ID', 'Nombre', 'Precio');
        fputcsv($csvFile, $data, $separator);

        // Escribe los datos en el archivo CSV con el separador personalizado
        foreach ($servicios as $row) {
            $data = array($row['id_servicios'], utf8_decode($row['nombre_servicio']), $row['precio_servicio']);
            fputcsv($csvFile, $data, $separator);
        }

        // Cierra el archivo CSV
        fclose($csvFile);

        // Establece las cabeceras HTTP para descargar el archivo CSV
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $csvFileName . '"');

        // Lee y envía el contenido del archivo CSV al navegador
        readfile($csvFileName);

        // Elimina el archivo CSV temporal (opcional)
        unlink($csvFileName);
    }
    public function reportFacturas()
    {
        $facturas = $this->facturaDao->verFacturaDao();
        // Define el nombre del archivo CSV
        $csvFileName = 'InformeFacturas.csv';

        // Abre el archivo CSV para escritura
        $csvFile = fopen($csvFileName, 'w');

        // Establece el separador personalizado (por ejemplo, punto y coma)
        $separator = ';';
        $data = array('ID', 'Fecha', 'Id. Cliente', 'Nombre Cliente', 'Placa', 'Total');
        fputcsv($csvFile, $data, $separator);

        // Escribe los datos en el archivo CSV con el separador personalizado
        foreach ($facturas as $row) {
            $data = array($row['id_factura'], $row['fecha_factura'], $row['identificacion_cliente'], $row['cliente'], $row['vehiculo'], $row['total_pedido']);
            fputcsv($csvFile, $data, $separator);
        }

        // Cierra el archivo CSV
        fclose($csvFile);

        // Establece las cabeceras HTTP para descargar el archivo CSV
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $csvFileName . '"');

        // Lee y envía el contenido del archivo CSV al navegador
        readfile($csvFileName);

        // Elimina el archivo CSV temporal (opcional)
        unlink($csvFileName);
    }
    public function reportClientes()
    {
        $clientes = $this->clienteDao->verClienteDao();
        // Define el nombre del archivo CSV
        $csvFileName = 'InformeCliente.csv';

        // Abre el archivo CSV para escritura
        $csvFile = fopen($csvFileName, 'w');

        // Establece el separador personalizado (por ejemplo, punto y coma)
        $separator = ';';
        $data = array('ID', 'Id. Cliente', 'Nombre', 'Apellido', 'telefono', 'Correo');
        fputcsv($csvFile, $data, $separator);

        // Escribe los datos en el archivo CSV con el separador personalizado
        foreach ($clientes as $row) {
            $data = array($row['id_cliente'], $row['identificacion_cliente'], $row['nombre_cliente'], $row['apellido_cliente'], $row['telefono_cliente'], $row['correo_cliente']);
            fputcsv($csvFile, $data, $separator);
        }

        // Cierra el archivo CSV
        fclose($csvFile);

        // Establece las cabeceras HTTP para descargar el archivo CSV
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $csvFileName . '"');

        // Lee y envía el contenido del archivo CSV al navegador
        readfile($csvFileName);

        // Elimina el archivo CSV temporal (opcional)
        unlink($csvFileName);
    }
}
?>