const tabla = document.querySelector('#lista-usuarios tbody');


function cargarUsuarios() {
    fetch('Json/Sales.json')
        .then(respuesta => respuesta.json()) //Indicamos el formato en que se desea obtener la información
        .then(usuarios => {
            usuarios.forEach(usuario => {
                const row = document.createElement('tr');
                row.innerHTML += `
                    <td>${usuario.id}</td>
                    <td>${usuario.Total}</td>
                    <td>${usuario.Name_user}</td>
                    <td>${usuario.Desc}</td>
                `;
                tabla.appendChild(row);

               
            });
        }) // Aquí mostramos dicha información
        .catch(error => console.log('Hubo un error : ' + error.message))
}


cargarUsuarios();