<?php
include("conectar.php");
$con=conectar();
$nombre=$_POST['nombre'];
$apellidos=$_POST['num'];
$direccion=$_POST['asientos'];
$num=$_POST['choferes'];

$sql="insert into camion values(default,'$nombre','$apellidos','$direccion','$num')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: camion.php");
    
}else {
    echo "No registro";
}
?>


