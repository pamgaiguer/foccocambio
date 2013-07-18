<?php
require_once ('../adm/conexao.php');
if(!isset($_SESSION)) {
session_start();
}
mysql_select_db('focco_turcambio');

if($_POST){
	$i = 0;
	foreach($_POST['id'] as $id){		
		
		$set = "";
		foreach($_POST as $key=>$val){
				if($key != 'id'){
					//var_dump($val[$i]);
					$set .=  "{$key} = '{$val[$i]}' ";
					if($key != 'venda') $set .=" , ";
				}
		}
		$i++;
		$query = "UPDATE cotacao SET {$set} WHERE idcotacao = {$id} ";
		$result = mysql_query($query);
	}
		
}
	$query = "SELECT * FROM cotacao";	
	$result = mysql_query($query);
	$rows = array();
	while($row = mysql_fetch_assoc($result)){
		array_push($rows,$row);
	}moeda

?>
<!DOCTYPE html>
<head>
	<meta charset="ISO-8859-1" />
	<title>Painel Focco - Edição de Dados</title>
	<link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/styles.css">
	<link rel="stylesheet" href="../css/internas.css">
	<link rel="stylesheet" href="../css/adm.css">
	<style>

	</style>
</head>

<body>
	<div class="body-background-blueline"></div>
	<div class="body-background-goldline"></div>
	<div class="main-page">
	<header>
		<h1 id="logo-foco">Focco Cambio</h1>
		<img src="../images/linha-cidade.png" alt="linha-cidade">
	</header>
	<div class="interna-all">
		<div class="interna-left">
			<p>
			insira as <br><span>c</span>otações <br>do <span>d</span>ia
			</p>
			</div>
		<div class="interna-meio">
		<form action="" method="post">
			<table>
				<thead>
					<tr>
						<td>Moeda</td>
						<td>Compra</td>
						<td>Venda</td>
					</tr>
				</thead>
				<tbody>
					<?php foreach($rows as $key => $val){
					 echo "<tr>
					 		<input type='hidden' value='{$val['idcotacao']}' name='id[]'>
							<td><input type='text' value='{$val['moeda']}' name='moeda[]' ></td>
							<td><input type='text' value='{$val['compra']}' name='compra[]' ></td>
							<td><input type='text' value='{$val['venda']}' name='venda[]' ></td>
						   </tr>";
						}
					?>
				</tbody>
			</table>
			<input type="submit" value="Salvar" id="button-save">
			</form>
		</div>
	</div>
</div>
	<footer>
		<div class="footer-all"></div>
	</footer>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="../js/adm.js"></script>
</body>
</html>