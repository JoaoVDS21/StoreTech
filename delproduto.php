<?php
include "lib/config.php";

$id = (int)$_GET["id"];

$del = $con->prepare("DELETE FROM produto WHERE idproduto = :id");
$del->bindParam(":id", $id);
$del->execute();
?>
<script>alert("Cliente excluído com sucesso!")</script>
<meta http-equiv="refresh" content="0; url=listcliente.php">