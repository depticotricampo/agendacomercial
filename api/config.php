<?php
$servername = "ep-spring-butterfly-a5f6zfko-pooler.us-east-2.aws.neon.tech";
$username = "neondb_owner"; // seu nome de usuário do MySQL
$password = "npg_y3fzF1kdcTxM"; // sua senha do MySQL
$dbname = "neondb"; // nome do seu banco de dados

// Cria a conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica a conexão
if (!$conn) {
    die("failed: " . mysqli_connect_error());
}
?>
