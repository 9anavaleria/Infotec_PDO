<body>
    <div class="container">
    <h1 class="titulos mt-1">Proveedores</h1>
    <hr>
        <div class="row tablas">
           
            <div class="col-md-3">
                
                <form method="post" action="?c=Proveedor" class="row g-3 needs-validation" novalidate>
                    
                    <input type="int" class="form-control mb-3" name="id_proveedor" placeholder="# proveedor">
                    <input type="text" class="form-control mb-3" name="nombre_proveedor" placeholder="Nombre Proveedor">
                    
                    <input type="submit" class="btn btn-enviar mt-2 ">
                </form>

            </div>
            <div class="div col-md-9">
                
                <table class="table justify-content-center col-11 ">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">ID Proveedor</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Modificar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        while($row=mysqli_fetch_array($proveedor)){
                        ?>
                        
                        <tr>
                            <td class="text-center">
                                 <?php echo $row['id_proveedor']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $row['nombre_proveedor']?>
                            </td>
                            <td class="text-center"><a class="btn btn-warning" href="?c=Proveedor&a=editar_proveedor& id_proveedor=<?php echo $row['id_proveedor']?>"><i class="bi bi-pencil-square"></i></a></td>
                            <td  class="text-center"><a class="btn btn-danger" href="?c=proveedor&a=eliminar_proveedor& id_proveedor=<?php echo $row['id_proveedor']?>"><i class="fa fa-trash"></i></a></td>
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