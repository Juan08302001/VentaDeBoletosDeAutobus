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

$sql="SELECT *  FROM consulta";
$query1=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/iti.css">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Transportes Santa Maria/Itinerario</title>
</head>
<body>
    <section class="form-login">
        <header>Registro viaje</header> 
        <form action="regis.php" method="post" >
        <label class="us">Nombre viaje:</label>
        <input class="controls" type="text" name="nombre" value="" required>
        <br>
        <label class="con">Origen:</label>
        <input class="controls" type="text" name="origen" value="" required>
        <br>
        <label class="con1">Destino:</label>
        <input class="controls" type="text" name="destino" value="" required>
        <br>
        <label class="con2">Hora salida:</label>
        <input class="controls" type="text" name="salida" value="" required>
        <label class="con2">Fecha viaje:</label>
        <input class="controls" type="date" name="fecha" value="">
        <br>
        <label class="con3">Precio:</label>
        <input class="controls" type="text" name="precio" value="" required>
        <label class="con3">Chofer:</label>
        <select name="chofer" id="lang" class="controls">
        <option value="0">Seleccione el chofer correspondiente</option>
        <?php
          $query = $mysqli -> query ("SELECT * FROM choferes");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[nombre].'">'.$valores[nombre].'</option>';
          }
        ?>
          </select>
          <br>
          <label class="con4">Asiento:</label>
        <input class="controls" type="text" name="asiento" value="" required>
          <label class="con4">Camion:</label>
          <select name="camion" id="lang" class="controls">
        <option value="0">Seleccione el camion correspondiente</option>
        <?php
          $query = $mysqli -> query ("SELECT * FROM camion");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[nombre].'">'.$valores[nombre].'</option>';
          }
        ?>
        <input type="submit" class="btn btn-block ingresar" value="Registrar">
      </section>
      <section class="vista">
        <header>Listado de viajes </header>
          <table class="table" >
                  <tr>
                      <th class="text-light">Nombre del viaje</th>
                      <th class="text-light">Origen</th>
                      <th class="text-light">Destino</th>
                      <th class="text-light">Salida</th>
                      <th class="text-light">Fecha de viaje</th>
                      <th class="text-light">Precio</th>
                      <th class="text-light">Chofer</th>
                      <th class="text-light">Asientos</th>
                      <th class="text-light">Autobus</th>
                  </tr>

              <tbody>
              <?php
                                            while($row=mysqli_fetch_array($query1)){
                                        ?>
                           <tr>
                              <th><?php  echo $row['nombre']?></th>
                              <th><?php  echo $row['origen']?></th>
                              <th><?php  echo $row['destino']?></th>
                              <th><?php  echo $row['salida']?></th>
                              <th><?php  echo $row['fecha']?></th>
                              <th><?php  echo $row['precio']?></th>
                              <th><?php  echo $row['chofer']?></th>
                              <th><?php  echo $row['asiento']?></th>
                              <th><?php  echo $row['camion']?></th>
                              <th><a href="actualizarviajes.php?id=<?php echo $row['id'] ?>" class="olvide1">Modificar</a></th>
                              <th><a href="elimiarUsu.php?id=<?php echo $row['id'] ?>" class="olvide1">Eliminar</a></th>

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