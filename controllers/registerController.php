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



        $conn = new mysqli('localhost', 'root', '', 'fatima_zologico');
        $dateTime = new DateTime();
        $criado_em = $dateTime->format('Y-m-d H:i:s');

        $query = "INSERT INTO users (username,email,sexo,datanascimento,telefone,Cidade,password,criado_em)
         VALUES ('$username', '$email','$sexo','$datanascimento','$telefone','$Cidade','$password','$criado_em')";
        if ($conn->query($query) === TRUE) {

            setcookie('username', $username, time() + 3600, '/');
            setcookie('email', $email, time() + 3600, '/');

            header('Location: ../src/pages/dashboard/index.php');
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