let main =function(){
    captura_datos();
}
let captura_datos=function(){
    document.querySelector(".mybutton input").setAttribute("onclick","dataRead()");
}
let dataRead=function(){
    let datoObj={
    nombre:documen.querySelector("#nombre").value,
    usuario:document.querySelector("#usuario").value,
    clave:document.querySelector("#clave").value,
};
console.log(datoObj);
}
