const tabla =document.querySelector('#lista-usuarios tbody');
function cargar(){
   fetch('ok.json')
   .then(respuesta=>respuesta.json())
   .then(usuarios=>{
    usuarios.forEach(usuarios=>{
        const row=document.createElement('tr');
        row.innerHTML+= `
        <td>${usuarios.usuarios}</td>
        <td>${usuarios.clave}</td>
        `;
        tabla.appendChild(row);
        t
    })
   })

}cargar();