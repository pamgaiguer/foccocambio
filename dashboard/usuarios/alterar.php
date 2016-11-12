<?php

include "../core/database.php";
include "../includes/header.php";

$sql_query = sprintf("SELECT * FROM usuarios WHERE id = %s", $_GET['usuarioId']);
$result = mysqli_query($conn, $sql_query);

$rows = array();
while($row = mysqli_fetch_array($result)) $rows[] = $row;

foreach($rows as $r){
  $id = $r['id'];
  $nome = $r['nome'];
  $login = $r['login'];
  $email = $r['email'];
  $telefone = $r['telefone'];
  $tipo = $r['tipo'];
}

?>
<main class="users">
  <div class="row">
    <div class="col s8">
      <br>

      <nav class="bg-blue">
        <div class="nav-wrapper">
          <div class="col s12">
            <a href="/dashboard/usuarios/" class="breadcrumb">Usuários</a>
            <a href="#!" class="breadcrumb">Editar</a>
          </div>
        </div>
      </nav>

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

          <form action="alterarPost.php" method="POST" id="form-alterar-usuario" class="form-group">
            <input name="id" id="id" type="hidden" value="<?php echo $id ?>" />

            <div class="input-field col s6">
              <i class="material-icons prefix">&#xE7FD;</i>
              <input name="nome" id="nome" value="<?php echo $nome ?>" type="text" />
              <label for="nome">Nome</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix">&#xE86F;</i>
              <input name="login" id="login" value="<?php echo $login ?>" type="text"/>
              <label for="login">Login</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix">&#xE158;</i>
              <input name="email" id="email" value="<?php echo $email ?>" type="text"/>
              <label for="email">E-mail</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix">&#xE851;</i>
              <select name="tipo" id="tipo" class="form-control">
                <option value="2" <?php if ($tipo == 2) echo "selected" ?>> Admin</option>
                <option value="3" <?php if ($tipo == 3) echo "selected" ?>>Usuário</option>
              </select>
              <label for="tipo">Tipo de Usuário</label>
            </div>

            <div class="spacing"></div>
            <div>
              <input type="submit" value="Editar" class="btn bg-blue" />
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

<script type="text/javascript">
  focco.alterarUsuarioFormPost();
</script>