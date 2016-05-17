<?php 

	include "../core/database.php";

	include "../includes/header.php";
?>




<div class="row">
	<div class="col-md-12">
		<form action="adicionarPost.php" method="POST" class="form-group" id="form-adicionar-usuario">			


			<div class="col-md-4">
				<input name="nome" id="nome" type="text" class="form-control" placeholder="Nome" />
			</div>
			<div class="col-md-4">
				<input name="login" id="login" type="text" class="form-control" placeholder="Login" /><br/>
			</div>
			<div class="col-md-4">
				<input name="email" id="email" type="text" class="form-control" placeholder="Email" /><br/>
			</div>
			<div class="col-md-4">
				<input name="telefone" id="telefone" pattern="^\([1-9]{2}\) [2-9][0-9]{3,4}\-[0-9]{4}$" type="tel" class="form-control" placeholder="Telefone" /><br/>
			</div>
			<div class="col-md-4">
				<select name="tipo" id="tipo" class="form-control">
					<option value="2"> Admin</option>
					<option value="3" selected>Usuário</option>
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

<script type="text/javascript">	
	focco.adicionarUsuarioFormPost();
</script>