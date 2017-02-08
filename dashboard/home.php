<?php include('includes/header.php'); ?>

<?php
include "core/database.php";

$sql_query = "SELECT * FROM mural order by id desc limit 3;";
$result = mysqli_query($conn, $sql_query);
$mural = array();
while($row = mysqli_fetch_array($result)) $mural[] = $row;


$sql_query = "SELECT * FROM blog order by id desc limit 3;";
$result = mysqli_query($conn, $sql_query);
$blog = array();
while($row = mysqli_fetch_array($result)) $blog[] = $row;

?>

<main class="home">
  <div class="row">
    <div class="col s12">
      <div class="card bg-gray">
        <div class="card-content card-mural">
          <span class="card-title center-align"><strong>Mural de Avisos</strong></span>

          <ul class="collection">
            <?php
            foreach($mural as $m) {
              $usuarios = array();
              $sql_query = sprintf("SELECT * FROM usuarios WHERE id = %s", $m['usuarioId']);
              $result = mysqli_query($conn, $sql_query);
              while($row = mysqli_fetch_array($result)) $usuarios[] = $row;

              echo '
              <li class="collection-item avatar">
                <i class="material-icons circle">&#xE1B2;</i>
                <a href="/dashboard/mural/post?id='.$m['id'].'">
                  <span class="title">'.$m['titulo'].'</span>
                  <p>
                    <small><em>'.$usuarios[0]["nome"].'</em></small>
                  </p></a>
                  <a href="#!" class="secondary-content"><i class="material-icons">send</i></a>
                </li>';
              }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col s6">
          <div class="card bg-gray">
            <div class="card-content card-blog">
              <span class="card-title center-align"><strong>Blog do João</strong></span>
              <ul class="collection">
                <?php
                foreach($blog as $b) {
                  $usuarios = array();
                  $sql_query = sprintf("SELECT * FROM usuarios WHERE id = %s", $b['usuarioId']);
                  $result = mysqli_query($conn, $sql_query);
                  while($row = mysqli_fetch_array($result)) $usuarios[] = $row;

                  echo '
                  <li class="collection-item avatar">
                    <i class="material-icons circle">&#xE8CD;</i>
                    <a href="/dashboard/blog/post?id='.$b['id'].'">
                      <span class="title">'.$b['titulo'].'</span>
                      <p>
                        <small><em>'.$usuarios[0]["nome"].'</em></small>
                      </p></a>
                      <a href="#!" class="secondary-content"><i class="material-icons">send</i></a>
                    </li>';
                  }
                    ?>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col s6">
              <div class="card bg-gray">
                <div class="card-content">
                  <span class="card-title center-align">Valor Econômico - Notícias</span><br>
                  <a class="twitter-timeline" data-lang="pt" data-width="445" data-height="250" data-theme="light" data-link-color="#15325c" href="https://twitter.com/valor_economico">Tweets by valor_economico</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
              </div>
            </div>
          </div>


        </main>

        <?php
        include 'includes/footer.php'
        ?>