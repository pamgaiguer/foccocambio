<?php
	include "../core/database.php";		

	$sql_query = sprintf("
		update usuarios 
		set senha = '%s'
		where id = %s", 
		$_POST["senha"], $_POST["id"]);	
		//md5($_POST["senha"]), $_POST["id"]);	


	

	if (mysqli_query($conn, $sql_query)) echo json_encode("ok");
	else echo json_encode("nope");

?>

