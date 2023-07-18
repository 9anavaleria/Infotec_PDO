
<div class="container">
        <div class="row">
            <div class="col-md-10 ">
                <h1 class="titulos mt-1">Editar Vehiculo</h1>
    <hr>
    <div>
                <form class="row g-3 needs-validation" method="post" action="?c=Vehiculo&a=modificar_vehiculo"novalidate>
                <div class="col-md-6">
                        <label for="id_cliente" class="form-label">Cliente</label>
                <select class="form-control mb-3" name="id_cliente" placeholder="cliente" >
                    
                    <?php 
                        while($row=mysqli_fetch_array($cliente)){
                            if($row['id_cliente']==$edivehi[1]){
                            ?>
                            <option value='<?php echo $row['id_cliente']?>'> <?php echo $row['nombre_cliente'] ;echo " ";echo $row['apellido_cliente']?></option>
                            <?php
                            }else{
                            ?>
                        <option value='<?php echo $row['id_cliente']?>'> <?php echo $row['nombre_cliente'] ;echo " ";echo $row['apellido_cliente']?></option>
                        <?php

                            }
                        }
                         ?>
                    </select>    
                
                        
                        </div>
                    <div class="col-md-6">
                        <label for="placa_vehiculo" class="form-label">Placa</label>
                        <input type="text" class="form-control" id="placa_vehiculo"  required name="placa_vehiculo" placeholder="Placa" value="<?php echo $edivehi[0]?>" >
                        </div>
                    
                        <input type="submit" class="btn btn-enviar mt-2 ">
                        </form>
                    
                    
               

            </div>
        </div>
    </div>


</body>