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
    <link rel="stylesheet" href="css/menu.css" />
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Transportes Santa Maria/Menu</title>
  </head>

  <script>
    function confirmacion(){
        var respuesta = confirm("¿Deseas salir?");
        if(respuesta == true){
            return true;
        }else{
            return false;
        }
    }
</script>
  <body>
    <div class="menu-bar1">
      <h1 class="logo">Venta de pasajes</h1>
    </div>
    <div class="menu-bar">
      <ul>
        <li><a>Usuario:<?php echo $id?></a></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>

        <li><a href="cerrarsesion.php" onclick="return confirmacion()">Cerrar sesion</a></li>
      </ul>
    </div>

    <div class="hero">
      &nbsp;
      <section class="form-login">
        <table class="table">
                <header>Reportes</header> 
                <tr>
                    <th class="text-light">Nombre del reporte</th>
                    <th class="text-light">Descargar PDF</th>
                </tr>
                <tbody>
                    <tr>
                        <th class="text-light1">Lista de autobuses</th>
                        <th><a href="./doc/camiones.php" target="_blank" class="text-light1">Descargar PDF</a></th>                            
                    </tr>
                    <tr>
                        <th class="text-light1">Lista de choferes</th>
                        <th><a href="./doc/choferes.php" target="_blank" class="text-light1">Descargar PDF</a></th> 
                    </tr>
                    <tr>
                        <th class="text-light1">Reportes de ventas</th>
                        <th><a href="./doc/ventas.php" target="_blank" class="text-light1">Descargar PDF</a></th> 
                    </tr>
        </tbody>
        </table>
        
      </section>    
    </div>

  </body>
</html>
