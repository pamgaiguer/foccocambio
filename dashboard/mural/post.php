<?php

include "../core/database.php";
include "../includes/header.php";

$sql_query = sprintf("SELECT * FROM mural WHERE id = %s", $_GET['id']);
$result = mysqli_query($conn, $sql_query);

$rows = array();
while($row = mysqli_fetch_array($result)) $rows[] = $row;

foreach($rows as $r){    
  $id = $r['id'];
  $titulo = $r['titulo'];
  $subtitulo = $r['subtitulo'];
  $data = $r['data'];
  $usuarioId = $r['usuarioId'];
  $conteudo = $r['conteudo'];

  $usuarios = array();
  $sql_query = sprintf("SELECT * FROM usuarios WHERE id = %s", $r['usuarioId']);
  $result = mysqli_query($conn, $sql_query);
  while($row = mysqli_fetch_array($result)) $usuarios[] = $row;

}
?>
<main class="mural">
  <div class="spacing"></div>
  <div class="row">
    <div class="col s12">
      <a class="btn bg-blue" href="/dashboard/mural/"><i class="material-icons left">&#xE5C4;</i> Voltar para tela de posts</a>
    </div>
  </div>
  <div id="general-data">
    <div class="row mb-0">
      <div class="col s12">
        <p class="title">
          Título: <?php echo $titulo; ?>
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col s12">
        <p class="subtitle">
          Subtítulo: <?php echo $subtitulo; ?>
        </p>
      </div>
    </div>

    <div class="spacing"></div>


    <div class="row">
      <div class="col s6">
        <p class="post-author">
          Postado por: <?php echo $usuarios[0]["nome"]; ?>
        </p>
      </div>
      <div class="col s6">
        <p class="post-date">
          Postado em: <?php echo date_format(new DateTime($data), 'd/m/Y'); ?>
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col s12">

        <div class="post-content">
          Texto:
          <?php           
          echo $conteudo; ?>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
include "../includes/footer.php";
?>