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
                        <a class="bg-red-600 rounded-lg py-1 px-3" href="la-serie.php">La Serie</a>
                    </li>
                    <li>
                        <a href="temporadas.php">Temporadas</a>
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
        <section class="bg-red-600">
            <div class="container mx-auto py-12">
                <h1 class="titulo-encabezado text-4xl font-bold text-center">La Serie</h1>
            </div>
        </section>

        <div class="overflow-hidden py-32">
            <div class="mx-auto max-w-7xl px-6 lg:flex lg:px-8">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-12 gap-y-16 lg:mx-0 lg:min-w-full lg:max-w-none lg:flex-none lg:gap-y-8">
                    <div class="lg:col-end-1 lg:w-full lg:max-w-lg lg:pb-8">
                        <h2 class="text-3xl font-bold tracking-tight text-white">Stranger Things: Una Aventura Sobrenatural en los 80</h2>
                        <h3 class="mt-6 text-xl font-bold leading-8 text-gray-200">Sinopsis</h3>
                        <p class="mt-6 text-base leading-7 text-gray-200">
                            Stranger Things nos transporta a la década de los 80, a un pequeño pueblo estadounidense llamado Hawkins, donde la tranquila vida de sus habitantes se ve sacudida por la misteriosa desaparición de Will Byers. Esta desaparición desencadena una serie de eventos sobrenaturales que involucran a un grupo de amigos, una niña con poderes telequinéticos y una dimensión alternativa conocida como el "Revés".
                        </p>
                        <h3 class="mt-6 text-xl font-bold leading-8 text-gray-200">¿Por qué Ver Stranger Things?</h3>
                        <p class="mt-6 text-base leading-7 text-gray-200">
                            Si eres fanático de la ciencia ficción, el terror o simplemente buscas una serie entretenida y llena de nostalgia, Stranger Things es una opción perfecta. Su combinación de elementos sobrenaturales, drama adolescente y referencias a la cultura pop de los 80 la convierten en una experiencia única y adictiva.
                        </p>
                    </div>
                    <div class="flex flex-wrap items-start justify-end gap-6 sm:gap-8 lg:contents">
                        <div class="w-0 flex-auto lg:ml-auto lg:w-auto lg:flex-none lg:self-end">
                            <img src="assets/imagenes/laSerie1.jpg" alt="" class="aspect-[7/5] w-[37rem] max-w-none rounded-2xl bg-gray-50 object-cover">
                        </div>
                        <div class="contents lg:col-span-2 lg:col-end-2 lg:ml-auto lg:flex lg:w-[37rem] lg:items-start lg:justify-end lg:gap-x-8">
                            <div class="order-first flex w-64 flex-none justify-end self-end lg:w-auto">
                                <img src="assets/imagenes/laSerie2.jpg" alt="" class="aspect-[4/3] w-[24rem] max-w-none flex-none rounded-2xl bg-gray-50 object-cover">
                            </div>
                            <div class="flex w-96 flex-auto justify-end lg:w-auto lg:flex-none">
                                <img src="assets/imagenes/laSerie3.jpg" alt="" class="aspect-[7/5] w-[37rem] max-w-none flex-none rounded-2xl bg-gray-50 object-cover">
                            </div>
                            <div class="hidden sm:block sm:w-0 sm:flex-auto lg:w-auto lg:flex-none">
                                <img src="assets/imagenes/laSerie4.jpeg" alt="" class="aspect-[4/3] w-[24rem] max-w-none rounded-2xl bg-gray-50 object-cover">
                            </div>
                        </div>
                    </div>
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