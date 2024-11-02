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
                        <a class="bg-red-600 rounded-lg py-1 px-3" href="personajes.php">Personajes</a>
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
    <main>
        <section class="bg-red-600">
            <div class="container mx-auto py-12">
                <h1 class="titulo-encabezado text-4xl font-bold text-center">Personajes</h1>
            </div>
        </section>

        <div class="bg-gray-900 pt-12 pb-32">
            <div class="mx-auto max-w-7xl px-6 text-center lg:px-8">
                <ul role="list" class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-6 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-8">
                    <li class="rounded-2xl bg-gray-800 px-8 py-10 border border-red-600">
                        <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56" src="assets/imagenes/eleven.jpg" alt="">
                        <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-red-600">Eleven</h3>
                        <p class="text-sm leading-6 text-gray-400">Interpretado por: Millie Bobby Brown</p>
                        <p class="leading-6 mt-6 align-right">
                            Eleven, una joven con habilidades psíquicas, es el corazón de la serie. Escapó de un laboratorio gubernamental y se une a un grupo de niños en Hawkins, Indiana. Su búsqueda de identidad y pertenencia la convierte en un personaje icónico. Su relación con Mike Wheeler y su deseo de proteger a sus amigos son aspectos centrales de su personaje.
                        </p>

                    </li>
                    <li class="rounded-2xl bg-gray-800 px-8 py-10 border border-red-600">
                        <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56" src="assets/imagenes/mike.jpg" alt="">
                        <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-red-600">Mike Wheeler </h3>
                        <p class="text-sm leading-6 text-gray-400">Interpretado por: Finn Wolfhard</p>
                        <p class="leading-6 mt-6">
                            Mike es el líder del grupo de amigos y desarrolla una profunda conexión con Eleven. Su dedicación a encontrarla y su lealtad hacia sus amigos impulsan gran parte de la trama. Mike es un personaje valiente y determinado.

                        </p>

                    </li>
                    <li class="rounded-2xl bg-gray-800 px-8 py-10 border border-red-600">
                        <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56" src="assets/imagenes/dustin.jpg" alt="">
                        <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-red-600">Dustin Henderson</h3>
                        <p class="text-sm leading-6 text-gray-400">Interpretado por: Gaten Matarazzo</p>
                        <p class="leading-6 mt-6">
                            Dustin aporta humor y carisma al grupo. Su inteligencia, su amor por la ciencia y su ingenio lo convierten en un personaje entrañable. A pesar de su afección dental y su apariencia peculiar, Dustin demuestra ser un amigo leal y valioso.
                        </p>

                    </li>
                    <li class="rounded-2xl bg-gray-800 px-8 py-10 border border-red-600">
                        <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56" src="assets/imagenes/lucas.jpg" alt="">
                        <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-red-600">Lucas Sinclair
                        </h3>
                        <p class="text-sm leading-6 text-gray-400">Interpretado por: Caleb McLaughlin</p>
                        <p class="leading-6 mt-6">
                            Lucas es el miembro más pragmático del grupo. Su actitud cautelosa a menudo choca con la imprudencia de sus amigos, lo que agrega equilibrio al grupo. Su valentía y determinación son fundamentales para enfrentar las amenazas de Hawkins.

                        </p>

                    </li>
                    <li class="rounded-2xl bg-gray-800 px-8 py-10 border border-red-600">
                        <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56" src="assets/imagenes/will.jpg" alt="">
                        <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-red-600">Will Byers</h3>
                        <p class="text-sm leading-6 text-gray-400">Interpretado por: Noah Schnapp</p>
                        <p class="leading-6 mt-6">
                            Will es el niño que desaparece al comienzo de la serie, desencadenando los eventos sobrenaturales. Su lucha por sobrevivir en el Mundo del Revés y la forma en que afecta a su familia y amigos son elementos cruciales de la historia.

                        </p>

                    </li>
                    <li class="rounded-2xl bg-gray-800 px-8 py-10 border border-red-600">
                        <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56" src="assets/imagenes/steve.jpg" alt="">
                        <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-red-600">Steve Harrington</h3>
                        <p class="text-sm leading-6 text-gray-400">Interpretado por: Joe Keery</p>
                        <p class="leading-6 mt-6">
                            Steve comienza como un personaje antagónico pero se transforma en un aliado invaluable del grupo. Su evolución de chico popular a persona comprensiva y protectora es un aspecto destacado de la serie.

                        </p>

                    </li>
                    <li class="rounded-2xl bg-gray-800 px-8 py-10 border border-red-600">
                        <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56" src="assets/imagenes/max.jpg" alt="">
                        <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-red-600">Max Mayfield</h3>
                        <p class="text-sm leading-6 text-gray-400">Interpretado por: Sadie Sink
                        </p>
                        <p class="leading-6 mt-6">
                            Max es una adición importante a la pandilla de amigos en Hawkins. Es valiente, segura de sí misma y una patinadora talentosa. A pesar de su actitud inicialmente reservada, Max se convierte en una amiga cercana y aporta una perspectiva fresca al grupo.

                        </p>

                    </li>
                    <li class="rounded-2xl bg-gray-800 px-8 py-10 border border-red-600">
                        <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56" src="assets/imagenes/jim.jpg" alt="">
                        <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-red-600">Jim Hopper</h3>
                        <p class="text-sm leading-6 text-gray-400">Interpretado por: David Harbour</p>
                        <p class="leading-6 mt-6">
                            El jefe de policía de Hawkins, Hopper, es un personaje complejo que lucha con sus propios demonios personales. Su papel como protector de los niños y su valentía al enfrentar amenazas paranormales lo convierten en una figura paterna y líder en la serie.

                        </p>

                    </li>
                    <li class="rounded-2xl bg-gray-800 px-8 py-10 border border-red-600">
                        <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56" src="assets/imagenes/joyce.jpg" alt="">
                        <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-red-600">Joyce Byers</h3>
                        <p class="text-sm leading-6 text-gray-400">Interpretado por: Winona Ryder</p>
                        <p class="leading-6 mt-6">
                            La madre de Will y Jonathan, Joyce es una figura central en la serie. Su desesperada búsqueda de su hijo desaparecido y su voluntad de enfrentar lo desconocido la convierten en un personaje profundamente conmovedor.

                        </p>

                    </li>
                    <li class="rounded-2xl bg-gray-800 px-8 py-10 border border-red-600">
                        <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56" src="assets/imagenes/billy.jpg" alt="">
                        <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-red-600">Billy Hargrove</h3>
                        <p class="text-sm leading-6 text-gray-400">Interpretado por: Dacre Montgomery</p>
                        <p class="leading-6 mt-6">
                            El hermano de Max, Billy, es un personaje complicado. Comienza como un antagonista y un matón, pero más tarde se explora su trasfondo y los problemas que enfrenta en su vida. Su relación con Max y su evolución a lo largo de la serie añaden profundidad a su personaje.

                        </p>

                    </li>
                </ul>
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