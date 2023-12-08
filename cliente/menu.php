<?php
session_start();
$id = $_SESSION['username'];
$mensajeBienvenida = "¡Bienvenido, " . $id . "!";
if(!isset($id)){
    header("location: index.php");
}else{
// Pasar el mensaje personalizado a JavaScript utilizando una variable en HTML
echo '<input type="hidden" id="mensaje-bienvenida" value="' . $mensajeBienvenida . '">';

// Mostrar el mensaje personalizado en una alerta utilizando JavaScript
echo '<script>
        var mensajeBienvenida = document.getElementById("mensaje-bienvenida").value;
        alert(mensajeBienvenida);
    </script>';
}
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/menu1.css" />
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Transportes Santa Maria/Menu</title>
  </head>
  
  <script>
		function confirmacion() {
			// Utilizamos la función confirm() para mostrar el mensaje y pedir la confirmación del usuario
			if (confirm("¿Está seguro de que desea cerrar sesión?")) {
				// Si el usuario confirma, redirigimos a la página de cierre de sesión
				window.location.replace("menu.php");
			}
		}
	</script>
  <body>
    <div class="menu-bar1">
      <h1 class="logo">Venta de pasajes</h1>
    </div>
    <div class="menu-bar">
      <ul>
        <li><a href="menu.php">Inicio</a></li>
        <li><a href="compra.php">Generar compra</a></li>
        
		<!--li><a href="#">Acerca de</a></li-->
        <li><a href="cerrarsesion.php" onclick="return confirmacion()">Salir</a></li>
      </ul>
    </div>

    <div class="hero">
      &nbsp;
    </div>

  </body>
</html>
