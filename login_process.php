<?php
include 'conexao.php'; // incluir o arquivo de conexão

$email = $_POST['email'];
$password = $_POST['password'];

// Verificar se o usuário existe no banco de dados
$sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Login bem-sucedido!";
    
} else {
    echo "Usuário ou senha incorretos.";
}

$conn->close();
?>

<html><a href='subpaginaNOTICIAS.php'>Voltar para página principal</a></html>
