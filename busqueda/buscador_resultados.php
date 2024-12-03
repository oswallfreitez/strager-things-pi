<?php
include '../db/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    $query = $_GET["query"];
    $query_param = "%{$query}%";

    // Busqueda de query en temporadas
    $sql_temporadas = "SELECT * FROM temporadas WHERE descripcion LIKE ?";
    $stmt_temporadas = $conn->prepare($sql_temporadas);
    // Enlaza la información a la instrucción de SQL
    $stmt_temporadas->bind_param("s", $query_param);
    $stmt_temporadas->execute();
    $result_temporadas = $stmt_temporadas->get_result();
    $resultados_temporadas = $result_temporadas->fetch_all(MYSQLI_ASSOC);

    // Busqueda de query en personajes
    $sql_personajes = "SELECT * FROM personajes WHERE nombre LIKE ? OR descripcion LIKE ?";
    $stmt_personajes = $conn->prepare($sql_personajes);
    // Enlaza la información a la instrucción de SQL
    $stmt_personajes->bind_param("ss", $query_param, $query_param);
    $stmt_personajes->execute();
    $result_personajes = $stmt_personajes->get_result();
    $resultados_personajes = $result_personajes->fetch_all(MYSQLI_ASSOC);

    // Fusiona los resultados de cada busqueda
    $resultados = array_merge($resultados_temporadas, $resultados_personajes);

    $respuesta = [
        "query" => $query,
        "resultados" => $resultados
    ];

    // Envía la información a front
    echo json_encode($respuesta);

    $stmt_temporadas->close();
    $stmt_personajes->close();
    $conn->close();
}
