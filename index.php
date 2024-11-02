<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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

    <title>Inicio | Stranger Things</title>
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
                        <a href="temporadas.php">Temporadas</a>
                    </li>
                    <li>
                        <a href="personajes.php">Personajes</a>
                    </li>
                    <li>
                        <a href="fanart.php">Fan art</a>
                    </li>
                    <li>
                        <a href="register.php" class="rounded-3xl bg-transparent border-red-600 border-2 font-bold py-2 px-8">Registrarse</a>
                    </li>
                    <li>
                        <a href="login.php" class="rounded-3xl bg-red-600 font-bold py-2 px-8">Login</a>
                    </li>

                </ul>
            </nav>
        </div>
    </header>
    <main class="">
        <section class="hero-background">
            <div class="container mx-auto pt-12 pb-96 grid grid-cols-2 gap-4">
                <div></div>
                <div class="flex flex-col gap-4">
                    <h1 class="font-bold mb-2 text-3xl">
                        Descubre el otro lado de Hawkins
                    </h1>
                    <p class="mb-8">
                        Stranger Things es una serie de televisión web estadounidense de suspenso y ciencia ficción
                        coproducida y distribuida por Netflix.Escrita y dirigida por los hermanos Matt y Ross Duffer, y
                        producida ejecutivamente por Shawn Levy,se estrenó en la plataforma Netflix el 15 de julio de
                        2016.
                    </p>
                    <div class="mx-auto">
                        <a href="#contacto" class="rounded-3xl bg-red-600 font-bold py-2 px-12">
                            Contactanos
                        </a>
                    </div>

                </div>
            </div>
        </section>
        <section class="container mx-auto py-12 grid grid-cols-2 gap-4">
            <div class="">
                <div class="">
                    <h1 class="font-bold mb-2 text-xl">
                        Stranger Things
                    </h1>
                    <p>
                        Stranger Things es una serie de televisión web estadounidense de suspenso y ciencia ficción
                        coproducida y distribuida por Netflix.Escrita y dirigida por los hermanos Matt y Ross Duffer, y
                        producida ejecutivamente por Shawn Levy,se estrenó en la plataforma Netflix el 15 de julio de
                        2016.
                    </p>

                    <p>
                        La serie recibió críticas positivas por parte de la prensa especializada, que elogió la
                        interpretación, caracterización, ritmo, atmósfera y el claro homenaje al Hollywood de la década
                        de
                        los ochenta, con referencias a películas de Steven Spielberg,Wes Craven,John Carpenter,Stephen
                        King,
                        Rob Reinery George Lucas, entre otros, incluyendo varias películas, anime y videojuegos.
                    </p>

                </div>
            </div>
            <div class="flex w-full">
                <iframe class="w-full h-80 rounded-xl border border-red-600" src="https://www.youtube.com/embed/-RcPZdihrp4?si=C7LGOg4ow5ENKlYc" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </section>

        <section class="container mx-auto py-12">
            <h1 class="font-bold mb-8 text-xl text-center">Galeria de arte - Fans</h1>
            <ul class="grid grid-cols-3 gap-8">
                <li class="text-center mx-auto">
                    <h2>#1: Anonimo</h2>
                    <figure class="">
                        <img class="w-52" src="assets/imagenes/strangerthingsinicio1.png" alt="Art Gallery 1">
                    </figure>
                </li>
                <li class="text-center mx-auto">
                    <h2>#2: Anonimo</h2>
                    <figure class="">
                        <img class="w-52" src="assets/imagenes/strangerthingsinicio2.jpg" alt="Art Gallery 2">
                    </figure>
                </li>
                <li class="text-center mx-auto">
                    <h2>#3: Anonimo</h2>
                    <figure class="">
                        <img class="w-52" src="assets/imagenes/strangerthingsinicio3.png" alt="Art Gallery 3">
                    </figure>
                </li>
            </ul>
        </section>
        <section class="container mx-auto py-12">
            <h1 class="mb-2 text-xl text-center font-bold">Contactanos!</h1>

            <div id="contacto-mensaje" class="bg-black mx-auto w-[580px] text-white hidden flex-col gap-4 rounded-lg border border-red-600 p-6"></div>

            <form id="contacto" class="bg-black mx-auto w-[580px] text-white flex flex-col gap-4 rounded-lg border border-red-600 p-6" method="POST">
                <div class="flex flex-col mb-2">
                    <label for="nombre">
                        Nombre
                    </label>
                    <input class="px-2 border-b-red-600 border-b-2 bg-transparent rounded-lg" type="text" name="nombre" id="nombre">
                </div>
                <div class="flex flex-col mb-2">
                    <label for="email">
                        E-mail
                    </label>
                    <input class="px-2 border-b-red-600 border-b-2 bg-transparent rounded-lg" type="text" name="email" id="email">
                </div>
                <div class="flex flex-col mb-2">
                    <label for="mensaje">
                        Mensaje
                    </label>
                    <textarea class="px-2 border-b-red-600 border-b-2 bg-transparent rounded-lg" name="mensaje" id="mensaje" rows="4"> </textarea>
                </div>
                <div class="flex justify-end">
                    <input class="rounded-3xl bg-red-600 font-bold py-2 px-12" type="submit" value="Enviar">
                </div>
            </form>
        </section>
        <script src="assets/js/guardado_contacto.js"></script>
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