<?php
	include "../core/database.php";		

	$sql_query = sprintf("
		update usuarios 
		set senha = '%s'
		where id = %s", 

		md5($_POST["senha"]), $_POST["id"]);	


	

	if (mysql_query($sql_query, $conn)) echo json_encode("ok");
	else echo json_encode("nope");

?>

