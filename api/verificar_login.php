<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo "Login bem-sucedido! Bem-vindo, " . htmlspecialchars($usuario_db['usuario']) . "!";
    header("Location: ./api/login.php");v
    exit();
}
?>