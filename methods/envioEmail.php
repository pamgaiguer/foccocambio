<?php

	include("../includes/header.php");

	require 'vendor/autoload.php';
	use Mailgun\Mailgun;
	
	
	DispararEmail();

	function DispararEmail(){		

		$msg = $_POST["nomeFrom"]. " < ".$_POST["from"]." > entrou em contato pelo site com a seguinte mensagem: \n \n" .$_POST["mensagem"];


		$mgClient = new Mailgun("CHAVE");
		$result = $mgClient->sendMessage("dominio", array(
		    'from'    => 'From <postmaster@dominio>',
		    'to'      => 'To <email@dominio>',		    
		    'subject' => 'Contato do site',
		    'text'    => $msg
		));	
		
	}


	include("../includes/footer.php");
?>


