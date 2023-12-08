<?php

include("conectar.php");
$con=conectar();

$id = $_GET['id'];

// Construir la consulta SQL DELETE
$sql = "DELETE FROM compras  WHERE id=$id";
$query=mysqli_query($con,$sql);

    if($query){
        echo '<script>
        alert("Se cancelo correctamente");
        window.location.href=
        "./compra.php";
    </script>';
    }
?>
