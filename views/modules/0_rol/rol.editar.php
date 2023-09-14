    <div class="container">
        <div class="row">
            <div class="col-md-10 ">
                <h1 class="titulos mt-1">Editar Rol</h1>
                <hr>
                <form class="row g-3 needs-validation" id="rol" method="post" action="?c=Roles&a=modificar_rol"novalidate>
                    <div class="col-md-6">
                        <label for="id_rol" class="form-label">Código Rol</label>
                        <input type="int" class="form-control mb-3" name="id_rol" placeholder="Codigo Rol" value="<?php echo $rol[0]?>" readonly >
                        </div>
                    <div class="col-md-6">
                        <label for="nombre_rol" class="form-label">Nombre Rol</label>
                        <input type="text" class="form-control" id="nombreRol" required name="nombre_rol" placeholder="Nombre rol" value="<?php echo $rol[1]?>">
                        <span id="errorNombre" style="color: red;"></span>
                        </div>
                    <input type="submit" class="btn btn-enviar mt-2 " > 
                    <a type="button" href="?c=Roles" class="btn btn-danger mt-2 ml-1 "> Cancelar </a>
                </form>
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
    </script>
