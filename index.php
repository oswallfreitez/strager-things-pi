<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strager things</title>
</head>

<body>
    <h1>
        Prueba formulario
    </h1>
    <form action="guardar_contacto.php" method="POST" >
        <label for="nombre">
            Nombre:
        </label>
        <input type="text" name="nombre" id="nombre">
        <label for="email">
            E-mail:
        </label>
        <input type="text" name="email" id="email">
        <label for="mensaje">
            Mensaje:
        </label>
        <textarea name="mensaje" id="mensaje" rows="4"> </textarea>
        <input type="submit" value="Enviar">
    </form>
       
       
</body>

</html>