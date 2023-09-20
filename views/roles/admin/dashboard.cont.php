<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<script src="https://kit.fontawesome.com/ae713951db.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../../../assets/css/styles-dashboard.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
</head>
<div class="container">
    <div class="row pt-2">
         <div class="col-md-12 ">
           
            <div class="tarjetas" id="personas">           
      
                <div class="col-xl-8 col-md-6 mb-4">
                    <div class="card border-left shadow h-100 py-2 principal" data-toggle="collapse" href="#tarjetaPersona" role="button" aria-expanded="false" aria-controls="tarjetaPersona">
                        <div href=""class="card-body">
                            <div class="row no-gutters">
                                <div class="col mr-2">
                                    <div class="col-auto">
                                        <i class="fas fa-user-tie fa-2x text-gray-300 text-white"></i>
                                    </div>
                                    <div class="text-xs font-weight-bold  text-uppercase mb-1 text-white">
                                        Personas</div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                         
                <div class="row ">
                    <div class="col-12">
                        <div class="collapse multi-collapse col-12  colum" id="tarjetaPersona">
                            <?php if ($_SESSION['rol'] == 1 ){?> 
                            <div class="col-xl-12 col-md-6 mb-4" id="tarjetaPersona">
                                <div class="card border-left secundario shadow h-100 py-2">
                                    <a class="card-body" href="?c=Roles">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-uppercase mb-1">Roles
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-user fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php }?>
                            <div class="col-xl-12 col-md-6 mb-4">
                                <div class="card border-left secundario shadow h-100 py-2">
                                    <a class="card-body" href="?c=Cliente">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold  text-uppercase mb-1">
                                                    Clientes</div>
                                            
                                            </div>
                                            <div class="col-auto">
                                                <i class="bi bi-person-lines-fill fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                </div>
                                <div class="col-xl-12 col-md-6 mb-4">
                                    <div class="card border-left secundario shadow h-100 py-2">
                                        <a class="card-body" href="?c=Vehiculo">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold  text-uppercase mb-1">
                                                        Vehiculos</div>
                                                    
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-motorcycle fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
                            
            <div class="tarjetas" id="productos">           
                <div class="col-xl-8 col-md-6 mb-4  align-self-center">
                    <div class="card border-left shadow h-100 py-2 principal" data-toggle="collapse" href="#tarjetaProducto" role="button" aria-expanded="false" aria-controls="tarjetaProducto">
                                    <div href=""class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="text-xs font-weight-bold  text-uppercase mb-1 text-white">
                                                    <div class="col mr-2">
                                                        <i class="bi bi-archive-fill fa-2x text-gray-300 text-white"></i>
                                                    </div>
                                                    Productos</div>
                                                
                                            </div>
                                            <div class="col-auto">
                                        </div>
                                    </div>
                                </div>
                </div>
                <div class="row ">
                    <div class="col-12">
                        <div class="collapse multi-collapse col-12 colum" id="tarjetaProducto">
                            <?php if ($_SESSION['rol'] == 1 ){?>                          
                            <div class="col-xl-12 col-md-6 mb-4" id="tarjetaProducto">
                                <div class="card border-left secundario shadow h-100 py-2">
                                    <a class="card-body" href="?c=Categoria">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-uppercase mb-1">Categorias
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="bi bi-collection-fill fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php }?>

                        <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left secundario shadow h-100 py-2">
                                <a class="card-body" href="?c=Producto">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold  text-uppercase mb-1">
                                                Productos</div>
                                           
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-boxes-packing fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            </div>
                 <div class="col-xl-12 col-md-6 mb-4">
                                <div class="card border-left secundario shadow h-100 py-2">
                                    <a class="card-body" href="?c=Servicio">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold  text-uppercase mb-1">
                                                    Servicios</div>
                                                
                                            </div>
                                            <div class="col-auto">
                                                <i class="fa-solid fa-screwdriver-wrench fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                </div>
                            </div>
            </div>
            </div>
            </div>
            <div class="tarjetas" id="compras">         
                <div class=" col-xl-8 col-md-6 mb-4 a align-self-center ">
                    <div class="card border-left shadow h-100 py-2 principal"data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                         <div href=""class="card-body">
                                        <div class="row no-gutters align-items-center justify-content-around">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold  text-uppercase mb-1 text-white">
                                                    <div class="col-auto">
                                                        <i class="fa-solid fa-shop fa-2x text-gray-300 text-white"></i>
                                                    </div>
                                                    Compras</div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="collapse multi-collapse col-12 colum" id="multiCollapseExample1">
                <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left secundario shadow h-100 py-2">
                                <a class="card-body" href="?c=Factura">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">Facturas
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-cash-register fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                </div>
                <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left secundario shadow h-100 py-2">
                                <a class="card-body"  href="?c=Reporte">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold  text-uppercase mb-1">
                                                Reportes</div>
                                           
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-clipboard2-data-fill fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
            </div>
        </div>
    </div>
            </div>
</div>
<script src="../../../assets/js/jquery.slim.min.js"></script>	
	<script src="../../../assets/js/popper.min.js"></script>	
	<script src="../../../assets/js/bootstrap.js"></script>	
	<script src="../../../assets/js/main.js" charset="utf-8"></script>


<!-- Content Row -->