<?php 

include "../../core/database.php";

$sql_query = "DELETE FROM documentos WHERE clienteId = ".$_POST["clienteId"]." AND tipo = 'PROV'";
if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));


$sql_query = sprintf("INSERT into documentos(clienteId, tipo, arquivo, dataUltimaModificacao) VALUES ( %s,'%s','%s','%s')", $_POST["clienteId"], 'PROV', "", date('Y-m-d H:i:s'));
if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));

$sql_query = sprintf("update clientes set bloqueioManual = 0 where id = %s", $_POST["clienteId"]);
if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));

echo json_encode("ok");



?>