<?php
session_start();
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Conexão com PostgreSQL usando PDO
    $dsn = "pgsql:host=ep-spring-butterfly-a5f6zfko-pooler.us-east-2.aws.neon.tech;dbname=neondb;sslmode=require";
    $user = 'neondb_owner';
    $password = 'npg_y3fzF1kdcTxM';

    try {
        $conexao = new PDO($dsn, $user, $password);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepara a consulta SQL
        $sql = "SELECT * FROM usuarios WHERE usuario = :usuario AND senha = :senha";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

        // Verifica se o usuário foi encontrado
        if ($stmt->rowCount() > 0) {
            $_SESSION['usuario'] = $usuario;
            header("Location: agenda.html");
            exit(); // Certifique-se de chamar exit após o redirecionamento
        } else {
            echo "Usuário ou senha incorretos!";
        }
    } catch (PDOException $e) {
        die("Erro na conexão com o banco de dados: " . $e->getMessage());
    }

    // Fecha a conexão
    $conexao = null;
}
?>
