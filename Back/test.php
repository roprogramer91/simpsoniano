<?php

// Parámetros para la solicitud POST
$data = array(
    'comando' => 'buscar',
    'busqueda' => 'Homero' // Cambia esto por el término de búsqueda que deseas probar
);

// Configurar las opciones de la solicitud POST
$options = array(
    'http' => array(
        'method' => 'POST',
        'header' => 'Content-Type: application/x-www-form-urlencoded',
        'content' => http_build_query($data)
    )
);

// Realizar la solicitud POST a app.php
$response = file_get_contents('http://localhost/Simpsoniano/Back/app.php', false, stream_context_create($options));

// Imprimir la respuesta del servidor
echo $response;
?>
