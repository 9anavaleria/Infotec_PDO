<div class="container">
    <div class="row">
        <div class="col-md-10 ">
            <h1 class="titulos mt-1">Factura </h1>
<hr>
<div>

<form class="row g-3 needs-validation" method="post" action="?c=Cliente&a=modificar_cliente"novalidate>  
    <div class="col-md-2">
            <label for="id_factura" class="form-label">Id Factura</label>
            <input type="text" class="form-control" id="id_factura"  required name="id_factura" placeholder="" value="" >
            </div>    
            <div class="col-md-2">
                <label for="fecha_factura" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="fecha_factura"  required name="fecha_factura" placeholder="Fecha Factura" value="" >
                </div>   
        <div class="col-md-2">
            <label for="id_usuario" class="form-label">Id Usuario
            </label>
            <input type="text" class="form-control" id="id_usuario"  required name="id_usuario" placeholder="" value="" >
            </div>
        <div class="col-md-2">
            <label for="id_cliente" class="form-label">Id Cliente</label>
            <input type="text" class="form-control" id="id_cliente"  required name="id_cliente" placeholder="Id Cliente" value=" ">
            </div>
        <div class="col-md-2">
            <label for="nombre_cliente" class="form-label">Nombre Cliente</label>
            <input type="text" class="form-control" id="nombre_cliente"  required name="nombre_cliente" placeholder="Nombre" value=" ">
            </div>
            <div class="col-md-2">
                <label for="placa_vehiculo" class="form-label">Placa Vehiculo </label>
                <input type="text" class="form-control" id="placa_vehiculo"  required name="placa_vehiculo" placeholder="Placa Vehiculo" value=" ">
                </div>
                <div class="centarboton">
                    <td  class="text-center"><a class="btn btn-secondary boton-agpro" href="?c=Factura&a=crearFactura"     style="border-top-width: 6px;margin-bottom: 5px;"><i class="bi bi-plus-circle-dotted "></i>Agregar producto</a></td>
                    
                    
                                    </div>
<table    style="margin-top: 9px;" >
    <thead>
        <tr>
            <th>Concepto</th>
            <th>Cantidad</th>
            <th>Precio unitario</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
       
        <tr>
        <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td colspan="3" class="total">Total</td>
            <td></td>
        </tr>
        
    </tbody>
</table>
<input type="submit" class="btn btn-enviar mt-2 ">
</div>
</div>
</div>


</body>