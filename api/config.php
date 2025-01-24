<?php

$host = $_ENV['PG_HOST'];
$port = $_ENV['PG_PORT'];
$db = $_ENV['PG_DB'];
$user = $_ENV['PG_USER'];
$password = $_ENV['PG_PASSWORD'];

$dsn = "pgsql:host=$host;port=$port;dbname=$db;sslmode=require";

try {
    $conexao = new PDO($dsn, $user, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}

// Não se esqueça de fechar a conexão quando terminar
// $conexao = null;
?>
