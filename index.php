<?php
require_once ('adm/conexao.php');
if (!isset($_SESSION)) {
	session_start();
}

$query = "SELECT * FROM cotacao";

mysql_select_db('site1375891718');
$result = mysql_query($query);
$rows = array();
while ($row = mysql_fetch_assoc($result)) {
	array_push($rows, $row);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<?php include 'includes/seo.php'?>
	</head>
	<body>
		<div class="body-background-blueline"></div>
		<div class="body-background-goldline"></div>
		<div class="main-page">
			<h1 id="tels-home">DELIVERY CÂMBIO - (11) 5051-5299</h1>
			<?php include 'includes/header_menu.php'?>
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
		<?php include 'includes/footer.php'; ?>
    </body>
</html>