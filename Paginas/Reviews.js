const tabla = document.querySelector('#lista-usuarios tbody');

function cargarUsuarios() {
    fetch('Admin/Json/comentarios.json')
        .then(respuesta => respuesta.json()) //Indicamos el formato en que se desea obtener la información
        .then(usuarios => {
            usuarios.forEach(usuario => {
                const row = document.createElement('tr');
                row.innerHTML += `
                    <th>${usuario.Pass}</th>
                    <th>${usuario.coment}</th>  
                `;
                tabla.appendChild(row);

               
            });
        }) // Aquí mostramos dicha información
        .catch(error => console.log('Hubo un error : ' + error.message))
}

cargarUsuarios();