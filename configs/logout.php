<?php
session_start();

// Destruir a sessão para fazer o logout
session_destroy();

// Apagar os cookies definidos anteriormente
setcookie('username', '', time() - 3600, '/');
setcookie('email', '', time() - 3600, '/');

// Redirecionar o usuário para a página de login
header('Location: ../index.php');
