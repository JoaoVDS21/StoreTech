<?php
    include "lib/config.php";

    $sqlproduto = $con->query("SELECT idproduto, categoria, nome FROM produto WHERE quantidade >= 1");
    $produtos = $sqlproduto->fetchAll(PDO::FETCH_OBJ);

    $sqlcliente = $con->query("SELECT nome FROM cliente");
    $clientes = $sqlcliente->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Compra | StoreTech</title>
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
        <h1 class="title-form">Cadastro de compra</h1>
    </div>
    <div class="box-form">
        <form action="func_cadcompra.php" method="POST">
            <div class="form-line" id="produto">
                <label for="produto">Produto</label>
                <select name="produto" id="produto" class="text-select">
                    <option value="">Selecione um Produto</option>
                    <?php
                        foreach ($produtos as $produto) {
                    ?>
                        <option value="<?php echo $produto->idproduto ?>,<?php echo $produto->categoria.' - '.$produto->nome?>">
                            <?php echo $produto->categoria.' - '.$produto->nome?>
                        </option>
                    <?php
                        }
                    ?>
                </select>
            </div>
            <div class="form-line" id="cliente">
                <label for="cliente">Cliente</label>
                <select name="cliente" id="cliente" class="text-select">
                    <option value="">Selecione um Cliente</option>
                    <?php
                        foreach ($clientes as $cliente) {
                    ?>
                        <option value="<?php echo $cliente->nome?>">
                            <?php echo $cliente->nome?>
                        </option>
                    <?php
                        }
                    ?>
                </select>
            </div>
            <div class="form-line" id="datacompra"><label for="datacompra">Data da compra</label>
                <input type="date" class="text-select-cal" name="datacompra" id="datacompra" min="<?php echo date('Y-m-d', time())?>">
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