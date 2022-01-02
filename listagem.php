<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem | StoreTech</title>
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
            <?php 
                session_start();
                if (isset($_SESSION["idusuario"])) {
                    ?>
                        <a href="logout.php">Sair</a>
                    <?php
                }
            ?>
            
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
        <h1 class="title-float">Listagem</h1>
    </div>
    <div class="box-cards-two">
        <a href="listcliente.php" class="card-button">Clientes</a>
        <a href="listproduto.php" class="card-button">Produtos</a>
        <a href="listcompra.php" class="card-button">Compras</a>
    </div>
    <div class="footer"></div>
    <div class="sub-footer"></div>
</body>
</html>