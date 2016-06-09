<?php

include "../core/database.php";
include "../includes/header.php";

$sql_query = sprintf("SELECT * FROM usuarios WHERE id = %s", $_GET['usuarioId']);
$result = mysql_query($sql_query, $conn);

$rows = array();
while($row = mysql_fetch_array($result)) $rows[] = $row;

foreach($rows as $r){
  $id = $r['id'];
  $nome = $r['nome'];
  $login = $r['login'];
  $email = $r['email'];
  $telefone = $r['telefone'];
  $tipo = $r['tipo'];
}

?>
<main>
  <div class="row">
    <div class="col s12">

    <h4 class="title-forms">Alterar usuário <strong>[NOME_USUARIO]</strong></h4>

      <form action="alterarPost.php" method="POST" class="form-group" id="form-alterar-usuario">
        <div class="row">
          <input name="id" id="id" type="hidden" value="<?php echo $id ?>" />
          <div class="input-field col s6">
            <input name="nome" id="nome" value="<?php echo $nome ?>" type="text" />
            <label for="nome">Nome</label>
          </div>
          <div class="input-field col s6">
            <input name="login" id="login" value="<?php echo $login ?>" type="text"/>
            <label for="login">Login</label>
          </div>
          <div class="input-field col s6">
            <input name="email" id="email" value="<?php echo $email ?>" type="text"/>
            <label for="login">E-mail</label>
          </div>
          <div class="input-field col s6">
            <input name="telefone" id="telefone" value="<?php echo $telefone ?>" type="tel" />
            <label for="telefone">Telefone</label>
          </div>
          <div class="input-field col s12">
            <select name="tipo" id="tipo" class="form-control">
              <option value="2" <?php if ($tipo == 2) echo "selected" ?>> Admin</option>
              <option value="3" <?php if ($tipo == 3) echo "selected" ?>>Usuário</option>
            </select>
            <label for="tipo">Tipo de Usuário</label>
          </div>
          <div class="col s12">
            <input type="submit" value="Alterar" class="waves-effect waves-light btn bg-blue right" />
          </div>
        </div>
      </form>
    </div>
  </div>
</main>


<?php
include "../includes/footer.php";
?>

<script type="text/javascript">
  $(document).ready(function() {
    $('select').material_select();
  });
  focco.alterarUsuarioFormPost();
</script>