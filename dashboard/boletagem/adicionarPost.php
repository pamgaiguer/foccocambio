<?php
	include "../core/database.php";
	include "../core/functions.php";

	$sql_query = sprintf("
		INSERT INTO boletagem(clienteId, usuarioId, data, caixaId, modalidade, tipoOperacao, moeda, quantidade, taxa, subtotal, iofTaxa, mn, swift, darf, vet, vetTaxa, taxaNivel, status, formaPgto, formaEntrega, dataEntrega, aCombinar, debito) 
		VALUES (
		%s, 
		%s, 
		'%s', 
		%s, 
		%s, 
		%s, 
		'%s', 
		%s, 
		%s, 
		%s, 
		%s, 
		%s, 
		%s, 
		%s, 
		%s, 
		%s, 
		%s,
		%s, 
		%s,
		%s,
		'%s',
		%s,
		%s)",

		$_POST["clienteId"], 
		$_POST["usuarioId"], 
		TratarData($_POST["data"]), 
		$_POST["caixa"], 
		$_POST["modalidade"], 
		$_POST["operacao"], 
		$_POST["moeda"],
		TratarFloat($_POST["quantidade"]),
		TratarFloat($_POST["taxa"]),
		TratarFloat($_POST["subtotal"]),
		TratarFloat($_POST["iof"]),
		TratarFloat($_POST["mn"]),
		TratarFloat($_POST["swift"]),
		TratarFloat($_POST["darf"]),
		TratarFloat($_POST["vet"]),
		TratarFloat($_POST["vettaxa"]),
		TratarFloat($_POST["txnivel"]), 
		1,
		$_POST["formaPgto"],
		$_POST["formaEntrega"],
		TratarData($_POST["dataEntrega"]),
		$_POST["aCombinar"],
		TratarFloat($_POST["debito"])

		);


	if (mysqli_query($conn, $sql_query)) echo json_encode("ok");
	else echo json_encode("nope");

?>



