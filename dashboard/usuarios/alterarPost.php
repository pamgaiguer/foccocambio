<?php
	include "../core/database.php";		

	$sql_query = sprintf("
		update usuarios 
		set nome = '%s', login = '%s', email = '%s', telefone = '%s', tipo = '%s' 
		where id = %s", 

		$_POST["nome"], $_POST["login"], $_POST["email"], $_POST["telefone"], $_POST["tipo"], $_POST["id"]);
	
	 if (mysql_query($sql_query, $conn)) echo json_encode("ok");
	 else echo json_encode("nope");

?>

