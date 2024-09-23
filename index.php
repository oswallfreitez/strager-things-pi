<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    
    <title>Inicio | Stranger Things</title>
</head>

<body>
    <header>
        <div id="logo">
            <a href="index.php">
                <img src="assets/imagenes/Stranger World.png" alt="logo">
            </a>
        </div>

        <nav class="menu">
            <ul>
                <li>
                    <a href="temporadas.php">Temporadas</a>
                </li>
                <li>
                    <a href="personajes.php">Personajes</a>
                </li>
                <li>
                    <a href="fanart.php">Fan art</a>
                </li>

            </ul>
        </nav>
    </header>
    <main class="pagina-principal">
        <section class="contenedor-principal">
            <div class="contenido-principal">
                <div class="texto-principal">
                    <h1>
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
            <div class="video-principal">
                <iframe src="https://www.youtube.com/embed/-RcPZdihrp4?si=C7LGOg4ow5ENKlYc" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </section>

        <section class="top-peli-contenedor">
            <h1>Galeria de arte - Fans</h1>
            <ul class="top-peli-lista">
                <li>
                    <h2>#1: Anonimo</h2>
                    <figure class="top-peli-imagen">
                        <img src="assets/imagenes/strangerthingsinicio1.png" alt="Art Gallery 1">
                    </figure>
                </li>
                <li>
                    <h2>#2: Anonimo</h2>
                    <figure class="top-peli-imagen">
                        <img src="assets/imagenes/strangerthingsinicio2.jpg" alt="Art Gallery 2">
                    </figure>
                </li>
                <li>
                    <h2>#3: Anonimo</h2>
                    <figure class="top-peli-imagen">
                        <img src="assets/imagenes/strangerthingsinicio3.png" alt="Art Gallery 3">
                    </figure>
                </li>
            </ul>
        </section>
        <section class="container mx-auto mb-8">
            <h1 class="mb-2 text-lg text-left">Contactanos!</h1>
            <form class="text-white flex flex-col gap-4 rounded-lg border border-red-600 p-6" action="contacto/guardar_contacto.php" method="POST">
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
        <button class="scroll-arriba">
            <a href="#">
                ⇧
            </a>
        </button>
    </main>
    <footer class="border-t-red-600 border-t-2">
        <div class="container mx-auto justify-evenly w-full flex mt-6 mb-8">

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
        <div>
            <p class="text-xs">Stranger Things © 2024 | Creado por Oswall Freitez</p>
        </div>
    </footer>
</body>

</html>