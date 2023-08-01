
<div class="container">
        <div class="row">
            <div class="col-md-10 ">
                <h1 class="titulos mt-1">Editar Producto </h1>
    <hr>
    <div>
                <form class="row g-3 needs-validation" method="post" action="?c=Producto&a=modificar_producto"novalidate>  
                
                <div class="col-md-2">
                        <label for="id_categoria" class="form-label">Categoria</label>
                <select class="form-control mb-3" name="id_categoria" placeholder="categoria" >
                    
                    <?php 
                    foreach ($categoria as $vercat){
                        ?>  
                        <option value="<?php echo $vercat['id_categoria']?>"> <?php echo $vercat['nombre_categoria']?></option>
                        <?php

                            }
                        
                         ?>
                    </select>    
                
                        
                        </div>
                    <div class="col-md-3">
                        <label for="id_producto" class="form-label">Id Producto</label>
                        <input type="text" class="form-control" id="id_producto"  required name="id_producto" placeholder="Id Producto" value="<?php echo $producto[1]?>" readonly>
                        </div>
                    <div class="col-md-7">
                        <label for="nombre_producto" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre_producto"  required name="nombre_producto" placeholder="Nombre" value="<?php echo $producto[2]?>">
                        </div>
                    <div class="col-md-6 mt-0">
                        <label for="precio_producto" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="precio_producto"  required name="precio_producto" placeholder="Apellidos" value="<?php echo $producto[3]?>">
                        </div>
                        <div class="col-md-6">
                        <label for="exist_producto" class="form-label">Existencias</label>
                        <input type="text" class="form-control" id="exist_producto"  required name="exist_producto" placeholder="Telefono" value="<?php echo $producto[4]?>">
                        </div>
                    
                    
                    
                        <input type="submit" class="btn btn-enviar mt-2 ">
                        <a type="button" href="?c=Producto" class="btn btn-danger mt-2 ml-1 "> Cancelar </a>
                        </form>
                    
                    
               

            </div>
        </div>
    </div>


</body>