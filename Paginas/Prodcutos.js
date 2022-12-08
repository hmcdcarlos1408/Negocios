const tabla = document.querySelector('#lista-usuarios tbody');

function cargarUsuarios() {
    fetch('Admin/Json/productos.json')
        .then(respuesta => respuesta.json()) //Indicamos el formato en que se desea obtener la información
        .then(usuarios => {
            usuarios.forEach(usuario => {
               

                const card = document.createElement('card');
                card.classList = 'card';
                card.innerHTML += `<Td>
                                <img src="url" alt="Avatar" style="width:100%">
                                    <div class="container">
                                        <h4><b>${usuario.id}</b></h4>
                                        <p>${usuario.name}</p>
                                    </div></Td>
                            
                            `;

                tabla.appendChild(card);

            });
        }) // Aquí mostramos dicha información
        .catch(error => console.log('Hubo un error : ' + error.message))
}

cargarUsuarios();