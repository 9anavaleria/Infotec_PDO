<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<body>
    <div class="container">
    <h1 class="titulos mt-1">Categoria</h1>
    <hr>
        <div class="row tablas">
           
            <div class="col-md-3">
                
                <form method="post" action="?c=Categoria" class="row g-3 needs-validation" id="categoria" novalidate>
                    <input type="text" class="form-control" id="nombre" value="" required name="nombre_categoria" placeholder="Nombre Categoria">
                    <span id="errorNombre" style="color: red;"></span>
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
                    <div class="tamaño">
                    <td  class="text-center">
                        <a class="btn-otro btn-secondary" href="?c=Producto"     style="border-top-width: 6px;margin-bottom: 5px;">
                            <i class="fas bi bi-archive-fill"></i>
                    <div class= "parrafo">Crear Producto</div>
                    </a>
                    </td>
                </div>
                                     
                </div>
            </div>
            <div class="div col-md-9">
                
                <table id="tablacategoria" class="table justify-content-center col-11 ">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Id</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Modificar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                     <tbody>
                        <?php 
                        foreach($verCategoria as $vcat){
                        ?>
                        
                        <tr>
                            <td class="text-center">
                                 <?php echo $vcat['id_categoria']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $vcat['nombre_categoria']?>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-warning" href="?c=Categoria&a=editar_categoria& id_categoria=<?php echo $vcat['id_categoria']?>">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                            <td  class="text-center">
                                <a class="btn btn-danger" href="?c=Categoria&a=eliminar_categoria&id_categoria=<?php echo $vcat['id_categoria']?>">
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
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
            $("#categoria").submit(function(event) {
                var nombre = $("#nombre").val();
                var soloTexto = /^[A-Za-z]+$/.test(nombre);

                if (!soloTexto) {
                    $("#errorNombre").html("El nombre debe contener solo letras.");
                    event.preventDefault();
                } else {
                    $("#errorNombre").html("");
                }
            });
        });
        document.getElementById("categoria").addEventListener("submit", function(event) {
        var respuesta = confirm("¿Estás seguro de que deseas enviar el formulario?");
        if (!respuesta) {
            event.preventDefault(); 
        }
        });
    </script>
</body>
