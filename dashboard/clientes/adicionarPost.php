<?php
	include "../core/database.php";		


	function SomenteNumeros($field){
		return preg_replace("/\D+/", "", $field);
	}
	

	$sql_query = sprintf("

		INSERT into clientes(
		categoria, 
		razaoSocial, 
		tipoPessoa, 
		cpfCnpj, 
		dataNascimentoAbertura, 		
		rgInscricaoEstadual, 
		rgOrgaoExpedidor, 
		rgDataExpedicao, 
		sexo, 
		nacionalidade, 
		estadoCivil, 
		nomeConjuge, 
		dataNascimentoConjuge, 
		nomeMae, 
		nomePai, 
		email, 
		telFixo, 
		telCelular, 
		contraSenha, 
		observacoes, 
		ofertasPorEmail, 
		infoWhatsapp) 

		VALUES (%s,'%s','%s','%s','%s','%s','%s','%s','%s','%s',%s,'%s','%s','%s','%s','%s','%s','%s','%s','%s',%s,%s)", 

		$_POST["categoria"], $_POST["razaoSocial"], $_POST["tipoPessoa"], SomenteNumeros($_POST["cpfCnpj"]), $_POST["dataNascimento"], $_POST["rg"], $_POST["rgOrgaoExpedidor"], $_POST["rgDataExpedicao"], $_POST["sexo"], $_POST["nacionalidade"], $_POST["estadoCivil"], $_POST["nomeConjuge"], $_POST["dataNascimentoConjuge"], $_POST["nomeMae"], $_POST["nomePai"], $_POST["email"], SomenteNumeros($_POST["telFixo"]), SomenteNumeros($_POST["telCelular"]), $_POST["contraSenha"], $_POST["observacoes"], $_POST["ofertasPorEmail"], $_POST["infoWhatsapp"]

		);



		
	
	//echo json_encode($sql_query);

	if (mysql_query($sql_query, $conn)) echo json_encode("ok");
	else echo json_encode("nope");

?>

