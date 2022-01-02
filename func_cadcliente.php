<?php
    include "lib/config.php";

    foreach ($_POST as $indice => $valor) {
        $$indice = $valor;
    }

    $sql = $con->prepare("INSERT INTO cliente VALUE(0,:nome,:endereco,:email)");

    $sql->bindParam(':nome', $nome);
    $sql->bindParam(':endereco', $endereco);
    $sql->bindParam(':email', $email);

    $sql->execute();
?>
<script>
    alert("Cliente cadastrado com sucesso!");
</script>
<meta http-equiv="refresh" content="0; url=cadcliente.php">