<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<body>
    <div class="container">
        <h1 class="titulos mt-1">Servicios</h1>
        <hr>
        <div class="row tablas">
            <div class="col-md-4">
                <form method="post" action="?c=Servicio" id="servicio" class="row g-3 needs-validation" novalidate>
                    <input type="text" class="form-control mb-3" id="nombre_servicio" name="nombre_servicio" placeholder="Nombre Servicio">
                    <span id="errorNombre" style="color: red;"></span>
                    <input type="number" class="form-control mb-3" id="precio_servicio" name="precio_servicio" placeholder="Precio Servicio">
                    <span id="errorPrecio" style="color: red;"></span>
                    <input type="submit" class="btn btn-enviar mt-2 ">
                </form>
                <div class="centarboton">
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
                </div>
            </div>
            <div class="div col-md-8">
                <table id="tablaservivio" class="table justify-content-center col-11 ">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                            <?php if ($_SESSION['rol'] == 1 ){?> 
                            <th scope="col">Modificar</th>
                            <th scope="col">Eliminar</th>
                            <?php }?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($verServicios as $verSer){ ?>
                        <tr>
                            <td class="text-center">
                                 <?php echo $verSer['id_servicios']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $verSer['nombre_servicio']?>
                            </td>
                            <td class="text-center"> 
                               $<?php echo number_format($verSer['precio_servicio'], 0, '.', ',')?>
                            </td>
                                <?php if ($_SESSION['rol'] == 1 ){?> 
                            <td class="text-center">
                                <a class="btn btn-warning" href="?c=Servicio&a=editar_servicio& id_servicios=<?php echo $verSer['id_servicios']?>">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                            <td  class="text-center">
                                <a class="btn btn-danger" href="?c=Servicio&a=eliminar_servicio&id_servicios=<?php echo $verSer['id_servicios']?>">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                            <?php } ?>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/main.js" charset="utf-8"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
<script>
    $("#precio_servicio").change(function(){
        console.log($("#precio_servicio").val())
        if($("#precio_servicio").val()<0)
            $("#precio_servicio").val(0)
        }); 
    // Validación campos formulario
    $(document).ready(function() {
        $("#servicio").submit(function(event) {
            var nombre = $("#nombre_servicio").val();
            var soloTexto = /^[a-zA-Z0-9\s-]+$/.test(nombre);
            if (!soloTexto) {
                $("#errorNombre").html("El nombre no debe contener caracteres especiales.");
                event.preventDefault();
            } else {
                $("#errorNombre").html("");
            }
            var precio = $("#precio_servicio").val();
            if (precio < 100) {
                $("#errorPrecio").html("El Precio debe ser mayor a $100.");
                event.preventDefault();
            } else {
                $("#errorPrecio").html("");
            }
        });  
    });
    // Validación envio formulario
    document.getElementById("servicio").addEventListener("submit", function(event) {
        var respuesta = confirm("¿Está seguro de que desea crear el Servicio?");
        if (!respuesta) {
            event.preventDefault(); 
        }
    });
</script>

