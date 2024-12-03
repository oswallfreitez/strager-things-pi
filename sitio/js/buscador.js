import { agregarResaltado } from "./utilidades.js";

$(document).ready(function () {
    $('#buscar').submit(function (e) {
        e.preventDefault();

        $.ajax({
            type: 'GET',
            url: '../php/busqueda/buscador_resultados.php',
            data: $(this).serialize(),
            success: (response) => {
                const respuestaJson = JSON.parse(response)
                const resultadosLista = document.getElementById("resultados-lista");
                resultadosLista.innerHTML = ""

                const resultadoMensaje = document.getElementById("resultados-mensaje");

                if (respuestaJson.resultados.length <= 0) {
                    resultadoMensaje.textContent = "No se encontraron datos"
                }

                respuestaJson.resultados.forEach(element => {
                    resultadoMensaje.textContent = "";

                    const tipo = element && element.titulo ? "temporada" : "personaje";
                    const ruta = tipo === "temporada" ? "temporadas" : "personajes";

                    const li = document.createElement('li');
                    li.classList.add('relative', 'py-5');

                    const textoResaltado = agregarResaltado(element.descripcion, respuestaJson.query)

                    li.innerHTML = `
                    <a href="${ruta}.php?query=${respuestaJson.query}" class="flex justify-between gap-x-6">
                        <div class="flex min-w-0 gap-x-4">
                            <div class="min-w-0 flex-auto">
                                <p class="mt-1 text-sm">
                                    ${textoResaltado}
                                </p>
                            </div>
                        </div>
                        <div class="flex shrink-0 items-center gap-x-4">
                            <div class="hidden sm:flex sm:flex-col sm:items-end">
                                <p class="text-sm/6">Encontrado en:</p>
                                <p class="mt-1 text-xs/5 text-red-600 underline">${ruta}</p>
                            </div>
                            <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </a>
                    `;

                    resultadosLista.appendChild(li);

                });
            },
            error: (err) => {
                $('#buscar-mensaje').html('<p>Hubo un problema al intentar procesar su solicitud: ' + error + '</p>');
                $('#buscar-mensaje').css({
                    display: "flex"
                });
                $('#buscar').css({
                    display: "none"
                });
            }
        })
    })
});