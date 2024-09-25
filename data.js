const nombre = document.getElementById("name")
const CeduladeCiudadania = document.getElementById("Cédula de Ciudadania")


FormData.addEventListener("submit", e=>{
e.preventDefault()
let warnings = ""
if(nombre.Value.length >40){
    warnings +="El nombre no es permitido para el registro <br>"
    Entrar= true
    }

    if(CeduladeCiudadania.value.length >10){
        warnings +="El numero de documento no es valido"
        entrar=true
    }

    if(entrar){
        parrafo.innerHTML = warnings
    }

})


const bpr1 = document.getElementById("bpr1");
const tabla1 = document.querySelector(".tabla1");
bpr1.addEventListener("bpr1",()=>{

    tabla1.classList.toggle("toggle");
    

});
