const tabla = document.querySelector('#lista-usuarios tbody');

function cargarUsuarios() {
    fetch('Json/Users.json')
        .then(respuesta => respuesta.json()) //Indicamos el formato en que se desea obtener la información
        .then(usuarios => {
            usuarios.forEach(usuario => {
                const row = document.createElement('tr');
                row.innerHTML += `
                    <td>${usuario.id}</td>
                    <td>${usuario.name}</td>
                    <td>${usuario.username}</td>
                    <td>${usuario.Pass}</td>
                    <td>${usuario.Rol}</td>
                    <td">
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Editar
                    </button>
                    <button type="button" class="btn btn-danger">
                    Eliminar
                    </button>
                    </td>
                
                `;
                tabla.appendChild(row);

               
            });
        }) // Aquí mostramos dicha información
        .catch(error => console.log('Hubo un error : ' + error.message))
}


cargarUsuarios();