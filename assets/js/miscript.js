
/* Este evento espera a que todo el contenido HTML se haya cargado completamente 
(pero no necesariamente las imágenes, hojas de estilo, etc.), 
y luego ejecuta el código dentro de la función. */
document.addEventListener("DOMContentLoaded", function () {

    const form = document.querySelector("form");// Busca el primer elemento <form> en el documento HTML y lo guarda

    form.addEventListener("submit", function (event) {// Agrega un evento que se ejecutará cuando se presiona un botón de tipo submit

        event.preventDefault(); // Evita que recargue la página
        // Mostrar el toast
        const toast = new bootstrap.Toast(document.getElementById("liveToast"));
        toast.show();

        // Limpia el formulario
        form.reset();
    });
});
