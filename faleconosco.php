<?php
header('Content-Type: text/html; charset=UTF-8');
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
					<fieldset>
						<form action="faleconoscoaction.php" method="post" onsubmit="return valida(this);">							
							<input type="text" name="nome" placeholder="Nome">
							<br>
							<input type="email" name="email" placeholder="E-mail">
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
							DELIVERY
							<br>
							<strong>Horário de Atendimento</strong>
							<br>
							Seg. a Sex. das 09:00h às 18:00h
							<br>
							<strong>Tel: (11) 5051 - 5299</strong>
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
