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

    <?php
    include '../../configs/database.php';
    // Verifique se o ID do animal a ser editado foi passado na URL
    if (isset($_GET['id'])) {
        $animal_id = $_GET['id'];



        // Recupere os dados do animal
        $sql = "SELECT * FROM animal WHERE id = $animal_id";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();

            // Aqui você pode criar um formulário HTML preenchido com os dados do animal para permitir a edição.
            // Por exemplo:
            echo ' <form method="post" action="../controllers/animalsalvar.php" enctype="multipart/form-data">';
            echo '<div class="animas">';
            echo ' <h1>Ediatr Animas</h1>';
            echo '<div class="inputs">  <label class="label">nome</label> <br />   <input type="text" name="nome" class="inpt" value="' . $row["nome"] . '" required></div>';
            echo '<div class="inputs">  <label class="label">FotoGrafia</label>  <br />  <input type="file" name="foto" class="inpt" required> </div>';
            echo '
               <div class="inputs">
        <label class="label">sexo</label>
        <br />
        <select class="inpt" name="sexo" value="' . $row["sexo"] . '" required>
            <option selected disabled>- Selecione o sexo do animal-</option>
            <option value="M">Macho</option>
            <option value="F">Femia</option>
        </select>
    </div>
            ';
            echo '
                <div class="inputs">
        <label class="label">Espécie</label>
        <br />
        <select class="inpt" name="especie" value="' . $row["especie"] . '" required>
            <option selected disabled>- Selecione a espécie de animal:-</option>
            <option value="cachorro">Cachorro</option>
            <option value="gato">Gato</option>
            <option value="coelho">Coelho</option>
            <option value="pássaro">Pássaro</option>
            <option value="peixe">Peixe</option>
        </select>
    </div>
            ';
            echo '  <label class="label">Descricao</label><br>';
            echo ' <textarea class="ttrea" rows="5" name="descricao">' . $row["descricao"] . '</textarea><br>';
            // Outros campos do animal
            echo '<input type="hidden" name="id" value="' . $animal_id . '">';
            echo '<div class="inputs">  <button class="btn" type="submit">Cadastrar</button>   </div>';
            echo '</form>';
        } else {
            echo "Animal não encontrado.";
        }
    } else {
        echo "ID do animal não especificado.";
    }
    ?>

    <script src="../assets/js/main.js"></script>
</body>