const verMasBotones = document.querySelectorAll("#ver-mas");
const modalTemporadas = document.getElementById("modal-temporadas")
const modalTemporadasFondo = document.getElementById("modal-temporadas-fondo");
const modalTitulo = document.getElementById("modal-titulo");
const modalContenido = document.getElementById("modal-contenido");
const modalImagen = document.getElementById("modal-imagen");
const botonCerrar = document.getElementById("modal-boton-cerrar");

verMasBotones.forEach(boton => boton.addEventListener("click", () => {
    modalTitulo.textContent = boton.dataset.modalTitulo;
    modalContenido.textContent = boton.dataset.modalContenido;
    modalImagen.setAttribute("src", boton.dataset.modalImagen);
    modalTemporadas.style.display = "block";
}))

botonCerrar.addEventListener("click", () => {
    modalTemporadas.style.display = 'none';
})

window.addEventListener('click', (event) => {
    if (event.target == modalTemporadasFondo) {
        modalTemporadas.style.display = 'none';
    }
});