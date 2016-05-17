<?php 
	session_start();
	include "core/helpers.php";
	$_SESSION["currentUser"] = null;
	Redirect("/dashboard/login");
?>