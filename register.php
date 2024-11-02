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

    <title>Registrarse | Stranger Things</title>
</head>

<body>
    <main>
        <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-md">
                <a class="flex justify-center align-center" href="index.php">
                    <img class="h-12 my-auto py-1 border-t border-b border-red-600" src="assets/imagenes/Stranger World.png" alt="logo">
                </a>
                <h2 class="mt-6 text-center text-2xl font-bold leading-9 tracking-tight text-white">Únete a la comunidad Stranger</h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-[480px]">
                <div class="bg-white px-6 py-12 shadow sm:rounded-lg sm:px-12">
                    <div id="registrarse-mensaje" class="bg-red-600 mx-auto w-full text-white hidden flex-col gap-4 rounded-lg p-6"></div>

                    <form id="registrarse" class="space-y-4" method="POST">
                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <label for="nombre" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                                <div class="mt-2">
                                    <input id="nombre" name="nombre" type="text" autocomplete="nombre" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div>
                                <label for="apellido" class="block text-sm font-medium leading-6 text-gray-900">Apellido</label>
                                <div class="mt-2">
                                    <input id="apellido" name="apellido" type="text" autocomplete="apellido" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div>
                            <label for="contraseña" class="block text-sm font-medium leading-6 text-gray-900">Contraseña</label>
                            <div class="mt-2">
                                <input id="contraseña" name="contraseña" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input id="terminos" name="terminos" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-red-600 focus:ring-red-600">
                                <label for="terminos" class="ml-3 block text-sm leading-6 text-gray-900">Acepto los términos de servicio</label>
                            </div>
                        </div>

                        <div>
                            <input type="submit" class="flex w-full justify-center rounded-md bg-red-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600" value="Registrarse" />
                        </div>
                    </form>

                    <div id="alternativa-registro">
                        <div class="relative mt-10">
                            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                                <div class="w-full border-t border-gray-200"></div>
                            </div>
                            <div class="relative flex justify-center text-sm font-medium leading-6">
                                <span class="bg-white px-6 text-gray-900">o también puedes registrarte usando</span>
                            </div>
                        </div>

                        <div class="mt-6 grid grid-cols-1 gap-4">
                            <a href="#" class="flex w-full items-center justify-center gap-3 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus-visible:ring-transparent">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M12.0003 4.75C13.7703 4.75 15.3553 5.36002 16.6053 6.54998L20.0303 3.125C17.9502 1.19 15.2353 0 12.0003 0C7.31028 0 3.25527 2.69 1.28027 6.60998L5.27028 9.70498C6.21525 6.86002 8.87028 4.75 12.0003 4.75Z" fill="#EA4335" />
                                    <path d="M23.49 12.275C23.49 11.49 23.415 10.73 23.3 10H12V14.51H18.47C18.18 15.99 17.34 17.25 16.08 18.1L19.945 21.1C22.2 19.01 23.49 15.92 23.49 12.275Z" fill="#4285F4" />
                                    <path d="M5.26498 14.2949C5.02498 13.5699 4.88501 12.7999 4.88501 11.9999C4.88501 11.1999 5.01998 10.4299 5.26498 9.7049L1.275 6.60986C0.46 8.22986 0 10.0599 0 11.9999C0 13.9399 0.46 15.7699 1.28 17.3899L5.26498 14.2949Z" fill="#FBBC05" />
                                    <path d="M12.0004 24.0001C15.2404 24.0001 17.9654 22.935 19.9454 21.095L16.0804 18.095C15.0054 18.82 13.6204 19.245 12.0004 19.245C8.8704 19.245 6.21537 17.135 5.2654 14.29L1.27539 17.385C3.25539 21.31 7.3104 24.0001 12.0004 24.0001Z" fill="#34A853" />
                                </svg>
                                <span class="text-sm font-semibold leading-6 text-gray-600">Google</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="assets/js/registrarse.js"></script>

</body>

</html>