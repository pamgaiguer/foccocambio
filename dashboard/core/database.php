<?php

 $dbHost = "localhost";
 $dbUser = "root";
 $dbPwd = "root";
 $dbName = "focco";

//$dbHost = "177.70.106.29";
//$dbUser = "focco_admin";
//$dbPwd = "cambio321";
//$dbName = "foccocambio_dash";


$conn = mysqli_connect($dbHost, $dbUser, $dbPwd, $dbName);
if (!$conn) die('N&atilde;o foi poss&iacute;vel conectar: ' . mysql_error());

?>