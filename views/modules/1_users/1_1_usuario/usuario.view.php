<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<body>
    <div class="container">
    <h1 class="titulos mt-1">Usuario</h1>
    <hr>
        <div class="row tablas">
            <div class="col-md-3">
                <form method="post" action="?c=Usuario" class="row g-3 needs-validation" id="usuario" novalidate>
                    <select class="form-control mb-3" name="id_rol" placeholder="Rol" >
                    <option selected>Elija el rol</option>
                    <?php foreach($verRol as $vrol){
                        ?>
                        <option value='<?php echo $vrol['id_rol']?>'> <?php echo $vrol['nombre_rol']?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <input type="int" class="form-control mb-3 numero" id="id_usuario" name="id_usuario" placeholder="# Identificación">
                    <span id="errorId_usuario" style="color: red;"></span>
                    <input type="text" class="form-control mb-3 texto" id="nombres_usuario" name="nombres_usuario" placeholder="Nombres">
                    <span id="errornombres_usuario" style="color: red;"></span>
                    <input type="text" class="form-control mb-3 texto" id="apellido_usuario" name="apellidos_usuario" placeholder="Apellidos">
                    <span id="errorapellido_usuario" style="color: red;"></span>
                    <input type="text" class="form-control mb-3 email" id="correo_usuario" name="correo_usuario" placeholder="Correo">
                    <span id="errorcorreo" style="color: red;"></span>
                    <input type="text" class="form-control mb-3 numero" id="telefono_usuario" name="telefono_usuario" placeholder="Telefono">
                    <span id="errortelefono" style="color: red;"></span>
                    <input type="password" class="form-control mb-3 password" id="pass_usuario" name="pass_usuario" placeholder="Contraseña">
                    <span id="errorpass" style="color: red;"></span>
                    <input type="int" class="form-control mb-3 numero" name="estado_usuario" placeholder="Estado">
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
                        <a class="btn-otro btn-secondary" href="?c=Roles"     style="border-top-width: 6px;margin-bottom: 5px;">
                            <i class="fas fa-clipboard-user "></i>
                    <div class= "parrafo">Crear Rol</div>
                    </a>
                    </td>
                </div>
            </div>
            <div class="div col-md-9">
                <table id="tablausuario"class="table justify-content-center col-11 ">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Rol</th>
                            <th scope="col">Identificacion</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Modificar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach ($verUsuario as $usuario){
                        ?>
                        <tr>
                            <td class="text-center">
                                <?php echo $usuario['nombre_rol']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $usuario['id_usuario']?>
                            </td>
                            <td class="text-center">
                                <?php echo $usuario['nombres_usuario']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $usuario['apellidos_usuario']?>
                            </td><td class="text-center">
                                <?php echo $usuario['correo_usuario']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $usuario['telefono_usuario']?>
                            </td>
                            <td class="text-center"><a class="btn btn-warning" href="?c=Usuario&a=editar_usuario& id_usuario=<?php echo $usuario['id_usuario']?>"><i class="bi bi-pencil-square"></i></a></td>
                            <td  class="text-center"><a class="btn btn-danger" href="?c=Usuario&a=eliminar_usuario& id_usuario=<?php echo $usuario['id_usuario']?>"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        <?php
                        }
                        ?>
                        </tbody>
            </div>
        </div>
    </div>


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
                var pass = $("#pass_usuario").val();
                var solopass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/.test(pass);
                if (!solopass) {
                    $("#errorpass").html("Escriba una contraseña con al menos 8 caracteres, que incluye al menos una letra mayúscula, una letra minúscula y un número.");
                    event.preventDefault();
                    
                } else {
                    $("#errorpass").html("");
                }
                
            });
            
        });
    </script>
</body>
