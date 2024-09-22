<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Prepara la instrucción de SQL
    $sql = $conn->prepare("INSERT INTO contacto (Nombre, Correo, Mensaje) VALUES (? ,? ,?)");

    // Enlaza la información a la instrucción de SQL
    $sql->bind_param("sss", $nombre, $email, $mensaje);

    // Ejecución de la instrucción y validación
    if ($sql->execute() === TRUE) {
        echo "Contacto guardado exitosamente";
    } else {
        echo "Error: " . $sql->error;
    }

    $sql->close();
    $conn->close();
}
