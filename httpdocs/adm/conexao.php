<?php
	$hostname_conn = "localhost:3306";
	$database_conn = "focco_turcambio";
	$username_conn = "allitourcam";
	$password_conn = "note763clot221";
	
	$conn = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR); 
?>