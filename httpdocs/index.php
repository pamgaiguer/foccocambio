<?php
require_once ('adm/conexao.php');
if (!isset($_SESSION)) {
	session_start();
}

$query = "SELECT * FROM cotacao";

mysql_select_db('focco_turcambio');
$result = mysql_query($query);
$rows = array();
while ($row = mysql_fetch_assoc($result)) {
	array_push($rows, $row);
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
	</head>
	<body>
		<div class="body-background-blueline"></div>
		<div class="body-background-goldline"></div>
		<div class="main-page">
			<h1 id="tels-home">MOEMA - (11) 5051-5299 | POMPÉIA - (11) 3862-3859</h1>
			<header>
				<h1 id="logo-foco">Focco Cambio</h1>
				<img src="images/linha-cidade.png" alt="linha-cidade">
				<div class="menu">
					<ul class="pureCssMenu pureCssMenum" style="width: 541px; height: 37px;">
						<li class="pureCssMenui"><a class="pureCssMenui" href="index.php" style="margin-top: 5px; margin-left: 20px; margin-right: 20px;">Home<![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
						<!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
						<li class="pureCssMenui"><a class="pureCssMenui" href="#"><span style="margin-top: 5px; margin-left: 20px; margin-right: 20px;">Produtos</span><![if gt IE 6]></a><![endif]><!--[if lte IE 6]><table><tr><td><![endif]-->
						<ul class="pureCssMenum">
							<li class="pureCssMenui"><a class="pureCssMenui" href="prod_cartoesprepagos.php">Cartões Pré-Pagos</a></li>
							<li class="pureCssMenui"><a class="pureCssMenui" href="prod_moedaestrangeira.php">Moeda Estrangeira</a></li>
							<li class="pureCssMenui"><a class="pureCssMenui" href="prod_transfinternacionais.php">Transferências Internacionais</a></li>
						</ul>
						<!--[if lte IE 6]></td></tr></table></a><![endif]--></li>
						<li class="pureCssMenui"><a class="pureCssMenui" href="#"><span style="margin-top: 5px; margin-left: 20px; margin-right: 20px;">Serviços</span></a>
						<ul class="pureCssMenum">
							<li class="pureCssMenui"><a class="pureCssMenui" href="serv_atendCorporativo.php">Atendimento Corporativo</a></li>
							<li class="pureCssMenui"><a class="pureCssMenui" href="serv_delivery.php#delivery">Delivery</a></li>
							<li class="pureCssMenui"><a class="pureCssMenui" href="serv_duvidasfrequentes.php">Dúvidas Frequentes</a></li>
						</ul></li>
						<li class="pureCssMenui"><a class="pureCssMenui" href="#"><span style="margin-top: 5px; margin-left: 20px; margin-right: 20px;">Contato</span></a>
						<ul class="pureCssMenum" style="width: 150px;">
							<li class="pureCssMenui"><a class="pureCssMenui" href="faleconosco.php">Fale Conosco</a></li>
							<li class="pureCssMenui"><a class="pureCssMenui" href="faleconosco.php#lojas">Lojas</a></li>
						</ul></li>						
					</ul>
				</div>
			</header>
			<div class="cotacao">
				<table>
					<tbody>
						<tr>
							<th colspan="3">topotabela</th>
						</tr>
						<tr>
							<td></td>
							<td class="cotacao-titles cor-cotacao-compras" style='font-weight: bold;'>compra</td>
							<td class="cotacao-titles cor-cotacao-vendas" style='font-weight: bold;'>venda</td>
						</tr>
						<?php foreach($rows as $key => $val){
							
						 echo "<tr>
								<td style='font-weight: bold;'>{$val['moeda']}</td>
								<td class='cor-cotacao-compras' style='font-weight: bold;'>{$val['compra']}</td>
								<td class='cor-cotacao-vendas' style='font-weight: bold;'>{$val['venda']}</td>
							   </tr>";
							}
						?>							
					</tbody>
				</table>
				<div id="info-cotacoes">*Nossas cotações representam o valor efetivo <br>total, compreendido taxas e impostos.</div>
				<div id="slides">
					<a href="prod_moedaestrangeira.php" target="_self"><img src="images/slider-banner001.jpg"></a>
					<a href="prod_cartoesprepagos.php"><img src="images/slider-banner002.jpg"></a>
					<a href="serv_delivery.php"><img src="images/slider-banner003.png"></a>
					<img src="images/slider-banner004.png">
					<a href="http://www.rendimento.com.br//?c=3493" target="_blank"><img src="images/slider-banner005.jpg"></a>
				</div>
			</div>
			<br><br>
			<div class="banner-cartoes">
				<figure id="cartao001">
					<a href="prod_cartoesprepagos.php" target="_self"><img src="images/home-cartoes001-img.png" alt="cartao001"></a>
				</figure>
				<figure id="cartao002">
					<a href="prod_moedaestrangeira.php" target="_self"><img src="images/home-cartoes002-img.png" alt="cartao002"></a>
				</figure>
			</div>
			<br>
		</div>	
		<footer>
			<div class="footer-all">
				<ul class="footer-quadro1">
					<li class="footer-uppercase"><a href="index.php" target="_self">Home</a></li>
					<li><a href="serv_atendCorporativo.php" target="_self">Atendimento Corporativo</a></li>					
					<li><a href="serv_delivery.php" target="_self">Delivery</a></li>
					<li><a href="serv_duvidasfrequentes.php" target="_self">Dúvidas Frequentes</a></li>
				</ul>
				<ul class="footer-quadro2">
					<li class="footer-uppercase">Produtos</li>
					<li><a href="prod_cartoesprepagos.php" target="_self">Cartões Pré-Pagos</a></li>
					<li><a href="prod_moedaestrangeira.php" target="_self">Moedas Estrangeiras</a></li>
					<li><a href="prod_transfinternacionais.php" target="_self">Transferências Internacionais</a></li>
				</ul>
				<ul class="footer-quadro3">
					<li class="footer-uppercase">Lojas</li>
					<li class="footer-uppercase tels-footer">Moema - (11) 5051-5299</li>
					<li class="footer-uppercase tels-footer">Pompéia - (11) 3862-3859</li>					
					<li class="link-footer-align-right"><a href="mailto:contato@foccocambio.com.br">contato@foccocambio.com.br</a></li>
				</ul>
				<ul class="footer-quadro4">
					<li class="footer-uppercase">Redes Sociais</li>
					<li>Siga-nos!</li>
					<a href="http://www.facebook.com/pages/Focco-Cambio-E-Turismo/162981180415704?ref=ts&fref=ts" target="_blank"><img src="images/facebook.png" alt="facebook"></a>
					<a href="http://twitter.com/foccocambioetur" target="_blank"><img src="images/twitter.png" alt="twitter"></a>
				</ul>
				<img src="images/logo_corretora.png" alt="corretora" id="corretora-logo">
			</div>		
		</footer>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="js/jquery.1.10.min.js"></script>
        <script src="js/jquery.slides.min.js"></script>
        <script src="js/slider.js"></script>
        <script>        
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-8617763-11']);
          _gaq.push(['_trackPageview']);
        
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        
        </script>       
    </body>
</html>