document.addEventListener('DOMContentLoaded', function() {
    // Referencias a los elementos de búsqueda
    const inputBusqueda = document.getElementById('busqueda');
    const btnBuscar = document.getElementById('btnBuscar');
    const resultadosContainer = document.getElementById('resultados');

    // Función para manejar la búsqueda
    function realizarBusqueda() {
        const busqueda = inputBusqueda.value.trim(); // Obtener el término de búsqueda y quitar espacios en blanco al inicio y al final

        // Realizar la búsqueda si el término no está vacío
        if (busqueda !== '') {
            // Crear un objeto FormData para enviar los datos al servidor
            const formData = new FormData();
            formData.append('comando', 'buscar');
            formData.append('busqueda', busqueda);

            // Realizar la solicitud al servidor utilizando Fetch
            fetch('Back/app.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (response.ok) {
                    return response.json(); // Convertir la respuesta a JSON
                }
                throw new Error('Error en la respuesta del servidor');
            })
            .then(data => {
                // Convertir la respuesta JSON en un objeto JavaScript
                const parsedData = JSON.parse(data);
            
                // Verificar si los datos son un array
                if (Array.isArray(parsedData)) {
                    // Manejar los datos recibidos del servidor
                    // Limpiar los resultados anteriores
                    resultadosContainer.innerHTML = '';
            
                    // Mostrar los nuevos resultados
                    parsedData.forEach(resultado => {
                        const divResultado = document.createElement('div');
                        divResultado.classList.add('resultado');
                        const img = document.createElement('img');
                        img.src = resultado.link_img;
                        img.alt = resultado.nombre_img;
                        const label = document.createElement('label');
                        label.textContent = resultado.descripcion_img;
                        divResultado.appendChild(img);
                        divResultado.appendChild(label);
                        resultadosContainer.appendChild(divResultado);
                    });
                } else {
                    throw new Error('Los datos recibidos no son un array.');
                }
            })
            .catch(error => {
                // Manejar errores de la solicitud
                console.error('Error en la solicitud:', error);
            });
        }
    }

    // Agregar evento de escucha al presionar enter en el input
    inputBusqueda.addEventListener('keypress', function(event) {
        if (event.key === 'Enter') {
            realizarBusqueda();
        }
    });

    // Agregar evento de escucha al hacer clic en el botón de búsqueda
    btnBuscar.addEventListener('click', realizarBusqueda);
});
