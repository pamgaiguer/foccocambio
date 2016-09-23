<?php
	include "../core/database.php";		
	include "../core/functions.php";			

	$clienteId = $_POST['clienteId'];

	$sql_query = sprintf("
		update clientes 
		set categoria = %s, razaoSocial = '%s', tipoPessoa = '%s', cpfCnpj = '%s', dataNascimentoAbertura = '%s', rgInscricaoEstadual = '%s', rgOrgaoExpedidor = '%s', rgDataExpedicao = '%s', sexo = '%s', nacionalidade = '%s', estadoCivil = '%s', nomeConjuge = '%s', dataNascimentoConjuge = '%s', nomeMae = '%s', nomePai = '%s', email = '%s', telFixo = '%s', telCelular = '%s', contraSenha = '%s', observacoes = '%s', ofertasPorEmail = %s, infoWhatsapp = %s, dataModificacao = '%s', passaporte = '%s', rgDni = '%s', origem = %s, vip = %s, limiteOperacionalDia = %s, limiteOperacionalAno = %s where id = %s", 

		$_POST["categoria"], $_POST["razaoSocial"], $_POST["tipoPessoa"], SomenteNumeros($_POST["cpfCnpj"]), TratarData($_POST["dataNascimento"]), SomenteNumeros($_POST["rg"]), $_POST["rgOrgaoExpedidor"], TratarData($_POST["rgDataExpedicao"]), $_POST["sexo"], $_POST["nacionalidade"], $_POST["estadoCivil"], $_POST["nomeConjuge"], TratarData($_POST["dataNascimentoConjuge"]), $_POST["nomeMae"], $_POST["nomePai"], $_POST["email"], SomenteNumeros($_POST["telFixo"]), SomenteNumeros($_POST["telCelular"]), $_POST["contraSenha"], $_POST["observacoes"], $_POST["ofertasPorEmail"], $_POST["infoWhatsapp"], date('Y-m-d H:i:s'), $_POST["numPassaporte"], $_POST["rgDni"], $_POST["origem"], $_POST["vip"], floatval($_POST["limiteOperacionalDia"]), floatval($_POST["limiteOperacionalAno"]), $_POST['clienteId']);
	if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));

	

	$fileCpf = $_FILES["input-file-cpf"];		
	if (isset($fileCpf) && $fileCpf["name"] != "" && $fileCpf["size"] < 5000000) {
		//$ext = pathinfo($fileCpf['name'], PATHINFO_EXTENSION);		
		$ext = "jpg";
		$newname = "doc-cpf.".$ext; 
		if (!is_dir($_SERVER['DOCUMENT_ROOT'].'dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]))) {
			mkdir($_SERVER['DOCUMENT_ROOT'].'dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]), 0777, true);
		}
		$target = $_SERVER['DOCUMENT_ROOT'].'dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]).'/' .$newname;
		move_uploaded_file( $fileCpf['tmp_name'], $target);
		imagejpeg($target,$target, 75);

		$sql_query = sprintf("DELETE FROM documentos WHERE clienteId = %s AND tipo = 'CPF'", $clienteId);
		if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));
		
		$sql_query = sprintf("INSERT into documentos(clienteId, tipo, arquivo, dataUltimaModificacao) VALUES ( %s,'%s','%s','%s')", $clienteId, 'CPF', $target, date('Y-m-d H:i:s'));
		if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));

	}
	
	$fileRg = $_FILES["input-file-rg"];
	if (isset($fileRg) && $fileRg["name"] != "" && $fileRg["size"] < 5000000) {		
		//$ext = pathinfo($fileRg['name'], PATHINFO_EXTENSION);
		$ext = "jpg";
		$newname = "doc-rg.".$ext;
		if (!is_dir($_SERVER['DOCUMENT_ROOT'].'dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]))) {
			mkdir($_SERVER['DOCUMENT_ROOT'].'dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]), 0777, true);
		}
		$target = $_SERVER['DOCUMENT_ROOT'].'dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]).'/' .$newname;
		move_uploaded_file($fileRg['tmp_name'], $target);		
		imagejpeg($target,$target, 75);

		$sql_query = sprintf("DELETE FROM documentos WHERE clienteId = %s AND tipo = 'RG'", $clienteId);
		if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));
		
		$sql_query = sprintf("INSERT into documentos(clienteId, tipo, arquivo, dataUltimaModificacao) VALUES ( %s,'%s','%s','%s')", $clienteId, 'RG', $target, date('Y-m-d H:i:s'));
		if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));
	}

	$fileCr = $_FILES["input-file-cr"];
	if (isset($fileCr) && $fileCr["name"] != "" && $fileCr["size"] < 5000000) {		
		//$ext = pathinfo($fileCr['name'], PATHINFO_EXTENSION);
		$ext = "jpg";
		$newname = "doc-cr.".$ext;
		if (!is_dir($_SERVER['DOCUMENT_ROOT'].'dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]))) {
			mkdir($_SERVER['DOCUMENT_ROOT'].'dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]), 0777, true);
		}
		$target = $_SERVER['DOCUMENT_ROOT'].'dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]).'/' .$newname;
		move_uploaded_file($fileCr['tmp_name'], $target);	
		imagejpeg($target,$target, 75);

		$sql_query = sprintf("DELETE FROM documentos WHERE clienteId = %s AND tipo = 'CR'", $clienteId);
		if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));
		
		$sql_query = sprintf("INSERT into documentos(clienteId, tipo, arquivo, dataUltimaModificacao) VALUES ( %s,'%s','%s','%s')", $clienteId, 'CR', $target, date('Y-m-d H:i:s'));
		if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));	
	}

	$fileFf = $_FILES["input-file-ff"];
	if (isset($fileFf) && $fileFf["name"] != "" && $fileFf["size"] < 5000000) {		
		//$ext = pathinfo($fileFf['name'], PATHINFO_EXTENSION);
		$ext = "jpg";
		$newname = "doc-ff.".$ext;
		if (!is_dir($_SERVER['DOCUMENT_ROOT'].'dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]))) {
			mkdir($_SERVER['DOCUMENT_ROOT'].'dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]), 0777, true);
		}
		$target = $_SERVER['DOCUMENT_ROOT'].'dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]).'/' .$newname;
		move_uploaded_file($fileFf['tmp_name'], $target);	
		imagejpeg($target,$target, 75);

		$sql_query = sprintf("DELETE FROM documentos WHERE clienteId = %s AND tipo = 'FF'", $clienteId);
		if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));
		
		$sql_query = sprintf("INSERT into documentos(clienteId, tipo, arquivo, dataUltimaModificacao) VALUES ( %s,'%s','%s','%s')", $clienteId, 'FF', $target, date('Y-m-d H:i:s'));
		if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));	
	}

	$fileIr = $_FILES["input-file-ir"];
	if (isset($fileIr) && $fileIr["name"] != "" && $fileIr["size"] < 5000000) {		
		//$ext = pathinfo($fileIr['name'], PATHINFO_EXTENSION);
		$ext = "jpg";
		$newname = "doc-ir.".$ext;
		if (!is_dir($_SERVER['DOCUMENT_ROOT'].'dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]))) {
			mkdir($_SERVER['DOCUMENT_ROOT'].'dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]), 0777, true);
		}
		$target = $_SERVER['DOCUMENT_ROOT'].'dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]).'/' .$newname;
		move_uploaded_file($fileIr['tmp_name'], $target);
		imagejpeg($target,$target, 75);		

		$sql_query = sprintf("DELETE FROM documentos WHERE clienteId = %s AND tipo = 'IR'", $clienteId);
		if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));
		
		$sql_query = sprintf("INSERT into documentos(clienteId, tipo, arquivo, dataUltimaModificacao) VALUES ( %s,'%s','%s','%s')", $clienteId, 'IR', $target, date('Y-m-d H:i:s'));
		if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));
	}

	$fileCa = $_FILES["input-file-ca"];
	if (isset($fileCa) && $fileCa["name"] != "" && $fileCa["size"] < 5000000) {		
		//$ext = pathinfo($fileCa['name'], PATHINFO_EXTENSION);
		$ext = "jpg";
		$newname = "doc-ca.".$ext;
		if (!is_dir($_SERVER['DOCUMENT_ROOT'].'dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]))) {
			mkdir($_SERVER['DOCUMENT_ROOT'].'dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]), 0777, true);
		}
		$target = $_SERVER['DOCUMENT_ROOT'].'dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]).'/' .$newname;
		move_uploaded_file($fileCa['tmp_name'], $target);		
		imagejpeg($target,$target, 75);

		$sql_query = sprintf("DELETE FROM documentos WHERE clienteId = %s AND tipo = 'CA'", $clienteId);
		if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));
		
		$sql_query = sprintf("INSERT into documentos(clienteId, tipo, arquivo, dataUltimaModificacao) VALUES ( %s,'%s','%s','%s')", $clienteId, 'CA', $target, date('Y-m-d H:i:s'));
		if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));
	}

	$fileCps = $_FILES["input-file-cps"];
	if (isset($fileCps) && $fileCps["name"] != "" && $fileCps["size"] < 5000000) {		
		//$ext = pathinfo($fileCps['name'], PATHINFO_EXTENSION);
		$ext = "jpg";
		$newname = "doc-cps.".$ext;
		if (!is_dir($_SERVER['DOCUMENT_ROOT'].'dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]))) {
			mkdir($_SERVER['DOCUMENT_ROOT'].'dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]), 0777, true);
		}
		$target = $_SERVER['DOCUMENT_ROOT'].'dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]).'/' .$newname;
		move_uploaded_file($fileCps['tmp_name'], $target);		
		imagejpeg($target,$target, 75);

		$sql_query = sprintf("DELETE FROM documentos WHERE clienteId = %s AND tipo = 'CPS'", $clienteId);
		if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));
		
		$sql_query = sprintf("INSERT into documentos(clienteId, tipo, arquivo, dataUltimaModificacao) VALUES ( %s,'%s','%s','%s')", $clienteId, 'CPS', $target, date('Y-m-d H:i:s'));
		if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));
	}

	$filePv = $_FILES["input-file-pv"];
	if (isset($filePv) && $filePv["name"] != "" && $filePv["size"] < 5000000) {		
		//$ext = pathinfo($filePv['name'], PATHINFO_EXTENSION);
		$ext = "jpg";
		$newname = "doc-pv.".$ext;
		if (!is_dir($_SERVER['DOCUMENT_ROOT'].'dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]))) {
			mkdir($_SERVER['DOCUMENT_ROOT'].'dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]), 0777, true);
		}
		$target = $_SERVER['DOCUMENT_ROOT'].'dashboard/clientes/uploads/'.SomenteNumeros($_POST["cpfCnpj"]).'/' .$newname;
		move_uploaded_file($filePv['tmp_name'], $target);		
		imagejpeg($target,$target, 75);

		$sql_query = sprintf("DELETE FROM documentos WHERE clienteId = %s AND tipo = 'PV'", $clienteId);
		if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));
		
		$sql_query = sprintf("INSERT into documentos(clienteId, tipo, arquivo, dataUltimaModificacao) VALUES ( %s,'%s','%s','%s')", $clienteId, 'PV', $target, date('Y-m-d H:i:s'));
		if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));
	}




	$sql_query = sprintf("
		update enderecoscliente 
		set cep = '%s', endereco = '%s', numero = '%s', 
		complemento = '%s', bairro = '%s', cidade = '%s',
		estado='%s', pais = '%s' 
		where clienteId = %s and tipo = 1", 

			$_POST["cep-residencial"], $_POST["logradouro-residencial"], $_POST["numero-residencial"], $_POST["complemento-residencial"], $_POST["bairro-residencial"], $_POST["cidade-residencial"], $_POST["UF-residencial"], $_POST["pais-residencial"], $_POST['clienteId'] );
	if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));


	$sql_query = sprintf("
		update enderecoscliente 
		set cep = '%s', endereco = '%s', numero = '%s', 
		complemento = '%s', bairro = '%s', cidade = '%s',
		estado='%s', pais = '%s' 
		where clienteId = %s and tipo = 2", 

			$_POST["cep-entrega"], $_POST["logradouro-entrega"], $_POST["numero-entrega"], $_POST["complemento-residencial"], $_POST["bairro-entrega"], $_POST["cidade-entrega"], $_POST["UF-entrega"], $_POST["pais-entrega"], $_POST['clienteId'] );
	

	if (!mysqli_query($conn, $sql_query)) echo json_encode(mysqli_error($conn));











	echo json_encode("ok");
	

?>

