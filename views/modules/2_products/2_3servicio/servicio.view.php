<body>
    <div class="container">
    <h1 class="titulos mt-1">Servicios</h1>
    <hr>
        <div class="row tablas">
           
            <div class="col-md-4">
                
                <form method="post" action="?c=Servicio" class="row g-3 needs-validation" novalidate>
                <input type="int" class="form-control mb-3" name="id_servicios" placeholder="Id Servicio">
                    <input type="text" class="form-control mb-3" name="nombre_servicio" placeholder="Nombre Servicio">
                    <input type="number" class="form-control mb-3" name="precio_servicio" placeholder="Precio Servico">
                    
                    <input type="submit" class="btn btn-enviar mt-2 ">
                </form>

            </div>
            <div class="div col-md-8">
                
                <table class="table justify-content-center col-11 ">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Modificar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        while($row=mysqli_fetch_array($servicios)){
                        ?>
                        
                        <tr>
                            <td class="text-center">
                                 <?php echo $row['id_servicios']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $row['nombre_servicio']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $row['precio_servicio']?>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-warning" href="?c=Servicio&a=editar_servicio& id_servicios=<?php echo $row['id_servicios']?>">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                            <td  class="text-center">
                                <a class="btn btn-danger" href="?c=Servicio&a=eliminar_servicio&id_servicios=<?php echo $row['id_servicios']?>">
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