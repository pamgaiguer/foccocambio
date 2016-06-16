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

		VALUES ( %s,'%s','%s','%s','%s','%s','%s','%s','%s','%s',%s,'%s','%s','%s','%s','%s','%s','%s', '%s','%s',%s,%s )", 

		$_POST["categoria"], $_POST["razaoSocial"], $_POST["tipoPessoa"], SomenteNumeros($_POST["cpfCnpj"]), TratarData($_POST["dataNascimento"]), $_POST["rg"], $_POST["rgOrgaoExpedidor"], TratarData($_POST["rgDataExpedicao"]), $_POST["sexo"], $_POST["nacionalidade"], $_POST["estadoCivil"], $_POST["nomeConjuge"], TratarData($_POST["dataNascimentoConjuge"]), $_POST["nomeMae"], $_POST["nomePai"], $_POST["email"], SomenteNumeros($_POST["telFixo"]), SomenteNumeros($_POST["telCelular"]), $_POST["contraSenha"], $_POST["observacoes"], 
			$_POST["ofertasPorEmail"], $_POST["infoWhatsapp"]

		);
	

	if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));
	
	
	$fileCpf = $_FILES["input-file-cpf"];	
	if ($fileCpf["size"] < 5000000) 
	{		
		$info = pathinfo($fileCpf['name']);
		$ext = $info['extension'];
		$newname = "doc-cpf.".$ext; 

		if (!is_dir('/dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]))) 
			mkdir('/dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]), 0777, true);

		$target = '/dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]).'/' .$newname;		
		move_uploaded_file( $fileCpf['tmp_name'], $target);
	}
	
	$fileRg = $_FILES["input-file-rg"];
	if ($fileRg["size"] < 5000000) {
		
		$info = pathinfo($fileRg['name']);
		$ext = $info['extension'];
		$newname = "doc-rg.".$ext; 

		if (!is_dir('/dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]))) 
			mkdir('/dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]), 0777, true);

		$target = '/dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]).'/' .$newname;
		move_uploaded_file( $fileRg['tmp_name'], $target);
	}	
		
	$clienteId = mysqli_insert_id($conn);

	$sql_query = sprintf("
		INSERT into enderecoscliente(
		clienteId, 
		tipo, 
		cep, 
		endereco, 
		numero, 		
		complemento, 
		bairro, 
		cidade, 
		estado,
		pais) 

		VALUES (%s,%s,'%s','%s','%s','%s','%s','%s','%s', '%s')", 

		$clienteId, 1, $_POST["cep-residencial"], $_POST["logradouro-residencial"], $_POST["numero-residencial"], $_POST["complemento-residencial"], $_POST["bairro-residencial"], $_POST["cidade-residencial"], $_POST["UF-residencial"], $_POST["pais-residencial"]

		);

	mysqli_query($conn, $sql_query);

	$sql_query = sprintf("
		INSERT into enderecoscliente(
		clienteId, 
		tipo, 
		cep, 
		endereco, 
		numero, 		
		complemento, 
		bairro, 
		cidade, 
		estado,
		pais) 

		VALUES (%s,%s,'%s','%s','%s','%s','%s','%s','%s', '%s')", 

		$clienteId, 2, $_POST["cep-entrega"], $_POST["logradouro-entrega"], $_POST["numero-entrega"], $_POST["complemento-entrega"], $_POST["bairro-entrega"], $_POST["cidade-entrega"], $_POST["UF-entrega"], $_POST["pais-entrega"]

		);

	mysqli_query($conn, $sql_query);


	echo json_encode("ok");
	

?>

