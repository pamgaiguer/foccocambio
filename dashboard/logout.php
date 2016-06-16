<?php 
	session_start();	
	$_SESSION["currentUser"] = null;
	Header("Location: /dashboard");;
?>