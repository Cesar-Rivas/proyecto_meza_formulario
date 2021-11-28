<?php
include("conexion.php");
$con=conectar();

$num_cita=$_POST['num_cita'];
$nombre=$_POST['nombre'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$servicio=$_POST['servicio'];


$sql="INSERT INTO citas VALUES('$num_cita','$nombre','$fecha','$hora','$servicio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
    echo"algo ha ido mal :C";
}
?>