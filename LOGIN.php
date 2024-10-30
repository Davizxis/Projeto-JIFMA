<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Verifica se o formulário de login foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta para verificar o usuário
    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verifica a senha (supondo que a senha esteja hashada)
        if (password_verify($senha, $row['senha'])) {
            echo "Login bem-sucedido! Bem-vindo, " . htmlspecialchars($row['nome']);
            // Aqui você pode redirecionar para a página principal
            header("Location: paginaPRINCIPAL.php");
            exit();
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/styleLOGIN1.css">
    <title>Moder Login Page</title>
</head>
<body>
    <style>
        body{
            background-image: url(IMG/imgLOGIN.png);
            background-repeat: no-repeat;
            background-position: right 0;
            background-size: cover;
        }
    </style>
    <div class="container" id="container">
        <!-- O restante do seu código HTML vai aqui -->
    </div>
    <script src="JS/script.js"></script>
</body>
</html>
