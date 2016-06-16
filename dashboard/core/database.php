<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPwd = "paladino1";
$dbName = "focco";

$conn = mysqli_connect($dbHost, $dbUser, $dbPwd, $dbName);
if (!$conn) die('N&atilde;o foi poss&iacute;vel conectar: ' . mysql_error());

?>