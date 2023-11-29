<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../estilos/lstyles.css">
</head>

<body>
    <div class="container">
        <div class="form">
            <form action="testlogin.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Login</h1>
                    </div>
                    <div class="start-button">
                        <a href="../../../web-ctft-back/docs/home.php">Início</a>
                    </div>
                </div>

                <div class="input-box">
                    <label for="email">EMail</label>
                    <input id="email" type="text" name="email" placeholder="Digite seu EMail" required>
                </div>

                <div class="input-box">
                    <label for="senha">Senha</label>
                    <input id="senha" type="password" name="senha" placeholder="Escreva sua senha" required>
                </div>

                <div class="submit">
                    <input type="submit" name="submit" value="ENTRAR">
                </div>
            </form>
        </div>
    </div>
</body>

</html>