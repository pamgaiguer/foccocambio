<?php
include 'includes/header_index.php';
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
          <form action="" id="form-login">


          <div id="form-erro"></div>

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
              <button class="btn right bg-blue waves-effect waves-light" type="submit">
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
include 'includes/footer.php'
?>