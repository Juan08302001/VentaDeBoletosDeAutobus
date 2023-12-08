<?php
function conectar(){
    $host="192.168.137.84";
    $user="programa";
    $pass="123";
    $bd="modernbus";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
