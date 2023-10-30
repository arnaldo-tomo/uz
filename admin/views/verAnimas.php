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

                <ul class="menu_items">
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
        <h1>Todos os animais</h1>
        <table border="1px" style="width: 1080px;">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nome </th>
                    <th>Sexo </th>
                    <th>Especie </th>
                    <th>descricao </th>
                    <th>Foto </th>
                </tr>
            </thead>
            <tbody>
                <img width="20px" />
                <?php
                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                        echo '<td>' . $row["id"] . '</td>';
                        echo '<td>' . $row["nome"] . '</td>';
                        echo '<td>' . $row["sexo"] . '</td>';
                        echo '<td>' . $row["especie"] . '</td>';
                        echo '<td>' . $row["descricao"] . '</td>';
                        echo '<td><img width="50px"   src="../controllers/uploads/' . $row["foto"] . '" alt="' . $row["nome"] . '"></td>';
                        echo '</tr>';
                    }
                    echo '</table>';
                } else {
                    echo "Nenhum animal cadastrado ainda.";
                }
                ?>
            </tbody>
        </table>

    </div>


    <script src="../assets/js/main.js"></script>
</body>


<!-- 