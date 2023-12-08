<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilioteca Santa Maria</title>
    <link rel="stylesheet" href="./css/olvide.css">
    <link rel="shortcut icon" href="img/favicon.ico">
    <script>
function validarContraseña() {
    var contraseña = document.getElementById("clave").value;
    var confirmarContraseña = document.getElementById("confirmar").value;

    if (contraseña != confirmarContraseña) {
        alert("Las contraseñas no coinciden.");
        return false;
    }
    
    if (contraseña.length < 3) {
        alert("La contraseña debe tener al menos 3 caracteres.");
        return false;
    }

    return true;
}
</script>
  
</head>
<body>
    <section class="form-login"> 
        <header>Recuperar cuenta</header>
        <br>
        <form action="restablecer.php" method="post" onsubmit="return validarContraseña()">
        <input class="controls" type="text" name="usuario" value="" placeholder="Ingrese su usuario" required>
        <input class="controls" type="password" name="clave" id="clave" value="" placeholder="Ingrese su clave" required>
        <input class="controls" type="password" name="clave" id="confirmar" value="" placeholder="Confirme su clave" required>
        <center>
        <input type="submit" class="btn btn-block ingresar" value="Restablecer">
  </center>
  <br>
        <p><a href="index.php" class="ol">Regresar</a></p>
      </section>
</body>
</html>