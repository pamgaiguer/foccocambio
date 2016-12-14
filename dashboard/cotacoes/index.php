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
              <th class="tooltipped" data-position="top" data-delay="50" data-tooltip="Dólar Americano">USD</th>
              <th class="tooltipped" data-position="top" data-delay="50" data-tooltip="Euro">EUR</th>
              <th class="tooltipped" data-position="top" data-delay="50" data-tooltip="Libra">GBP</th>
              <th class="tooltipped" data-position="top" data-delay="50" data-tooltip="Dólar Australiano">AUD</th>
              <th class="tooltipped" data-position="top" data-delay="50" data-tooltip="Dólar Canadense">CAD</th>
              <th class="tooltipped" data-position="top" data-delay="50" data-tooltip="Franco Suíco">CHF</th>
              <th class="tooltipped" data-position="top" data-delay="50" data-tooltip="Iên">JPY</th>
              <th class="tooltipped" data-position="top" data-delay="50" data-tooltip="Dólar Neozelandês">NZD</th>
              <th class="tooltipped" data-position="top" data-delay="50" data-tooltip="Peso Chileno">CLP</th>
              <th class="tooltipped" data-position="top" data-delay="50" data-tooltip="Peso Mexicano">MXN</th>
              <th class="tooltipped" data-position="top" data-delay="50" data-tooltip="Peso Uruguaio">UYU</th>
              <th class="tooltipped" data-position="top" data-delay="50" data-tooltip="Peso Argentino">ARS </th>
              <th class="tooltipped" data-position="top" data-delay="50" data-tooltip="Rand Sul Africano">ZAR</th>
              <th class="tooltipped" data-position="top" data-delay="50" data-tooltip="Yuan Chinês">CNY</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>item1</td>
              <td>item2</td>
              <td>item3</td>
              <td>item4</td>
              <td>item5</td>
              <td>item6</td>
              <td>item7</td>
              <td>item8</td>
              <td>item9</td>
              <td>item10</td>
              <td>item11</td>
              <td>item12</td>
              <td>item13</td>
              <td>item14</td>
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