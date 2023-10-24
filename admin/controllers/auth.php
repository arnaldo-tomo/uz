<?php
session_start();
include '../configs/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $email = $row['email'];

        setcookie('username', $username, time() + 3600, '/');
        setcookie('email', $email, time() + 3600, '/');

        $_SESSION['username'] = $username;

        header('Location: ../src/pages/dashboard/index.php');
    } else {
        $_SESSION['error_message'] = "Nome de usuário ou senha incorretos";
        header('Location: ../src/pages/auth/login.php');
    }
}
