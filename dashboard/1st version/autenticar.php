<?php 
	include "core/database.php";
	include "core/helpers.php";

	$sql_query = sprintf("SELECT * FROM usuarios WHERE login = '%s'", $_POST["login"]);
	$result = mysql_query($sql_query, $conn);

	if (mysql_num_rows($result) > 0) 
	{		
		while ($row = mysql_fetch_assoc($result)) {
			$usuarioId = $row["id"];
			$senha = $row["senha"];
		}
		
		if ($senha == "REDEFINIR"){
			echo json_encode("/dashboard/usuarios/redefinirSenha?usuarioId=".$usuarioId);
			exit();
		}
		
	}



	$sql_query = sprintf("SELECT * FROM usuarios WHERE login = '%s' AND senha = '%s'", $_POST["login"], md5($_POST["senha"]));
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