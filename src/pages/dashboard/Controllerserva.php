<?php
session_start();
include '../../../configs/database.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $datahora = $_POST["datahora"];
    $pessoas = $_POST["pessoas"];

    $sql = "INSERT INTO visitas (nome,email,datahora,pessoas) VALUES ('$nome','$email','$datahora','$pessoas')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['error_message'] = "Visita Reservada com sucesso.";
        header('Location: ../../pages/dashboard/reserva.php');
    } else {
        echo "Erro ao Reservar a Visita: " . $conn->error;
    }
}
