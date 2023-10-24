<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fatima_zologico";

// Conectar ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}