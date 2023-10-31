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




if (isset($_SESSION['error_message'])) {
    $error_message = $_SESSION['error_message'];
    unset($_SESSION['error_message']);
}


// Consulta para recuperar os animais do banco de dados
$sql = "SELECT * FROM visitas";
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
                            <i class="bx bxs-dog"></i>
                        </span>
                        <span class="navlink"> Cadastrar Animaos</span>
                    </a>
                </li>
                <li class="item">
                    <a href="./cadastarEspecie.php" class="nav_link">
                        <span class="navlink_icon">
                            <i class="bx bxs-dog"></i>
                        </span>
                        <span class="navlink"> Cadastrar Especie</span>
                    </a>
                </li>
                <li class="item">
                    <a href="./verAnimas.php" class="nav_link">
                        <span class="navlink_icon">
                            <i class="bx bxs-dog"></i>
                        </span>
                        <span class="navlink"> Ver Animais</span>
                    </a>
                </li>
                <li class="item">
                    <a href="./verEspecie.php" class="nav_link">
                        <span class="navlink_icon">
                            <i class="bx bxs-dog"></i>
                        </span>
                        <span class="navlink"> Ver Especie</span>
                    </a>
                </li>


            </ul>

            <ul class="menu_items">
                <div class="menu_title menu_editor"></div>
                <li class="item">
                    <a href="./visitante.php" class="nav_link">
                        <span class="navlink_icon">
                            <i class="bx bxs-user"></i>
                        </span>
                        <span class="navlink"> Visitantes</span>
                    </a>
                </li>
                <!-- End -->

                <li class="item">
                    <a href="./bilhetes.php" class="nav_link">
                        <span class="navlink_icon">
                            <i class='bx bxs-door-open'></i>
                        </span>
                        <span class="navlink">Reservas</span>
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
        <h1>Todos as Reservas</h1>
        <?php if (isset($error_message)) { ?>
            <h2 style="color: blue;"><b><?php echo $error_message; ?></b></h2>
        <?php } ?>
        <table border="1px" style="width: 1080px;">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nome </th>
                    <th>email </th>
                    <th>datahora </th>
                    <th>Pessoas </th>

                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                        echo '<td>' . $row["id"] . '</td>';
                        echo '<td>' . $row["nome"] . '</td>';
                        echo '<td>' . $row["email"] . '</td>';
                        echo '<td>' . $row["datahora"] . '</td>';
                        echo '<td>' . $row["pessoas"] . '</td>';
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