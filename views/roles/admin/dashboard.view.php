<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<script src="https://kit.fontawesome.com/ae713951db.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/css/styles-dashboard.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
</head>
<body id="body">
	
		<nav class="navbar-expand-lg navbar-light nav navbar-nav navbar-right sticky-top" id="barra">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="bi bi-three-dots-vertical text-white m-4" id="btn_open"> Menu
			</div>
			<div class="nav" id="navbarNavAltMarkup">
				<div class="collapse navbar-collapse text-white ml-2">
					
				</div>
				<div class="justify-content-center barra_nav">
				  <a class="btn barra_nav_items" aria-current="page" href="inicio.html"><i class="bi bi-envelope-fill "></i>Correo</a>
				  <a class="btn barra_nav_items" href="#"><i class="bi bi-calendar3"></i>Calendario</a>
				  <a class="btn barra_nav_items" href="#"><i class="bi bi-ui-checks"></i>Tareas</a>
				  <a class="btn dropdown-toggle barra_nav_items" type="button" data-toggle="dropdown" aria-expanded="false">
					<i class="bi bi-person-circle"></i>Administrador
				  </a>
				  <div class="dropdown-menu dropdown-menu-right">
					<a class="dropdown-item" href="#">Perfil</a>
					<a class="dropdown-item" href="#">Configuracion</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item text-danger" href="inicio.html">Cerrar Sesión</a>
				  </div>
				</div>
		</nav>
		<div class="menu_side" id="side_menu" >
			<div class="name_page">
				<img src="assets/img/logosinf.png" class="rounded">
				<hr>
				Logo
			</div>
			<div class="options_menu" id="">
				<a href="index.html">
					<div class="option">
						<i class= "fas fa-home" title="Productos"></i>
						<h4 class="text-center">Inicio</h4>
					</div>
				</a>
				<a href="?c=Roles">
					<div class="option">
						<i class="fa-solid fa-users" title="Usuario"></i>
					<h4>Ususario</h4>
					</div>
				</a>
				<a href="#">
					<div class="option">
						<i class= "bi bi-archive-fill align-self-center" title="Productos"></i>
						<h4>Productos</h4>
					</div>
				</a>
				<a href="#">
					<div class="option">
						<i class="fas fa-cash-register" ></i>
					<h4>Compras</h4>
				</div>
				</a>
				<a href="#">
					<div class="option">
						<i class="bi bi-stack" title="Inventario"></i>
					<h4>Inventario</h4>
				</div>
				</a>
				<a href="#">
					<div class="option">
						<i class="bi bi-clipboard2-data-fill" title="Reportes"></i>
					<h4>Reportes</h4>
				</div>
				</a>

			</div>

		</div>

		<!-- Contenido -->
		
		<div class="row">     
		
			<main class="col-12 p-0 m-0">
				<!-- Carga de Páginas -->
				
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
                            <div class="col-xl-12 col-md-6 mb-4">
                                <div class="card border-left secundario shadow h-100 py-2">
                                    <a class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold  text-uppercase mb-1">
                                                    Personas</div>
                                            
                                            </div>
                                            <div class="col-auto">
                                                <i class="bi bi-people-fill fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                </div>
                                <div class="col-xl-12 col-md-6 mb-4">
                                    <div class="card border-left secundario shadow h-100 py-2">
                                        <a class="card-body">
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
                            <div class="col-xl-12 col-md-6 mb-4" id="tarjetaProducto">
                                <div class="card border-left secundario shadow h-100 py-2">
                                    <a class="card-body" href="">
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
                        <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left secundario shadow h-100 py-2">
                                <a class="card-body">
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
                                    <a class="card-body">
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
                                <a class="card-body">
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
                                <a class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold  text-uppercase mb-1">
                                                Inventario</div>
                                           
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-stack fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            </div>
                            <div class="col-xl-12 col-md-6 mb-4">
                                <div class="card border-left secundario shadow h-100 py-2">
                                    <a class="card-body">
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
</div>
			</main>
		</div>





		
	<script src="assets/js/jquery.slim.min.js"></script>	
	<script src="assets/js/popper.min.js"></script>	
	<script src="assets/js/bootstrap.js"></script>	
	<script src="assets/js/main.js" charset="utf-8"></script>
</body>
</html>