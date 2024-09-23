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
                        <a href="login.php" class="rounded-3xl bg-red-600 font-bold py-2 px-12">Login</a>
                    </li>

                </ul>
            </nav>
        </div>
    </header>
    <main class="temporadas">
        <section class="bg-red-600">
            <div class="container mx-auto py-12">
                <h1 class="text-3xl font-bold text-center">Temporadas</h1>
            </div>
        </section>

        <section>
            <ul class="lista-items">
                <li class="item-contenedor">
                    <div class="item-contenido">
                        <h3> Temporada 1</h3>
                        <p>
                            Resumen: En 1983, Will Byers desaparece en el pueblo de Hawkins, Indiana. Sus amigos, su familia y una misteriosa niña, Eleven, descubren que Will ha sido secuestrado por un monstruo del Upside Down, una dimensión paralela.
                        </p>

                    </div>
                    <figure class="item-poster">
                        <img src="assets/imagenes/postertemporada1.jpg" alt="Poster temporada 1">
                    </figure>
                </li>
                <li class="item-contenedor">
                    <div class="item-contenido">
                        <h3>Temporada 2</h3>
                        <p>
                            Resumen: El Upside Down vuelve a Hawkins, y los amigos deben luchar para detener a un nuevo monstruo que ha secuestrado a Will. Eleven, que ahora vive con Joyce y Jonathan Byers, debe aprender a controlar sus poderes para ayudar a sus amigos.
                        </p>

                    </div>
                    <figure class="item-poster">
                        <img src="assets/imagenes/postertemporada2.jpg" alt="Poster temporada 2">
                    </figure>
                </li>
                <li class="item-contenedor">
                    <div class="item-contenido">
                        <h3>Temporada 3</h3>
                        <p>
                            Un verano lleno de diversión y romance en Hawkins se ve interrumpido por la llegada de un nuevo villano, una criatura con poderes eléctricos. Los amigos deben trabajar juntos para detener a la criatura y salvar a Hawkins.
                        </p>

                    </div>
                    <figure class="item-poster">
                        <img src="assets/imagenes/postertemporada3.jpg" alt="Poster temporada 3">
                    </figure>
                </li>
                <li class="item-contenedor">
                    <div class="item-contenido">
                        <h3>Temporada 4</h3>
                        <p>Resumen: Un año después, los amigos se enfrentan a un nuevo enemigo, Vecna, un poderoso hechicero que está matando a los adolescentes de Hawkins. Los amigos deben viajar al Upside Down para detener a Vecna y salvar a Hawkins.
                        </p>

                    </div>
                    <figure class="item-poster">
                        <img src="assets/imagenes/postertemporada4.jpg" alt="Poster temporada 4">
                    </figure>
                </li>
                <li class="item-contenedor">
                    <div class="item-contenido">
                        <h3>Temporada 5:</h3>
                        <p>Resumen: La temporada final de Stranger Things se centrará en la batalla final entre los amigos de Hawkins y Vecna
                        </p>

                    </div>
                    <figure class="item-poster">
                        <img src="assets/imagenes/postertemporada5.jpg" alt="Poster temporada 5">
                    </figure>
                </li>
            </ul>
        </section>
        <button class="border border-red-600 shadow-md shadow-red-600 fixed bottom-4 right-4 py-3 px-5 rounded-lg">
            <a href="#">
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
</body>

</html>