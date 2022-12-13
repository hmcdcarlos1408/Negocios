const tabla = document.querySelector('#lista-usuarios tbody');
function cargarUsuarios() {
    fetch('c.json')
        .then(respuesta => respuesta.json()) //Indicamos el formato en que se desea obtener la información
        .then(usuarios => {
            usuarios.forEach(usuario => {
                const row = document.createElement('tr');
                row.innerHTML += `
                    <td>${usuario.id}</td>
                    <td>${usuario.product}</td>
                    <td>${usuario.des}</td>
                    <td>${usuario.costo}</td>
                    <td>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">
                    Eliminar prodcutos
                    </button>
                    </td>
                `;
                tabla.appendChild(row);
            });
        }) // Aquí mostramos dicha información
        .catch(error => console.log('Hubo un error: ' + error.message))
}
cargarUsuarios();