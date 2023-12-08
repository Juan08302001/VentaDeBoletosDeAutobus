<?php
// Verificamos la conexión con el servidor y la base de datos
  $mysqli = new mysqli('192.168.137.84', 'programa', '123', 'modernbus');
?>
<?php
session_start();
$id = $_SESSION['username'];
if(!isset($id)){
    header("location: index.php");
}else{

}
?>
<?php
include("conectar.php");
$con=conectar();

$sql="SELECT *  FROM camion";
$query1=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/camion.css">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Transportes Santa Maria/Camion</title>
</head>
<body>
    <section class="form-login">
        <header>Registro de autobus</header> 
        <form action="regisCam.php" method="post" >
        <label class="us">Nombre del autobus:</label>
        <input class="controls" type="text" name="nombre" value="" required>
        <br>
        <label class="con">Numero de placa:</label>
        <input class="controls" type="text" name="num" value="" required>
        <br>
        <label class="con1">Cantidad de asientos:</label>
        <input class="controls" type="text" name="asientos" value="" required>
        <br>
        <label class="con2">Chofer:</label>
        <select name="choferes" id="lang" class="controls">
        <option value="0">Seleccione el chofer correspondiente</option>
        <?php
          $query = $mysqli -> query ("SELECT * FROM choferes");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[nombre].'">'.$valores[nombre].'</option>';
          }
        ?>
          </select>
        <input type="submit" class="btn btn-block ingresar" value="Registrar">
      </section>
      <section class="vista">
        <header>Listado de autobuses</header>
          <table class="table" >
                  <tr>
                      <th class="text-light">Nombre del autobus</th>
                      <th class="text-light">Numero de placa</th>
                      <th class="text-light">Cantidad de asientos</th>
                      <th class="text-light">Chofer</th>
                      <th class="text-light">Editar</th>
                      <th></th>
                  </tr>

                  <tbody>
              <?php
                                            while($row=mysqli_fetch_array($query1)){
                                        ?>
                          <tr>
                              <th><?php  echo $row['nombre']?></th>
                              <th><?php  echo $row['num']?></th>
                              <th><?php  echo $row['asientos']?></th>
                              <th><?php  echo $row['choferes']?></th>
                              <th><a href="actualizarCamion.php?id=<?php echo $row['id'] ?>" class="olvide1">Modificar</a></th>
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
</body>
</html>