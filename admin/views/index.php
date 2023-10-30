<?php
// Verifica se o formulário foi enviado
session_start();
include '../../configs/database.php';
// Verifique se os cookies estão definidos
if (isset($_COOKIE['root'])) {
    $root = $_COOKIE['root'];
} else {
    $_SESSION['error_message'] = "Voce nao esta autenticado.";
    // Os cookies não estão definidos, redirecione para a página de login
    header('Location: ../index.php');
    exit;
}





// Consulta para recuperar os animais do banco de dados
$sql = "SELECT * FROM animal";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="../assets/css/styles.css">

    <title>ADMIN</title>
</head>

<body>
    <header class="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="#" class="nav__logo">
                    <i class="ri-planet-line"></i> ZOOlolandia
                </a>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__burger"></i>
                    <i class="ri-close-line nav__close"></i>
                </div>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li><a href="#" class="nav__link">Home</a></li>


                    <li><a href="#" class="nav__link">Gruppo</a></li>
                    <li><a href="#" class="nav__link">Animais</a></li>

                    <li class="dropdown__item">
                        <div class="nav__link">
                            <?php echo $root; ?> <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <ul class="dropdown__menu">
                            <li>
                                <a href="./logout.php" class="dropdown__link">
                                    <i class="ri-message-3-line"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <div class="submenu">
        <h1>Ola,Admin</h1>

        <h2>Cadastro de Animal</h2>
        <form method="post" action="../controllers/animalsalvar.php" enctype="multipart/form-data">
            Nome: <input type="text" name="nome" required><br>
            Descrição: <textarea name="descricao" required></textarea><br>
            Foto: <input type="file" name="foto" required><br>
            <input type="submit" value="Cadastrar">
        </form>
        <h2>Lista de Animais</h2>

        <?php
        if ($result->num_rows > 0) {
            echo '<table border="1">';
            echo '<tr><th>Nome</th><th>Descrição</th><th>Foto</th></tr>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["nome"] . '</td>';
                echo '<td>' . $row["descricao"] . '</td>';
                echo '<td><img src="uploads/' . $row["foto"] . '" alt="' . $row["nome"] . '"></td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo "Nenhum animal cadastrado ainda.";
        }
        ?>
    </div>





    <script src="main.js"></script>

    <script src="../assets/js/main.js"></script>
</body>

</html>