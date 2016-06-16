<?php 
	include "core/database.php";

	$sql_query = sprintf("SELECT * FROM usuarios WHERE login = '%s'", $_POST["login"]);
	//$sql_query = sprintf("SELECT * FROM usuarios WHERE login = '%s'", $_GET["login"]);
	$result = mysqli_query($conn, $sql_query);

	if (mysqli_num_rows($result) > 0) 
	{		
		while ($row = mysqli_fetch_assoc($result)) {
			$usuarioId = $row["id"];
			$senha = $row["senha"];
		}
		
		if ($senha == "REDEFINIR"){
			echo json_encode("/dashboard/usuarios/redefinirSenha?usuarioId=".$usuarioId);
			exit();
		}
		
	}


//md5($_POST["senha"])
	$sql_query = sprintf("SELECT * FROM usuarios WHERE login = '%s' AND senha = '%s'", $_POST["login"], $_POST["senha"]);
	//$sql_query = sprintf("SELECT * FROM usuarios WHERE login = '%s' AND senha = '%s'", $_GET["login"], $_GET["senha"]);
	$result = mysqli_query($conn, $sql_query);

	if (mysqli_num_rows($result) > 0) 
	{
		$usuario = array();
		while ($row = mysqli_fetch_assoc($result)) {
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