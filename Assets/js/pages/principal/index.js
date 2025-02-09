// Obtener las referencias a los elementos del formulario y el contenedor de la galería
const frmBuscar = document.getElementById("frmBuscar");
const galleryContainer = document.getElementById("galleryContainer");

// Ejecutar cuando el DOM esté completamente cargado
document.addEventListener("DOMContentLoaded", function () {
  // Renderizar la galería con los datos iniciales
  renderGallery(data);

  // Agregar evento al formulario para manejar la búsqueda
  frmBuscar.addEventListener("keyup", function (event) {
    event.preventDefault(); // Evitar recargar la página

    llamadaAjaxBuscar(event.target.value);
  });
});

function llamadaAjaxBuscar(detalle) {
  const search = detalle || "";

  // Construir la URL para la búsqueda
  const url = base_url + "principal/buscar/" + search;

  //console.log("URL generada:", url);

  // Realizar la solicitud AJAX
  const http = new XMLHttpRequest();
  http.open("GET", url, true);
  http.send();
  http.onreadystatechange = function () {
    if (this.readyState === 4) {
      try {
        if (this.status === 200) {
          const res = JSON.parse(this.responseText);
          console.log("Respuesta del servidor:", res);

          // Acceder al arreglo dentro de la respuesta
          const asesinos = res.asesinos;

          // Actualizar la galería con los nuevos datos
          renderGallery(asesinos);
        } else {
          console.error(
            `Error en la solicitud: ${this.status} - ${this.statusText}`
          );
          galleryContainer.innerHTML =
            "<p>Error al cargar los resultados. Por favor, inténtelo de nuevo.</p>";
        }
      } catch (e) {
        console.error("Error al procesar la respuesta:", e.message);
        console.error("Respuesta recibida:", this.responseText);
        galleryContainer.innerHTML =
          "<p>Error al procesar la respuesta del servidor.</p>";
      }
    }
  };
}

// Función para renderizar la galería
// Configuración de paginación
let currentPage = 1;
const itemsPorPagina = 12;
let totalPaginas = 1;
let asesinosData = []; // Guardamos los datos originales

function renderGallery(data, pagina = 1) {
  // Guardar datos para futuras paginaciones
  asesinosData = data;

  // Limpiar el contenedor de la galería y la paginación
  galleryContainer.innerHTML = "";
  paginationContainer.innerHTML = "";

  // Verificar si no hay datos
  if (!data || data.length === 0) {
    galleryContainer.innerHTML = "<p class='text-center text-muted'>No hay asesinos disponibles.</p>";
    return;
  }

  // Calcular total de páginas
  totalPaginas = Math.ceil(data.length / itemsPorPagina);
  currentPage = pagina;

  // Obtener elementos de la página actual
  const startIndex = (currentPage - 1) * itemsPorPagina;
  const endIndex = startIndex + itemsPorPagina;
  const dataPagina = data.slice(startIndex, endIndex);

  // Aplicar diseño de grid con Bootstrap
  galleryContainer.className = "row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4"; 

  // Generar las tarjetas
  dataPagina.forEach((asesino) => {
    const asesinoElement = document.createElement("div");
    asesinoElement.className = "col"; // Cada tarjeta ocupa una columna en el grid

    asesinoElement.innerHTML = `
      <div class="card h-100 shadow-sm text-center">
        <img src="${asesino.imagen_url || 'ruta_a_imagen_default.jpg'}" class="card-img-top img-fluid" alt="${asesino.nombre}" style="height: 180px; object-fit: cover;">
        <div class="card-body">
          <h5 class="card-title">${asesino.nombre}</h5>
          <p class="card-text text-muted">${asesino.año || "N/A"} | ${asesino.rating || "N/A"}</p>
          <a href="${base_url}principal/ver/${asesino.id}" class="btn btn-primary btn-sm">Ver detalles</a>
        </div>
      </div>
    `;

    // Añadir la tarjeta al contenedor de la galería
    galleryContainer.appendChild(asesinoElement);
  });

  // Generar botones de paginación
  renderPagination();
}

function renderPagination() {
  paginationContainer.className = "d-flex justify-content-center mt-3"; 

  const paginationList = document.createElement("ul");
  paginationList.className = "pagination";

  // Botón "Anterior"
  const prevItem = document.createElement("li");
  prevItem.className = `page-item ${currentPage === 1 ? "disabled" : ""}`;
  prevItem.innerHTML = `<a class="page-link" href="#" onclick="cambiarPagina(${currentPage - 1})">Anterior</a>`;
  paginationList.appendChild(prevItem);

  // Botones de números de página
  for (let i = 1; i <= totalPaginas; i++) {
    const pageItem = document.createElement("li");
    pageItem.className = `page-item ${i === currentPage ? "active" : ""}`;
    pageItem.innerHTML = `<a class="page-link" href="#" onclick="cambiarPagina(${i})">${i}</a>`;
    paginationList.appendChild(pageItem);
  }

  // Botón "Siguiente"
  const nextItem = document.createElement("li");
  nextItem.className = `page-item ${currentPage === totalPaginas ? "disabled" : ""}`;
  nextItem.innerHTML = `<a class="page-link" href="#" onclick="cambiarPagina(${currentPage + 1})">Siguiente</a>`;
  paginationList.appendChild(nextItem);

  paginationContainer.appendChild(paginationList);
}

// Función para cambiar de página
function cambiarPagina(pagina) {
  if (pagina >= 1 && pagina <= totalPaginas) {
    renderGallery(asesinosData, pagina);
  }
}
