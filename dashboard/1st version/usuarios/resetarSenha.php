<?php
	include "../core/database.php";		
	include "../core/helpers.php";		

	$sql_query = sprintf("
		update usuarios 
		set senha = '%s'
		where id = %s", 

		"REDEFINIR", $_GET["usuarioId"]);
	
	 mysql_query($sql_query, $conn); 
	 Redirect("/dashboard");
?>

