const tabla = document.querySelector('#lista-usuarios div');
function cargarUsuarios() {
    fetch('productos.json')
        .then(respuesta => respuesta.json()) //Indicamos el formato en que se desea obtener la información
        .then(usuarios => {
            usuarios.forEach(usuario => {
                const card = document.createElement('div');
                card.classList = 'col-4'; 
                card.innerHTML += `
                <div class="card" style="width: 280px; ;height:400px">
                <a href="Detalles.html"> <img src="${usuario.url}" alt="" style="width:150px;height:150px"></a>
                                    <div class="container" display: flex>
                                        <h4><b>${usuario.product}</b></h4>
                                        <p>${usuario.categoria}</p>
                                        <p>${usuario.des}</p>
                                        <p>$ ${usuario.costo}</p>				  </div>
                                        <a href="carrito.html">
                                        <button type="button" class="btn btn-success" >
                    Agregar a carrito
                    </button></a>
                                    </div>    </div>
                            `;
                tabla.appendChild(card);
            });
        }) // Aquí mostramos dicha información
        .catch(error => console.log('Hubo un error : ' + error.message))
}
cargarUsuarios();
