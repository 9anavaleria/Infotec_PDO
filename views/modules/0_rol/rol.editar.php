    <div class="container">
        <div class="row">
            <div class="col-md-10 ">
                <h1 class="titulos mt-1">Editar Rol</h1>
                <hr>
                <form class="row g-3 needs-validation" method="post" action="?c=Roles&a=modificar_rol"novalidate>
                    <div class="col-md-6">
                        <label for="id_rol" class="form-label">Código Rol</label>
                        <input type="int" class="form-control mb-3" name="id_rol" placeholder="Codigo Rol" value="<?php echo $rol[0]?>" readonly >
                        </div>
                    <div class="col-md-6">
                        <label for="nombre_rol" class="form-label">Nombre Rol</label>
                        <input type="text" class="form-control" id="nombre_rol" required name="nombre_rol" placeholder="Nombre rol" value="<?php echo $rol[1]?>">
                        </div>
                    <input type="submit" class="btn btn-enviar mt-2 " > 
                    <a type="button" href="?c=Roles" class="btn btn-danger mt-2 ml-1 "> Cancelar </a>
                </form>
            </div>
        </div>
    </div>
</body>


