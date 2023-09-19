<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <h1 class="titulos mt-1">Factura </h1>
            <hr>
            <div class="div col-md-12">
                <form method="post" action="?c=Factura&a=crear_factura" class="needs-validation" id="factura"novalidate>
                    <div class="col-md-3 ">
                        <div class=""> <label class="tituloFac col-md-">Fecha Factura: </label><input type="date"
                                class="form-control" name="fecha_factura" id="fecha_factura"
                                placeholder="Fecha Factura"></div>
                        <div> <label class="tituloFac col-md-">Usuario: </label> <select class="form-control " name="id_usuario" placeholder="usuario" id="id_usuario"  >
                            <option selected>Elija el usuario</option>
                                <?php 
                                foreach ($verUsuario as $usuario) {
                                ?>
                            <option value='<?php echo $usuario['id_usuario']?>'> <?php echo $usuario['nombres_usuario'] ;echo " ";echo $usuario['apellidos_usuario']?></option>
                                <?php
                                }
                                ?>
                        </select></div>
                        <div> 
                            <label class="tituloFac col-md-">Cliente: </label> <select class="form-control " name="id_cliente" placeholder="Cliente" id="id_cliente" onchange="getVehi()" >
                            <option selected>Elija el Cliente</option>
                                <?php 
                                foreach ($verCliente as $cliente) {
                                ?>
                            <option value='<?php echo $cliente['id_cliente']?>'> <?php echo $cliente['nombre_cliente'] ;echo " ";echo $cliente['apellido_cliente']?></option>
                                <?php
                                }
                                ?>
                            </select></div>
                        <div> 
                            <label class="tituloFac col-md-">Placa Vehiculo: </label><select class="form-control " name="id_vehiculo" placeholder="Vehiculo" id="id_vehiculo" >
                            <option selected> Elija vehiculo</option>
                            </select>
                        </div>
                        <div>
                            <input type="text" class="form-control" name="cant_ids" id="cant_ids" value=1 readonly hidden>
                        </div>
                        <div> 
                            <label class="tituloFac col-md-">Total: </label><input type="text" class="form-control" name="total_pedido" id="total_pedido" placeholder="Total" readonly>
                        </div>
                        <divs class="tamaño2">
                            <input  type="submit" class="btn btn-enviar mt-2 ">
                            <a type="button" href="?c=Factura" class="btn btn-danger mt-2 ml-1 "> Cancelar </a>

                        </divs>
                    </div>
                    <div class="div col-md-9">
                        <div class="tamaño2">
                        <td  class="text-center">
                            <a class="btn-otro2 btn-secondary" id="agregar"  style="border-top-width: 6px;margin-bottom: 5px;">
                                <i class="fas bi bi-bag-plus"></i>
                                <divs class= "parrafo">Agregar Producto o Servicio</divs>
                            </a>
                        </td>
                    </div>
                        <div class="centabla">
                            <table id="tablafactura" class="table justify-content-center  table-borderless">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col-1">Id</th>
                                        <th scope="col-3">Producto/Servicio</th>
                                        <th scope="col-2">Nombre producto/servicio</th>
                                        <th scope="col-2">Cantidad</th>
                                        <th scope="col-2">Valor Unidad</th>
                                        <th scope="col-2">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id="id_1" class="text-center">
                                            1
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control tipo" name="tipo_1" id='tipo_1' onchange="getPOS(1)"
                                                placeholder="Elija">
                                                <option selected>Elija </option>
                                                <option value="producto">producto</option>
                                                <option value="servicio">servicio</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <select class="form-control pos" name="pos_1" id='pos_1' onchange="getValor(1)" placeholder="Elija">
                                                <option selected>Elija </option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <input type="text" class="form-control cantidad" name="cantidad_1" onchange="getTotal(1)" id="cantidad_1" value =1>
                                        </td>
                                        <td class="text-center">
                                            <input type="text" class="form-control valor" name="valor_1" id="valor_1" readonly>
                                        </td>
                                        <td class="text-center">
                                            <input type="text" class="form-control" name="total_1" id="total_1" value =0 readonly>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</body>
