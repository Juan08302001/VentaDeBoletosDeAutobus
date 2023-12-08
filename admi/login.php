<?php
include ("conexion.php");
session_start();
//Agregar conexion
$id = $_POST["usuario"];
$nom = $_POST["clave"];
$query= mysqli_query($conn,"SELECT * FROM adm WHERE usuario='".$id."' and clave= '".$nom."'");
$nr=mysqli_num_rows($query);
if($nr==1)
{
	header("Location: menu.php");
	
	$_SESSION['username'] =$id;
}
else if ($nr==0)
{
	header("Location: index.php");
}
?>