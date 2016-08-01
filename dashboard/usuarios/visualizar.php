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
<main>
  <div class="row">
    <div class="col s12">
<br>
      <a href="/dashboard/usuarios/"><i class="material-icons left">&#xE5C4;</i> Voltar para Usuários</a>
      <h4 class="title-forms">Visualizar usuário <strong><?php echo $nome ?></strong></h4>
      <div class="row">

        <table class="responsive-table">
          <thead>
            <tr>
              <th data-field="campos" colspan="2">Dados do usuário</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Nome</td>
              <td><?php echo $nome ?></td>
            </tr>
            <tr>
              <td>Login</td>
              <td><?php echo $login ?></td>
            </tr>
            <tr>
              <td>E-mail</td>
              <td><?php echo $email ?></td>
            </tr>
            <tr>
              <td>Telefone</td>
              <td><?php echo $telefone ?></td>
            </tr>
            <tr>
              <td>Tipo de usuário</td>
              <td><?php echo $tipo == 1 ? "Administrador" : "Usuário Simples" ?></td>
            </tr>
          </tbody>
        </table>
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