<?php
	session_start();
	include "../includes/header_index.php";
?>

<?php


?>
<div class="container">
  <div class="row">
    <div class="col s6 offset-s3">
    <div class="spacing"></div>
    <div class="spacing"></div>
    <div class="spacing"></div>
    <div class="spacing"></div>
      <div class="card-panel">

        <div class="section center">
        <h5 class="blue-focco">Acesso ao <span class="font-semibold">Dashboard Focco Câmbio</span></h5>
        <span class="blue-focco">Favor informar a nova senha</span>
        </div>

        <div class="section">
          <form action="redefinirSenhaPost.php" method="post" class="form-group" id="form-redefinir-senha">


          	<input id="id" name="id" type="hidden" value="<?php echo $_GET['usuarioId'] ?>"/><br/>

            <div class="input-field">
              <i class="material-icons prefix">person</i>
              <input id="senha" type="password" class="validate">
              <label for="senha" data-error="Preencha corretamente">Senha</label>
            </div>

            <div class="section">
            <div class="left logo-bottom">
              <img src="/images/logo_topo.png" alt="focco cambio" class="responsive-image">
            </div>
              <button class="btn right bg-blue waves-effect waves-light" type="submit">
                Entrar
                <i class="material-icons right">&#xE163;</i>
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
