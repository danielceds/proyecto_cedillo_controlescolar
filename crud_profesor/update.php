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

$sql="UPDATE profesor SET  nombres='$nombres',apellidos='$apellidos',correo='$correo',direccion='$direccion',turno='$turno',materias='$materias' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: profesor.php");
    }
?>