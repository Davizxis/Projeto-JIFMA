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
        <div class="form-container sing-up">

        <form action="registro_process.php" method="POST">
            <img src="IMG/logodosite.png" alt="logo do site" width="115px">
                <h1>Criar Conta</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                </div>
                <span>Registre um e-mail!</span>
                <input type="text" name="nome" placeholder="name">
                <input type="e-mail" name="email" placeholder="email">
                <input type="password" name="senha" placeholder="senha">
                <button type="submit">Enviar</button>
            </form>
        </div>
        <div class="form-container sing-in">
       
        <form action="login_process.php" method="POST">
    <img src="IMG/logodosite.png" alt="logo do site" width="115px">
    <h1>Fazer Login</h1>
    <div class="social-icons">
        <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
    </div>
    <span>Use um e-mail já registrado!</span>
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Senha">
    <a href="#">Esqueceu sua senha?</a>
    <button type="submit">Fazer Login</button>
</form>

        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bem vindo ao JIFMA!</h1>
                    <p>insira seus dados pessoais para usar todos os recursos do site.</p>
                    <button class="hidden" id="login">Fazer Login</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Olá, Amigo(a)!</h1>
                    <p>Registre seus dados pessoais para usar todos os recursos do site.</p>
                    <button class="hidden" id="register">Criar Conta</button>
                </div>
            </div>
        </div>
    </div>
    <script src="JS/script.js"></script>
</body>
</html>