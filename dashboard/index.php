<?php
include 'includes/header_index.php';
?>
<div class="container">
  <div class="row">
    <div class="col s6 offset-s3">
      <div class="card-panel">

        <div class="section center">
        <img src="images/logo_topo.png" alt="Focco Cambio">
        <h5><em>Dashboard</em></h5>
        </div>

        <div class="section">
          <form action="" id="form-login">

            <div class="input-field">
              <i class="material-icons prefix">person</i>
              <input id="login" type="text" class="validate">
              <label for="login" data-error="Preencha corretamente">Login</label>
            </div>

            <div class="input-field">
              <i class="material-icons prefix">lock</i>
              <input id="senha" type="password" class="validate">
              <label for="senha">Senha</label>
            </div>

            <div class="section">
              <div id="form-erro" class="center red-text"></div>
            </div>

            <div class="section">
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
include 'includes/footer.php'
?>