
// EVENTO SUBMIT
const formulario = document.querySelector(".formulario")
formulario.addEventListener('submit', function(e) {
     e.preventDefault();
     //VALIDAR FORMULARIO
      const {nombre, email, mensaje } = datos;
      if (nombre === "" || email==="" || mensaje ==="" ){
        mostrarError("El nombre, email y mensaje son obligatorio")
        return
      }
    //  ENVIAR EL FORMULARIO
    mostrarMensaje("¡Formulario enviado con exito!")
 })

// crear un Objeto
const datos = {
    nombre : '',
    apellido: '',
    celular: '',
    email: '',
    mensaje:''
}

//  EVENTOS EN INPUT Y TEXTAREA
const nombre = document.querySelector("#nombre")
const apellido = document.querySelector("#apellido")
const celular = document.querySelector("#celular")
const email = document.querySelector("#email")
const mensaje = document.querySelector("#mensaje")


nombre.addEventListener("input", leerDatos);
apellido.addEventListener("input", leerDatos);
celular.addEventListener("input", leerDatos);
email.addEventListener("input", leerDatos);
mensaje.addEventListener("input", leerDatos);

function leerDatos(e){
    // console.log(e.target.value)

    datos[e.target.id] = e.target.value;
    console.log(datos)
}

function mostrarError (mensaje) {
    
    const error = document.createElement('P')
    error.textContent = mensaje;
    error.classList.add('error');
    formulario.appendChild(error)

    //desaparezca de 2seg
    setTimeout(()=> {
        error.remove();
    }, 2000)

    console.log(error)

}

function mostrarMensaje (mensaje) {
    const mensajeOk = document.createElement('P')
    mensajeOk.textContent = mensaje;
    mensajeOk.classList.add('mensajeOk');
    formulario.appendChild(mensajeOk)

    //desaparezca de 2seg
    setTimeout(()=> {
        mensajeOk.remove();
    }, 2000)
}

// PESTAÑAS
const botones = document.querySelectorAll(".tab-btn");
const contenidos = document.querySelectorAll(".tab-content");

botones.forEach(boton => {
    boton.addEventListener("click", () => {

        if (boton.classList.contains("active")) return;

        botones.forEach(b => b.classList.remove("active"));
        contenidos.forEach(c => c.classList.remove("active"));

        boton.classList.add("active");

        const id = boton.dataset.tab;
        document.getElementById(id).classList.add("active");
    });
});




