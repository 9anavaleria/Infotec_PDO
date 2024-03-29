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
	<link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet" />
</head>
<body id="body">
	<nav class="navbar-expand-lg navbar-light nav navbar-nav navbar-right sticky-top d-flex justify-content-between"
		id="barra">
		<div class="bi bi-three-dots-vertical text-white " id="btn_open">
		</div>
		<div class="nav" id="navbarNavAltMarkup ">
			<div class="collapse navbar-collapse text-white ml-2 ">
			</div>
			<div class="d-flex  barra_nav">
				<a class="btn dropdown-toggle barra_nav_items" type="button" data-toggle="dropdown"
					aria-expanded="false">
					<i class="bi bi-person-circle"></i>
					<?php print($_SESSION['session']) ?>
				</a>
				<div class="dropdown-menu dropdown-menu-right">
					<a class="dropdown-item" ><?php print($_SESSION['nombre'])?></a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item text-danger" href="?c=Logout">Cerrar Sesión</a>
				</div>
			</div>
	</nav>
	<div class="menu_side" id="side_menu">
		<div class="name_page">
			<img src="assets/img/logosinf.png" class="rounded">

		</div>
		<div class="options_menu" id="">
			<a href="?c=Dashboard">
				<div class="option">
					<i class="fas fa-home" title="Inicio"></i>
					<h4 class="text-center">Inicio</h4>
				</div>
			</a>
			<?php if ($_SESSION['rol'] == 1) { ?>
				<a href="?c=Roles">
					<div class="option">
						<i class="fas fa-clipboard-user " title="Roles"></i>
						<h4>Roles</h4>
					</div>
				</a>
				</a>
				<a href="?c=Usuario">
					<div class="option">
						<i class="fas fa-user-tie" title="Usuarios"></i>
						<h4>Usuarios</h4>
					</div>
				</a>
			<?php } ?>
			</a>
			<a href="?c=Cliente">
				<div class="option">
					<i class="bi bi-person-lines-fill" title="Clientes"></i>
					<h4>Clientes</h4>
				</div>
			</a>
			</a>
			<a href="?c=Vehiculo">
				<div class="option">
					<i class="fas fa-motorcycle align-self-center" title="Vehiculos"></i>
					<h4>Vehiculos</h4>
				</div>
			</a>
			<a href="?c=Producto">
				<div class="option">
					<i class="bi bi-archive-fill " title="Productos"></i>
					<h4>Productos</h4>
				</div>
			</a>
			<a href="?c=Servicio">
				<div class="option">
					<i class="bi bi-tools" title="Servicios"></i>
					<h4>Servicios</h4>
				</div>
			</a>
			<a href="?c=Factura">
				<div class="option">
					<i class="fas fa-cash-register" title="Facturas"></i>
					<h4>Facturas</h4>
				</div>
			</a>
			<a href="?c=Reporte">
				<div class="option">
					<i class="bi bi-clipboard2-data-fill" title="Reportes"></i>
					<h4>Reportes</h4>
				</div>
			</a>
			<div><input type="text" class="form-control" name="session_rol" id="session_rol" value=<?php echo $_SESSION['rol'] ?> readonly hidden></div>

		</div>

	</div>

	<!-- Contenido -->

	<div class="row">

		<main class="col-12 p-2 m-0">