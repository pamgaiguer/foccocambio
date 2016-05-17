<?php 
	include "core/database.php";
	
	$sql_query = sprintf("SELECT * FROM usuarios WHERE login = '%s' AND senha = '%s'", $_POST["login"], $_POST["senha"]);
	$result = mysql_query($sql_query, $conn);

	if (mysql_num_rows($result) > 0) 
	{
		$usuario = array();
		while ($row = mysql_fetch_assoc($result)) {
			$usuario['id'] 		= $row["id"];
			$usuario['login'] 	= $row["login"];
			$usuario['tipo'] 	= $row["tipo"];
			$usuario['email'] 	= $row["email"];
			$usuario['nome'] 	= $row["nome"];
		}		
		
		session_start();
		$_SESSION["currentUser"] = $usuario;
		
		echo json_encode($usuario);			
	}  else {
		echo json_encode("nope");
	}

?>