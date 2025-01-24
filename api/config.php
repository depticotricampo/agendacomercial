<?php
// Configuração da conexão com o banco de dados PostgreSQL
$dsn = "pgsql:host=ep-spring-butterfly-a5f6zfko-pooler.us-east-2.aws.neon.tech;dbname=neondb;sslmode=require";
$username = "neondb_owner";
$password = "npg_y3fzF1kdcTxM";

try {
    // Tenta estabelecer a conexão
    $conexao = new PDO($dsn, $username, $password);
    // Define o modo de erro do PDO para exceção
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}

// Não se esqueça de fechar a conexão quando terminar
// $conexao = null;
?>
