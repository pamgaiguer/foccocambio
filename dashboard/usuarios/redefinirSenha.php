<?php 
	session_start();
	include "../includes/header_index.php";
?>

<?php


?>
<div class="container">
  <div class="row">
    <div class="col s6 offset-s3">
      <div class="card-panel">

        <div class="section">
          <h4>
            Focco Dashboard
          </h4>
        </div>

        <div class="section">
          <form action="redefinirSenhaPost.php" method="post" class="form-group" id="form-redefinir-senha">			


          	<input id="id" name="id" type="hidden" value="<?php echo $_GET['usuarioId'] ?>"/><br/>

            <div class="input-field">
              <i class="material-icons prefix">person</i>
              <input id="senha" type="text" class="validate">
              <label for="senha" data-error="Preencha corretamente">Senha</label>
            </div>

            <div class="section">
              <button class="btn right indigo darken-2 waves-effect waves-light" type="submit">
                Entrar
                <i class="material-icons right">send</i>
              </button>
            </div>
          </form>
        </div>


      </div>
    </div>
  </div>
</div>


<?php 
	include "../includes/footer.php";
?>


<script type="text/javascript">	
	focco.redefinirSenhaFormPost();	
</script>
