<body>
    <div class="container">
    <h1 class="titulos mt-1">Vehiculo</h1>
    <hr>
        <div class="row tablas">
           
            <div class="col-md-3">
                
                <form method="post" action="?c=Vehiculo" class="row g-3 needs-validation" novalidate>
                    <select class="form-control mb-3" name="id_cliente" placeholder="Rol" >
                    <option selected>Elija el Cliente</option>
                    <?php 
                         foreach ($verCliente as $cliente) {
                        ?>
                        <option value='<?php echo $cliente['id_cliente']?>'> <?php echo $cliente['nombre_cliente'] ;echo " ";echo $cliente['apellido_cliente']?></option>
                        <?php
                        }
                         ?>
                    </select>
                    
                    <input type="text" class="form-control mb-3" name="placa_vehiculo" placeholder="Placa Vehiculo">
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
                <div class="tamaño">
                    <td  class="text-center">
                        <a class="btn-otro btn-secondary" href="?c=Cliente"     style="border-top-width: 6px;margin-bottom: 5px;">
                            <i class="fas bi bi-person-lines-fill"></i>
                    <div class= "parrafo">Crear Cliente</div>
                    </a>
                    </td>
                </div>
            </div>
            <div class="div col-md-9">
                
                <table class="table justify-content-center col-11 ">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Cliente</th>
                            <th scope="col">Vehiculo</th>
                            <th scope="col">Modificar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if (is_array($verVehiculo) || is_object($verVehiculo)) {
                        foreach ($verVehiculo as $vehiculo){
                        ?>
                        
                        <tr>
                            <td class="text-center">
                                 <?php echo $vehiculo['nombre_cliente']?>  <?php echo $vehiculo['apellido_cliente']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $vehiculo['placa_vehiculo']?>
                            </td>
                            <td class="text-center"><a class="btn btn-warning" href="?c=Vehiculo&a=editar_vehiculo& placa_vehiculo=<?php echo $vehiculo['placa_vehiculo']?>"><i class="bi bi-pencil-square"></i></a></td>
                            <td  class="text-center"><a class="btn btn-danger" href="?c=Vehiculo&a=eliminar_vehiculo& placa_vehiculo=<?php echo $vehiculo['placa_vehiculo']?>"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        <?php
                        }}
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