<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar | Novo usuário</title>
    <link rel="stylesheet" href="css/style-cad.css">
</head>
<body>
    <div class="background-bar">
        <div class="box-form">
            <div class="bar-form"><img src="img/user.png" alt=""></div>
            <form action="controles/usuario/cadastrar.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha">
                <label for="repsenha">Repetir senha:</label>
                <input type="password" name="repsenha" id="repsenha">
                <div class="boxbtn">
                    <button type="submit" class="btn-form">Cadastrar</button>
                    <button type="reset" class="btn-form">Limpar</button>
                    <p>Já tem? <a href="login.php">Logue-se</a></p>
                </div>    
            </form>
        </div>
    </div>
</body>
</html>