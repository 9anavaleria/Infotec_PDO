<body>
    <div class="container">
    <h1 class="titulos mt-1">Categoria</h1>
    <hr>
        <div class="row tablas">
           
            <div class="col-md-4">
                
                <form method="post" action="?c=Categoria" class="row g-3 needs-validation" novalidate>
                    <input type="int" class="form-control mb-3" name="id_categoria" placeholder="Codigo Categoria">
                    <input type="text" class="form-control" id="validationCustom02" value="" required name="nombre_categoria" placeholder="Nombre Categoria">
                    <input type="submit" class="btn btn-enviar mt-2 ">
                </form>
                <div class="centarboton">
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
                    <td  class="text-center"><a class="btn btn-secondary" href="?c=Producto"     style="border-top-width: 6px;margin-bottom: 5px;"><i class="bi bi-archive-fill "></i>Crear roducto</a></td>                  
                </div>
            </div>
            <div class="div col-md-8">
                
                <table class="table justify-content-center col-11 ">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Id</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Modificar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach($ver as $vrol){
                        ?>
                        
                        <tr>
                            <td class="text-center">
                                 <?php echo $row['id_categoria']?>
                            </td>
                            <td class="text-center"> 
                                <?php echo $row['nombre_categoria']?>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-warning" href="?c=Categoria&a=editar_categoria& id_categoria=<?php echo $row['id_categoria']?>">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                            <td  class="text-center">
                                <a class="btn btn-danger" href="?c=Categoria&a=eliminar_categoria&id_categoria=<?php echo $row['id_categoria']?>">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
    <script> 
    
1
let table = new DataTable('#myTable');
</script>
</body>
