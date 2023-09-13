
<div class="container">
        <div class="row">
            <div class="col-md-10 ">
                <h1 class="titulos mt-1">Editar Proveedor </h1>
    <hr>
    <div>
                <form class="row g-3 needs-validation" method="post" action="?c=Proveedor&a=modificar_proveedor"novalidate>  
                <div class="col-md-2">
                        <label for="id_proveedor" class="form-label">Id Proveedor</label>
                        <input type="text" class="form-control" id="id_proveedor"  required name="id_proveedor" placeholder="Id Proveedor" value="<?php echo $proveedor['id_proveedor']?>" readonly>
                        </div>    
                    <div class="col-md-4">
                        <label for="nombre_proveedor" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre_proveedor"  required name="nombre_proveedor" placeholder="Nombre" value="<?php echo $proveedor['nombre_proveedor']?>" >
                        </div>
                    <div class="col-md-6">
                        <label for="telefono_proveedor" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="telefono_proveedor"  required name="telefono_proveedor" placeholder="Telefono" value="<?php echo $proveedor['telefono_proveedor']?>">
                        </div>
                    <input type="submit" class="btn btn-enviar mt-2 ">
                        </form>
                    
                    
               

            </div>
        </div>
    </div>


</body>