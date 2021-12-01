<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM calificaciones WHERE id='$id'";
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
                                
                                <input type="text" class="form-control mb-3" name="id_alumno" placeholder="id_alumno" value="<?php echo $row['id_alumno']  ?>">
                                <input type="text" class="form-control mb-3" name="materia" placeholder="materia" value="<?php echo $row['materia']  ?>">
                                <input type="text" class="form-control mb-3" name="promedio" placeholder="promedio" value="<?php echo $row['promedio']  ?>">
                                <input type="text" class="form-control mb-3" name="aprobado" placeholder="aprobado" value="<?php echo $row['aprobado']  ?>">
                                <input type="text" class="form-control mb-3" name="grado_grupo" placeholder="grado_grupo" value="<?php echo $row['grado_grupo']  ?>">
                                <input type="text" class="form-control mb-3" name="fecha" placeholder="fecha" value="<?php echo $row['fecha']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>