<?php
session_start();

// Verifique se os cookies estão definidos
if (isset($_COOKIE['root'])) {
    $root = $_COOKIE['root'];
} else {
    $_SESSION['error_message'] = "Voce nao esta autenticado.";
    // Os cookies não estão definidos, redirecione para a página de login
    header('Location: ../index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/styles.css">

    <title>ADMIN</title>
</head>

<body>
    <!--=============== HEADER ===============-->
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

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li><a href="#" class="nav__link">Home</a></li>


                    <li><a href="#" class="nav__link">Gruppo</a></li>
                    <li><a href="#" class="nav__link">Animais</a></li>

                    <!--=============== DROPDOWN 2 ===============-->
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

    <!DOCTYPE html>
    <html lang="en" dir="ltr">

    <head>
        <meta charset="UTF-8">
        <title> Responsive Sidebar Menu | Code4education </title>
        <link rel="stylesheet" href="style.css">
        <!-- Boxicons CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="sidebar">
            <div class="logo_content">
                <div class="logo">
                    <div class="logo_name">Code4education</div>
                </div>
                <i class='bx bx-menu' id="btn"></i>
            </div>
            <ul class="nav_list">
                <li>
                    <i class='bx bx-search'></i>
                    <input type="text" placeholder="Search...">
                    <span class="tooltip">Search</span>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-grid-alt'></i>
                        <span class="links_name">Dashboard</span>
                    </a>
                    <span class="tooltip">Dashboard</span>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-user'></i>
                        <span class="links_name">User</span>
                    </a>
                    <span class="tooltip">User</span>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-chat'></i>
                        <span class="links_name">Messages</span>
                    </a>
                    <span class="tooltip">Messages</span>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-pie-chart-alt-2'></i>
                        <span class="links_name">Analytics</span>
                    </a>
                    <span class="tooltip">Analytics</span>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-folder'></i>
                        <span class="links_name">File Manager</span>
                    </a>
                    <span class="tooltip">File Manager</span>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-cart-alt'></i>
                        <span class="links_name">Order</span>
                    </a>
                    <span class="tooltip">Order</span>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-heart'></i>
                        <span class="links_name">Saved</span>
                    </a>
                    <span class="tooltip">Saved</span>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-cog'></i>
                        <span class="links_name">Setting</span>
                    </a>
                    <span class="tooltip">Setting</span>
                </li>
            </ul>
            <div class="content">
                <div class="user">
                    <div class="user_details">
                        <img decoding="async" src="images/profile.jpg" alt="">
                        <div class="name_job">
                            <div class="name">Bhaskar Gupta</div>
                            <div class="job">Web Designer</div>
                        </div>
                    </div>
                    <i class='bx bx-log-out' id="log_out"></i>
                </div>
            </div>
        </div>
        <div class="home_content">
            <div class="text">Dashboard</div>
            <p>Nullam vulputate ultrices tellus et bibendum. Integer iaculis pharetra ligula, eget condimentum nunc
                malesuada nec. Nullam eu lorem sed tellus condimentum aliquam in in eros. Maecenas sagittis, justo quis
                blandit aliquet, sem felis interdum elit, ac dictum purus mauris nec mauris. In hac habitasse platea
                dictumst. Morbi placerat nec lorem in feugiat. In tristique laoreet diam, vel vulputate mi placerat id.
                Vivamus at quam rutrum, finibus tortor laoreet, venenatis sem. Nam vitae libero ultrices, tristique
                ligula non, sagittis elit. Vestibulum sed turpis nec eros convallis viverra. Maecenas nunc arcu,
                pharetra bibendum feugiat ut, consequat quis massa. Vivamus aliquet eros a efficitur fringilla. Aenean
                auctor ut mi ut vestibulum. Suspendisse a turpis id nisi faucibus efficitur. Sed ipsum urna, ultricies
                eget justo vitae, hendrerit malesuada mauris. Donec a turpis malesuada, euismod massa id, ultrices ex.
            </p>
            <p>Nullam vulputate ultrices tellus et bibendum. Integer iaculis pharetra ligula, eget condimentum nunc
                malesuada nec. Nullam eu lorem sed tellus condimentum aliquam in in eros. Maecenas sagittis, justo quis
                blandit aliquet, sem felis interdum elit, ac dictum purus mauris nec mauris. In hac habitasse platea
                dictumst. Morbi placerat nec lorem in feugiat. In tristique laoreet diam, vel vulputate mi placerat id.
                Vivamus at quam rutrum, finibus tortor laoreet, venenatis sem. Nam vitae libero ultrices, tristique
                ligula non, sagittis elit. Vestibulum sed turpis nec eros convallis viverra. Maecenas nunc arcu,
                pharetra bibendum feugiat ut, consequat quis massa. Vivamus aliquet eros a efficitur fringilla. Aenean
                auctor ut mi ut vestibulum. Suspendisse a turpis id nisi faucibus efficitur. Sed ipsum urna, ultricies
                eget justo vitae, hendrerit malesuada mauris. Donec a turpis malesuada, euismod massa id, ultrices ex.
            </p>
            <p>Nullam vulputate ultrices tellus et bibendum. Integer iaculis pharetra ligula, eget condimentum nunc
                malesuada nec. Nullam eu lorem sed tellus condimentum aliquam in in eros. Maecenas sagittis, justo quis
                blandit aliquet, sem felis interdum elit, ac dictum purus mauris nec mauris. In hac habitasse platea
                dictumst. Morbi placerat nec lorem in feugiat. In tristique laoreet diam, vel vulputate mi placerat id.
                Vivamus at quam rutrum, finibus tortor laoreet, venenatis sem. Nam vitae libero ultrices, tristique
                ligula non, sagittis elit. Vestibulum sed turpis nec eros convallis viverra. Maecenas nunc arcu,
                pharetra bibendum feugiat ut, consequat quis massa. Vivamus aliquet eros a efficitur fringilla. Aenean
                auctor ut mi ut vestibulum. Suspendisse a turpis id nisi faucibus efficitur. Sed ipsum urna, ultricies
                eget justo vitae, hendrerit malesuada mauris. Donec a turpis malesuada, euismod massa id, ultrices ex.
            </p>
            <p>Nullam vulputate ultrices tellus et bibendum. Integer iaculis pharetra ligula, eget condimentum nunc
                malesuada nec. Nullam eu lorem sed tellus condimentum aliquam in in eros. Maecenas sagittis, justo quis
                blandit aliquet, sem felis interdum elit, ac dictum purus mauris nec mauris. In hac habitasse platea
                dictumst. Morbi placerat nec lorem in feugiat. In tristique laoreet diam, vel vulputate mi placerat id.
                Vivamus at quam rutrum, finibus tortor laoreet, venenatis sem. Nam vitae libero ultrices, tristique
                ligula non, sagittis elit. Vestibulum sed turpis nec eros convallis viverra. Maecenas nunc arcu,
                pharetra bibendum feugiat ut, consequat quis massa. Vivamus aliquet eros a efficitur fringilla. Aenean
                auctor ut mi ut vestibulum. Suspendisse a turpis id nisi faucibus efficitur. Sed ipsum urna, ultricies
                eget justo vitae, hendrerit malesuada mauris. Donec a turpis malesuada, euismod massa id, ultrices ex.
            </p>
        </div>

        <script src="main.js"></script>
    </body>

    </html>


    <!--=============== MAIN JS ===============-->
    <script src="../assets/js/main.js"></script>
</body>

</html>