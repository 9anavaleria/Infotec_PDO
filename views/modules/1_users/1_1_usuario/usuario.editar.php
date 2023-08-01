
<div class="container">
        <div class="row">
            <div class="col-md-10 ">
                <h1 class="titulos mt-1">Editar Usuario</h1>
    <hr>
    <div>
                <form class="row g-3 needs-validation" method="post" action="?c=Usuario&a=modificar_usuario"novalidate>
                <div class="col-md-2">
                        <label for="id_rol" class="form-label">Rol</label>
                <select class="form-control mb-3" name="id_rol" placeholder="Rol" >
                    
                    <?php 
                        foreach($verRol as $vrol){
                            
                            ?>
                            <option selected value="<?php echo $vrol['id_rol']?>"> <?php echo $vrol['nombre_rol']?></option>

                            <?php } ?>

                    </select>    
                
                        
                        </div>
                    <div class="col-md-5">
                        <label for="id_usuario" class="form-label">Identificacion</label>
                        <input type="text" class="form-control" id="id_usuario"  required name="id_usuario" placeholder="Identificacion" value="<?php echo $usuario['id_usuario']?>" readonly>
                        </div>
                    <div class="col-md-5">
                        <label for="Nombre rol" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="Nombre rol"  required name="nombres_usuario" placeholder="Nombre" value="<?php echo $usuario['nombres_usuario']?>">
                        </div>
                    <div class="col-md-6 mt-0">
                        <label for="apellidos_usuario" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos_usuario"  required name="apellidos_usuario" placeholder="Apellidos" value="<?php echo $usuario['apellidos_usuario']?>">
                        </div>
                        <div class="col-md-6">
                            <label for="correo_usuario" class="form-label">Correo</label>
                            <input type="text" class="form-control" id="correo_usuario"  required name="correo_usuario" placeholder="Correo" value="<?php echo $usuario['correo_usuario']?>">
                            </div>
                        <div class="col-md-6">
                        <label for="telefono_usuario" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="telefono_usuario"  required name="telefono_usuario" placeholder="Telefono" value="<?php echo $usuario['telefono_usuario']?>">
                        </div>
                    
                    <div class="col-md-6">
                        <label for="pass_usuario" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="pass_usuario"  required name="pass_usuario" placeholder="Contraseña" value="<?php echo $usuario['pass_usuario']?>">
                        </div>
                        <input type="submit" class="btn btn-enviar mt-2 ">
                        <a type="button" href="?c=Usuario" class="btn btn-danger mt-2 ml-1 "> Cancelar </a>

                        </form>
                    
                    
               

            </div>
        </div>
    </div>


</body>