<script src="assets/js/jquery.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script>
    function getVehi(){
            cliente = $('#id_cliente').val()
            console.log(cliente);
            let select = $("#id_vehiculo");
                fetch('http://localhost:8081/infotec_PDO/?c=Factura&a=vehiculocliente&id='+ cliente)
                    .then(response => response.json())
                    .then(data => {
                        let opciones = '<option selected>Elija </option>'
                        data.forEach(function (item) {
                            opciones += '<option value="' + item.id_vehiculo + '">' + item.placa_vehiculo + '</option>'
                        });
                        select.html(opciones)
                        console.log(opciones)
                    }
                    );
    }
    function getPOS(id) {
        console.log($(this))
        tipo = $('#tipo_'+id).val()
        let select = $("#pos_" + id);
        console.log(id);
        if (tipo == 'servicio') {
            fetch('http://localhost:8081/infotec_PDO/?c=Listaservicio&a=busquedaServicio')
            .then(response => response.json())
            .then(data => {
                let opciones = '<option selected>Elija </option>'
                data.forEach(function (item) {
                    opciones += '<option value="' + item.id_servicios + '">' + item.nombre_servicio + '</option>'
                });
                select.html(opciones)
            }
            );
        }else if (tipo == 'producto'){
            fetch('http://localhost:8081/infotec_PDO/?c=Listaproducto&a=busquedaproducto')
            .then(response => response.json())
            .then(data => {
                let opciones = '<option selected>Elija </option>'
                data.forEach(function (item) {
                    opciones += '<option value="' + item.id_producto + '">' + item.nombre_producto + '</option>'
                });
                select.html(opciones)
                console.log(opciones)
            }
            );
        }
    }
    function getValor(id) {
        console.log(id)
        var idpos = $("#pos_" + id).val()
        var tipo = $("#tipo_" + id).val();
        if (tipo == 'servicio') {
            fetch('http://localhost:8081/infotec_PDO/?c=ListaServicio&a=precioServicio&id=' + idpos)
            .then(response => response.json())
            .then(data => {
                $("#valor_" + id).val(data)
                getTotal(id)
                console.log(id)
            });
        }else if (tipo == 'producto'){
            fetch('http://localhost:8081/infotec_PDO/?c=Listaproducto&a=precioProducto&id=' + idpos)
            .then(response => response.json())
            .then(data => {
                console.log(data)
                $("#valor_" + id).val(data)
                getTotal(id)
            });
        }
    }
    function getTotal(id) {
        var cantidad = $("#cantidad_" + id).val();
        var precio = $("#valor_" + id).val();
        var total = cantidad * precio;
        $("#total_" + id).val(total);
        getTotalFactura()
    }
    function getTotalFactura(){
        cant =$('#cant_ids').val();
        total =0;
        for (var i = 1; i <= cant; i++) {
            total += Number($("#total_" + i).val())
        }
        $('#total_pedido').val(total)
    }
    function agregarCampo() {
        var nId = Number($('#cant_ids').val()) + 1;
        $('#cant_ids').val(nId)
        var tabla = $("#tablafactura tbody");
        // Crea una nueva fila con los datos deseados
        var nuevaFila = $("<tr>");
        nuevaFila.append('<td id="id_' + nId + '" class="text-center">' + nId + '</td>');
        nuevaFila.append(`<td class="text-center"> 
        <select class="form-control tipo" name="tipo_`+ nId + `" id='tipo_` + nId + `' placeholder="Elija" onchange="getPOS(${nId})">
        <option selected>Elija </option>
        <option value="producto">producto</option>
        <option value="servicio">servicio</option>
        </select>
        </td>`);
        nuevaFila.append(`<td class="text-center"> 
        <select class="form-control pos" name="pos_`+ nId + `" id='pos_` + nId + `' placeholder="Elija" onchange="getValor(${nId})">
        <option selected>Elija </option>
        </select>
        </td>`);
        nuevaFila.append(`<td class="text-center"> 
        <input type="text" class="form-control cantidad" name="cantidad_`+ nId + `" id="cantidad_` + nId + `" onchange="getTotal(${nId})" value =1>
        </td>`);
        nuevaFila.append(`<td class="text-center"> 
        <input type="text" class="form-control valor" name="valor_`+ nId + `" id="valor_` + nId + `"  readonly >
        </td>`);
        nuevaFila.append(`<td class="text-center"> 
        <input type="text" class="form-control" name="total_`+ nId + `" id="total_` + nId + `" value =0 readonly>
        </td>`);
        // Agrega la nueva fila al cuerpo de la tabla
        tabla.append(nuevaFila);
    }
    $(document).ready(function () {
        $('#agregar').on('click', agregarCampo)
    });
    document.getElementById("factura").addEventListener("submit", function(event) {
    var respuesta = confirm("¿Estás seguro de que deseas enviar el formulario?");
    if (!respuesta) {
        event.preventDefault(); 
    }
    });
</script>