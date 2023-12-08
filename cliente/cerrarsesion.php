<?php
// Iniciar sesión
session_start();
error_reporting(0);


// Destruir la sesión
session_destroy();

// Redirigir a la página de inicio
header("Location: index.php");
exit();
?>