
    <div class="container">
        <div class="row">
            <div class="col-md-10 ">
                <h1 class="titulos mt-1">Editar Servicio</h1>
    <hr>
                <form class="row g-3 needs-validation" method="post" action="?c=Servicio&a=modificar_servicio" id="servicio" novalidate>
               
                    <div class="col-md-4">
                        <label for="id_servicios" class="form-label">Id Servicio</label>
                        <input type="int" class="form-control mb-3" name="id_servicios" placeholder="Id Servicio" value="<?php echo $servicio['id_servicios']?>" readonly >
                        </div>
                    <div class="col-md-4">
                        <label for="nombre_servicio" class="form-label">Nombre Servicio</label>
                        <input type="text" class="form-control" id="nombre_servicio" required name="nombre_servicio" placeholder="Nombre Servicio" value="<?php echo $servicio['nombre_servicio']?>">
                        </div>
                        <div class="col-md-4">
                        <label for="precio_servicio" class="form-label">Precio Servicio</label>
                        <input type="text" class="form-control" id="precio_servicio" required name="precio_servicio" placeholder="Precio Servicio" value="<?php echo $servicio['precio_servicio']?>">
                        </div>
                    <input type="submit" class="btn btn-enviar mt-2 ">
                    <a type="button" href="?c=Servicio" class="btn btn-danger mt-2 ml-1 "> Cancelar </a>
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
<script>
document.getElementById("servicio").addEventListener("submit", function(event) {
        var respuesta = confirm("¿Está seguro de que desea modificar el Servicio?");
        if (!respuesta) {
            event.preventDefault(); 
        }
    });
</script>
