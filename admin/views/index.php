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
<!-- Coding by CodingNepal || www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>Admin</title>
    <link rel="stylesheet" href="../assets/css/styles.css" />
</head>

<body>
    <!-- navbar -->
    <nav class="navbar">
        <div class="logo_item">
            <i class="bx bx-menu" id="sidebarOpen"></i>
            </i>ZOOlogico
        </div>

        <div class="search_bar">
            <input type="text" style="text-align: center;" disabled value="Ola,<?php echo $root; ?>" />
        </div>

        <div class="navbar_content">
            <i class="bi bi-grid"></i>
            <i class='bx bx-sun' id="darkLight"></i>
            <!-- <img src="../assets/img/profile.jpg" alt="" class="profile" /> -->
        </div>
    </nav>

    <!-- sidebar -->
    <nav class="sidebar">
        <div class="menu_content">
            <ul class="menu_items">
                <div class="menu_title menu_dahsboard"></div>
                <li class="item">
                    <a href="./index.php" class="nav_link">
                        <span class="navlink_icon">
                            <i class="bx bx-home"></i>
                        </span>
                        <span class="navlink"> <b>Dashboard</b></span>
                    </a>
                </li>
                <li class="item">
                    <a href="./cadatrar.php" class="nav_link">
                        <span class="navlink_icon">
                            <i class="bx bx-loader-circle"></i>
                        </span>
                        <span class="navlink"> Cadastrar Animaos</span>
                    </a>
                </li>
                <li class="item">
                    <a href="./cadastarEspecie.php" class="nav_link">
                        <span class="navlink_icon">
                            <i class="bx bx-loader-circle"></i>
                        </span>
                        <span class="navlink"> Cadastrar Especie</span>
                    </a>
                </li>
                <li class="item">
                    <a href="./verAnimas.php" class="nav_link">
                        <span class="navlink_icon">
                            <i class="bx bx-loader-circle"></i>
                        </span>
                        <span class="navlink"> Ver Animais</span>
                    </a>
                </li>
                <li class="item">
                    <a href="./verEspecie.php" class="nav_link">
                        <span class="navlink_icon">
                            <i class="bx bx-loader-circle"></i>
                        </span>
                        <span class="navlink"> Ver Especie</span>
                    </a>
                </li>


            </ul>

            <ul class="menu_items">
                <div class="menu_title menu_editor"></div>
                <li class="item">
                    <a href="#" class="nav_link">
                        <span class="navlink_icon">
                            <i class="bx bx-loader-circle"></i>
                        </span>
                        <span class="navlink"> Visitantes</span>
                    </a>
                </li>
                <!-- End -->

                <li class="item">
                    <a href="#" class="nav_link">
                        <span class="navlink_icon">
                            <i class="bx bx-loader-circle"></i>
                        </span>
                        <span class="navlink">Bilhentes</span>
                    </a>
                </li>
                <li class="item">
                    <a href="#" class="nav_link">
                        <span class="navlink_icon">
                            <i class="bx bx-loader-circle"></i>
                        </span>
                        <span class="navlink">Outros</span>
                    </a>
                </li>
                <li class="item">
                    <a href="#" class="nav_link">
                        <span class="navlink_icon">
                            <i class="bx bx-loader-circle"></i>
                        </span>
                        <span class="navlink">Outros</span>
                    </a>
                </li>
            </ul>

            <!-- Sidebar Open / Close -->
            <div class="bottom_content">
                <div class="bottom expand_sidebar">
                    <span> Expandir</span>
                    <i class='bx bx-log-in'></i>
                </div>
                <div class="bottom collapse_sidebar">
                    <span> Esconder</span> <a href="./logout.php"> <i class='bx bx-log-out'></i></a>

                </div>
            </div>
        </div>
    </nav>
    <!-- JavaScript -->

    <div class="animas">
        <h1>Dashboard</h1>

        <div class="coluna">

            <div class="card1">
                <h4>Total de Animais</h4>
                <h1>15</h1>
            </div>
            <div class="card1">
                <h4>total Especie</h4>
                <h1>5</h1>
            </div>
            <div class="card1">
                <h4>Total de Visiatntes</h4>
                <h1>8</h1>
            </div>
            <div class="card1">
                <h4>Total de Bilhentes</h4>
                <h1>9</h1>
            </div>
        </div>
    </div>


    <script src="../assets/js/main.js"></script>
</body>




<!-- <div class="submenu">
        <h1>Ola,Admin</h1>

        <h2>Cadastro de Animal</h2>
        <form method="post" action="../controllers/animalsalvar.php" enctype="multipart/form-data">
            Nome: <input type="text" name="nome" required><br>
            Descrição: <textarea name="descricao" required></textarea><br>
            Foto: <input type="file" name="foto" required><br>
            <input type="submit" value="Cadastrar">
        </form>
        <h2>Lista de Animais</h2>

    </div> -->
<!-- <?php
        if ($result->num_rows > 0) {
            echo '<table border="1">';
            echo '<tr><th>Nome</th><th>Descrição</th><th>Foto</th></tr>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["nome"] . '</td>';
                echo '<td>' . $row["descricao"] . '</td>';
                echo '<td><img src="../controllers/uploads/' . $row["foto"] . '" alt="' . $row["nome"] . '"></td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo "Nenhum animal cadastrado ainda.";
        }
        ?> -->