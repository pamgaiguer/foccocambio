<?php

include "../includes/header.php";
include "../core/database.php";

$sql_query = "SELECT * FROM clientes";
$result = mysqli_query($conn, $sql_query);


$rows = array();
while($row = mysqli_fetch_array($result)) $rows[] = $row;
?>
<main>
  <div class="row">
    <div class="col s12">
    <h4>Clientes</h4>
      <blockquote>
        Área para cadastro de clientes Focco (PF e PJ).
      </blockquote>

      <div class="section">
        <a class="waves-effect waves-light btn bg-blue right" href="/dashboard/clientes/adicionar">Adicionar cliente <i class="material-icons right">person_add</i></a>
      </div>

      <table class="striped responsive-table">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th colspan="3"></th>            
          </tr>
        </thead>
        <tbody>
          <?php
          foreach($rows as $r){
            echo
            '<tr>
            <td>'.$r["razaoSocial"].'</td>
            <td>'.$r["email"].'</td>
            <td>'.$r["telCelular"].' / '.$r["telFixo"].'</td>

            <td><a href="/dashboard/clientes/visualizar?clienteId='.$r["id"].'"><i class="material-icons" title="Visualizar cliente">assignment</i></a></td>
            <td><a href="/dashboard/clientes/alterar?clienteId='.$r["id"].'"><i class="material-icons" title="Editar cliente">&#xE3C9;</i></a></td>
            <td><a href="/dashboard/clientes/excluir?clienteId='.$r["id"].'"><i class="material-icons" title="Excluir cliente">&#xE92B;</i></a></td>

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