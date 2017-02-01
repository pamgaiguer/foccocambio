<?php

include "../core/database.php";
include "../includes/header.php";

$sql_query = sprintf("SELECT * FROM BLOG WHERE id = %s", $_GET['id']);
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
<main class="users">
  <div class="row">
    

      <div id="general-data">
        
        <div class="col s12">
          <h2><?php echo $titulo ?></h2>          
          <h3><?php echo $subtitulo ?></h3>
          <h4><?php echo $usuarios[0]["nome"] ?></h4>
          <h5><?php echo date_format(new DateTime($data), 'd/m/Y') ?></h5>

          <div><?php echo $conteudo ?></div>  
        </div>
        
      </div>

    
  </div>


</main>

<?php
include "../includes/footer.php";
?>