
<div class="container">
        <div class="row">
            <div class="col-md-12 ">
        <?php 
            foreach($factura[1] as $info){
        ?>
                <h1 class="titulos mt-1">Factura - No <?php echo $info['id_factura']?></h1>
    <hr>
    <div class="div col-md-12">
        
        <div > <label class="tituloFac col-md-2">Fecha Factura: </label><label class="col-md-6"><?php echo $info['fecha_factura']?></label></div>
        <div > <label class="tituloFac col-md-2">Nombre Cliente: </label><label class="col-md-6"><?php echo $info['cliente']?></label></div>
        <div > <label class="tituloFac col-md-2">Placa Vehiculo: </label><label class="col-md-6"><?php echo $info['vehiculo']?></label></div>


        <?php  } ?>
        <div class="centabla">
                <table id="tablaproveedor" class="table justify-content-center col-11 ">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Id producto/servicio</th>
                            <th scope="col">Nombre producto/servicio</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach($factura[0] as $prov){
                        ?>
                        
                        <tr>
                            <td class="text-center">
                                <?php echo $prov['id_producto']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $prov['nombre_producto']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $prov['cantidad']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $prov['valor_venta']?>
                            </td>
                            </tr>
                            <?php
                        }
                        ?>
                        
                        <tr>
                            <td  colspan="3" class="text-center"> 
                                Total
                            </td>
                            
                            <td class="text-center"> 
                                <?php echo $prov['total_pedido']?>
                            </td>
                                
                        </tr>
                        </tbody>
                    </table>
                    </div>
            </div>
        </div>
    </div>


</body>