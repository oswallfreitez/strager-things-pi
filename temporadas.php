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
                        <a href="fanart.php">Fan art</a>
                    </li>
                    <li>
                        <a href="register.php" class="rounded-3xl bg-red-600 font-bold py-2 px-12">Register</a>
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
                    <article class="bg-white rounded-2xl flex flex-col items-start justify-between">
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
                                <a href="#" class="text-blue-600 text-sm mt-3">Ver mas</a>
                            </div>
                        </div>
                    </article>
                    <article class="bg-white rounded-2xl flex flex-col items-start justify-between">
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
                                <a href="#" class="text-blue-600 text-sm mt-3">Ver mas</a>
                            </div>
                        </div>
                    </article>
                    <article class="bg-white rounded-2xl flex flex-col items-start justify-between">
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
                                <a href="#" class="text-blue-600 text-sm mt-3">Ver mas</a>
                            </div>
                        </div>
                    </article>
                    <article class="bg-white rounded-2xl flex flex-col items-start justify-between">
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
                                <a href="#" class="text-blue-600 text-sm mt-3">Ver mas</a>
                            </div>
                        </div>
                    </article>
                    <article class="bg-white rounded-2xl flex flex-col col-span-2 items-start justify-between">
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
                                <a href="#" class="text-blue-600 text-sm mt-3">Ver mas</a>
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
</body>

</html>