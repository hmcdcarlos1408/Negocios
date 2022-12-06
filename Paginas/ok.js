const div = document.querySelector('#lista-usuarios ');

function cargarUsuarios() {
    fetch('usuarios.json')
        .then(respuesta => respuesta.json()) //Indicamos el formato en que se desea obtener la información
        .then(usuarios => {
          const row = document.createElement('div');
         
            usuarios.forEach(usuario => {
               
                row.innerHTML += ` <div class="col">
                
                <div class="card " style="width: 18rem;">
  <img src="Fotos/sudade.jpeg" class="card-img-top" alt="...">${usuario.id}
  <div class="card-body">
    <h5 class="card-title">${usuario.name}</h5>
    <p class="card-text">${usuario.username}</p>
    <a href="" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
</div>           
                `;
                div.appendChild(row);

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