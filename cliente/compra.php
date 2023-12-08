<?php
// Verificamos la conexión con el servidor y la base de datos
  $mysqli = new mysqli('192.168.137.84', 'programa', '123', 'modernbus');
?>
<?php
session_start();
$id = $_SESSION['username'];
$nom=$_POST['nombre'];
if(!isset($id)){
    header("location: index.php");
}else{

}
?>
<?php
include("conectar.php");
$con=conectar();

$sql="SELECT *  FROM compras";
$query=mysqli_query($con,$sql);
$query1=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/camion1.css">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Viajes Santa Maria/Compra</title>
</head>
<body>
    <section class="form-login">
        <header>Generar compra de boleto</header> 
        <form action="regisCompra.php" method="post" >
        <label class="us">Correo :</label>
        <input class="controls" type="text" name="nombre" value="<?php echo $id?>" required >
        <br>
        <label class="con2">Camion:</label>
        <select name="camion" id="lang" class="controls">
        <option value="0">Seleccione el camion</option>
        <?php
          $query = $mysqli -> query ("SELECT * FROM camion");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[nombre].'">'.$valores[nombre].'</option>';
          }
        ?>
          </select>
        <br>
        <label class="con1">N° de asiento:</label>
        <input class="controls" type="text" name="asientos" value="" 
        id="asientos" onblur="verificarUnicidad()" required>
        <span id="mensaje-error" style="color: red; display: none;">Este asiento ya ha sido ingresado.</span>
        <br>
        <label class="con2">Destino:</label>
        <select name="choferes" id="lang" class="controls">
        <option value="0">Seleccione el destino</option>
        <?php
          $query = $mysqli -> query ("SELECT * FROM consulta");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[destino].'">'.$valores[destino].'</option>';
          }
        ?>
          </select>
        <input type="submit" class="btn btn-block ingresar" value="Registrar">
      </section>
      <section class="vista">
        <header>Listado de compras</header>
          <table class="table" >
                  <tr>
                      <th class="text-light">Correo</th>
                      <th class="text-light">Camion</th>
                      <th class="text-light">N° asiento</th>
                      <th class="text-light">Destino</th>
                      <th class="text-light">Editar</th>
                      <th></th>
                  </tr>

                  <tbody>
              <?php
                                            while($row=mysqli_fetch_array($query1)){
                                        ?>
                          <tr>
                              <th><?php  echo $row['nombre']?></th>
                              <th><?php  echo $row['camion']?></th>
                              <th><?php  echo $row['asientos']?></th>
                              <th><?php  echo $row['destino']?></th>
                              <th><a href="eliminarcompra.php?id=<?php echo $row['id'] ?>" class="olvide1">Cancelar</a></th>
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
    <script>
    function verificarUnicidad() {
        var nombre = document.getElementById("asientos").value;
        // Aquí puedes realizar la validación de unicidad con JavaScript,
        // comparando el nombre ingresado con los datos existentes, por ejemplo:
        if (nombre === "") {
            document.getElementById("mensaje-error").style.display = "inline";
        } else {
            document.getElementById("mensaje-error").style.display = "none";
        }
    }
</script>
</body>
</html>