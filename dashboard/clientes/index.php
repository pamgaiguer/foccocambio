<?php

include "../includes/header.php";
include "../core/database.php";

$sql_query = "SELECT * FROM clientes ORDER BY dataCadastro DESC LIMIT 15;";
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
      <form id="form-busca-clientes">
        <input id="input-cpfcnpj" name="cpfCnpj" type="search" style="max-width: 300px;" required/>
        <input type="submit" value="buscar"/>
      </form>
        <a class="waves-effect waves-light btn bg-blue right" href="/dashboard/clientes/adicionar">Adicionar cliente <i class="material-icons right">person_add</i></a>
      </div>
      <div>
        <table class="striped responsive-table">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Email</th>
              <th>Telefone</th>
              <th class="center">Visualizar</th>
              <th class="center">Editar</th>
              <th class="center">Excluir</th>
            </tr>
          </thead>
          <tbody id="table-body-clientes">
            <?php
            foreach($rows as $r){
              echo
              '<tr>
              <td>'.$r["razaoSocial"].'</td>
              <td>'.$r["email"].'</td>
              <td>'.$r["telCelular"].' / '.$r["telFixo"].'</td>
              <td class="center"><a href="/dashboard/clientes/visualizar?clienteId='.$r["id"].'"><i class="material-icons" title="Visualizar cliente">&#xE85D;</i></a></td>
              <td class="center"><a href="/dashboard/clientes/alterar?clienteId='.$r["id"].'"><i class="material-icons" title="Editar cliente">&#xE3C9;</i></a></td>
              <td class="center"><a href="/dashboard/clientes/excluir?clienteId='.$r["id"].'"><i class="material-icons" title="Excluir cliente">&#xE92B;</i></a></td>
            </tr>';
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</main>

<?php
include '../includes/footer.php';
?>

<script>
  focco.buscarClienteFormPost();
</script>