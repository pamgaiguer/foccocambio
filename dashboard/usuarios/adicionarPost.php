<?php
	include "../core/database.php";

	$sql_query = sprintf("
		insert into usuarios (nome, login, email, tipo, senha)
		values ('%s', '%s', '%s', %s, '%s')",

		$_POST["nome"], $_POST["login"], $_POST["email"], $_POST["tipo"], "REDEFINIR");

	//echo json_encode($sql_query);

	if (mysqli_query($conn, $sql_query)) echo json_encode("ok - usuario cadastrado");
	else echo json_encode("nope");

?>

