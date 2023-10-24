<?php
session_start();
include '../configs/database.php'; // Inclua o arquivo de conexão
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $datanascimento = $_POST['datanascimento'];
    $telefone = $_POST['telefone'];
    $Cidade = $_POST['Cidade'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Verifique se as senhas coincidem
    if ($password === $confirm_password) {
   
        header('Location: login.php');

        $conn = new mysqli('localhost', 'root', '', 'fatima_zologico');

        $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if ($conn->query($query) === TRUE) {
            echo "Registro bem-sucedido!";
        } else {
            echo "Erro ao registrar: " . $conn->error;
        }

        // Fechar a conexão com o banco de dados
        $conn->close();
    } else {
       
        // Senhas não coincidem, defina uma mensagem de erro na sessão
        $_SESSION['error_message'] = "As senhas não correspondem.";

        // Redirecione de volta à página anterior
        header('Location: ../src/pages/auth/register.php');

    }

 
}