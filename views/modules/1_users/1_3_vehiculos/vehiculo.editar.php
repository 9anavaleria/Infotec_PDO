
<div class="container">
        <div class="row">
            <div class="col-md-10 ">
                <h1 class="titulos mt-1">Editar Vehiculo</h1>
    <hr>
    <div>
                <form class="row g-3 needs-validation" method="post" action="?c=Vehiculo&a=modificar_vehiculo"novalidate>
                <div class="col-md-2">
                        <label for="placa_vehiculo" class="form-label">Placa</label>
                        <input type="text" class="form-control" id="id_vehiculo"  required name="id_vehiculo" placeholder="ID" readonly value="<?php echo $vehiculo[0]?>" >
                        </div>
                <div class="col-md-5">
                        <label for="id_cliente" class="form-label">Cliente</label>
                <select class="form-control mb-3" name="id_cliente" placeholder="cliente" >
                    
                    <?php 
                        foreach($cliente as $clien){
                            ?>
                        <option value='<?php echo $clien['id_cliente']?>'> <?php echo $clien['nombre_cliente'] ;echo " ";echo $clien['apellido_cliente']?></option>
                        <?php

                            
                        }
                         ?>
                    </select>    
                
                        
                        </div>
                    <div class="col-md-5">
                        <label for="placa_vehiculo" class="form-label">Placa</label>
                        <input type="text" class="form-control" id="placa_vehiculo"  required name="placa_vehiculo" placeholder="Placa" value="<?php echo $vehiculo[2]?>" >
                        </div>
                    
                        <input type="submit" class="btn btn-enviar mt-2 ">
                        </form>
                    
                    
               

            </div>
        </div>
    </div>


</body>