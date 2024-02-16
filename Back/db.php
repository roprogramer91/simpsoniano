<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Nombre del servidor
$username = "root"; // Nombre de usuario
$password = ""; // Contraseña
$database = "nombre_base_de_datos"; // Nombre de la base de datos

// Crear la conexión
$conexion = mysqli_connect($servername, $username, $password, $database);

// Verificar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
} else {
    echo "Conexión exitosa <br>";
}

// Otras operaciones con la base de datos...





// Cerrar la conexión
mysqli_close($conexion);
?>
