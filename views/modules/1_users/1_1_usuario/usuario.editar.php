
    <div class="container">
        <div class="row">
            <div class="col-md-10 ">
                <h1 class="titulos mt-1">Editar Usuario</h1>
                <hr>
                <div>
                    <form class="row g-3 needs-validation" method="post" action="?c=Usuario&a=modificar_usuario" id="usuario" novalidate>
                        <div class="col-md-2">
                            <label for="id_rol" class="form-label">Rol</label>
                            <select class="form-control mb-3" name="id_rol" placeholder="Rol" >
                                    <?php 
                                foreach($rol as $vrol){
                                    ?>
                                <option selected value="<?php echo $vrol['id_rol']?>"> <?php echo $vrol['nombre_rol']?></option>
                                    <?php } ?>
                            </select>    
                        </div>
                        <div class="col-md-5">
                            <label for="id_usuario" class="form-label">Identificacion</label>
                            <input type="text" class="form-control" id="id_usuario"  required name="id_usuario" placeholder="Identificacion" value="<?php echo $usuario['id_usuario']?>" readonly>
                            <span id="errorId_usuario" style="color: red;"></span>
                            </div>
                        <div class="col-md-5">
                            <label for="Nombre rol" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombres_usuario"  required name="nombres_usuario" placeholder="Nombre" value="<?php echo $usuario['nombres_usuario']?>">
                            <span id="errornombres_usuario" style="color: red;"></span>
                            </div>
                        <div class="col-md-6 mt-0">
                            <label for="apellidos_usuario" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" id="apellidos_usuario"  required name="apellidos_usuario" placeholder="Apellidos" value="<?php echo $usuario['apellidos_usuario']?>">
                            <span id="errorapellido_usuario" style="color: red;"></span>
                            </div>
                        <div class="col-md-6">
                            <label for="correo_usuario" class="form-label">Correo</label>
                            <input type="text" class="form-control" id="correo_usuario"  required name="correo_usuario" placeholder="Correo" value="<?php echo $usuario['correo_usuario']?>">
                            <span id="errorcorreo" style="color: red;"></span>
                        </div>
                        <div class="col-md-6">
                            <label for="telefono_usuario" class="form-label">Telefono</label>
                            <input type="text" class="form-control" id="telefono_usuario"  required name="telefono_usuario" placeholder="Telefono" value="<?php echo $usuario['telefono_usuario']?>">
                            <span id="errortelefono" style="color: red;"></span>
                        </div>
                        <div class="col-md-6">
                            <label for="pass_usuario" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="pass_usuario"  required name="pass_usuario" placeholder="Contraseña" value="<?php echo $usuario['pass_usuario']?>">
                        </div>
                        <input type="submit" class="btn btn-enviar mt-2 ">
                        <a type="button" href="?c=Usuario" class="btn btn-danger mt-2 ml-1 "> Cancelar </a>
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
            $("#usuario").submit(function(event) {
                var idUsuario = $("#id_usuario").val();
                var soloNumeros = /^[0-9]+$/.test(idUsuario);

                if (!soloNumeros) {
                    $("#errorId_usuario").html("La identificación debe contener solo números.");
                    event.preventDefault();
                } else {
                    $("#errorId_usuario").html("");
                }
                var nombre = $("#nombres_usuario").val();
                var soloTexton= /^[A-Za-z]+$/.test(nombre);
                
                if (!soloTexton) {
                    $("#errornombres_usuario").html("El nombre debe contener solo letras.");
                    event.preventDefault();
                    
                } else {
                    $("#errornombres_usuario").html("");
                }
                var apellido = $("#apellido_usuario").val();
                var soloTextoa= /^[A-Za-z]+$/.test(apellido);
                if (!soloTextoa) {
                    $("#errorapellido_usuario").html("El apellido debe contener solo letras.");
                    event.preventDefault();
                    
                } else {
                    $("#errorapellido_usuario").html("");
                }
                var correo = $("#correo_usuario").val();
                var soloCorreo= /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(correo);
                if (!soloCorreo) {
                    $("#errorcorreo").html("Ingrese un correo valido.");
                    event.preventDefault();
                    
                } else {
                    $("#errorcorreo").html("");
                }
                var telefono = $("#telefono_usuario").val();
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