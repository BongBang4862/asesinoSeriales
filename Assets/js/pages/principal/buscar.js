const frmBuscar = document.getElementById('frmBuscar');

document.addEventListener('DOMContentLoaded', function () {
    // Asegúrate de que `frmBuscar` exista antes de agregar el evento
    if (frmBuscar) {
        frmBuscar.addEventListener('submit', function (event) {
            event.preventDefault();

            const formData = new FormData(frmBuscar);
            const search = formData.get('detalle') || '';

            // Asegúrate de que `base_url` esté definido correctamente
            if (typeof base_url === 'undefined' || !base_url) {
                console.error("La variable `base_url` no está definida.");
                return;
            }

            // Construir URL con el parámetro de búsqueda
            const url = `${base_url}principal/buscar/${encodeURIComponent(search)}`;
            console.log("URL generada:", url);

            // Crear instancia de XMLHttpRequest
            const http = new XMLHttpRequest();
            http.open('POST', url, true);

            // Manejar la respuesta del servidor
            http.onreadystatechange = function () {
                if (this.readyState === XMLHttpRequest.DONE) {
                    try {
                        if (this.status === 200) {
                            const res = JSON.parse(this.responseText);
                            console.log("Respuesta del servidor:", res);
                        } else {
                            console.error(`Error en la solicitud: ${this.status} - ${this.statusText}`);
                            console.error("Detalle del error:", this.responseText);
                        }
                    } catch (e) {
                        console.error("Error al procesar la respuesta:", e.message);
                        console.error("Respuesta recibida:", this.responseText);
                    }
                }
            };

            // Manejar posibles errores de red
            http.onerror = function () {
                console.error("Ocurrió un error de red durante la solicitud.");
            };

            // Enviar la solicitud
            http.send();
        });
    } else {
        console.error("El formulario `frmBuscar` no se encontró en el DOM.");
    }
});
