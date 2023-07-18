<body>
    <div class="container">
    <h1 class="titulos mt-1">Facturas</h1>
    <hr>
        <div class="row tablas">
           
            <div class="col-md-3">
                
               
                <div class="centarboton">
                    <td  class="text-center"><a class="btn btn-secondary boton-factura" href="?c=Factura&a=crearFactura"     style="border-top-width: 6px;margin-bottom: 5px;"><i class="bi bi-file-earmark-plus facturai"></i>Crear factura</a></td>
                    
                    
                                    </div>
                    

            </div>
            <div class="div col-md-9">
                
                <table class="table justify-content-center col-11 ">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Fecha</th>
                            <th scope="col">Id Factura</th>
                            <th scope="col">Id Cliente</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Vehículo</th>   
                            <th scope="col">Total</th>
                            <th scope="col">Modificar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        
                        <tr>
                            <td class="text-center" type="date">
                                26-09-2022
                            </td>
                            <td class="text-center"> 
                                1
                            </td>
                            <td class="text-center">
                            2313344
                            </td>
                            <td class="text-center"> 
                            Carla Gomez
                            </td>
                            <td class="text-center">
                            QSC854
                            </td>
                            <td class="text-center">
                                 $169.000
                            </td>
                            <td class="text-center"><a class="btn btn-warning" href="?c=Producto&a=editar_producto& id_producto=<?php echo $row['id_producto']?>"><i class="bi bi-pencil-square"></i></a></td>
                            <td  class="text-center"><a class="btn btn-danger" href="?c=Producto&a=eliminar_producto& id_producto=<?php echo $row['id_producto']?>"><i class="fa fa-trash"></i></a></td>
                            </tr>
                      
                           
                        </tbody>
            </div>
        </div>
    </div>



    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js" charset="utf-8"></script>
</body>