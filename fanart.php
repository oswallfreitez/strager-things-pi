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

    <title>Personajes | Stranger Things</title>
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
                        <a class="bg-red-600 rounded-lg py-1 px-3" href="fanart.php">Fan art</a>
                    </li>
                    <li>
                        <a href="login.php" class="rounded-3xl bg-red-600 font-bold py-2 px-12">Login</a>
                    </li>

                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="bg-red-600">
            <div class="container mx-auto py-12">
                <h1 class="text-3xl font-bold text-center">
                    Fan Art
                </h1>
            </div>
        </section>

        <section class="top-peli-contenedor">
            <h1>Galeria de arte - Fans</h1>
            <ul class="top-peli-lista">
                <li>
                    <h2>#1: Anonimo</h2>
                    <figure class="top-peli-imagen">
                        <img src="assets/imagenes/strangerthingsinicio4.jpg" alt="Art Gallery 1">
                    </figure>
                </li>
                <li>
                    <h2>#2: Anonimo</h2>
                    <figure class="top-peli-imagen">
                        <img src="assets/imagenes/strangerthingsinicio7.png" alt="Art Gallery 2">
                    </figure>
                </li>
                <li>
                    <h2>#3: Anonimo</h2>
                    <figure class="top-peli-imagen">
                        <img src="assets/imagenes/strangerthingsinicio6.jpg" alt="Art Gallery 3">
                    </figure>
                </li>
            </ul>
        </section>

        <section class="contenedor-carga">
            <h1>Carga tu arte Stranger</h1>
            <div class="cuadro-carga">
                <input type="file">
            </div>
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