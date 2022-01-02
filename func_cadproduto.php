<?php
    include "lib/config.php";

    foreach ($_POST as $indice => $valor) {
        $$indice = $valor;
    }

    $sql = $con->prepare("INSERT INTO produto VALUE(0,:nome,:categoria,:preco,:quantidade)");

    $sql->bindParam(':nome', $nome);
    $sql->bindParam(':categoria', $categoria);
    $sql->bindParam(':preco', $preco);
    $sql->bindParam(':quantidade', $quantidade);

    $sql->execute();
?>
<script>
    alert("Produto cadastrado com sucesso!");
</script>
<meta http-equiv="refresh" content="0; url=cadproduto.php">