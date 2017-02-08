<?php

include "../includes/header.php";
include "../core/database.php";

$sql_query = "SELECT * FROM mural ORDER BY data DESC;";
$result = mysqli_query($conn, $sql_query);


$rows = array();
while($row = mysqli_fetch_array($result)) $rows[] = $row;

?>
<main class="mural">
  <div class="row">
    <div class="col s12">
      <h4>Mural</h4>
      <blockquote>
        Área para visualizar posts do mural
      </blockquote>
    </div>
  </div>

  <div class="row">
    <div class="col s12">
      <table class="striped">
        <thead>
          <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Data</th>
            <th class="center">Excluir</th>
          </tr>
        </thead>
        <tbody>

        <?php

        foreach($rows as $r){

          $usuarios = array();
          $sql_query = sprintf("SELECT * FROM usuarios WHERE id = %s", $r['usuarioId']);
          $result = mysqli_query($conn, $sql_query);
          while($row = mysqli_fetch_array($result)) $usuarios[] = $row;

          echo '
          <tr>
            <td><a href="/dashboard/mural/post?id='.$r['id'].'">'.$r['titulo'].'</a></td>
            <td>'.$usuarios[0]["nome"].'</td>
            <td>'.date_format(new DateTime($r['data']), 'd/m/Y').'</td>
            <td class="center"><a href="/dashboard/mural/excluir?id='.$r["id"].'"><i class="material-icons" title="Excluir postagem">&#xE92B;</i></a></td>
          </tr>
          ';
        }
        ?>

        </tbody>
      </table>
    </div>
  </div>

  <?php

  if ($_SESSION['currentUser']['tipo'] < 3) echo '
  <div class="row">
    <div class="col s12">
      <a class="btn bg-blue right" href="/dashboard/mural/adicionar">Postar novo lembrete</a>
    </div>
  </div>
  ';
  ?>

</main>

<?php
include '../includes/footer.php';
?>