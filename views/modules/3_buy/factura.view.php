<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php foreach ($factura[1] as $info) { ?>
                <h1 class="titulos mt-1">Factura - No
                    <?php echo $info['id_factura'] ?>
                </h1>
                <hr>
                <div class="div col-md-12 row">
                    <div class="div col-md-9" style="padding-left: 50px;"> 
                        <div> <label class="tituloFac ">Fecha Factura: </label><label class="col-md-6">
                                <?php echo $info['fecha_factura'] ?>
                            </label></div>
                        <div> <label class="tituloFac ">Nombre Cliente: </label><label class="col-md-6">
                                <?php echo $info['cliente'] ?>
                            </label></div>
                        <div> <label class="tituloFac ">Placa Vehiculo: </label><label class="col-md-6">
                                <?php echo $info['vehiculo'] ?>
                            </label></div>
                    </div>
                    <div class="div col-md-3 fac" style="padding-left: 10px;">
                        <a class="btn-otro btn-secondary" href="?c=Factura&a=imprimirFactura&id_factura=<?php echo $info['id_factura'] ?>" target="_blank"
                            style="border-top-width: 6px;margin-bottom: 5px;">
                            <i class="fas bi bi-printer">
                            </i>
                            <div class="parrafo">Imprimir</div>
                        </a>
                        <a class="btn-otro btn-danger" href="?c=Factura"
                            style="border-top-width: 6px;margin-bottom: 5px;">
                            <i class="fas bi bi-escape">
                            </i>
                            <div class="parrafo">Volver</div>
                        </a>
                    </div>
                </div>

            <?php } ?>
            <div class="centabla">
                <table id="tablaproveedor" class="table justify-content-center col-11 ">
                    <thead>
                        <tr class="text-center">
                            <th scope="col-xs-1" class="text-center">Id</th>
                            <th scope="col-xs-6" class="text-center">Producto/Servicio</th>
                            <th scope="col-xs-2" class="text-center">Cantidad</th>
                            <th scope="col-xs-2" class="text-center">Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($factura[0] as $prov) {
                            ?>

                            <tr>
                                <td class="text-center">
                                    <?php echo $prov['id_producto'] ?>
                                </td>
                                <td class="text-left">
                                    <?php echo $prov['nombre_producto'] ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $prov['cantidad'] ?>
                                </td>
                                <td class="text-right">
                                    $
                                    <?php echo number_format($prov['valor_venta'], 0, '.', ',') ?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>

                        <tr>
                            <td colspan="3" class="text-right">
                                TOTAL
                            </td>

                            <td class="text-right">
                                $
                                <?php echo number_format($info['total_pedido'], 0, '.', ',') ?>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</body>