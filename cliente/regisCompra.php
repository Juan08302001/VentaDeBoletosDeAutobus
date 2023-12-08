<?php
include("conectar.php");
$con=conectar();
$nombre=$_POST['nombre'];
$apellidos=$_POST['camion'];
$direccion=$_POST['asientos'];
$num=$_POST['choferes'];

$sql="insert into compras values(default,'$nombre','$apellidos','$direccion','$num')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: compra.php");
    
}else {
    echo "No registro";
}
?>


