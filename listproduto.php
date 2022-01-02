<?php
    include "lib/config.php";

    $sql = $con->query("SELECT * FROM produto");
    $produtos = $sql->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem | Produtos | StoreTech</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

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
        <h1 class="title-form">Listagem de produtos</h1>
    </div>
    <div class="box-table">
        <table class="table">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Nome</td>
                    <td>Categoria</td>
                    <td>Preço</td>
                    <td>Quantidade</td>
                    <td>Excluir</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($produtos as $produto) {
                ?>
                <tr>
                    <td><?php echo $produto->idproduto?></td>
                    <td><?php echo $produto->nome?></td>
                    <td><?php echo $produto->categoria?></td>
                    <td><?php echo 'R$'.$produto->preco?></td>
                    <?php
                        if ($produto->quantidade >=1){
                    ?>
                    <td><?php echo $produto->quantidade?></td>
                    <?php
                        } else {
                    ?>
                    <td>
                        <div class="alert-list">
                            <i class="fas fa-exclamation-triangle">Fora de estoque</i>
                        </div>
                    </td>
                    <?php
                        }
                    ?>
                    <td>
                        <a href="delproduto.php?id=<?php echo $produto->idproduto?>">
                            <i class="fas fa-ban"></i>
                        </a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    <div class="sub-footer"></div>
</body>
</html>