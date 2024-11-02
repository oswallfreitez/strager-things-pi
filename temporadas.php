<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        fondo: '#080c27',
                    }
                }
            }
        }
    </script>

    <title>Temporadas | Stranger Things</title>
</head>

<body>
    <header class="bg-black">
        <div class="container mx-auto flex justify-between align-center py-4">
            <a class="flex align-center" href="index.php">
                <img class="h-10 my-auto py-1 border-t border-b border-red-600" src="assets/imagenes/Stranger World.png" alt="logo">
            </a>

            <nav class="my-auto font-montserrat">
                <ul class="flex text-white gap-4">
                    <li>
                        <a href="la-serie.php">La Serie</a>
                    </li>
                    <li>
                        <a class="bg-red-600 rounded-lg py-1 px-3" href="temporadas.php">Temporadas</a>
                    </li>
                    <li>
                        <a href="personajes.php">Personajes</a>
                    </li>
                    <li>
                        <a id="cta-fanArt" class="hidden" href="fanart.php">Fan art</a>
                    </li>
                    <li>
                        <a id="cta-registrarse" href="register.php" class="rounded-3xl bg-transparent border-red-600 border-2 font-bold py-2 px-8">Registrarse</a>
                    </li>
                    <li>
                        <a id="cta-login" href="login.php" class="rounded-3xl bg-red-600 font-bold py-2 px-8">Login</a>
                    </li>
                    <li>
                        <p id="cta-bienvenido" class="hidden font-light"></p>
                    </li>
                    <li>
                        <a id="cta-logout" href="#" class="hidden rounded-3xl bg-red-600 font-bold py-2 px-8">Logout</a>
                    </li>

                </ul>
            </nav>
        </div>
    </header>
    <main class="temporadas">
        <section class="titulo-encabezado bg-gray-800/40">
            <div class="container mx-auto py-12">
                <h1 class="text-4xl font-bold text-center drop-shadow-lg">Temporadas</h1>
            </div>
        </section>
        <div class="pt-12 pb-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    <article class="bg-white rounded-2xl flex flex-col items-start justify-between transition ease-in-out delay-50 duration-300  hover:-translate-y-1 hover:scale-105">
                        <div class="relative w-full">
                            <img src="assets/imagenes/postertemporada1.jpg" alt="" class="w-full rounded-t-2xl bg-gray-100 object-cover ">
                        </div>
                        <div class="max-w-xl p-4">
                            <div class="group relative">
                                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                    Temporada 1
                                </h3>
                                <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
                                    Resumen: En 1983, Will Byers desaparece en el pueblo de Hawkins, Indiana. Sus amigos, su familia y una misteriosa niña, Eleven, descubren que Will ha sido secuestrado por un monstruo del Upside Down, una dimensión paralela.
                                </p>
                                <button id="ver-mas" class="text-blue-600 text-sm mt-3" data-modal-titulo="Temporada 1" data-modal-contenido="Resumen: En 1983, Will Byers desaparece en el pueblo de Hawkins, Indiana. Sus amigos, su familia y una misteriosa niña, Eleven, descubren que Will ha sido secuestrado por un monstruo del Upside Down, una dimensión paralela." data-modal-imagen="assets/imagenes/postertemporada1.jpg">Ver mas</button>
                            </div>
                        </div>
                    </article>
                    <article class="bg-white rounded-2xl flex flex-col items-start justify-between transition ease-in-out delay-50 duration-300  hover:-translate-y-1 hover:scale-105">
                        <div class="relative w-full">
                            <img src="assets/imagenes/postertemporada2.jpg" alt="" class="w-full rounded-t-2xl bg-gray-100 object-cover ">
                        </div>
                        <div class="max-w-xl p-4">
                            <div class="group relative">
                                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                    Temporada 2
                                </h3>
                                <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
                                    Resumen: El Upside Down vuelve a Hawkins, y los amigos deben luchar para detener a un nuevo monstruo que ha secuestrado a Will. Eleven, que ahora vive con Joyce y Jonathan Byers, debe aprender a controlar sus poderes para ayudar a sus amigos.
                                </p>
                                <button id="ver-mas" class="text-blue-600 text-sm mt-3" data-modal-titulo="Temporada 2" data-modal-contenido="Resumen: El Upside Down vuelve a Hawkins, y los amigos deben luchar para detener a un nuevo monstruo que ha secuestrado a Will. Eleven, que ahora vive con Joyce y Jonathan Byers, debe aprender a controlar sus poderes para ayudar a sus amigos." data-modal-imagen="assets/imagenes/postertemporada2.jpg">Ver mas</button>
                            </div>
                        </div>
                    </article>
                    <article class="bg-white rounded-2xl flex flex-col items-start justify-between transition ease-in-out delay-50 duration-300  hover:-translate-y-1 hover:scale-105">
                        <div class="relative w-full">
                            <img src="assets/imagenes/postertemporada3.jpg" alt="" class="w-full rounded-t-2xl bg-gray-100 object-cover ">
                        </div>
                        <div class="max-w-xl p-4">
                            <div class="group relative">
                                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">

                                    Temporada 3
                                </h3>
                                <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
                                    Un verano lleno de diversión y romance en Hawkins se ve interrumpido por la llegada de un nuevo villano, una criatura con poderes eléctricos. Los amigos deben trabajar juntos para detener a la criatura y salvar a Hawkins.
                                </p>
                                <button id="ver-mas" class="text-blue-600 text-sm mt-3" data-modal-titulo="Temporada 3" data-modal-contenido=" Un verano lleno de diversión y romance en Hawkins se ve interrumpido por la llegada de un nuevo villano, una criatura con poderes eléctricos. Los amigos deben trabajar juntos para detener a la criatura y salvar a Hawkins." data-modal-imagen="assets/imagenes/postertemporada3.jpg">Ver mas</button>
                            </div>
                        </div>
                    </article>
                    <article class="bg-white rounded-2xl flex flex-col items-start justify-between transition ease-in-out delay-50 duration-300  hover:-translate-y-1 hover:scale-105">
                        <div class="relative w-full">
                            <img src="assets/imagenes/postertemporada4.jpg" alt="" class="w-full rounded-t-2xl bg-gray-100 object-cover ">
                        </div>
                        <div class="max-w-xl p-4">
                            <div class="group relative">
                                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">

                                    Temporada 4
                                </h3>
                                <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
                                    Resumen: Un año después, los amigos se enfrentan a un nuevo enemigo, Vecna, un poderoso hechicero que está matando a los adolescentes de Hawkins. Los amigos deben viajar al Upside Down para detener a Vecna y salvar a Hawkins.
                                </p>
                                <button id="ver-mas" class="text-blue-600 text-sm mt-3" data-modal-titulo="Temporada 4" data-modal-contenido="Resumen: Un año después, los amigos se enfrentan a un nuevo enemigo, Vecna, un poderoso hechicero que está matando a los adolescentes de Hawkins. Los amigos deben viajar al Upside Down para detener a Vecna y salvar a Hawkins." data-modal-imagen="assets/imagenes/postertemporada4.jpg">Ver mas</button>
                            </div>
                        </div>
                    </article>
                    <article class="bg-white rounded-2xl flex flex-col col-span-2 items-start justify-between transition ease-in-out delay-50 duration-300  hover:-translate-y-1 hover:scale-105">
                        <div class="relative w-full">
                            <img src="assets/imagenes/postertemporada5.jpg" alt="" class="w-full rounded-t-2xl bg-gray-100 object-cover ">
                        </div>
                        <div class="max-w-xl p-4">
                            <div class="group relative">
                                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">

                                    Temporada 5
                                </h3>
                                <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
                                    Resumen: La temporada final de Stranger Things se centrará en la batalla final entre los amigos de Hawkins y Vecna
                                </p>
                                <button id="ver-mas" class="text-blue-600 text-sm mt-3" data-modal-titulo="Temporada 5" data-modal-contenido=" Resumen: La temporada final de Stranger Things se centrará en la batalla final entre los amigos de Hawkins y Vecna." data-modal-imagen="assets/imagenes/postertemporada5.jpg">Ver mas</button>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        <button class="border border-red-600 shadow-md shadow-red-600 fixed bottom-4 right-4 py-3 px-5 rounded-lg">
            <a id="scrollToTop">
                ⇧
            </a>
        </button>

        <div id="modal-temporadas" class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                <div id="modal-temporadas-fondo" class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

                    <div class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6 md:max-w-lg">
                        <div class="flex gap-8">
                            <img id="modal-imagen" class="w-48" src="" alt="imagen-modal">
                            <div class="block">
                                <div class="mt-3 text-center sm:mt-5">
                                    <h3 class="text-base font-semibold text-gray-900" id="modal-titulo">
                                        titulo
                                    </h3>
                                    <div class="mt-2">
                                        <p id="modal-contenido" class="text-sm text-gray-500 text-justify">contenido</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 sm:mt-6">
                            <button id="modal-boton-cerrar" type="button" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="py-8 bg-black border-t-red-600 border-t-2">
        <div class="container mx-auto ">

            <div class="flex justify-evenly w-full mb-8">
                <img class="h-6" src="assets/imagenes/Stranger World.png" alt="logo">
                <nav>
                    <ul class="flex gap-2">
                        <li> Información </li>
                        <li> Términos y Condiciones </li>
                        <li> Política de Privacidad </li>
                    </ul>
                </nav>
                <div class="text-left">
                    <h3 class="text-left mb-2">Redes sociales</h3>
                    <div class="flex gap-2">
                        <img class="h-5" src="assets/imagenes/facebook_logo.svg" alt="logo">
                        <img class="h-5" src="assets/imagenes/instagram_logo.png" alt="logo">
                        <img class="h-5" src="assets/imagenes/youtube_logo.png" alt="logo">
                    </div>
                </div>
            </div>
            <div class="text-center">
                <p class="text-xs">Stranger Things © 2024 | Creado por Oswall Freitez</p>
            </div>
        </div>
    </footer>

    <script src="assets/js/scroll.js"></script>
    <script src="assets/js/modal-temporadas.js"></script>
    <script src="assets/js/autenticado.js"></script>

</body>

</html>