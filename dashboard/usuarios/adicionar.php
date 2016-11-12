<?php

include "../core/database.php";
include "../includes/header.php";
?>

<main>
  <div class="row">
    <div class="col s12">

<br>

      <a class="btn bg-blue" href="/dashboard/usuarios/"><i class="material-icons left">&#xE5C4;</i> Voltar para Usuários</a>
      <div class="spacing"></div>

      <ul class="tabs">
        <li class="tab col s3"><a class="active left-align" href="#general-data">Dados Gerais</a></li>
      </ul>

      <div class="spacing"></div>

      <div id="general-data">
        <div class="col s3">
          <div class="profile-user">
            <div class="profile-img">
              <img class="materialboxed" src="../images/user_placeholder.png">
            </div>
          </div>
        </div>
        <div class="col s9">

          <form action="adicionarPost.php" method="POST" class="form-group" id="form-adicionar-usuario">

            <div class="input-field col s6">
              <i class="material-icons prefix">&#xE7FD;</i>
              <input name="nome" id="nome" type="text" />
              <label for="nome">Nome</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix">&#xE86F;</i>
              <input name="login" id="login" type="text"/>
              <label for="login">Login</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix">&#xE158;</i>
              <input name="email" id="email" type="text"/>
              <label for="email">E-mail</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix">&#xE851;</i>
              <select name="tipo" id="tipo">
                <option value="2" class="bg-blue"> Admin</option>
                <option value="3" selected>Usuário</option>
              </select>
              <label for="tipo">Tipo de Usuário</label>
            </div>
            <div class="spacing"></div>
            <div>
              <input type="submit" value="Cadastrar" class="btn bg-blue" />
            </div>

          </form>

        </div>
      </div>

    </div>
  </div>
</main>

<?php
include "../includes/footer.php";
?>

<script>
  focco.adicionarUsuarioFormPost();
</script>