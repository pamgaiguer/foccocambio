<?php
	include "../core/database.php";		


	function SomenteNumeros($field){
		return preg_replace("/\D+/", "", $field);
	}

	function TratarData($field){
		return date('Y-m-d', strtotime($field));
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

		$_POST["categoria"], $_POST["razaoSocial"], $_POST["tipoPessoa"], SomenteNumeros($_POST["cpfCnpj"]), TratarData($_POST["dataNascimento"]), $_POST["rg"], $_POST["rgOrgaoExpedidor"], TratarData($_POST["rgDataExpedicao"]), $_POST["sexo"], $_POST["nacionalidade"], $_POST["estadoCivil"], $_POST["nomeConjuge"], TratarData($_POST["dataNascimentoConjuge"]), $_POST["nomeMae"], $_POST["nomePai"], $_POST["email"], SomenteNumeros($_POST["telFixo"]), SomenteNumeros($_POST["telCelular"]), $_POST["contraSenha"], $_POST["observacoes"], $_POST["ofertasPorEmail"], $_POST["infoWhatsapp"]

		);


	$fileCpf = $_FILES["input-file-cpf"];
	if ($fileCpf["size"] < 510000) {
		
		$info = pathinfo($fileCpf['name']);
		$ext = $info['extension'];
		$newname = "doc-cpf.".$ext; 

		if (!is_dir('/dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]))) 
			mkdir('/dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]), 0755, true);

		$target = '/dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]).'/' .$newname;
		move_uploaded_file( $fileCpf['tmp_name'], $target);
	}

	$fileRg = $_FILES["input-file-rg"];
	if ($fileRg["size"] < 510000) {
		
		$info = pathinfo($fileRg['name']);
		$ext = $info['extension'];
		$newname = "doc-rg.".$ext; 

		if (!is_dir('/dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]))) 
			mkdir('/dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]), 0755, true);

		$target = '/dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]).'/' .$newname;
		move_uploaded_file( $fileRg['tmp_name'], $target);
	}
		
	
	//echo json_encode($sql_query);

	echo json_encode($_POST["razaoSocial"]);

	//if (mysqli_query($conn, $sql_query)) echo json_encode("ok");
	//else echo json_encode("nope");

?>

