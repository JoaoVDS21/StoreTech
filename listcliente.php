<?php
    include "lib/config.php";

    $sql = $con->query("SELECT * FROM cliente");
    $clientes = $sql->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem | Clientes | StoreTech</title>
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
        <h1 class="title-form">Listagem de clientes</h1>
    </div>
    <div class="box-table">
        <table class="table">
            <thead>
                <tr>
                    <td scope="col">#</td>
                    <td scope="col">Nome</td>
                    <td scope="col">Endereço</td>
                    <td scope="col">E-mail</td>
                    <td scope="col">Excluir</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($clientes as $cliente) {
                ?>
                <tr>
                    <td><?php echo $cliente->idcliente?></td>
                    <td><?php echo $cliente->nome?></td>
                    <td><?php echo $cliente->endereco?></td>
                    <td><?php echo $cliente->email?></td>
                    <td>
                        <a href="delcliente.php?id=<?php echo $cliente->idcliente?>" class="btn-lista">
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