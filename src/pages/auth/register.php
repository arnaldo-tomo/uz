<?php
session_start();

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
    <link rel="stylesheet" href="../../../assets/css/cadastro.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Cadastro de Usuário</h1>
        <?php if (isset($error_message)) { ?>
            <p style="color: red;"><b><?php echo $error_message; ?></b></p>
        <?php } ?>
        <form id="cadastro-form" method="POST" action="../../../controllers/registerController.php">
            <label for="nome">Nome:</label>
            <input type="text" id="username" name="username" placeholder="Informe o seu nome" required>
            <label for="endereco">Email:</label>
            <input type="text" id="endereco" name="email" placeholder="exemple:fatima@gmail.com" required>

            <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo" required>
                <option disabled selected>-Selecione o sexo-</option>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
            </select>

            <label for="data-nascimento">Data de Nascimento:</label>
            <input type="date" name="datanascimento" required>


            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" placeholder="258 84 00000 00" required>

            <label for="trabalho-estudo">Cidade:</label>
            <select id="Cidade" name="Cidade" required>
                <option disabled selected>-Selecione a sua Cidade-</option>
                <option value="Beira">Beira</option>
                <option value="Maputo">Maputo</option>
                <option value="Nampula">Nampula</option>
                <option value="Tete">Tete</option>
            </select>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Informe o seu nome" required>
            <label for="password">Confirme a sua password:</label>
            <input type="password" id="password" name="confirm_password" placeholder="Informe o seu nome" required>

            <button type="submit">Registrar</button>

        </form>
    </div>
    <script src="../../../assets/js/cadastro.js"></script>

</html>