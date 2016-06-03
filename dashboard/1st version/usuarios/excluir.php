<?php
	include "../core/database.php";		

	$sql_query = sprintf("
		delete from usuarios 
		where id = %s", 

		$_GET["usuarioId"]);
	
	 if (mysql_query($sql_query, $conn)) echo json_encode("ok");
	 else echo json_encode("nope");

	 include "../core/helpers.php";

	 Redirect("/dashboard/usuarios");

?>

