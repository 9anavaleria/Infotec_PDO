<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<body>
    <div class="container">
    <h1 class="titulos mt-1">Clientes</h1>
    <hr>
        <div class="row tablas">
            <div class="col-md-3">
                <form method="post" action="?c=Cliente" id="cliente" class="row g-3 needs-validation" novalidate>
                    <input type="text" class="form-control mb-3" id="id_cliente" name="identificacion_cliente" placeholder="# Identificación">
                    <span id="errorId_cliente" style="color: red;"></span>
                    <input type="text" class="form-control mb-3" id="nombres_cliente" name="nombre_cliente" placeholder="Nombres">
                    <span id="errornombres_cliente" style="color: red;"></span>
                    <input type="text" class="form-control mb-3" id="apellido_cliente" name="apellido_cliente" placeholder="Apellidos">
                    <span id="errorapellido_cliente" style="color: red;"></span>
                    <input type="text" class="form-control mb-3" id="telefono_cliente" name="telefono_cliente" placeholder="Telefono">
                    <span id="errortelefono" style="color: red;"></span>
                    <input type="text" class="form-control mb-3" id="correo_cliente" name="correo_cliente" placeholder="Correo">
                    <span id="errorcorreo" style="color: red;"></span>
                    <div class="container">
                        <?php if(!empty($alerta)){ ?>
                            <div class="">
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $alerta ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    <input type="submit" class="btn btn-enviar mt-2 ">
                </form>
                <div class="tamaño">
                    <td  class="text-center">
                        <a class="btn-otro btn-secondary" href="?c=Vehiculo"     style="border-top-width: 6px;margin-bottom: 5px;">
                            <i class="fas fa-motorcycle"></i>
                            <div class= "parrafo">Crear Vehiculo</div>
                        </a>
                    </td>
                </div>
            </div>
        <div class="div col-md-9">        
        <table id="tablacliente" class="table justify-content-center col-md-9 ">
            <thead>
                <tr class="text-center">
                    <th scope="col">ID Cliente</th>
                    <th scope="col">Identificacion</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>   
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo</th>
                    <?php if ($_SESSION['rol'] == 1 ){?>
                    <th scope="col">Modificar</th>
                    <th scope="col">Eliminar</th>
                    <?php }?>
                </tr>
            </thead>
            <tbody>
                <?php foreach($vercliente as $cliente){ ?>
                <tr>
                    <td class="text-center">
                        <?php echo $cliente['id_cliente']?>
                    </td>
                    <td class="text-center"> 
                        <?php echo $cliente['identificacion_cliente']?>
                    </td>
                    <td class="text-center">
                        <?php echo $cliente['nombre_cliente']?>
                    </td>
                    <td class="text-center"> 
                        <?php echo $cliente['apellido_cliente']?>
                    </td><td class="text-center">
                        <?php echo $cliente['telefono_cliente']?>
                    </td>
                    <td class="text-center"> 
                        <?php echo $cliente['correo_cliente']?>
                    </td>  
                    <?php if ($_SESSION['rol'] == 1 ){?>                          
                    <td class="text-center">
                        <a class="btn btn-warning" href="?c=Cliente&a=editar_cliente& id_cliente=<?php echo $cliente['id_cliente']?>">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <a class="btn btn-danger" href="?c=Cliente&a=eliminar_Cliente& id_cliente=<?php echo $cliente['id_cliente']?>">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                    <?php }?>
                    </tr>
                <?php } ?>
                </tbody>

            </div>
        </div>
    </div>
</div>
</body>
<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/main.js" charset="utf-8"></script>
<script src="js/validacion.js" charset="utf-8"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
<script>
        $(document).ready(function() {
            $("#cliente").submit(function(event) {
                var idcliente = $("#id_cliente").val();
                var soloNumeros = /^[0-9]+$/.test(idcliente);

                if (!soloNumeros) {
                    $("#errorId_cliente").html("La identificación debe contener solo números.");
                    event.preventDefault();
                } else {
                    $("#errorId_cliente").html("");
                }
                var nombre = $("#nombres_cliente").val();
                var soloTexton= /^[A-Za-z]+$/.test(nombre);
                
                if (!soloTexton) {
                    $("#errornombres_cliente").html("El nombre debe contener solo letras.");
                    event.preventDefault();
                    
                } else {
                    $("#errornombres_cliente").html("");
                }
                var apellido = $("#apellido_cliente").val();
                var soloTextoa= /^[A-Za-z]+$/.test(apellido);
                if (!soloTextoa) {
                    $("#errorapellido_cliente").html("El apellido debe contener solo letras.");
                    event.preventDefault();
                    
                } else {
                    $("#errorapellido_cliente").html("");
                }
                var correo = $("#correo_cliente").val();
                var soloCorreo= /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(correo);
                if (!soloCorreo) {
                    $("#errorcorreo").html("Ingrese un correo valido.");
                    event.preventDefault();
                    
                } else {
                    $("#errorcorreo").html("");
                }
                var telefono = $("#telefono_cliente").val();
                var solotelefono = /^3\d{9}$/.test(telefono);
                if (!solotelefono) {
                    $("#errortelefono").html("Ingrese un telefono valido.");
                    event.preventDefault();
                    
                } else {
                    $("#errortelefono").html("");
                }
                
                
            });
            
        });
    </script>