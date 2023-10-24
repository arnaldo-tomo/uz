<?php
session_start();

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
    <title>ZOOLÓGICO - <?php echo $username; ?></title>

    <link rel="stylesheet" type="text/css" href="../../../assets/css/back.css">
    <link rel="stylesheet" href="../../../assets/css/geral.css">
    <link rel="stylesheet" href="../../../assets/css/MainStyle.css">
    <link rel="stylesheet" href="../../../assets/css/fatima.css">
    <link rel="stylesheet" href="../../../assets/css/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        footer {
            background-color: #e2c044 color: #fff;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div id="content">
        <!--=============== HEADER ===============-->
        <header class="header">
            <nav class="nav container">
                <div class="nav__data">
                    <a href="#" class="nav__logo">
                        <i class="ri-planet-line"></i> GOrongosa
                    </a>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line nav__burger"></i>
                        <i class="ri-close-line nav__close"></i>
                    </div>
                </div>

                <!--=============== NAV MENU ===============-->
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li><a href="#" class="nav__link">Home</a></li>

                        <li><a href="#" class="nav__link">Sobre</a></li>

                        <!--=============== DROPDOWN 1 ===============-->
                        <li class="dropdown__item">
                            <div class="nav__link">
                                Grupos <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                            </div>

                            <ul class="dropdown__menu">
                                <li>
                                    <a href="#" class="dropdown__link">
                                        <i class="ri-pie-chart-line"></i> Mamíferos
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="dropdown__link">
                                        <i class="ri-arrow-up-down-line"></i> Mamíferos
                                    </a>
                                </li>

                                <!--=============== DROPDOWN SUBMENU ===============-->
                                <li class="dropdown__subitem">
                                    <div class="dropdown__link">
                                        <i class="ri-bar-chart-line"></i> Aves <i class="ri-add-line dropdown__add"></i>
                                    </div>

                                    <ul class="dropdown__submenu">
                                        <li>
                                            <a href="#" class="dropdown__sublink">
                                                <i class="ri-file-list-line"></i> Aves colocar nome
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="dropdown__sublink">
                                                <i class="ri-cash-line"></i> Outro nome
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="dropdown__sublink">
                                                <i class="ri-refund-2-line"></i> aqui tamben
                                            </a>
                                        </li>
                                    </ul>
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
                                    <a href="../../../configs/logout.php" class="dropdown__link">
                                        <i class="ri-message-3-line"></i> Log Out
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

        <!--=============== MAIN JS ===============-->
        <!-- <header>
            <h1>Zoológico Local</h1>
        </header>
        <nav id="menu-geral">
            <ul id="menu-geral-w">
                <li><a href="info.html">Informação Geral</a></li>
                <li>
                    <a href="#grupos">Grupos</a>
                    <ul class="submenu">
                        <li><a href="Mamiferos.Html">Mamíferos</a></li>
                        <li><a href="repteis.html">Répteis</a></li>
                        <li><a href="aves.html">Aves</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Fale conosco</a></li>
            </ul>
        </nav> -->


        <form action="pagina-de-resultado.html" method="get">
            <!-- <input type="text" id="pesquisa" name="q" placeholder="Pesquisar..." autofocus> -->
            <!-- <input type="submit" value="Pesquisar"> -->
            <section class="fatima22">
                <h1>Todos os Animas</h1>
            </section>

            <section class="informacao-geral">
                <div class="conteudo1">
                    <h2>Informação Geral do Zoológico</h2>
                    <p><strong>Horário de Funcionamento:</strong> Segunda a Domingo, das 9:00 às 18:00</p>
                    <p><strong>Preço de Ingresso:</strong> $20 (adultos), $10 (crianças de 3 a 12 anos)</p>
                    <p><strong>Serviços Oferecidos:</strong> Alimentação, Passeios Guiados, Lojas de Lembranças</p>
                    <p><strong>Endereço:</strong> 123 Rua do Zoológico, Cidade da Beira</p>
                    <p><strong>Telefone:</strong> (+258)844604568</p>
                    <p><strong>Diretor:</strong> Nome do Diretor</p>
                    <p><strong>Email para Contato:</strong> josesixpence30@gmail.com</p>
                    <p><strong>Número de Visitantes por Ano:</strong> Cerca de 500.000</p>
                </div>
            </section>
            <main>
                <section class="cards">
                    <div class="card">
                        <div class="card__image-container">
                            <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1200&q=80" />
                        </div>
                        <div class="card__content">
                            <p class="card__title text--medium">
                                colocar sua descricao aqui
                            </p>
                            <div class="card__info">
                                <p class="text--medium">texto</p>
                                <p class="card__price text--medium">outro aki</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__image-container">
                            <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1200&q=80" />
                        </div>
                        <div class="card__content">
                            <p class="card__title text--medium">
                                colocar sua descricao aqui
                            </p>
                            <div class="card__info">
                                <p class="text--medium">texto</p>
                                <p class="card__price text--medium">outro aki</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__image-container">
                            <img src="https://images.unsplash.com/photo-1473283147055-e39c51463929?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1200&q=80" />
                        </div>
                        <div class="card__content">
                            <p class="card__title text--medium">
                                colocar sua descricao aqui
                            </p>
                            <div class="card__info">
                                <p class="text--medium">texto</p>
                                <p class="card__price text--medium">outro aki</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__image-container">
                            <img src="https://images.unsplash.com/photo-1482784160316-6eb046863ece?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1200&q=80" />
                        </div>
                        <div class="card__content">
                            <p class="card__title text--medium">
                                colocar sua descricao aqui
                            </p>
                            <div class="card__info">
                                <p class="text--medium">texto</p>
                                <p class="card__price text--medium">outro aki</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__image-container">
                            <img src="https://images.unsplash.com/photo-1470104240373-bc1812eddc9f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1200&q=80" />
                        </div>
                        <div class="card__content">
                            <p class="card__title text--medium">
                                colocar sua descricao aqui
                            </p>
                            <div class="card__info">
                                <p class="text--medium">texto</p>
                                <p class="card__price text--medium">outro aki</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__image-container">
                            <img src="https://images.unsplash.com/photo-1486870591958-9b9d0d1dda99?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1200&q=80" />
                        </div>
                        <div class="card__content">
                            <p class="card__title text--medium">
                                colocar sua descricao aqui
                            </p>
                            <div class="card__info">
                                <p class="text--medium">texto</p>
                                <p class="card__price text--medium">outro aki</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__image-container">
                            <img src="https://images.unsplash.com/photo-1534143046043-44af3469836b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1200&q=80" />
                        </div>
                        <div class="card__content">
                            <p class="card__title text--medium">
                                colocar sua descricao aqui
                            </p>
                            <div class="card__info">
                                <p class="text--medium">texto</p>
                                <p class="card__price text--medium">outro aki</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__image-container">
                            <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1200&q=80" />
                        </div>
                        <div class="card__content">
                            <p class="card__title text--medium">
                                colocar sua descricao aqui
                            </p>
                            <div class="card__info">
                                <p class="text--medium">texto</p>
                                <p class="card__price text--medium">outro aki</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__image-container">
                            <img src="https://images.unsplash.com/photo-1465056836041-7f43ac27dcb5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1200&q=80" />
                        </div>
                        <div class="card__content">
                            <p class="card__title text--medium">
                                colocar sua descricao aqui
                            </p>
                            <div class="card__info">
                                <p class="text--medium">texto</p>
                                <p class="card__price text--medium">outro aki</p>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <script>
                !(function() {
                    var analytics = (window.analytics = window.analytics || []);
                    if (!analytics.initialize)
                        if (analytics.invoked)
                            window.console &&
                            console.error &&
                            console.error("Segment snippet included twice.");
                        else {
                            analytics.invoked = !0;
                            analytics.methods = [
                                "trackSubmit",
                                "trackClick",
                                "trackLink",
                                "trackForm",
                                "pageview",
                                "identify",
                                "reset",
                                "group",
                                "track",
                                "ready",
                                "alias",
                                "debug",
                                "page",
                                "once",
                                "off",
                                "on"
                            ];
                            analytics.factory = function(t) {
                                return function() {
                                    var e = Array.prototype.slice.call(arguments);
                                    e.unshift(t);
                                    analytics.push(e);
                                    return analytics;
                                };
                            };
                            for (var t = 0; t < analytics.methods.length; t++) {
                                var e = analytics.methods[t];
                                analytics[e] = analytics.factory(e);
                            }
                            analytics.load = function(t, e) {
                                var n = document.createElement("script");
                                n.type = "text/javascript";
                                n.async = !0;
                                n.src =
                                    "https://cdn.segment.com/analytics.js/v1/" +
                                    t +
                                    "/analytics.min.js";
                                var a = document.getElementsByTagName("script")[0];
                                a.parentNode.insertBefore(n, a);
                                analytics._loadOptions = e;
                            };
                            analytics.SNIPPET_VERSION = "4.1.0";
                            analytics.load("FQ5NJmRc6LrFKVAC6ofHlSU7WIwGAdj5");
                            analytics.page();
                        }
                })();
            </script>
        </form>
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
    <script src="../../../assets/js/fatima.js"></script>

    </div>
    <script src="../../../assets/js/script.js"></script>
</body>

</html>