<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$id_alumno=$_POST['id_alumno'];
$materia=$_POST['materia'];
$promedio=$_POST['promedio'];
$aprobado=$_POST['aprobado'];
$grado_grupo=$_POST['grado_grupo'];
$fecha=$_POST['fecha'];

$sql="UPDATE calificaciones SET  id_alumno='$id_alumno',materia='$materia',promedio='$promedio',aprobado='$aprobado',grado_grupo='$grado_grupo',fecha='$fecha' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: calificaciones.php");
    }
?>