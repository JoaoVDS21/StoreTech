<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Cliente | StoreTech</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div class="nav-menu">
        <div class="logo">
            <img src="img/LogoMakr.png">
        </div>
        <div class="links-menu">
            <a href="index.php">Home</a>
            <a href="cadastro.php">Cadastros</a>
            <a href="listagem.php">Listagem</a>
            <a href="logout.php">Sair</a>
        </div>
        <div class="social-media">
            <div class="media">
                <img src="img/facebook.png">
            </div>
            <div class="media">
                <img src="img/mail.png">
            </div>
            <div class="media">
                <img src="img/insta.png">
            </div>
        </div>
    </div>
    <div class="background-bar">
        <h1 class="title-form">Cadastro de cliente</h1>
    </div>
    <div class="box-form">
        <form action="func_cadcliente.php" method="post">
            <div class="form-line">
                <label for="nome">Nome:</label>
                <input type="text" class="text-box" name="nome" id="nome">
            </div>
            <div class="form-line">
                <label for="endereco">Endereço:</label>
                <input type="text" class="text-box" name="endereco" id="endereco">
            </div>
            <div class="form-line">
                <label for="email">E-mail:</label>
                <input type="text" class="text-box" name="email" id="email">
            </div>
            <div class="box-btn">
                <button type="submit" class="btn">Cadastrar</button>
                <button type="reset" class="btn">Resetar</button>
            </div>
        </form>
    </div>
    <div class="sub-footer"></div>

</body>
</html>