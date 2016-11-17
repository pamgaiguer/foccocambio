<?php

  $dbHost = "localhost";
  $dbUser = "root";
  $dbPwd = "";
  $dbName = "focco";


/*$dbHost = "186.232.189.174";
$dbUser = "foccocam_admin";
$dbPwd = "foccoCam2855";
$dbName = "foccocam_dash";
*/

$conn = mysqli_connect($dbHost, $dbUser, $dbPwd, $dbName);
if (!$conn) die('N&atilde;o foi poss&iacute;vel conectar: ' . mysql_error());

?>