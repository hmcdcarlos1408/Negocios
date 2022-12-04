const tabla = document.querySelector('#lista-usuarios tbody');

function cargarUsuarios() {
    fetch('usuarios.json')
        .then(respuesta => respuesta.json()) //Indicamos el formato en que se desea obtener la información
        .then(usuarios => {
            usuarios.forEach(usuario => {
                const row = document.createElement('tr');
                row.innerHTML += `
                    <td>${usuario.id}</td>
                    <td>${usuario.name}</td>
                    <td>${usuario.username}</td>
                 
                `;
                tabla.appendChild(row);

                // const card = document.createElement('card');
                // card.classList = 'card';
                // card.innerHTML += `
                //                 <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" style="width:100%">
                //                     <div class="container">
                //                         <h4><b>${usuario.id}</b></h4>
                //                         <p>${usuario.name}</p>
                //                     </div>
                            
                //             `;

                // tabla.appendChild(card);

            });
        }) // Aquí mostramos dicha información
        .catch(error => console.log('Hubo un error : ' + error.message))
}

cargarUsuarios();