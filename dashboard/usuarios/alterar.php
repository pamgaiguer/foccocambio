<?php 

	include "../core/database.php";

	include "../includes/header.php";

	$sql_query = sprintf("SELECT * FROM usuarios WHERE id = %s", $_GET['usuarioId']);
	$result = mysql_query($sql_query, $conn);	

	$rows = array();
	while($row = mysql_fetch_array($result)) $rows[] = $row;

	foreach($rows as $r){
		$nome = $r['nome'];
		$login = $r['login'];
		$email = $r['email'];
		$telefone = $r['telefone'];
		$tipo = $r['tipo'];
	}

?>




<div class="row">
	<div class="col-md-12">
		<form action="alterarPost.php" method="post" class="form-group" id="form-alterar-usuario">			
			
			<div class="col-md-4">
				<input name="nome" value=<?php echo $nome ?> type="text" class="form-control" placeholder="Nome" />
			</div>
			<div class="col-md-4">
				<input name="login" value=<?php echo $login ?> type="text" class="form-control" placeholder="Login" /><br/>
			</div>
			<div class="col-md-4">
				<input name="email" value=<?php echo $email ?> type="text" class="form-control" placeholder="Email" /><br/>
			</div>
			<div class="col-md-4">
				<input name="telefone" value=<?php echo $telefone ?> type="text" class="form-control" placeholder="Telefone" /><br/>
			</div>
			<div class="col-md-4">
				<select name="tipo" class="form-control">
					<option value="2" <?php if ($tipo == 2) echo "selected" ?>> Admin</option>
					<option value="3" <?php if ($tipo == 3) echo "selected" ?>>Usuário</option>
				</select>
			</div>
			<div class="col-md-12">
				<input type="submit" value=">>>" class="btn btn-primary col-md-2" /><br/>
			</div>
		</form>
	</div>
</div>


<?php



	include "../includes/footer.php";
?>