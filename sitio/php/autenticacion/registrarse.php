<?php
include '../db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    // Captura de datos enviados
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $contraseña = $_POST["contraseña"];
    $terminos = isset($_POST["terminos"]) ? 1 : 0;

    // Prepara la instrucción de SQL
    $sql = $conn->prepare("INSERT INTO usuarios (Nombre, Apellido, Correo, Contraseña, AceptadoTerminos, FechaCreado) VALUES (? ,? ,?, ?, ?, NOW())");

    // Enlaza la información a la instrucción de SQL
    $sql->bind_param("ssssi", $nombre, $apellido, $email, $contraseña, $terminos);

    // Ejecución de la instrucción y validación
    if ($sql->execute() === TRUE) {
        echo "Usuario registrado exitosamente :)";
    } else {
        echo "Error: " . $sql->error;
    }

    $sql->close();
    $conn->close();
}
