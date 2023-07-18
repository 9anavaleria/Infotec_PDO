
    <div class="container">
        <div class="row">
            <div class="col-md-10 ">
                <h1 class="titulos mt-1">Editar Servicio</h1>
    <hr>
                <form class="row g-3 needs-validation" method="post" action="?c=Servicio&a=modificar_servicio"novalidate>
               
                    <div class="col-md-4">
                        <label for="id_servicios" class="form-label">Id Servicio</label>
                        <input type="int" class="form-control mb-3" name="id_servicios" placeholder="Id Servicio" value="<?php echo $edtiser[0]?>"  >
                        </div>
                    <div class="col-md-4">
                        <label for="nombre_servicio" class="form-label">Nombre Servicio</label>
                        <input type="text" class="form-control" id="nombre_servicio" required name="nombre_servicio" placeholder="Nombre Servicio" value="<?php echo $edtiser[1]?>">
                        </div>
                        <div class="col-md-4">
                        <label for="precio_servicio" class="form-label">Precio Servicio</label>
                        <input type="text" class="form-control" id="precio_servicio" required name="precio_servicio" placeholder="Precio Servicio" value="<?php echo $edtiser[2]?>">
                        </div>
                    <input type="submit" class="btn btn-enviar mt-2 ">
                    
                </form>

            </div>
        </div>
    </div>


</body>
