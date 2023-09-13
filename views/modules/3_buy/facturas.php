<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<body>
    <div class="container">
    <h1 class="titulos mt-1">Facturas</h1>
    <hr>
        <div class="row tablas">
            <div class="col-md-3">
                <div class="tamaño">
                    <td  class="text-center">
                        <a class="btn-otro btn-secondary" href="?c=Factura&a=crear_factura"     style="border-top-width: 6px;margin-bottom: 5px;">
                            <i class="fas bi-cart4 "></i>
                    <div class= "parrafo">Crear Factura</div>
                    </a>
                    </td>
                </div>
            </div>
            <div class="div col-md-9">
                <table id="tablafactura" class="table justify-content-center col-11 ">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">ID Factura</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Vehiculo</th>
                            <th scope="col">Total</th>
                            <th scope="col">Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach($verfactura as $prov){
                        ?>
                        
                        <tr>
                            <td class="text-center">
                                <?php echo $prov['id_factura']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $prov['fecha_factura']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $prov['cliente']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $prov['vehiculo']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $prov['total_pedido']?>
                            </td>
                            <td class="text-center"><a class="btn btn-warning" href="?c=Factura&a=ver_factura& id_factura=<?php echo $prov['id_factura']?>"><i class="bi bi-eye"></i></a></td>
                            </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                    
                    </table>
            </div>
        </div>
    </div>



    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js" charset="utf-8"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
</body>