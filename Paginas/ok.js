function cargar(){
   fetch('ok.json')
   .then(respuesta=>respuesta.json())
   .then(respuesta=>console.log(respuesta))
}cargar();