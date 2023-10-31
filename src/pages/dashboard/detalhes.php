<?php
session_start();
include '../../../configs/database.php';
// Verifique se os cookies estão definidos
if (isset($_COOKIE['username']) && isset($_COOKIE['email'])) {
    $username = $_COOKIE['username'];
    $email = $_COOKIE['email'];
} else {
    $_SESSION['error_message'] = "Voce nao esta autenticado.";
    // Os cookies não estão definidos, redirecione para a página de login
    header('Location: ../../../index.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZOOlandia - <?php echo $username; ?></title>

    <link rel="stylesheet" type="text/css" href="../../../assets/css/back.css">
    <link rel="stylesheet" href="../../../assets/css/geral.css">
    <link rel="stylesheet" href="../../../assets/css/MainStyle.css">
    <link rel="stylesheet" href="../../../assets/css/fatima.css">
    <link rel="stylesheet" href="../../../assets/css/menu.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <style>
        .lado {

            padding: 20px;
            background-color: var(--white-color);
            height: 400px;
            width: 580px;
            border-radius: 10px;
            display: inline-block;
            margin-right: 30px;
            margin-top: 10px;
        }

        .lado1 {

            padding: 20px;
            background-color: var(--white-color);
            height: 300px;
            width: 1200px;
            border-radius: 10px;
            display: inline-block;
            margin-right: 30px;
            margin-top: 10px;
        }

        .faty {
            flex-direction: row;
            margin-top: 7%;
            margin-left: 1%;
            margin-left: 100px;
            margin-bottom: 20px;

        }
    </style>
</head>

<body>
    <div id="content">
        <!--=============== HEADER ===============-->
        <header class="header">
            <nav class="nav container">
                <div class="nav__data">
                    <a href="./index.php" class="nav__logo">
                        <i class="ri-planet-line"></i> ZOOlandia
                    </a>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line nav__burger"></i>
                        <i class="ri-close-line nav__close"></i>
                    </div>
                </div>

                <!--=============== NAV MENU ===============-->
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li><a href="./index.php" class="nav__link">Home</a></li>

                        <li class="ative"><a href="../info.php" class="nav__link ">Sobre</a></li>

                        <!--=============== DROPDOWN 1 ===============-->
                        <li class="dropdown__item">
                            <div class="nav__link">
                                Grupos <i class="ri-arrow-down-s-line dropdown__arrow"> </i>
                            </div>

                            <ul class="dropdown__menu">
                                <li>
                                    <a href="grupos.php" class="dropdown__link">
                                        Todos os Grupos
                                    </a>
                                </li>
                                <li>
                                    <a href="grupo/Mamiferos.php" class="dropdown__link">
                                        Mamíferos
                                    </a>
                                </li>

                                <li>
                                    <a href="grupo/repteis.php" class="dropdown__link">
                                        Repteis
                                    </a>
                                </li>


                            </ul>
                        </li>


                        <!--=============== DROPDOWN 2 ===============-->
                        <li class="dropdown__item">
                            <div class="nav__link">
                                Ola, <?php echo $username; ?> <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                            </div>

                            <ul class="dropdown__menu">
                                <li>
                                    <a href="#" class="dropdown__link">
                                        <i class="ri-user-line"></i> <?php echo $email; ?>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="dropdown__link">
                                        <i class="ri-lock-line"></i> Configuração
                                    </a>
                                </li>

                                <li>
                                    <a href="../../configs/logout.php" class="dropdown__link">
                                        <i class="ri-message-3-line"></i> Log Out
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>



        <section class="faty">
            <h1>Detalhes</h1>
            <?php
            // Verifique se o ID do animal a ser editado foi passado na URL
            if (isset($_GET['id'])) {
                $animal_id = $_GET['id'];



                // Recupere os dados do animal
                $sql = "SELECT * FROM animal WHERE id = $animal_id";
                $result = $conn->query($sql);

                if ($result->num_rows == 1) {
                    $row = $result->fetch_assoc();
            ?>

                    <div class="lado">
                        <img width="540px" src="../../../admin/controllers/uploads/<?php echo $row["foto"]; ?>">
                    </div>
                    <div class="lado">
                        <img width="540px" src="../../../admin/controllers/uploads/<?php echo $row["foto"]; ?>">
                    </div>
                    <div class="lado1">

                        <h2>Nome:<?php echo  $row["nome"]; ?></h2>
                        <br>
                        <p>Descricao:<?php echo  $row["descricao"]; ?></p>
                        <br>
                        <p> Sexo:<?php echo  $row["sexo"]; ?></p>
                        <p>Especie:<?php echo  $row["especie"]; ?></p>
                    </div>

            <?php
                } else {
                    echo "Animal não encontrado.";
                }
            } else {
                echo "ID do animal não especificado.";
            }
            ?>
        </section>
    </div>
    <footer>
        <div class="rodape-container">
            <div class="informacoes-contato">
                <h3>Entre em Contato</h3>
                <p><strong>Endereço:</strong> Rua do ZOOlandia, 1234</p>
                <p><strong>Telefone:</strong> (123) 456-7890</p>
                <p><strong>E-mail:</strong> contato@seuzoo.com</p>
            </div>
            <div class="redes-sociais">
                <h3>Redes Sociais</h3>
                <a href="https://twitter.com/seu-usuario-do-twitter" class="social-icon">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.instagram.com/seu-usuario-do-instagram/" class="social-iconi">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.facebook.com/sua-pagina-do-facebook" class="social-iconf">
                    <i class="fab fa-facebook"></i>
                </a>
            </div>
        </div>
        <div class="direitos-autorais">
            &copy; 2023 ZOOlandia. Todos os direitos reservados.
        </div>
    </footer>
    <script src="../../assets/js/fatima.js"></script>

    </div>
    <script src="../../assets/js/script.js"></script>
</body>

</html>