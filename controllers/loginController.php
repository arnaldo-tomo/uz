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
        // Login bem-sucedido, agora defina os cookies com o email e o nome de usuário
        $row = $result->fetch_assoc();
        $email = $row['email'];

        setcookie('username', $username, time() + 3600, '/');
        setcookie('email', $email, time() + 3600, '/');

        $_SESSION['username'] = $username;
        header('Location: painel.php'); // Redirecionar para a página do painel após o login
    } else {
        // Senhas não coincidem, defina uma mensagem de erro na sessão
        $_SESSION['error_message'] = "Nome de usuário ou senha incorretos";
        // Redirecione de volta à página anterior
        header('Location: ../src/pages/auth/login.php');
    }
}