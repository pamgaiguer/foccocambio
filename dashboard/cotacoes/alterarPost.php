<?php
	include "../core/database.php";
	include "../core/functions.php";

	$sql_query = sprintf("
		update cotacoes 
		set dolar = %s, euro = %s, libra = %s", 

		$_POST["dolar"], $_POST["euro"], $_POST["libra"]);
	
	 if (mysqli_query($conn, $sql_query)) echo json_encode("ok");
	 else echo json_encode("nope");

?>

