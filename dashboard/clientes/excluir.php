<?php
	include "../core/database.php";		

	$sql_query = sprintf("
		delete from clientes 
		where id = %s", 

		$_GET["clienteId"]);
	
	 if (mysql_query($sql_query, $conn)) echo json_encode("ok");
	 else echo json_encode("nope");

	 Header("Location: /dashboard/clientes");

?>

