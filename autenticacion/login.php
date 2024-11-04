<?php
include '../db/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["contraseña"];

    // Prepara la instrucción de SQL
    $sql = "SELECT * FROM usuarios WHERE Correo = ?";
    $stmt = $conn->prepare($sql);
    // Enlaza la información a la instrucción de SQL
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Ejecución de la instrucción y validación
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        //Comparo contraseña enviada contra la contraseña guardada
        if ($password == $row['Contraseña']) {
            echo json_encode(['success' => true, 'id' => $row["id"], 'nombre' => $row["Nombre"], 'apellido' => $row["Apellido"]]);

            exit;
        } else {
            echo json_encode(['success' => false, 'error' => 'Contraseña incorrecta, por favor intente de nuevo.']);
        }
    } else {
        echo json_encode(['success' => false, 'error' => 'No se encontró el usuario.']);
    }

    $stmt->close();
    $conn->close();
}
