<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM alumno";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Alumnos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Registro de alumnos</h1>
                                <form action="insertar.php" method="POST">
                                
                                <input type="hidden" class="form-control mb-3" name="id" placeholder="id">
                                <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                                <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                                <input type="text" class="form-control mb-3" name="grado" placeholder="Grado">
                                <input type="text" class="form-control mb-3" name="grupo" placeholder="Grupo">
                                <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion">
                                <input type="text" class="form-control mb-3" name="fecha" placeholder="Fecha Ej.(2021-03-28)">

                                    <input type="submit" class="btn btn-primary">
                                    <a href="/proyecto_cedillo_controlescolar/index.php">Inicio</a></li> 
                                </form>
                        </div>

                        <div class="col-md-9">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Grado</th>
                                        <th>Grupo</th>
                                        <th>Direccion</th>
                                        <th>Fecha</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombres']?></th>
                                                <th><?php  echo $row['apellidos']?></th>
                                                <th><?php  echo $row['grado']?></th>
                                                <th><?php  echo $row['grupo']?></th>
                                                <th><?php  echo $row['direccion']?></th>
                                                <th><?php  echo $row['fecha']?></th>   
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>