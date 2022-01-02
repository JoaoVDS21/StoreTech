<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logar | Usuário</title>
    <link rel="stylesheet" href="css/style-log.css">
</head>
<body>
    <div class="background-bar">
        <div class="box-form">
            <div class="bar-form"><img src="img/user.png" alt=""></div>
            <form action="controles/usuario/logar.php" method="POST">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha">
                <div class="boxbtn">
                    <button type="submit" class="btn-form">Entrar</button>
                    <button type="reset" class="btn-form">Limpar</button>
                    <p>Não tem? <a href="cadastrar.php">Cadastre-se</a></p>
                </div>    
            </form>
        </div>
    </div>
</body>
</html>