<?php

  include "../core/database.php";
  include "../includes/header.php";
?>

<main>
<div class="row">
  <div class="col s12">
  <h4 class="title-forms">Adicionar usuários</h4>

    <form action="adicionarPost.php" method="POST" class="form-group" id="form-adicionar-usuario">

    <div class="row">

      <div class="input-field col s6">
        <input name="nome" id="nome" type="text" />
        <label for="nome">Nome</label>
      </div>
      <div class="input-field col s6">
        <input name="login" id="login" type="text"/><br/>
        <label for="login">Login</label>
      </div>

      <div class="input-field col s6">
        <input name="email" id="email" type="text"/><br/>
        <label for="login">E-mail</label>
      </div>

      <div class="input-field col s6">
        <input name="telefone" id="telefone" pattern="^\([1-9]{2}\) [2-9][0-9]{3,4}\-[0-9]{4}$" type="tel" />
        <label for="telefone">Telefone</label>
      </div>

      <div class="input-field col s12">
        <select name="tipo" id="tipo">
          <option value="2" class="bg-blue"> Admin</option>
          <option value="3" selected>Usuário</option>
        </select>
        <label for="tipo">Tipo de Usuário</label>
      </div>

      <div class="col s12">
        <input type="submit" value="Cadastrar" class="waves-effect waves-light btn bg-blue right" />
      </div>

    </div>
    </form>
  </div>
</div>
</main>


<?php
  include "../includes/footer.php";
?>

<script>
  $(document).ready(function() {
      $('select').material_select();
  });
  focco.adicionarUsuarioFormPost();
</script>