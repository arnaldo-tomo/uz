<?php
session_start();

// Verifique se os cookies estão definidos
if (isset($_COOKIE['username'])) {
    header('Location: ./src/pages/dashboard/index.php');
}

if (isset($_SESSION['error_message'])) {
    $error_message = $_SESSION['error_message'];
    unset($_SESSION['error_message']); // Limpa a mensagem de erro para que ela não seja exibida novamente
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF=8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <title>Zoolandia</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/geral.css">
    <link rel="stylesheet" href="./assets/css/MainStyle.css">

    <!-- Link de icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <header class="header">
        <a href="#" class="Logotipo">Zoolandia.</a>
        <nav class="navbar">
            <a href="#" class="active">Home</a>
            <a href="./src/pages/info.php">Sobre nos</a>
        </nav>
    </header>

    <?php if (isset($error_message)) { ?>
        <p style="color: red;"><b><?php echo $error_message; ?></b></p>
    <?php } ?>
    <section class="home">
        <div class="home-content">
            <h1>Olá, Seja bem vindo!</h1>
            <div class="tucha">

                <p class="letra"> Preparamos este espaço virtual repleto de descobertas e aventuras
                    para que você possa explorar o mundo animal de forma única e educativa.
                    Aqui você encontrará uma variedade de informações fascinantes sobre as mais diversas
                    espécies, curiosidades e habitat, além de belas imagens que vão te encantar.
                </p>
            </div>
            <a href="./src/pages/auth/login.php" class="bt bt-lj">Entrar</a>
    </section>

</body>

</html>