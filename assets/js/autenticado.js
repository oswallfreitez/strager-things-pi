const ctaRegistrarse = document.getElementById("cta-registrarse")
const ctaLogin = document.getElementById("cta-login")
const ctaBienvenido = document.getElementById("cta-bienvenido")
const ctaFanArt = document.getElementById("cta-fanArt")
const ctaLogout = document.getElementById("cta-logout")

const usuarioId = sessionStorage.getItem('id');
const usuarioNombre = sessionStorage.getItem('nombre');
const usuarioApellido = sessionStorage.getItem('apellido');


if (usuarioId) {
    ctaBienvenido.childNodes[1];
    ctaBienvenido.firstChild.textContent = `Bievenido, ${usuarioNombre} ${usuarioApellido}`

    ctaRegistrarse.classList.add("hidden");
    ctaLogin.classList.add("hidden");

    ctaFanArt.classList.remove("hidden");
    ctaLogout.classList.remove("hidden");
    ctaBienvenido.classList.remove("hidden");
}

ctaLogout.addEventListener("click", () => {
    sessionStorage.clear();
    window.location.href = "/index.php"
})