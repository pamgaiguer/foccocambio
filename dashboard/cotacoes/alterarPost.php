<?php
	include "../core/database.php";
	include "../core/functions.php";

	$sql_query = sprintf("
		update cotacoes 
		set dolar = %s, euro = %s, libra = %s", 

		TratarFloat($_POST["dolar"]), TratarFloat($_POST["euro"]), TratarFloat($_POST["libra"]));
	
	 if (mysqli_query($conn, $sql_query)) echo json_encode("ok");
	 else echo json_encode("nope");

?>

