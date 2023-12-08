<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inde.css">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Transportes Santa Maria</title>
</head>
<body>
    <section class="form-login">
        <header>Inicio de sesión</header> 
        <form action="login.php" method="post" >
        <label class="us">Correo:</label>
        <input class="controls" type="text" name="usuario" value="" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}"  required>
        <br>
        <label class="con">Constraseña:</label>
        <input class="controls" type="password" name="clave" value="" required>
        <div class="al">
        <input type="submit" class="btn btn-block ingresar" value="Ingresar">
        <br>
      <br>
      <span><a href="cuenta.php" class="olvide1">Registrarse</a></span>
</div> 
<br>
	  <p><a href="olvide.php" class="ol">Olvide mi clave</a></p>
      </section>
</body>
</html>