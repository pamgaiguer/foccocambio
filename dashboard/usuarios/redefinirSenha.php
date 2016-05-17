<?php 
	include "../includes/header.php";
?>


<div class="row">
	<div class="col-md-4 col-md-offset-4 col-sm-12">
		<div id="form-erro" class="col-md-12 text-center"></div>
		<form action="redefinirSenhaPost.php" method="post" class="form-group" id="form-redefinir-senha">			
			<input id="id" name="id" type="hidden" value="<?php echo $_GET['usuarioId'] ?>"/><br/>
			<input id="senha" name="senha" type="password" class="form-control text-center" placeholder="Senha" /><br/>
			<input type="submit" value=">>>" class="btn btn-primary col-md-10 col-md-offset-1 col-xs-12" /><br/>
		</form>
	</div>
</div>


<?php 
	include "../includes/footer.php";
?>


<script type="text/javascript">	
	focco.redefinirSenhaFormPost();	
</script>
