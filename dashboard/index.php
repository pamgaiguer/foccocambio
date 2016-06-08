<?php
session_start();
include 'includes/header_index.php'
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

          <div class="input-field">
            <i class="material-icons prefix">person</i>
            <input id="login" type="email" class="validate">
            <label for="login" data-error="Preencha corretamente" data-success="Ok, aguardando senha">Login</label>
          </div>

          <div class="input-field">
            <i class="material-icons prefix">lock</i>
            <input id="password" type="password" class="validate">
            <label for="password">Senha</label>
          </div>

          <div class="section">
            <button class="btn right indigo darken-2 waves-effect waves-light" type="submit" name="action">
              Entrar
              <i class="material-icons right">send</i>
            </button>
          </div>

        </div>


      </div>
    </div>
  </div>
</div>

<?php
include 'includes/footer.php'
?>