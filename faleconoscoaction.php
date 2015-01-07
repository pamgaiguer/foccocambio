<?php
    $to = 'contato@foccocambio.com.br';
    $subject= "Contato Focco - Enviado pelo Site";
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['telefone'];   	
    $message = "Email enviado pelo Fale Conosco do Site <br>
		 Nome: ".$nome. "<br> 
		 E-mail: ".$email." <br>
		 Telefone: ".$tel." <br>
		 Mensagem: ".$msg."  <br>";
	$headers .= "Content-type: text/html; charset=utf-8\n";	
	if(!mail($to, $subject, $message, $headers ,"-r".$to)){ // Se for Postfix
	   $headers .= "Return-Path: " . $to . $quebra_linha; // Se "não for Postfix"
	   mail($to, $subject, $message, $headers );
	}
	
// $mensagem = $_POST['mensagem']; 
// $para = 'abc@gmail.com'; 
// $assunto = 'Teste de Formulário'; 
// $header = "MIME-Version: 1.0" . "\r\n". 
// "Content-type: text/html; charset=utf-8" . "\r\n". 
// "From: " . "\r\n" . 
// "Reply-To: #"; 
// $corpo .= "Text-Area: $mensagem"; 
// 
// $enviaForm = mail($para, $assunto, $corpo, $header); 
// 
// if ($enviaForm) 
// echo "<script> alert('Enviado!'); </script>"; 

	//$headers = "MIME-Version: 1.0\n"; 
	//$headers .= "Content-type: text/html; charset=iso-8859-1\n"; // Aqui você informa o formato e o charset do e-mail 
	//$headers .= "From: Seu nome <seuemail@dominio.com.br>\n"; 
	//$headers .= "Return-Path: <seuemail@dominio.com.br>\n"; 

	//mail($email, $assunto, $mensagem, $headers); 	
					
?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<?php include 'includes/seo.php'; ?>
	</head>
	<body>
	
		<div class="body-background-blueline"></div>
		<div class="body-background-goldline"></div>
		<div class="main-page">
		<?php include 'includes/header_menu.php'; ?>
			<div class="interna-all">
				<div class="interna-left">
					<img src="images/left-figure-faleconosco.png" alt="fale-conosco" class="left-figure-faleconosco">
				</div>
				<div class="interna-meio">
					<br>
					<br>
					<img src="images/title-fale-conosco.png" alt="fale-conosco">
					<br>
					<br>
					<p class="interna-corazul-notextindent">
						<strong>Canal exclusivo para falar com a Focco.</strong>
						<br>
						Para informações sobre produtos e/ou serviços específicos ou reclamações, use o formulário abaixo que o responderemos o mais breve possível.
					</p>
					<br>
					<fieldset style="border:3px solid #D3AC5E; border-radius: 8px; background-color: white">
						<h3 class="interna-corazul-notextindent">E-mail enviado com sucesso!</h3>
						<br>
						<h3 class="interna-corazul-notextindent">Entraremos em contato em breve!</h3>
					</fieldset>
					<img src="images/right-figure-faleconosco.png" alt="SAC" class="img-sac">
					<br>
					<br>
					<div id="lojas">
						<img src="images/title-subtitle-faleconosco.png" alt="lojas">
						<br>
						<br>
						<p class="interna-corazul-notextindent">
							POMPÉIA
							<br>
							<strong>Horário de Atendimento</strong>
							<br>
							Seg. a Sex. das 09:00h às 18:00h
							<br>
							Sábados das 09:00h às 13:00h
							<br>
							<strong>Tel: (11) 3862 - 3859</strong>
							<br>
							End: Rua Carlos Vicari, 155 - Loja 11
							<br>
							<br>
							DELIVERY
							<br>
							Entregas para São Paulo e Grande São Paulo
							<br>
							<strong>Tel: (11) 5051 - 5299</strong>
						</p>
					</div>
				</div>
			</div>
		</div>
		<?php include 'includes/footer.php'; ?>
	</body>
</html>
