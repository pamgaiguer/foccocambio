<?php 
	session_start();
	include "core/helpers.php";
	if ($_SESSION['currentUser'] == null) {Redirect("/dashboard/login");} else {
		include "includes/header.php";
		include "includes/footer.php";	
	}

	
?>