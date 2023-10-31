<?php
session_start();
include '../../configs/database.php';
// Verifique se os cookies estão definidos
if (isset($_COOKIE['username']) && isset($_COOKIE['email'])) {
    $username = $_COOKIE['username'];
    $email = $_COOKIE['email'];
}
$sql = "SELECT * FROM animal";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZOOLÓGICO - <?php echo $username; ?></title>

    <link rel="stylesheet" type="text/css" href="../../assets/css/back.css">
    <link rel="stylesheet" href="../../assets/css/geral.css">
    <link rel="stylesheet" href="../../assets/css/MainStyle.css">
    <link rel="stylesheet" href="../../assets/css/fatima.css">
    <link rel="stylesheet" href="../../assets/css/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


</head>

<body>
    <div id="content">
        <!--=============== HEADER ===============-->
        <header class="header">
            <nav class="nav container">
                <div class="nav__data">
                    <a href="../pages/dashboard/index.php" class="nav__logo">
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
                        <li><a href="../pages/dashboard/index.php" class="nav__link">Home</a></li>
                        <li><a href="./dashboard/reserva.php" class="nav__link">Minhas Servas </a></li>

                        <li class="ative"><a href="../pages/info.php" class="nav__link ">Sobre</a></li>

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

        <section class="fatima22">
            <h1>Sobre</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi esse doloribus
                necessitatibus
                dolorum! Nisi doloremque quidem error voluptatem omnis consectetur sapiente iusto quas mollitia
                repellat. Harum ab laborum illum perferendis.
                locale_accept_from_httpl Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci
                quaerat dolore dolorem quia numquam temporibus consequatur beatae sapiente quis praesentium
                recusandae ea doloribus saepe, deleniti aliquid nobis aliquam ad veritatis?
                Sunt quas dolorum explicabo libero vero veniam eum nemo, ea enim amet doloribus aliquid illo
                necessitatibus? Corporis quidem sit cum, dolores repellendus repudiandae sapiente, quae
                blanditiis non maxime architecto expedita.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt quis reprehenderit sapiente
                distinctio unde vel veniam ducimus voluptatibus dolore aspernatur, quia nisi tempore, nam
                repudiandae error expedita et ea accusamus?</p>
        </section>
        <section class="fatima22">
            <h1>COntacto</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi esse doloribus
                necessitatibus
                dolorum! Nisi doloremque quidem error voluptatem omnis consectetur sapiente iusto quas mollitia
                repellat. Harum ab laborum illum perferendis.
                locale_accept_from_httpl Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci
                quaerat dolore dolorem quia numquam temporibus consequatur beatae sapiente quis praesentium
                recusandae ea doloribus saepe, deleniti aliquid nobis aliquam ad veritatis?
                Sunt quas dolorum explicabo libero vero veniam eum nemo, ea enim amet doloribus aliquid illo
                necessitatibus? Corporis quidem sit cum, dolores repellendus repudiandae sapiente, quae
                blanditiis non maxime architecto expedita.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt quis reprehenderit sapiente
                distinctio unde vel veniam ducimus voluptatibus dolore aspernatur, quia nisi tempore, nam
                repudiandae error expedita et ea accusamus?</p>
        </section>
    </div>
    <footer>
        <div class="rodape-container">
            <div class="informacoes-contato">
                <h3>Entre em Contato</h3>
                <p><strong>Endereço:</strong> Rua do Zoológico, 1234</p>
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
            &copy; 2023 Seu Zoológico. Todos os direitos reservados.
        </div>
    </footer>
    <script src="../../assets/js/fatima.js"></script>

    </div>
    <script src="../../assets/js/script.js"></script>
</body>

</html>