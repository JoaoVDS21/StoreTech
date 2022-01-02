<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Produto | StoreTech</title>
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
        <h1 class="title-form">Cadastro de produto</h1>
    </div>
    <div class="box-form">
        <form action="func_cadproduto.php" method="post">
            <div class="form-line">
                <label for="nome">Nome:</label>
                <input type="text" class="text-box" name="nome" id="nome" placeholder="Headphone AKG - K414P">
            </div>
            <div class="form-line">
                <label for="categoria">Categoria:</label>
                <input type="text" class="text-box" name="categoria" id="categoria" placeholder="Fone de Ouvido">
            </div>
            <div class="form-line">
                <label for="preco">Preço:</label>
                <input type="number" class="text-box" name="preco" id="preco" step="0.01">
            </div>
            <div class="form-line">
                <label for="quantidade">Quantidade:</label>
                <input type="number" class="text-box" name="quantidade" id="quantidade" min="1" step="1">
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