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





<div class="resultado">
                <img src="/Simpsoniano/images/1.jpg" alt="Imagen 1">
                <label>Descripción de la imagen 1</label>
            </div>
        
            <div class="resultado">
                <img src="/Simpsoniano/images/2.jpg" alt="Imagen 2">
                <label>Descripción de la imagen 2</label>
            </div>
        
            <div class="resultado">
                <img src="/Simpsoniano/images/3.jpg" alt="Imagen 3">
                <label>Descripción de la imagen 3</label>
            </div>

            <div class="resultado">
                <img src="/Simpsoniano/images/4.jpg" alt="Imagen 1">
                <label>Descripción de la imagen 1</label>
            </div>
        
            <div class="resultado">
                <img src="/Simpsoniano/images/5.jpg" alt="Imagen 2">
                <label>Descripción de la imagen 2</label>
            </div>
        
            <div class="resultado">
                <img src="/Simpsoniano/images/6.jpg" alt="Imagen 3">
                <label>Descripción de la imagen 3</label>
            </div>