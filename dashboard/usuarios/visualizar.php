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
//$telefone = $r['telefone'];
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
            <a href="#!" class="breadcrumb">Visualizar</a>
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
        <div class="col s7">
          <h5><?php echo $nome ?></h5>
          <p>
            <i class="material-icons left">&#xE851;</i>
            <span><?php echo $tipo == 2 ? "Administrador" : "Usuário Simples" ?></span>
          </p>

          <p>
            <i class="material-icons left">&#xE158;</i>
            <span><?php echo $email ?></span>
          </p>

          <p>
            <i class="material-icons left">&#xE86F;</i>
            <span><?php echo $login ?></span>
          </p>
        </div>
        <div class="col s2"></div>
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