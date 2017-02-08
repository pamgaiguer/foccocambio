<?php

include "../includes/header.php";
include "../core/database.php";

?>
<main class="cotacoes">
  <div class="row">
    <div class="col s12">
      <h4>Cotações</h4>
      <blockquote>
        Área para visualização dos valores comerciais do robô de câmbio - valores enviados pela Enfoque.
        <br>
        Intervalo entre o envio das cotações: 2s
      </blockquote>
    </div>
  </div>

  <form id="form-cotacoes">
    <div class="row">
      <div class="col s3">

        <table class="cotation-table striped">
          <thead>
            <tr>
              <th>moeda</th>
              <th>Valor</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="tooltipped" data-moeda="USD" data-position="top" data-delay="50" data-tooltip="Dólar Americano">USD</td>
              <td id="td-USD"><span></span></td>
            </tr>
            <tr>
              <td class="tooltipped" data-moeda="EUR" data-position="top" data-delay="50" data-tooltip="Euro">EUR</td>
              <td id="td-EUR"><span></span></td>
            </tr>
            <tr>
              <td class="tooltipped" data-moeda="GBP" data-position="top" data-delay="50" data-tooltip="Libra">GBP</td>
              <td id="td-GBP"><span></span></td>
            </tr>
            <tr>
              <td class="tooltipped" data-moeda="AUD" data-position="top" data-delay="50" data-tooltip="Dólar Australiano">AUD</td>
              <td id="td-AUD"><span></span></td>
            </tr>
            <tr>
              <td class="tooltipped" data-moeda="CAD" data-position="top" data-delay="50" data-tooltip="Dólar Canadense">CAD</td>
              <td id="td-CAD"><span></span></td>
            </tr>
            <tr>
              <td class="tooltipped" data-moeda="CHF" data-position="top" data-delay="50" data-tooltip="Franco Suíco">CHF</td>
              <td id="td-CHF"><span></span></td>
            </tr>
            <tr>
              <td class="tooltipped" data-moeda="JPY" data-position="top" data-delay="50" data-tooltip="Iên">JPY</td>
              <td id="td-JPY"><span></span></td>
            </tr>
            <tr>
              <td class="tooltipped" data-moeda="NZD" data-position="top" data-delay="50" data-tooltip="Dólar Neozelandês">NZD</td>
              <td id="td-NZD"><span></span></td>
            </tr>
            <tr>
              <td class="tooltipped" data-moeda="CLP" data-position="top" data-delay="50" data-tooltip="Peso Chileno">CLP</td>
              <td id="td-CLP"><span></span></td>
            </tr>
            <tr>
              <td class="tooltipped" data-moeda="MXN" data-position="top" data-delay="50" data-tooltip="Peso Mexicano">MXN</td>
              <td id="td-MXN"><span></span></td>
            </tr>
            <tr>
              <td class="tooltipped" data-moeda="UYU" data-position="top" data-delay="50" data-tooltip="Peso Uruguaio">UYU</td>
              <td id="td-UYU"><span></span></td>
            </tr>
            <tr>
              <td class="tooltipped" data-moeda="ARS" data-position="top" data-delay="50" data-tooltip="Peso Argentino">ARS </td>
              <td id="td-ARS"><span></span></td>
            </tr>
            <tr>
              <td class="tooltipped" data-moeda="ZAR" data-position="top" data-delay="50" data-tooltip="Rand Sul Africano">ZAR</td>
              <td id="td-ZAR"><span></span></td>
            </tr>
            <tr>
              <td class="tooltipped" data-moeda="CNY" data-position="top" data-delay="50" data-tooltip="Yuan Chinês">CNY</td>
              <td id="td-CNY"><span></span></td>
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