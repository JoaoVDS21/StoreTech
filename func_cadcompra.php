<?php
    include "lib/config.php";

    foreach ($_POST as $indice => $valor) {
        $$indice = $valor;
    }

    $produto = explode(',', $produto);
    $idproduto = $produto[0];
    $nomeProduto = $produto[1];

    $insert = $con->prepare("INSERT INTO compra VALUES(0, :nomeCliente, :nomeProduto, :datacompra, 0)");
    $insert->bindParam(':nomeCliente', $cliente);
    $insert->bindParam(':nomeProduto', $nomeProduto);
    $insert->bindParam(':datacompra', $datacompra);
    $insert->execute();

    $update = $con->prepare("UPDATE produto SET quantidade = quantidade - 1 WHERE idproduto = :idproduto");
    $update->bindParam(":idproduto", $idproduto);
    $update->execute();
?>
<script>
    alert("Produto cadastrado com sucesso!");
</script>
<meta http-equiv="refresh" content="0; url=cadcompra.php">