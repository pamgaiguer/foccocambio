
<?php include('includes/header.php'); ?>

<?php

include "dashboard/core/database.php";

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
    <div class="col s12">
      <h4 class="">Dashboard</h4>
    </div>
  </div>


  <div class="row">
    <div class="col s4">

      <div class="card grey lighten-3">
        <div class="card-content">
          <span class="card-title">Cotação de venda agora</span>

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
        <div class="card-action right-align">
          <a href="cotacoes/">Editar cotações</a>
        </div>
      </div>
    </div>
  </div>


</main>

<?php
include 'includes/footer.php'
?>