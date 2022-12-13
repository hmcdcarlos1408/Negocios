const tabla = document.querySelector('#lista-usuarios tbody');

function cargarUsuarios() {
    fetch('Json/productos.json')
        .then(respuesta => respuesta.json()) //Indicamos el formato en que se desea obtener la información
        .then(usuarios => {
            usuarios.forEach(usuario => {
                const row = document.createElement('tr');
                row.innerHTML += `
                    <td>${usuario.id}</td>
                    <td>${usuario.product}</td>
                    <td>${usuario.categoria}</td>
                    <td>${usuario.des}</td>
                    <td>${usuario.costo}</td>
                    <td>
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Editar
                    </button>
                    </td>
                    <td>
                    <button type="button" id="liveToastBtn" class="btn btn-danger">
                    Eliminar
                    </button>
                    </td>
                    <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#alta">
                    Agregar
                    </button>
                    </td>
                `;
                tabla.appendChild(row);
            });
        }) // Aquí mostramos dicha información
        .catch(error => console.log('Hubo un error: ' + error.message))
}
cargarUsuarios();
