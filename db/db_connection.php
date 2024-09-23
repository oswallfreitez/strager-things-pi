<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stranger_things_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("No se pudo conectar a la base de datos". $conn->connect_error);
}