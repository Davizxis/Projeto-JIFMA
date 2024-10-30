<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="css/styleCONTATO2.css">
</head>
<body>
    <style>
        body {
            background-image: url(IMG/IMGcontato.png);
            background-repeat: no-repeat;
            background-position: right 0;
            background-size: cover;
        }
    </style>
    <div class="main-login">
        <div class="left-login"> 
            <h1>Precisa de ajuda?<br>Entre em Contato</h1>
            <img src="IMG/logodosite.png" alt="logo" width="400px">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>Entre em Contato</h1>
                <form action="conexao.php" method="POST">
                    <div class="textfield">
                        <label for="nome">Nome completo</label>
                        <input class="input" type="text" id="nome" name="nome" required autocomplete="off">
                    </div>
                    <div class="textfield">
                        <label for="email">E-mail</label>
                        <input class="input" type="text" id="email" name="email" required autocomplete="off">
                    </div>
                    <div class="textfield">
                        <label for="telefone">Telefone</label>
                        <input class="input" type="text" id="telefone" name="telefone" required autocomplete="off">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input class="input" type="password" id="senha" name="senha" required autocomplete="off">
                    </div>
                    <button class="button-login" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
