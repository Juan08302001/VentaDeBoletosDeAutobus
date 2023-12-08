<?php
include("conectar.php");
$con=conectar();
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$num=$_POST['num'];

$sql="insert into choferes values(default,'$nombre','$apellidos','$direccion','$num')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: chofer.php");
    
}else {
    echo "No registro";
}
?>


