
<div class="container">
        <div class="row">
            <div class="col-md-10 ">
                <h1 class="titulos mt-1">Editar Cliente </h1>
    <hr>
    <div>
                <form class="row g-3 needs-validation" method="post" action="?c=Cliente&a=modificar_cliente"novalidate>  
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
                        </div>
                    <div class="col-md-4 mt-0">
                        <label for="apellido_cliente" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="apellido_cliente"  required name="apellido_cliente" placeholder="Apellidos" value="<?php echo $cliente['apellido_cliente']?>">
                        </div>
                        <div class="col-md-4">
                        <label for="telefono_cliente" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="telefono_cliente"  required name="telefono_cliente" placeholder="Telefono" value="<?php echo $cliente['telefono_cliente']?>">
                        </div>
                    <div class="col-md-4">
                        <label for="correo_cliente" class="form-label">Correo</label>
                        <input type="text" class="form-control" id="correo_cliente"  required name="correo_cliente" placeholder="Correo" value="<?php echo $cliente['correo_cliente']?>">
                        </div>
                    
                   
                        <input type="submit" class="btn btn-enviar mt-2 ">
                        <a type="button" href="?c=Cliente" class="btn btn-danger mt-2 ml-1 "> Cancelar </a>

                        </form>
                    
                    
               

            </div>
        </div>
    </div>


</body>