<?php

include "../includes/header.php";
include "../core/database.php";

$sql_query = sprintf("SELECT * FROM usuarios WHERE tipo > %s", $_SESSION['currentUser']['tipo']);
$result = mysqli_query($conn, $sql_query);


$rows = array();
while($row = mysqli_fetch_array($result)) $rows[] = $row;
?>
<main>
  <div class="row">
    <div class="col s12">

      <h4>Usuários</h4>
      <blockquote>
        Área para cadastro de usuários do sistema.
      </blockquote>

      <div class="section">
        <a class="waves-effect waves-light btn bg-blue right" href="/dashboard/usuarios/adicionar">Adicionar usuário <i class="material-icons right">&#xE7FE;</i></a>
      </div>

      <table class="striped responsive-table">
        <thead>
          <tr>
            <th>Login</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Tipo</th>
            <th colspan="3"></th>
          </tr>
        </thead>
        <tbody>
          <?php

          foreach($rows as $r){
            echo
            '<tr>
            <td>'.$r["login"].'</td>
            <td>'.$r["nome"].'</td>
            <td>'.$r["email"].'</td>
            <td>'.$r["telefone"].'</td>
            <td>'.($r["tipo"] == 2 ? "Admin" : "Usuário").'</td>
            <td><a href="/dashboard/usuarios/alterar?usuarioId='.$r["id"].'"><i class="material-icons" title="Editar Usuário">&#xE3C9;</i></a></td>
            <td><a href="/dashboard/usuarios/excluir?usuarioId='.$r["id"].'"><i class="material-icons" title="Excluir usuário">&#xE92B;</i></a></td>
            <td><a href="/dashboard/usuarios/resetarSenha?usuarioId='.$r["id"].'"><i class="material-icons" title="Resetar Senha">&#xE898;</i></a></td>
          </tr>';
        }
        ?>

      </tbody>
    </table>
  </div>
</div>
</main>

<?php
include '../includes/footer.php';
?>