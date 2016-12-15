
<?php include('includes/header.php'); ?>

<?php

include "core/database.php";

$sql_query = "SELECT * FROM cotacoes;";
$result = mysqli_query($conn, $sql_query);

$rows = array();
while($row = mysqli_fetch_array($result)) $rows[] = $row;

$dolar = number_format($rows[0]['dolar'],2,",","");
$euro = number_format($rows[0]['euro'],2,",","");
$libra = number_format($rows[0]['libra'],2,",","");

?>

<main>

  <div class="row">

    <div class="col s6">
      <div class="card bg-gray">
        <div class="card-content">
          <span class="card-title center-align">Cotação de venda agora</span>
          <table>
            <thead>
              <tr>
                <th>Dólar</th>
                <th>Euro</th>
                <th>Libra</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>R$ <?php echo $dolar ?></td>
                <td>R$ <?php echo $euro ?></td>
                <td>R$ <?php echo $libra ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="col s5">
      <div class="card bg-gray">
        <div class="card-content">
          <span class="card-title center-align">Valor Econômico - Notícias</span>
          <a class="twitter-timeline" data-lang="pt" data-width="445" data-height="300" data-theme="light" data-link-color="#15325c" href="https://twitter.com/valor_economico"></a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </div>
    </div>

  </div>

  <div class="row">
    <div class="col s4">
      <div class="card bg-gray">
        <div class="card-content">
          <span class="card-title center-align">Blog do Economista João</span>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
include 'includes/footer.php'
?>