<?php
    include "lib/config.php";

    $sql = $con->query("SELECT * FROM compra");
    $compras = $sql->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem | Compras | StoreTech</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <style>
        .btn-red{
            background: red;
            color: white;
            padding: 6px 10px;
            border-radius: 3px;
        }
        .btn-green{
            background: green;
            color: white;
            padding: 6px 10px;  
            border-radius: 3px;
        }
    </style>

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
        <h1 class="title-form">Listagem de compras</h1>
    </div>
    <div class="box-table">
        <table class="table">
            <thead>
                <tr>
                    <td scope="col">#</td>
                    <td scope="col">Cliente</td>
                    <td scope="col">Produto</td>
                    <td scope="col">Data da Compra</td>
                    <td scope="col">Pago</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($compras as $compra) {
                ?>
                <tr>
                    <td><?php echo $compra->idcompra?></td>
                    <td><?php echo $compra->nome_cliente?></td>
                    <td><?php echo $compra->nome_produto?></td>
                    <td><?php echo date('d/m/Y', strtotime($compra->datacompra))?></td>
                    <?php
                        if ($compra->pago == 0){
                    ?>
                    <td>
                        <a href="pago.php?id=<?php echo $compra->idcompra?>" class="btn-red">
                            <i class="fas fa-money-bill"></i>
                        </a>
                    </td>
                    <?php
                        } else {
                    ?>
                    <td>
                        <a href="#" class="btn-green">
                            <i class="fas fa-money-bill"></i>
                        </a>
                    </td>
                    <?php
                        }
                    ?>
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