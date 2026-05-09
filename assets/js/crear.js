document.addEventListener("DOMContentLoaded", () => {
    const inputImagen = document.getElementById("imagen");
    const preview = document.getElementById("preview");
    const formulario = document.querySelector(".admin-form");

    // Preview de imagen
    inputImagen.addEventListener("change", (e) => {
        const file = e.target.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = "block";
            };

            reader.readAsDataURL(file);
        }
    });

    // Validación + mensaje
    formulario.addEventListener("submit", (e) => {
         e.preventDefault();

        const nombre = document.getElementById("nombre").value.trim();
        const descripcion = document.getElementById("descripcion").value.trim();
        const precio = document.getElementById("precio").value;

        if (!nombre || !descripcion || !precio) {
            mostrarError("Todos los campos son obligatorios", formulario);
            return;
        }

        if (precio <= 0) {
            mostrarError("El precio debe ser mayor a 0", formulario);
            return;
        }

        mostrarMensaje("¡Plato creado con éxito!", formulario);

      
    });

    // Funciones
    function mostrarError(mensaje, formulario) {
        limpiarMensajes(formulario); 

        const error = document.createElement('p');
        error.textContent = mensaje;
        error.classList.add('error');

        formulario.appendChild(error);

        setTimeout(() => error.remove(), 2000);
    }

    function mostrarMensaje(mensaje, formulario) {
        limpiarMensajes(formulario); 

        const ok = document.createElement('p');
        ok.textContent = mensaje;
        ok.classList.add('mensajeOk');

        formulario.appendChild(ok);

        setTimeout(() => ok.remove(), 2000);
    }

    function limpiarMensajes(formulario) {
        const mensajes = formulario.querySelectorAll('.error, .mensajeOk');
        mensajes.forEach(m => m.remove());
    }
});

