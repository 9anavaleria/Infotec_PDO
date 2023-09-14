<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

<body>
    <div class="container">
    <h1 class="titulos mt-1">Roles</h1>
    <hr>
   
        <div class="row tablas">
            <div class="col-md-4">
                <form method="post" id="rol"action="?c=Roles" class="row g-3 needs-validation" novalidate>
                    
                    <input type="text" class="form-control" id="nombreRol" value="" required name="nombre_rol" placeholder="Nombre rol" pattern="[A-Za-z\s]+" required title="Ingresa solo letras">
                    <span id="errorNombre" style="color: red;"></span>
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
                        <a class="btn-otro btn-secondary" href="?c=Usuario"     style="border-top-width: 6px;margin-bottom: 5px;">
                            <i class="fas fa-user-tie"></i>
                    <div class= "parrafo">Crear Usuario</div>
                    </a>
                    </td>
                </div>
            </div>
            <div class="div col-md-8">
                <table id="tablarol"class="table justify-content-center col-11 ">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Id</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Modificar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($ver as $vrol){
                        ?>
                        <tr>
                            <td class="text-center">
                                 <?php echo $vrol['id_rol']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $vrol['nombre_rol']?>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-warning" href="?c=Roles&a=editar_rol& id_rol=<?php echo $vrol['id_rol']?>">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                            <td  class="text-center">
                                <a class="btn btn-danger" href="?c=roles&a=eliminar_rol&id_rol=<?php echo $vrol['id_rol']?>">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
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
            $("#rol").submit(function(event) {
                var nombre = $("#nombreRol").val();
                var soloTexto = /^[A-Za-z]+$/.test(nombre);

                if (!soloTexto) {
                    $("#errorNombre").html("El nombre debe contener solo letras.");
                    event.preventDefault();
                } else {
                    $("#errorNombre").html("");
                }
            });
        });
        document.getElementById("rol").addEventListener("submit", function(event) {
        var respuesta = confirm("¿Está seguro de que desea crear el Rol?");
        if (!respuesta) {
            event.preventDefault(); 
        }
        });
    </script>
</body>
