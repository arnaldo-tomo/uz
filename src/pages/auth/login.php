<?php
session_start();

// Verifique se os cookies estão definidos
if (isset($_COOKIE['username'])) {
    header('Location: ../dashboard/index.php');
}
// "../dashboard/index.php"

if (isset($_SESSION['error_message'])) {
    $error_message = $_SESSION['error_message'];
    unset($_SESSION['error_message']); // Limpa a mensagem de erro para que ela não seja exibida novamente
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../assets/css/login.css">
</head>

<body>
    <div class="login-container">
        <h1>Login</h1>
        <?php if (isset($error_message)) { ?>
            <p style="color: red;"><b><?php echo $error_message; ?></b></p>
        <?php } ?>
        <form action="../../../controllers/loginController.php" method="POST">
            <div class="form-group">
                <label for="username">Usuário:</label>
                <input type="text" name="username" placeholder="Nome de usuário" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" name="password" placeholder="Senha" required required>
            </div>
            <a> <button type="submit">Entrar</button> </a>
        </form>
        <p>Ainda não tem uma conta? <a href="./register.php">Clique aqui para se cadastrar</a></p>
    </div>

</body>

</html>