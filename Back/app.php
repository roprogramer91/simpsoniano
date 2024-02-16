<?php

require 'db.php';


// Verificar si se recibió una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar el comando enviado desde el cliente
    if ($_POST["comando"] == "buscar") {
        // Obtener el término de búsqueda enviado desde el formulario
        $terminoBusqueda = $_POST["busqueda"];

         // Llamar a la función para buscar el personaje
         $resultados = BuscarPersonaje($conexion, $terminoBusqueda);

         $resultados_json = json_encode($resultados);
         // Devolver los resultados al frontend como respuesta
         echo $resultados_json;

    } else {
        // Manejar otros comandos o acciones aquí, si es necesario
    }
}
?>
