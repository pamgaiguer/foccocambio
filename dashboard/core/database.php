<?php

	$dbHost = "localhost";
	$dbUser = "root";
	$dbPwd = "";
	$dbName = "focco";

	$conn = mysql_connect($dbHost, $dbUser, $dbPwd);
	if (!$conn) die('N&atilde;o foi poss&iacute;vel conectar: ' . mysql_error());
	mysql_select_db($dbName, $conn) or die('Banco de dados n&atilde;o encontrado. ' . mysql_error());
?>