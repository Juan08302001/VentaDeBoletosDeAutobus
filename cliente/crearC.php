<?php
include("conectar.php");
$con=conectar();
$nom=$_POST['nombre'];
$apePat=$_POST['ape'];
$apeMat=$_POST['edad'];
$edad=$_POST['correo'];
$cla=$_POST['clave'];

$sql="INSERT INTO clientes values(default,'$nom', '$apePat', '$apeMat', '$edad', '$cla')";

$query= mysqli_query($con,$sql);

if($query){
    echo '<script>
    alert("Se creo cuenta correctamente");
    window.location.href=
    "./cuenta.php";
</script>';
    
}else {
    echo "no se creo la cuenta";
}
?>