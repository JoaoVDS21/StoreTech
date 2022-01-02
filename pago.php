<?php
include "lib/config.php";

$id = (int)$_GET["id"];

$update = $con->prepare("UPDATE compra SET pago = 1 WHERE idcompra = :id");
$update->bindParam(":id", $id);
$update->execute();
?>
<meta http-equiv="refresh" content="0; url=listcompra.php">