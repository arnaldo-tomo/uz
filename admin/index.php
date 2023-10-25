<?php
session_start();

// Verifique se os cookies estão definidos
if (isset($_COOKIE['root'])) {
    header('Location: ./views/index.php');
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
    <link rel="stylesheet" href="../assets/css/login.css">

    <style>
        .login-container {
            width: 500px;
        }

        a {
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h1>ADMIN</h1>
        <?php if (isset($error_message)) { ?>
            <p style="color: red;"><b><?php echo $error_message; ?></b></p>
        <?php } ?>
        <form action="./controllers/auth.php" method="POST">
            <div class="form-group">
                <label for="username">Usuário:</label>
                <input type="password" name="root" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" name="password" placeholder="password" required required>
            </div>
            <a> <button type="submit">Entrar</button> </a>
        </form>
    </div>

</body>

</html>