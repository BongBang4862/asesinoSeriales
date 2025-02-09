document.addEventListener('DOMContentLoaded', () => {
    const tableBody = document.getElementById("table-body");
  
    // Suponiendo que `asesinos` es un array con la información
    for (let i = 0; i < asesinos.length; i++) {
      const asesino = asesinos[i]; // Información del asesino
  
      // Crear fila
      const row = document.createElement("tr");
  
      // Celda para el nombre
      const nameCell = document.createElement("td");
      nameCell.textContent = asesino.nombre;
  
      // Celda para la imagen
      const imageCell = document.createElement("td");
      const image = document.createElement("img");
      image.src = asesino.imagen_url ? `${base_url}${asesino.imagen_url}` : `${base_url}assets/img/default.png`;
      image.alt = `Imagen de ${asesino.nombre}`;
      image.style.width = "60px"; // Tamaño de la imagen
      image.style.height = "auto";
      image.classList.add("img-thumbnail"); // Estilo de Bootstrap
      imageCell.appendChild(image);
  
      // Celda para las opciones
      const optionsCell = document.createElement("td");
      optionsCell.classList.add("d-flex", "gap-2");
  
      // Botón "Ver"
      const verBtn = document.createElement("a");
      verBtn.textContent = "Ver";
      verBtn.href = `${base_url}admin/verAsesino/${asesino.id}`;
      verBtn.className = "btn btn-info btn-sm";
      
  
      // Botón "Editar"
      const editarBtn = document.createElement("a");
      editarBtn.textContent = "Editar";
      editarBtn.href = `${base_url}admin/editarAsesino/${asesino.id}`;
      editarBtn.className = "btn btn-warning btn-sm";
     
  
      // Botón "Eliminar"
      const eliminarBtn = document.createElement("a");
      eliminarBtn.textContent = "Eliminar";
      eliminarBtn.href = `${base_url}admin/deleteAsesino/${asesino.id}`;
      eliminarBtn.className = "btn btn-danger btn-sm";
      
  
      // Añadir botones a la celda de opciones
      optionsCell.appendChild(verBtn);
      optionsCell.appendChild(editarBtn);
      optionsCell.appendChild(eliminarBtn);
  
      // Añadir celdas a la fila
      row.appendChild(imageCell);
      row.appendChild(nameCell);
      row.appendChild(optionsCell);
  
      // Añadir la fila al tbody
      tableBody.appendChild(row);
    }
  });
  