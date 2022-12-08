const tabla = document.querySelector('#lista-usuarios td');

function cargarUsuarios() {
    fetch('Admin/Json/productos.json')
        .then(respuesta => respuesta.json()) //Indicamos el formato en que se desea obtener la información
        .then(usuarios => {
            usuarios.forEach(usuario => {
               

                const card = document.createElement('card');
                card.classList = 'card'; 
                card.innerHTML += `
                                <img src="${usuario.id}" alt="" style="width:100%">
                                    <div class="container">
                                        <h4><b>${usuario.product}</b></h4>
                                        <p>${usuario.categoria}</p>
                                        <p>${usuario.des}</p>
                                        <p>$ ${usuario.costo}</p>
                                    </div>
                            
                            `;

                         
                tabla.appendChild(card);

            });
        }) // Aquí mostramos dicha información
        .catch(error => console.log('Hubo un error : ' + error.message))
}

cargarUsuarios();