<?php

include("consultas.php");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
  <body>
    <div class="container" style="margin-top: 3%;">
        <div class="container">
            <h4>Productos.</h4>
        </div>
        <div class="container" style="margin-top: 3%;">
            <div class="col-auto">
            <table class="table " style="font-size: 13px;">
                <thead>
                    <tr class="table-primary">
                        <th scope="col" style="width: 10%;">Code</th>
                        <th scope="col" style="width: 15%;">Name</th>
                        <th scope="col" style="width: 15%;">Category</th>
                        <th scope="col" style="width: 15%;">Price</th>
                        <th scope="col" style="width: 15%;">CreateAt</th>
                        <th scope="col" style="width: 15%;">UpdateAt</th>
                        <th scope="col" >
                            <button class="btn btn-primary btn-sm" style="font-size: 13px;" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus-circle"></i> Agregar productos</button>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    
                        foreach($eje_datos_productos as $data){
                            $code = $data['code'];
                            $name = $data['name'];
                            $category = $data['category'];
                            $price = $data['price'];
                            $createAt = $data['createAt'];
                            $updateAt = $data['updateAt'];
                        
                    
                    ?>
                    <tr>
                        <th><?php echo $code?></th>
                        <td><?php echo $name?></td>
                        <td><?php echo $category?></td>
                        <td><?php echo $price?></td>
                        <td><?php echo $createAt?></td>
                        <td><?php echo $updateAt?></td>
                        <td>

                            <div class="row">
                                <div class="col-md-6"  style="font-size: 13px;text-align: center;">
                                    <button class="btn btn-success btn-sm" title="Editar"><i class="bi bi-pencil-square"></i></button>
                                </div>
                                <div class="col-md-6"  style="font-size: 13px;text-align: center;">
                                    <button class="btn btn-danger btn-sm" title="Eliminar"><i class="bi bi-trash3"></i></button>
                                </div>
                            </div>

                        </td>
                        
                    </tr>

                    <?php 
                        }
                    ?>
                    
                </tbody>
            </table>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Produtos</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>
    
  </body>
</html>