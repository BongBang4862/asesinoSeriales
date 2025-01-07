const asesinosLista = document.getElementById('asesinosLista');
const alias = document.querySelector('#alias');

document.addEventListener('DOMContentLoaded',()=>{
  

    // Referencia al cuerpo de la tabla
    const tableBody = document.getElementById("table-body");
    
    // Usando un for para recorrer el array y crear filas
    for (let i = 0; i < asesinos.length; i++) {
        const row = document.createElement("tr"); // Crear fila
        console.log(asesinos.length);
        // Crear celdas
        const nameCell = document.createElement("td");
        nameCell.textContent = asesinos[i]['nombre'];

        const optionsCell = document.createElement("td");

        
        const verBtn = document.createElement("a");
        verBtn.textContent = "Ver";
        verBtn.href=base_url + 'admin/verAsesino/' + asesinos[i]['id'];
        verBtn.onclick = () => alert(`Ver detalles de ${asesino.nombre}`); // Acción para "Ver"

        const editarBtn = document.createElement("a");
        editarBtn.textContent = "Editar";
        editarBtn.href = base_url + 'admin/verAsesinos';
        editarBtn.onclick = () => alert(`Editar ${asesino.nombre}`); // Acción para "Editar"

        const eliminarBtn = document.createElement("a");
        eliminarBtn.textContent = "Eliminar";
        eliminarBtn.onclick = () => alert(`Eliminar ${asesino.nombre}`); // Acción para "Eliminar"

        // Añadir botones a la celda de opciones
        optionsCell.appendChild(verBtn);
        optionsCell.appendChild(editarBtn);
        optionsCell.appendChild(eliminarBtn);

        // Añadir celdas a la fila
        row.appendChild(nameCell);
        row.appendChild(optionsCell);
        
        // Añadir la fila al tbody
        tableBody.appendChild(row);
    }

            
        }
    )

    