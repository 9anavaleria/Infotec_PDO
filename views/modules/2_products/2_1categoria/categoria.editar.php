
   <div class="container">
        <div class="row">
            <div class="col-md-10 ">
                <h1 class="titulos mt-1">Editar Categoria</h1>
    <hr>
                <form class="row g-3 needs-validation" method="post" action="?c=Categoria&a=modificar_categoria"novalidate>
               
                    <div class="col-md-6">
                        <label for="id_categoria" class="form-label">Id Categoria</label>
                        <input type="int" class="form-control mb-3" name="id_categoria" placeholder="Id Categoria" value="<?php echo $categoria['id_categoria']?>" readonly >
                        </div>
                    <div class="col-md-6">
                        <label for="nombre_categoria" class="form-label">Nombre Categoria</label>
                        <input type="text" class="form-control" id="nombre_categoria" required name="nombre_categoria" placeholder="Nombre rol" value="<?php echo $categoria['nombre_categoria']?>">
                        </div>
                    <input type="submit" class="btn btn-enviar mt-2 ">
                    
                </form>

            </div>
        </div>
    </div>


</body>

