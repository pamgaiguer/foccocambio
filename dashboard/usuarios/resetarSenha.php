<?php
	include "../core/database.php";		
		

	$sql_query = sprintf("
		update usuarios 
		set senha = '%s'
		where id = %s", 

		"REDEFINIR", $_GET["usuarioId"]);
	
	 mysqli_query($conn, $sql_query); 
	 Header("Location: /dashboard/usuarios");
?>

