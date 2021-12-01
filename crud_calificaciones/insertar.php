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


$sql="INSERT INTO calificaciones VALUES('$id','$id_alumno','$materia','$promedio','$aprobado','$grado_grupo','$fecha')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: calificaciones.php");
    
}else {
}
?>