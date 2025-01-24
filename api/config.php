<?php
<?php
// Configuração da conexão com o banco de dados PostgreSQL
$host = 'ep-spring-butterfly-a5f6zfko-pooler.us-east-2.aws.neon.tech';
$database = 'neondb';
$user = 'neondb_owner';
$password = 'npg_y3fzF1kdcTxM';

// Monta a string de conexão
$conn_string = "host=$host dbname=$database user=$user password=$password sslmode=require";

// Tenta estabelecer a conexão
$conexao = pg_connect($conn_string);

// Verifica se a conexão foi bem-sucedida
if (!$conexao) {
    die("Erro na conexão: " . pg_last_error());
}

echo "Conexão bem-sucedida!";

// Não se esqueça de fechar a conexão quando terminar
// pg_close($conexao);
?>
?>

