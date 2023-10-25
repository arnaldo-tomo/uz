<?php
session_start();
include '../../configs/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $root = $_POST['root'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE root = '$root' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        setcookie('root', $username, time() + 3600, '/');

        $_SESSION['username'] = $username;
        header('Location: ../views/index.php');
    } else {
        echo "NAO";

        $_SESSION['error_message'] = "Nome de usuário ou senha incorretos";
        header('Location: ../index.php');
    }
}