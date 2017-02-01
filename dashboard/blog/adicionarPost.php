<?php
	include "../core/database.php";
	include "../core/functions.php";

	$sql_query = sprintf("INSERT INTO blog(usuarioId, titulo, subtitulo, data, conteudo) 
	VALUES ( %s, '%s', '%s', '%s', '%s')",
		
		$_POST["usuarioId"], 
		$_POST["titulo"],
		$_POST["subtitulo"],
		Date('Y-m-d H:i:s'), 
		$_POST["conteudo"]

		);


	if (mysqli_query($conn, $sql_query)) echo json_encode("ok");
	else echo json_encode("nope");

	

?>



