
document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Evita que recargue la página

        // Aquí podrías enviar el formulario con AJAX si lo deseas

        // Mostrar el toast
        const toastElement = document.getElementById("liveToast");
        const toast = new bootstrap.Toast(toastElement);
        toast.show();

        // Limpia el formulario si deseas
        form.reset();
    });
});
