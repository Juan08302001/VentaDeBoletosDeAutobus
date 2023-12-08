<?php

// Conexión a la base de datos
$conexion = mysqli_connect("192.168.137.84", "programa", "123", "modernbus");

// Verificar la conexión
if (mysqli_connect_errno()) {
    echo "Error en la conexión a la base de datos: " . mysqli_connect_error();
}

// Obtener el ID del registro a editar
$id = $_GET['id'];

// Si se ha enviado el formulario de edición
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recoger los datos modificados del formulario
    $nombre=$_POST['nombre'];
    $apepat=$_POST['num'];
    $ape=$_POST['asiento'];
    // Validar los datos (aquí se pueden agregar más validaciones según sea necesario)
    
        // Construir la consulta SQL UPDATE
        $sql = "UPDATE camion SET nombre='$nombre', num='$apepat', asientos='$ape' WHERE id=$id";
        // Ejecutar la consulta SQL
        if (mysqli_query($conexion, $sql)) {
            echo '<script>
        alert("Se actualizo correctamente");
        window.location.href=
        "./camion.php";
    </script>';
        } else {
            echo "Error al actualizar el registro: " . mysqli_error($conexion);
        }
    
} else { // Si no se ha enviado el formulario de edición
    // Obtener los datos del registro que se desea editar
    $sql = "SELECT * FROM camion WHERE id=$id";
    $resultado = mysqli_query($conexion, $sql);
    $registro = mysqli_fetch_assoc($resultado);
    // Mostrar un formulario con los datos del registro
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/chofer.css">
        <link rel="shortcut icon" href="img/favicon.ico">
        <title>Actualizar camion</title>
    </head>
    <body>
    <section class="form-login">
    <form method="post">
    <label class="us">Nombre del autobus:</label>
        <input type="text" class="controls" name="nombre" value="<?php echo $registro['nombre']; ?>"><br>
        <label class="con">Numero de placa:</label>
        <input type="text" class="controls" name="num" value="<?php echo $registro['num']; ?>"><br>
        <label class="con1">Asientos:</label>
        <input type="text" class="controls" name="asiento" value="<?php echo $registro['asientos']; ?>"><br>
    
        <input type="submit" class="btn btn-block ingresar" value="Actualizar">
    </form>
    </section>
    </body>
    </html>
    
    <?php
}

// Cerrar la conexión
mysqli_close($conexion);
?>