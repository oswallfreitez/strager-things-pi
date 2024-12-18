<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="icon" type="image/x-icon" href="../imagenes/favicon.ico">
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

    <title>Personajes | Stranger Things</title>
</head>

<body>
    <header class="bg-black">
        <div class="container mx-auto flex justify-between align-center py-4">
            <a class="flex align-center" href="../index.php">
                <img class="h-10 my-auto py-1 border-t border-b border-red-600" src="../imagenes/Stranger World.png" alt="logo">
            </a>

            <nav class="my-auto font-montserrat">
                <ul class="flex text-white gap-4">
                    <li>
                        <a href="la-serie.php">La Serie</a>
                    </li>
                    <li>
                        <a href="temporadas.php">Temporadas</a>
                    </li>
                    <li>
                        <a href="personajes.php">Personajes</a>
                    </li>
                    <li id="cta-fanArt" class="hidden">
                        <a class="bg-red-600 rounded-lg py-1 px-3" href="#">Fan art</a>
                    </li>
                    <li id="cta-registrarse">
                        <a href="register.php" class="rounded-3xl bg-transparent border-red-600 border-2 font-bold py-2 px-8">Registrarse</a>
                    </li>
                    <li id="cta-login">
                        <a href="login.php" class="rounded-3xl bg-red-600 font-bold py-2 px-8">Login</a>
                    </li>
                    <li class="font-light">
                        |
                    </li>
                    <li id="cta-bienvenido" class="hidden font-light">
                    </li>
                    <li id="cta-logout" class="hidden">
                        <a href="#" class="rounded-3xl bg-red-600 font-bold py-2 px-8">Logout</a>
                    </li>
                    <li class="flex items-center">
                        <a href="busqueda.php">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" height="16px" width="16px" version="1.1" id="Capa_1" viewBox="0 0 490.4 490.4" xml:space="preserve">
                                <g>
                                    <path d="M484.1,454.796l-110.5-110.6c29.8-36.3,47.6-82.8,47.6-133.4c0-116.3-94.3-210.6-210.6-210.6S0,94.496,0,210.796   s94.3,210.6,210.6,210.6c50.8,0,97.4-18,133.8-48l110.5,110.5c12.9,11.8,25,4.2,29.2,0C492.5,475.596,492.5,463.096,484.1,454.796z    M41.1,210.796c0-93.6,75.9-169.5,169.5-169.5s169.6,75.9,169.6,169.5s-75.9,169.5-169.5,169.5S41.1,304.396,41.1,210.796z" />
                                </g>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="titulo-encabezado bg-gray-800/40">
            <div class="container mx-auto py-12">
                <h1 class="text-4xl font-bold text-center drop-shadow-lg">
                    Fan Art
                </h1>
            </div>
        </section>

        <section class="container mx-auto pt-12 flex justify-center">
            <p class="text-center text-lg text-white max-w-4xl">
                ¡Bienvenido al corazón creativo de la comunidad de Stranger Things! Este espacio exclusivo, diseñado para fans como tú, es tu lienzo para compartir tu pasión por el Upside Down. Aquí podrás subir tus increíbles obras de arte, desde dibujos y pinturas hasta cosplays y fan fiction, y conectar con otros artistas que comparten tu amor por la serie. Explora una galería repleta de talento y descarga tu dosis diaria de inspiración.
            </p>
        </section>

        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                <div class="group relative">

                    <div class="mb-4 flex justify-center">
                        <div>
                            <h3 class="text-2xl font-bold text-white">
                                <a href="#">
                                    #1:Anonimo
                                </a>
                            </h3>
                        </div>
                    </div>
                    <div class="relative aspect-h-1 aspect-w-1 w-full rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <span class="z-10 animate-my-ping absolute inline-flex h-full w-full rounded-md bg-red-600 opacity-60"></span>
                        <img src="../imagenes/strangerthingsinicio1.png" alt="Fan art 1" class="relative z-20 h-full w-full object-cover object-top lg:h-full lg:w-full">
                    </div>
                </div>
                <div class="group relative">
                    <div class="mb-4 flex justify-center">
                        <div>
                            <h3 class="text-2xl font-bold text-white">
                                <a href="#">
                                    #2:Anonimo
                                </a>
                            </h3>
                        </div>
                    </div>
                    <div class="relative aspect-h-1 aspect-w-1 w-full rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <span class="z-10 animate-my-ping absolute inline-flex h-full w-full rounded-md bg-red-600 opacity-60"></span>
                        <img src="../imagenes/strangerthingsinicio2.jpg" alt="Fan art 2" class="relative z-20 h-full w-full object-cover object-top lg:h-full lg:w-full">
                    </div>
                </div>
                <div class="group relative">
                    <div class="mb-4 flex justify-center">
                        <div>
                            <h3 class="text-2xl font-bold text-white">
                                <a href="#">
                                    #3:Anonimo
                                </a>
                            </h3>
                        </div>
                    </div>
                    <div class="relative aspect-h-1 aspect-w-1 w-full rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <span class="z-10 animate-my-ping absolute inline-flex h-full w-full rounded-md bg-red-600 opacity-60"></span>
                        <img src="../imagenes/strangerthingsinicio3.png" alt="Fan art 3" class="relative z-20 h-full w-full object-cover object-top lg:h-full lg:w-full">
                    </div>
                </div>
                <div class="group relative">
                    <div class="mb-4 flex justify-center">
                        <div>
                            <h3 class="text-2xl font-bold text-white">
                                <a href="#">
                                    #4:Anonimo
                                </a>
                            </h3>
                        </div>
                    </div>
                    <div class="relative aspect-h-1 aspect-w-1 w-full rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <span class="z-10 animate-my-ping absolute inline-flex h-full w-full rounded-md bg-red-600 opacity-60"></span>
                        <img src="../imagenes/strangerthingsinicio4.jpg" alt="Fan art 4" class="relative z-20 h-full w-full object-cover object-top lg:h-full lg:w-full">
                    </div>
                </div>
            </div>
        </div>


        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                <div class="group relative">
                    <div class="mb-4 flex justify-center">
                        <div>
                            <h3 class="text-2xl font-bold text-white">
                                <a href="#">
                                    #5:Anonimo
                                </a>
                            </h3>
                        </div>
                    </div>
                    <div class="relative aspect-h-1 aspect-w-1 w-full rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <span class="z-10 animate-my-ping absolute inline-flex h-full w-full rounded-md bg-red-600 opacity-60"></span>
                        <img src="../imagenes/strangerthingsinicio5.jpg" alt="Fan art 5" class="relative z-20 h-full w-full object-cover object-top lg:h-full lg:w-full">
                    </div>
                </div>
                <div class="group relative">
                    <div class="mb-4 flex justify-center">
                        <div>
                            <h3 class="text-2xl font-bold text-white">
                                <a href="#">
                                    #6:Anonimo
                                </a>
                            </h3>
                        </div>
                    </div>
                    <div class="relative aspect-h-1 aspect-w-1 w-full rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <span class="z-10 animate-my-ping absolute inline-flex h-full w-full rounded-md bg-red-600 opacity-60"></span>
                        <img src="../imagenes/strangerthingsinicio6.jpg" alt="Fan art 6" class="relative z-20 h-full w-full object-cover object-top lg:h-full lg:w-full">
                    </div>
                </div>
                <div class="group relative">
                    <div class="mb-4 flex justify-center">
                        <div>
                            <h3 class="text-2xl font-bold text-white">
                                <a href="#">
                                    #7:Anonimo
                                </a>
                            </h3>
                        </div>
                    </div>
                    <div class="relative aspect-h-1 aspect-w-1 w-full rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <span class="z-10 animate-my-ping absolute inline-flex h-full w-full rounded-md bg-red-600 opacity-60"></span>
                        <img src="../imagenes/strangerthingsinicio7.png" alt="Fan art 7" class="relative z-20 h-full w-full object-cover object-top lg:h-full lg:w-full">
                    </div>
                </div>
                <div class="group relative">
                    <div class="mb-4 flex justify-center">
                        <div>
                            <h3 class="text-2xl font-bold text-white">
                                <a href="#">
                                    #8:Anonimo
                                </a>
                            </h3>
                        </div>
                    </div>
                    <div class="relative aspect-h-1 aspect-w-1 w-full rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <span class="z-10 animate-my-ping absolute inline-flex h-full w-full rounded-md bg-red-600 opacity-60"></span>
                        <img src="../imagenes/strangerthingsinicio8.jpg" alt="Fan art 8" class="relative z-20 h-full w-full object-cover object-top lg:h-full lg:w-full">
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto max-w-2xl pt-14 pb-24">
            <h2 class="text-2xl text-center font-bold mb-6">
                Carga tu arte Stranger
            </h2>
            <div class="mt-2 flex justify-center rounded-lg border-4 border-dashed border-red-600 px-6 py-10">
                <div class="text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                    </svg>
                    <div class="mt-4 flex text-sm leading-6 text-gray-600">
                        <label for="file-upload" class="relative cursor-pointer rounded-md bg-red-600 px-2 font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                            <span>Carga tu arte stranger</span>
                            <input id="file-upload" name="file-upload" type="file" class="sr-only">
                        </label>
                        <p class="pl-1">o puedes arrastrarla dentro del cuadro</p>
                    </div>
                    <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF hasta 10MB</p>
                </div>
            </div>
        </div>

        <button class="border border-red-600 shadow-md shadow-red-600 fixed bottom-4 right-4 py-3 px-5 rounded-lg">
            <a id="scrollToTop">
                ⇧
            </a>
        </button>
    </main>

    <footer class="py-8 bg-black border-t-red-600 border-t-2">
        <div class="container mx-auto ">

            <div class="flex justify-evenly w-full mb-8">
                <img class="h-6" src="../imagenes/Stranger World.png" alt="logo">
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
                        <img class="h-5" src="../imagenes/facebook_logo.svg" alt="logo">
                        <img class="h-5" src="../imagenes/instagram_logo.png" alt="logo">
                        <img class="h-5" src="../imagenes/youtube_logo.png" alt="logo">
                    </div>
                </div>
            </div>
            <div class="text-center">
                <p class="text-xs">Stranger Things © 2024 | Creado por Oswall Freitez</p>
            </div>
        </div>
    </footer>

    <script src="../js/scroll.js"></script>
    <script src="../js/autenticado.js"></script>
</body>

</html>