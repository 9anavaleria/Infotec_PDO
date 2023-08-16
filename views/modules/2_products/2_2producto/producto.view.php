<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<body>
    <div class="container">
    <h1 class="titulos mt-1">Producto</h1>
    <hr>
        <div class="row tablas">
           
            <div class="col-md-3">
                
                <form method="post" action="?c=Producto" class="row g-3 needs-validation" novalidate>
                    
                <select class="form-control mb-3" name="id_categoria" placeholder="Categoria" >
                    <option selected>Elija la categoria</option>
                    <?php 
                        foreach($verCategoria as $categoria){
                        ?>
                        <option value='<?php echo $categoria['id_categoria']?>'> <?php echo $categoria['nombre_categoria']?></option>
                        <?php
                        }
                         ?>
                    </select>
                    <input type="text" class="form-control mb-3" name="id_producto" placeholder="# Producto">
                    <input type="text" class="form-control mb-3" name="nombre_producto" placeholder="Nombre Producto">
                    <input type="number" class="form-control mb-3" name="precio_producto" placeholder="Precio">
                    <input type="text" class="form-control mb-3" name="exist_producto" placeholder="Existencia Producto">
                    
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
                    <div class="tamaño">
                    <td  class="text-center">
                        <a class="btn-otro btn-secondary" href="?c=Categoria"     style="border-top-width: 6px;margin-bottom: 5px;">
                            <i class="fas bi bi-columns-gap"></i>
                    <div class= "parrafo">Crear Categoria</div>
                    </a>
                    </td>
                </div> <div class="tamaño">
                    <td  class="text-center">
                        <a class="btn-otro btn-secondary" href="?c=Proveedor"     style="border-top-width: 6px;margin-bottom: 5px;">
                            <i class="fas bi bi-archive-fill"></i>
                    <div class= "parrafo">Crear Proveedor</div>
                    </a>
                    </td>
                </div>  
            </div>
        </div>
        <div class="div col-md-9">
            <table id="tablaprod" class="table justify-content-center col-11 ">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Categoria</th>
                        <th scope="col">Id </th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>   
                        <th scope="col">Existencias</th>
                        <th scope="col">Modificar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($verProducto as $prod) { ?>
                    <tr>
                        <td class="text-center">
                            <?php echo $prod['nombre_categoria']?>
                        </td>
                        <td class="text-center"> 
                            <?php echo $prod['id_producto']?>
                        </td>
                        <td class="text-center">
                            <?php echo $prod['nombre_producto']?>
                        </td>
                        <td class="text-center"> 
                            <?php echo $prod['precio_producto']?>
                        </td><td class="text-center">
                            <?php echo $prod['exist_producto']?>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-warning" href="?c=Producto&a=editar_producto& id_producto=<?php echo $prod['id_producto']?>"><i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-danger" href="?c=Producto&a=eliminar_producto& id_producto=<?php echo $prod['id_producto']?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                        <?php
                        }
                        ?>
                </tbody>
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