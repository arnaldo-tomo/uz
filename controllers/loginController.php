<?php
session_start();
include '../configs/database.php'; // Inclua o arquivo de conexão

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Use a conexão com o banco de dados para verificar o nome de usuário e a senha
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username;
        header('Location: painel.php'); // Redirecionar para a página do painel após o login
    } else {
        echo "Nome de usuário ou senha incorretos.";
    }
}
?>
<!-- Formulário de login aqui -->