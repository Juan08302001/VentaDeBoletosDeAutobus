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
    $apellidos=$_POST['origen'];
    $direccion=$_POST['destino'];
    $num=$_POST['salida'];
    $fecha=$_POST['fecha'];
    $pre=$_POST['precio'];
    $caa=$_POST['asiento'];
    // Validar los datos (aquí se pueden agregar más validaciones según sea necesario)
    
        // Construir la consulta SQL UPDATE
        $sql = "UPDATE consulta SET nombre='$nombre', origen='$apellidos', destino='$direccion',
        salida='$num', fecha='$fecha', precio='$pre', asiento='$caa' WHERE id=$id";
        // Ejecutar la consulta SQL
        if (mysqli_query($conexion, $sql)) {
            echo '<script>
        alert("Se actualizo correctamente");
        window.location.href=
        "./itinerario.php";
    </script>';
        } else {
            echo "Error al actualizar el registro: " . mysqli_error($conexion);
        }
    
} else { // Si no se ha enviado el formulario de edición
    // Obtener los datos del registro que se desea editar
    $sql = "SELECT * FROM consulta WHERE id=$id";
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
        <link rel="stylesheet" href="css/chofer1.css">
        <link rel="shortcut icon" href="img/favicon.ico">
        <title>Actualizar viajes</title>
    </head>
    <body>
    <section class="form-login1">
    <form method="post">
    <label class="datos">Nombre del comprador:</label><br>
        <input type="text" class="controls1" name="nombre" value="<?php echo $registro['nombre']; ?>"><br>
        <label class="datos">Origen:</label><br>
        <input type="text" class="controls1" name="origen" value="<?php echo $registro['origen']; ?>"><br>
        <label class="datos">Destino:</label><br>
        <input type="text" class="controls1" name="destino" value="<?php echo $registro['destino']; ?>"><br>
        <label class="datos">Destino:</label><br>
        <input type="text" class="controls1" name="salida" value="<?php echo $registro['salida']; ?>"><br>
        <label class="datos">Fecha:</label><br>
        <input type="date" class="controls1" name="fecha" value="<?php echo $registro['fecha']; ?>"><br>
        <label class="datos">Precio:</label><br>
        <input type="text" class="controls1" name="precio" value="<?php echo $registro['precio']; ?>"><br>
        <label class="datos">Asiento:</label><br>
        <input type="text" class="controls1" name="asiento" value="<?php echo $registro['asiento']; ?>"><br>
        <br>
    
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