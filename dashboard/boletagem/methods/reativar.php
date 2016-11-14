<?php 

include "../../core/database.php";

$sql_query = "UPDATE boletagem SET status = 1 WHERE id = ".$_POST["boletagemId"];
if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));

echo json_encode("ok");



?>