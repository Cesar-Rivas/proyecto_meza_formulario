<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$servicio=$_POST['servicio'];
$tel=$_POST['tel'];


$sql="INSERT INTO citas VALUES('$id','$nombre','$fecha','$hora','$servicio','$tel')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
    echo"algo ha ido mal :C";
}
?>