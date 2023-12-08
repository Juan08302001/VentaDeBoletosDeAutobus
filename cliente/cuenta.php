<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilioteca Santa Maria</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="./css/crearcuentas.css">
</head>
<body>
    <section class="form-login"> 
    <header>Inicio de sesión</header> 
        <br>
        <form action="crearC.php" method="post" >
        <input class="controls1" type="text" name="nombre" value="" placeholder="Nombre:" required>
        <br>
        <input class="controls1" type="text" name="ape" value="" placeholder="Apellidos:" required>
        <input class="controls1" type="text" name="edad" value="" placeholder="Edad:" required>
        <input class="controls1" type="text" name="correo" value="" placeholder="Correo electronico:" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>
        <input class="controls1" type="password" name="clave" value="" placeholder="Clave:" required>
        <center>
        <input type="submit" class="btn btn-block ingresar" value="Crear">
  </center>
  <br>
        <p><a href="index.php" class="ol">Regresar</a></p>
      </section>
</body>
</html>