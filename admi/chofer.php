<?php
session_start();
$id = $_SESSION['username'];
if(!isset($id)){
    header("location: index.php");
}else{

}
include("conectar.php");
$con=conectar();

$sql="SELECT *  FROM choferes";
$query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/chofer.css">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Transportes Santa Maria/Choferes</title>
</head>
<body>
    <section class="form-login">
        <header>Registro de choferes</header> 
        <form action="regisCho.php" method="post" >
        <label class="us">Nombre del chofer:</label>
        <input class="controls" type="text" name="nombre" value="" required>
        <br>
        <label class="con">Apellidos del chofer:</label>
        <input class="controls" type="text" name="apellidos" value="" required>
        <br>
        <label class="con1">Direccion:</label>
        <input class="controls" type="text" name="direccion" value="" required>
        <br>
        <label class="con2">Num brevete:</label>
        <input class="controls" type="text" name="num" value="" required>
        <input type="submit" class="btn btn-block ingresar" value="Registrar">
      </section>
      <section class="vista">
        <header>Listado de choferes</header>
          <table class="table" >
                  <tr>
                      <th class="text-light">Nombre del chofer</th>
                      <th class="text-light">Apellidos del chofer</th>
                      <th class="text-light">Direccion</th>
                      <th class="text-light">Num brevete</th>
                      <th class="text-light">Editar</th>
                      <th></th>
                  </tr>

              <tbody>
              <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                          <tr>
                              <th><?php  echo $row['nombre']?></th>
                              <th><?php  echo $row['apellidos']?></th>
                              <th><?php  echo $row['direccion']?></th>
                              <th><?php  echo $row['num']?></th>
                              <th><a href="actualizarClientes.php?id=<?php echo $row['id'] ?>" class="olvide1">Modificar</a></th>
                              <th></th>                                        
                          </tr>
                          <?php
                                            }		
                                       ?>	
              </tbody>
          </table>
      </div>
      <span><a href="menu.php" class="olvide1">Regresar</a></span>
    </section>
    <br>
</body>
</html>