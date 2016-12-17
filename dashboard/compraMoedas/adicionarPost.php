<?php
	include "../core/database.php";
	include "../core/functions.php";

	$sql_query = sprintf("INSERT INTO compras(usuarioId, moeda, caixaId, data, quantidade, taxa, total, fechamento, entrega) 
		VALUES ( %s, '%s', %s, '%s', %s, %s, %s, '%s', '%s')",
		
		$_POST["usuarioId"], 
		$_POST["moeda"],
		$_POST["caixa"],
		TratarData($_POST["data"]), 
		TratarFloat($_POST["quantidade"]),
		TratarFloat($_POST["taxa"]),
		TratarFloat($_POST["total"]),
		$_POST["fechamento"], 
		$_POST["entrega"]
		);


	if (mysqli_query($conn, $sql_query)) echo json_encode("ok");
	else echo json_encode("nope");

	

?>



