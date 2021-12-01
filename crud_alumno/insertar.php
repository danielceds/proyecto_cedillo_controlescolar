<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$grado=$_POST['grado'];
$grupo=$_POST['grupo'];
$direccion=$_POST['direccion'];
$fecha=$_POST['fecha'];


$sql="INSERT INTO alumno VALUES('$id','$nombres','$apellidos','$grado','$grupo','$direccion','$fecha')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>