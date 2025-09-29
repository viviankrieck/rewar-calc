import "./bootstrap";

// Configurar tema padrão como dark
document.addEventListener("DOMContentLoaded", function () {
    // Se não houver preferência salva, definir como dark
    if (!localStorage.getItem("tallstackui.darkTheme")) {
        localStorage.setItem("tallstackui.darkTheme", "true");
    }
});
