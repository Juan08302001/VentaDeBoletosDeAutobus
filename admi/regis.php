<?php
include("conectar.php");
$con=conectar();
$nombre=$_POST['nombre'];
$apellidos=$_POST['origen'];
$direccion=$_POST['destino'];
$num=$_POST['salida'];
$fecha=$_POST['fecha'];
$pre=$_POST['precio'];
$cho=$_POST['chofer'];
$ca=$_POST['camion'];
$caa=$_POST['asiento'];

$sql="insert into consulta values(default,'$nombre','$apellidos','$direccion','$num','$fecha', '$pre'
,'$cho','$caa', '$ca')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: itinerario.php");
    
}else {
    echo "No registro";
}
?>