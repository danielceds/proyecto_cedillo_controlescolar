<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM materia WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="profesor" placeholder="profesor" value="<?php echo $row['profesor']  ?>">
                                <input type="text" class="form-control mb-3" name="apellidos" placeholder="apellidos" value="<?php echo $row['apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="grupo" placeholder="grupo" value="<?php echo $row['grupo']  ?>">
                                <input type="text" class="form-control mb-3" name="grado" placeholder="grado" value="<?php echo $row['grado']  ?>">
                                <input type="text" class="form-control mb-3" name="turno" placeholder="turno" value="<?php echo $row['turno']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>