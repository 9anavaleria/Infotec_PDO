
<div class="container">
        <div class="row">
            <div class="col-md-10 ">
                <h1 class="titulos mt-1">Editar Cliente </h1>
                <hr>
                <div>
                    <form class="row g-3 needs-validation" method="post" action="?c=Cliente&a=modificar_cliente" id="cliente" novalidate>  
                        <div class="col-md-2">
                            <label for="id_cliente" class="form-label">Id Cliente</label>
                            <input type="text" class="form-control" id="id_cliente"  required name="id_cliente" placeholder="Id Cliente" value="<?php echo $cliente['id_cliente']?>" readonly>
                        </div>    
                        <div class="col-md-4">
                            <label for="identificacion_cliente" class="form-label">Identificacion</label>
                            <input type="text" class="form-control" id="identificacion_cliente"  required name="identificacion_cliente" placeholder="Identificacion" value="<?php echo $cliente['identificacion_cliente']?>" readonly>
                            </div>
                        <div class="col-md-6">
                            <label for="nombre_cliente" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre_cliente"  required name="nombre_cliente" placeholder="Nombre" value="<?php echo $cliente['nombre_cliente']?>">
                            <span id="errornombres_cliente" style="color: red;"></span>
                            </div>
                        <div class="col-md-4 mt-0">
                            <label for="apellido_cliente" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" id="apellido_cliente"  required name="apellido_cliente" placeholder="Apellidos" value="<?php echo $cliente['apellido_cliente']?>">
                            <span id="errorapellido_cliente" style="color: red;"></span>
                        </div>
                        <div class="col-md-4">
                            <label for="telefono_cliente" class="form-label">Telefono</label>
                            <input type="text" class="form-control" id="telefono_cliente"  required name="telefono_cliente" placeholder="Telefono" value="<?php echo $cliente['telefono_cliente']?>">
                            <span id="errortelefono" style="color: red;"></span>
                        </div>
                        <div class="col-md-4">
                            <label for="correo_cliente" class="form-label">Correo</label>
                            <input type="text" class="form-control" id="correo_cliente"  required name="correo_cliente" placeholder="Correo" value="<?php echo $cliente['correo_cliente']?>">
                            <span id="errorcorreo" style="color: red;"></span>
                        </div>
                        <input type="submit" class="btn btn-enviar mt-2 ">
                        <a type="button" href="?c=Cliente" class="btn btn-danger mt-2 ml-1 "> Cancelar </a>
                    </form>
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
            var nombre = $("#nombre_cliente").val();
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