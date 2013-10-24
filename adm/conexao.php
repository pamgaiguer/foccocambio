<?php
	$hostname_conn = "mysql01.site1375891718.hospedagemdesites.ws";
	$database_conn = "site1375891718";
	$username_conn = "site1375891718";
	$password_conn = "focco28030708";
	
	$conn = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR); 
?>