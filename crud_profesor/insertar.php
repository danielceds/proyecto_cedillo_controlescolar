<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$turno=$_POST['turno'];
$materias=$_POST['materias'];


$sql="INSERT INTO profesor VALUES('$id','$nombres','$apellidos','$correo','$direccion','$turno','$materias')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: profesor.php");
    
}else {
}
?>