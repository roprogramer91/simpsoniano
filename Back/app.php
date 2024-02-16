<?php

require 'db.php';


// Verificar si se recibió una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar el comando enviado desde el cliente
    if ($_POST["comando"] == "buscar") {
        // Obtener el término de búsqueda enviado desde el formulario
        $terminoBusqueda = $_POST["busqueda"];


    } else {
        // Manejar otros comandos o acciones aquí, si es necesario
    }
}
?>
