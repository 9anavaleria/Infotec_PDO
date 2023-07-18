<body>
    <div class="container">
    <h1 class="titulos mt-1">Roles</h1>
    <hr>
   
        <div class="row tablas">
            <div class="col-md-4">
                <form method="post" action="?c=Roles" class="row g-3 needs-validation" novalidate>
                    <input type="int" class="form-control mb-3" name="id_rol" placeholder="Codigo Rol">
                    <input type="text" class="form-control" id="validationCustom02" value="" required name="nombre_rol" placeholder="Nombre rol">
                    <div class="container">
                        <?php if(!empty($alerta)){ ?>
                            <div class="">
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $alerta ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    <input type="submit" class="btn btn-enviar mt-2 ">
                </form>
                <div class="centarboton">
                    <td  class="text-center"><a class="btn btn-secondary" href="?c=Usuario"     style="border-top-width: 6px;margin-bottom: 5px;"><i class="fas fa-user-tie"></i>Crear Usuario</a></td>
                    
                    
                                    </div>
            </div>
            <div class="div col-md-8">
                <table class="table justify-content-center col-11 ">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Id</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Modificar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($ver as $vrol){
                        ?>
                        <tr>
                            <td class="text-center">
                                 <?php echo $vrol['id_rol']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $vrol['nombre_rol']?>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-warning" href="?c=Roles&a=editar_rol& id_rol=<?php echo $vrol['id_rol']?>">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                            <td  class="text-center">
                                <a class="btn btn-danger" href="?c=roles&a=eliminar_rol&id_rol=<?php echo $vrol['id_rol']?>">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                            </tr>
                        <?php
                        }
                         ?>  
                        </tbody>
</div>
        </div>
    </div>



    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js" charset="utf-8"></script>
</body>