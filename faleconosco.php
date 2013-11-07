<?php
    $to = 'contato@foccocambio.com.br';
    $subject= "Contato Focco - Enviado pelo Site";
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['telefone'];
	
    $message = "Email enviado pelo Fale Conosco do Site \n
		Nome: ".$nome." \n 
		E-mail: ".$email." \n
		Telefone: ".$tel." \n
		Mensagem: ".$msg."  \n";
		
	if(!mail($to, $subject, $message, $headers ,"-r".$to)){ // Se for Postfix
	    $headers .= "Return-Path: " . $to . $quebra_linha; // Se "não for Postfix"
	    mail($to, $subject, $message, $headers );
	}			
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8" />
		<title>Focco Câmbio - Câmbio Financeiro</title>
		<meta name="description" content="Câmbio financeiro, Casa de Câmbio, Entrega de moedas em São Paulo, Dólar, Euro, Libra" />
		<meta name="author" content="Pamella Gaiguer, Leonardo Zaccur" />
		<meta name="keywords" content="casa, câmbio, financeiro, western, union, yes, cash, passport, visa,
		mastercard, dólar, euro, libra, cotação, casa de câmbio, casa de cambio, focco, atendimento, corporativo, delivery,
		moeda, casa, espécie, especie, real">
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/menu.css">
		<link rel="stylesheet" href="css/slidesjs.css">
		<link rel="stylesheet" href="css/internas.css">	
	</head>
	<body>
		<div class="body-background-blueline"></div>
		<div class="body-background-goldline"></div>
		<div class="main-page">
			<header>
				<h1 id="logo-foco">Focco Cambio</h1>
				<img src="images/linha-cidade.png" alt="linha-cidade">
				<div class="menu">
					<ul class="pureCssMenu pureCssMenum" style="width: 541px; height: 37px;">
						<li class="pureCssMenui">
							<a class="pureCssMenui" href="index.php" style="margin-top: 5px; margin-left: 20px; margin-right: 20px;">Home<![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
							<!--[if lte IE 6]></td></tr></table></a><![endif]-->
						</li>
						<li class="pureCssMenui">
							<a class="pureCssMenui" href="#"><span style="margin-top: 5px; margin-left: 20px; margin-right: 20px;">Produtos</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
							<ul class="pureCssMenum">
								<li class="pureCssMenui">
									<a class="pureCssMenui" href="prod_cartoesprepagos.php">Cartões Pré-Pagos</a>
								</li>
								<li class="pureCssMenui">
									<a class="pureCssMenui" href="prod_moedaestrangeira.php">Moeda Estrangeira</a>
								</li>
								<li class="pureCssMenui">
									<a class="pureCssMenui" href="prod_transfinternacionais.php">Transferências Internacionais</a>
								</li>
							</ul>
							<!--[if lte IE 6]></td></tr></table></a><![endif]-->
						</li>
						<li class="pureCssMenui">
							<a class="pureCssMenui" href="#"><span style="margin-top: 5px; margin-left: 20px; margin-right: 20px;">Serviços</span></a>
							<ul class="pureCssMenum">
								<li class="pureCssMenui">
									<a class="pureCssMenui" href="serv_atendCorporativo.php">Atendimento Corporativo</a>
								</li>
								<li class="pureCssMenui">
									<a class="pureCssMenui" href="serv_delivery.php#delivery">Delivery</a>
								</li>
								<li class="pureCssMenui">
									<a class="pureCssMenui" href="serv_duvidasfrequentes.php">Dúvidas Frequentes</a>
								</li>
							</ul>
						</li>
						<li class="pureCssMenui">
							<a class="pureCssMenui" href="#"><span style="margin-top: 5px; margin-left: 20px; margin-right: 20px;">Contato</span></a>
							<ul class="pureCssMenum" style="width: 150px;">
								<li class="pureCssMenui">
									<a class="pureCssMenui" href="faleconosco.php">Fale Conosco</a>
								</li>
								<li class="pureCssMenui">
									<a class="pureCssMenui" href="faleconosco.php#lojas">Lojas</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</header>
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
					<fieldset>
						<form action="faleconoscoaction.php" method="post" onsubmit="return valida(this);">
							<input type="hidden" name="recipient" value="pamella.gaiguer@gmail.com">							
							<input type="text" name="nome" required placeholder="Nome">
							<br>
							<input type="email" name="email" required placeholder="E-mail">
							<br>
							<input type="tel" name="telefone" placeholder="Telefone">
							<br>
							<textarea name="msg"></textarea>
							<input type="submit" value="Enviar" id="btn-submit">
							<br>
						</form>
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
							MOEMA
							<br>
							<strong>Horário de Atendimento</strong>
							<br>
							Seg. a Sex. das 09:00h às 18:00h
							<br>
							*Atendimento <strong>somente</strong> com agendamento
							<br>							
							<strong>Tel: (11) 5051 - 5299</strong>
							<br>
							End: Alameda dos Maracatins, 780, conjunto 1110
						</p>
					</div>
				</div>
			</div>
		</div>
		<?php include 'includes/footer.php'; ?>
		<script>
			function valida(form) {
				if (form.nome.value=="") {
					alert("Preencha o nome corretamente.");
					form.nome.focus();
				return false;
			}	
			var filtro_mail = /^.+@.+\..{2,3}$/
				if (!filtro_mail.test(form.email.value) || form.email.value=="") {
					alert("Preencha o e-mail corretamente.");
					form.email.focus();
				return false;
			}
				if (form.tel.value=="") {
					alert("Preencha o telefone corretamente.");
					form.tel.focus();
					return false;
				}					
			}				
		</script>				
	</body>
</html>