<?php
include '../db/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    $query = $_GET["query"];
    $query_param = "%{$query}%";

    $sql_temporadas = "SELECT * FROM temporadas WHERE descripcion LIKE ?";
    $stmt_temporadas = $conn->prepare($sql_temporadas);
    $stmt_temporadas->bind_param("s", $query_param);
    $stmt_temporadas->execute();
    $result_temporadas = $stmt_temporadas->get_result();
    $resultados_temporadas = $result_temporadas->fetch_all(MYSQLI_ASSOC);

    $sql_personajes = "SELECT * FROM personajes WHERE nombre LIKE ? OR descripcion LIKE ?";
    $stmt_personajes = $conn->prepare($sql_personajes);
    $stmt_personajes->bind_param("ss", $query_param, $query_param);
    $stmt_personajes->execute();
    $result_personajes = $stmt_personajes->get_result();
    $resultados_personajes = $result_personajes->fetch_all(MYSQLI_ASSOC);

    $resultados = array_merge($resultados_temporadas, $resultados_personajes);

    echo json_encode($resultados);

    $stmt_temporadas->close();
    $stmt_personajes->close();
    $conn->close();
}
