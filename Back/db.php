<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Nombre del servidor
$username = "root"; // Nombre de usuario
$password = ""; // Contraseña
$database = "simpsoniano"; // Nombre de la base de datos

// Crear la conexión
$conexion = mysqli_connect($servername, $username, $password, $database);

// Verificar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
} else {
    
}

// Otras operaciones con la base de datos...

function BuscarPersonaje($conexion, $personaje) {
    // Consulta SQL para buscar personajes
    $sql = "SELECT id_img, nombre_img, link_img, descripcion_img FROM imagenes WHERE personaje_img = '$personaje'";

    // Ejecutar la consulta
    $result = $conexion->query($sql);

    // Verificar si se encontraron resultados
    if ($result && $result->num_rows > 0) {
        // Inicializar un array para almacenar los datos de los personajes
        $datosPersonajes = array();

        // Iterar sobre los resultados y almacenarlos en el array
        while ($row = $result->fetch_assoc()) {
            $datosPersonajes[] = $row;
        }

        // Liberar el resultado y cerrar la conexión
        $result->free();
        $conexion->close();

        // Devolver los datos de los personajes en formato JSON
        return json_encode($datosPersonajes);
    } else {
        // No se encontraron resultados, devolver un array vacío en formato JSON
        return json_encode(array());
    }
}
?>
