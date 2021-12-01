<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$profesor=$_POST['profesor'];
$apellidos=$_POST['apellidos'];
$grupo=$_POST['grupo'];
$grado=$_POST['grado'];
$turno=$_POST['turno'];


$sql="INSERT INTO materia VALUES('$id','$nombre','$profesor','$apellidos','$grupo','$grado','$turno')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: materia.php");
    
}else {
}
?>