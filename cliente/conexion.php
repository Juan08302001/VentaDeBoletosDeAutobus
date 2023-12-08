<?php
 $dbhost="192.168.137.84";
 $dbuser="programa";
 $dbpass="123";
 $dbname="modernbus";
 
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

 
 if(!$conn)
 {
    die("No hay conexion: ".mysqli_connect_error());
 }
$conn->commit();
return $conn;
?>
