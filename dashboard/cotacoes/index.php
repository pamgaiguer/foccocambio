<?php

include "../includes/header.php";
include "../core/database.php";

$sql_query = "SELECT * FROM cotacoes;";
$result = mysqli_query($conn, $sql_query);


$rows = array();
while($row = mysqli_fetch_array($result)) $rows[] = $row;

$dolar = $rows[0]['dolar'];
$euro = $rows[0]['euro'];
$libra = $rows[0]['libra'];


?>
<main>
  <div class="row">
    <div class="col s12">
      <h4>Cotações</h4>
      <blockquote>
        Área para manutenção da tabela diária de cotações de moedas.
      </blockquote>
    </div>
  </div>

<!--   <div class="row">
    <div class="col s12">
      <div class="alert success" style="display: none;">
        <p>Tabela atualizada com sucesso</p>
      </div>
      <div class="alert error" style="display: none;">
        <p>Erro ao tentar atualizar a tabela</p>
      </div>
    </div>
  </div> -->

  <form id="form-cotacoes">
    <div class="row">
      <div class="col s4">

        <table class="cotation-table">
          <thead>
            <tr>
              <th class="tooltipped" data-moeda="USD" data-position="top" data-delay="50" data-tooltip="Dólar Americano">USD</th>
              <th class="tooltipped" data-moeda="EUR" data-position="top" data-delay="50" data-tooltip="Euro">EUR</th>
              <th class="tooltipped" data-moeda="GBP" data-position="top" data-delay="50" data-tooltip="Libra">GBP</th>
              <th class="tooltipped" data-moeda="AUD" data-position="top" data-delay="50" data-tooltip="Dólar Australiano">AUD</th>
              <th class="tooltipped" data-moeda="CAD" data-position="top" data-delay="50" data-tooltip="Dólar Canadense">CAD</th>
              <th class="tooltipped" data-moeda="CHF" data-position="top" data-delay="50" data-tooltip="Franco Suíco">CHF</th>
              <th class="tooltipped" data-moeda="JPY" data-position="top" data-delay="50" data-tooltip="Iên">JPY</th>
              <th class="tooltipped" data-moeda="NZD" data-position="top" data-delay="50" data-tooltip="Dólar Neozelandês">NZD</th>
              <th class="tooltipped" data-moeda="CLP" data-position="top" data-delay="50" data-tooltip="Peso Chileno">CLP</th>
              <th class="tooltipped" data-moeda="MXN" data-position="top" data-delay="50" data-tooltip="Peso Mexicano">MXN</th>
              <th class="tooltipped" data-moeda="UYU" data-position="top" data-delay="50" data-tooltip="Peso Uruguaio">UYU</th>
              <th class="tooltipped" data-moeda="ARS" data-position="top" data-delay="50" data-tooltip="Peso Argentino">ARS </th>
              <th class="tooltipped" data-moeda="ZAR" data-position="top" data-delay="50" data-tooltip="Rand Sul Africano">ZAR</th>
              <th class="tooltipped" data-moeda="CNY" data-position="top" data-delay="50" data-tooltip="Yuan Chinês">CNY</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td id="td-USD"></td>
              <td id="td-EUR"></td>
              <td id="td-GBP"></td>
              <td id="td-AUD"></td>
              <td id="td-CAD"></td>
              <td id="td-CHF"></td>
              <td id="td-JPY"></td>
              <td id="td-NZD"></td>
              <td id="td-CLP"></td>
              <td id="td-MXN"></td>
              <td id="td-UYU"></td>
              <td id="td-ARS"></td>
              <td id="td-ZAR"></td>
              <td id="td-CNY"></td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>

  </form>
</main>

<?php
include '../includes/footer.php';
?>

<script type="text/javascript">
  focco.cotacoesFormPost();
</script>