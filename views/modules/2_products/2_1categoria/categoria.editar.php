
   <div class="container">
        <div class="row">
            <div class="col-md-10 ">
                <h1 class="titulos mt-1">Editar Categoria</h1>
    <hr>
                <form class="row g-3 needs-validation" method="post" action="?c=Categoria&a=modificar_categoria" id="categoria" novalidate>
               
                    <div class="col-md-6">
                        <label for="id_categoria" class="form-label">Id Categoria</label>
                        <input type="int" class="form-control mb-3"  name="id_categoria" placeholder="Id Categoria" value="<?php echo $categoria['id_categoria']?>" readonly >
                        </div>
                    <div class="col-md-6">
                        <label for="nombre_categoria"  class="form-label">Nombre Categoria</label>
                        <input type="text" class="form-control" id="nombre" required name="nombre_categoria" placeholder="Nombre rol" value="<?php echo $categoria['nombre_categoria']?>">
                        <span id="errorNombre" style="color: red;"></span>
                        </div>
                    <input type="submit" class="btn btn-enviar mt-2 ">
                    
                </form>

            </div>
        </div>
    </div>


</body>
<script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js" charset="utf-8"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
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

