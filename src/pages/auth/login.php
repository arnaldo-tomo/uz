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
        <form action="../../../configs/loginController.php" method="POST">
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