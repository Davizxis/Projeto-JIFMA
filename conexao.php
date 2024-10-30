<?php
// Informações de conexão
$servername = "localhost"; // nome do servidor
$username = "root"; // nome de usuário
$password = ""; // senha do usuário
$dbname = "jifma"; // nome do banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
echo "Conexão bem-sucedida";
?>
