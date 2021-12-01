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

$sql="UPDATE materia SET  nombre='$nombre',profesor='$profesor',apellidos='$apellidos',grupo='$grupo',grado='$grado',turno='$turno' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: materia.php");
    }
?>