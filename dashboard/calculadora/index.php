<?php

include "../includes/header.php";
include "../core/database.php";

?>
<main>
  <div class="row">
    <div class="col s12">
      <h4>Calculadora</h4>
      <blockquote>
        Área para cálculo de cotações
      </blockquote>
    </div>
  </div>


<div class="row">
  <div class="col s12">
    <table class="striped">
      <thead>
        <tr>
          <th>Moeda</th>
          <th>Comercial</th>
          <th>% Custo</th>
          <th>Custo Focco</th>
          <th>Margs Ponto</th>
          <th>Tx s/ IOF</th>
          <th>Tx c/ IOF</th>
          <th>Observação</th>
          <th>Tx. Final</th>
          <th>Tx s/ IOF boletagem</th>
          <th>Marg. Liquida %</th>
          <th>Marg. Liquida</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="moeda-name">USD</td>
          <td><input type="text" id="USD-comercial" value=""></td>
          <td><input type="text" id="USD-custo" value="1,7"></td>
          <td><input type="text" id="USD-custoFocco" value=""></td>
          <td><input type="text" value="0.053"></td>
          <td><input type="text" value="3.4920"></td>
          <td><input type="text" value="3.5304"></td>
          <td>acima de 5.000 -1</td>
          <td><input type="text" value="0.0000"></td>
          <td><input type="text" value="0.0384"></td>
          <td><input type="text" value="1.5178"></td>
          <td><input type="text" value="1.5178"></td>
        </tr>
        <tr>
          <td class="moeda-name">EUR</td>
          <td><input type="text" id="EUR-comercial" value=""></td>
          <td><input type="text" id="EUR-custo" value="2,0"></td>
          <td><input type="text" id="EUR-custoFocco" value=""></td>
          <td><input type="text" value="0.053"></td>
          <td><input type="text" value="3.4920"></td>
          <td><input type="text" value="3.5304"></td>
          <td>acima de 5.000 -1</td>
          <td><input type="text" value="0.0000"></td>
          <td><input type="text" value="0.0384"></td>
          <td><input type="text" value="1.5178"></td>
          <td><input type="text" value="1.5178"></td>
        </tr>
        <tr>
          <td class="moeda-name">GBP</td>
          <td><input type="text" id="GBP-comercial" value=""></td>
          <td><input type="text" id="GBP-custo" value="3,9"></td>
          <td><input type="text" id="GBP-custoFocco" value=""></td>
          <td><input type="text" value="0.053"></td>
          <td><input type="text" value="3.4920"></td>
          <td><input type="text" value="3.5304"></td>
          <td>acima de 5.000 -1</td>
          <td><input type="text" value="0.0000"></td>
          <td><input type="text" value="0.0384"></td>
          <td><input type="text" value="1.5178"></td>
          <td><input type="text" value="1.5178"></td>
        </tr>
        <tr>
          <td class="moeda-name">AUD</td>
          <td><input type="text" id="AUD-comercial" value=""></td>
          <td><input type="text" id="AUD-custo" value="4,5"></td>
          <td><input type="text" id="AUD-custoFocco" value=""></td>
          <td><input type="text" value="0.053"></td>
          <td><input type="text" value="3.4920"></td>
          <td><input type="text" value="3.5304"></td>
          <td>acima de 5.000 -1</td>
          <td><input type="text" value="0.0000"></td>
          <td><input type="text" value="0.0384"></td>
          <td><input type="text" value="1.5178"></td>
          <td><input type="text" value="1.5178"></td>
        </tr>
        <tr>
          <td class="moeda-name">CAD</td>
          <td><input type="text" id="CAD-comercial" value=""></td>
          <td><input type="text" id="CAD-custo" value="4,5"></td>
          <td><input type="text" id="CAD-custoFocco" value=""></td>
          <td><input type="text" value="0.053"></td>
          <td><input type="text" value="3.4920"></td>
          <td><input type="text" value="3.5304"></td>
          <td>acima de 5.000 -1</td>
          <td><input type="text" value="0.0000"></td>
          <td><input type="text" value="0.0384"></td>
          <td><input type="text" value="1.5178"></td>
          <td><input type="text" value="1.5178"></td>
        </tr>
        <tr>
          <td class="moeda-name">CHF</td>
          <td><input type="text" id="CHF-comercial" value=""></td>
          <td><input type="text" id="CHF-custo" value="4,5"></td>
          <td><input type="text" id="CHF-custoFocco" value=""></td>
          <td><input type="text" value="0.053"></td>
          <td><input type="text" value="3.4920"></td>
          <td><input type="text" value="3.5304"></td>
          <td>acima de 5.000 -1</td>
          <td><input type="text" value="0.0000"></td>
          <td><input type="text" value="0.0384"></td>
          <td><input type="text" value="1.5178"></td>
          <td><input type="text" value="1.5178"></td>
        </tr>
        <tr>
          <td class="moeda-name">JPY</td>
          <td><input type="text" id="JPY-comercial" value=""></td>
          <td><input type="text" id="JPY-custo" value="5,5"></td>
          <td><input type="text" id="JPY-custoFocco" value=""></td>
          <td><input type="text" value="0.053"></td>
          <td><input type="text" value="3.4920"></td>
          <td><input type="text" value="3.5304"></td>
          <td>acima de 5.000 -1</td>
          <td><input type="text" value="0.0000"></td>
          <td><input type="text" value="0.0384"></td>
          <td><input type="text" value="1.5178"></td>
          <td><input type="text" value="1.5178"></td>
        </tr>
        <tr>
          <td class="moeda-name">NZD</td>
          <td><input type="text" id="NZD-comercial" value=""></td>
          <td><input type="text" id="NZD-custo" value="5,0"></td>
          <td><input type="text" id="NZD-custoFocco" value=""></td>
          <td><input type="text" value="0.053"></td>
          <td><input type="text" value="3.4920"></td>
          <td><input type="text" value="3.5304"></td>
          <td>acima de 5.000 -1</td>
          <td><input type="text" value="0.0000"></td>
          <td><input type="text" value="0.0384"></td>
          <td><input type="text" value="1.5178"></td>
          <td><input type="text" value="1.5178"></td>
        </tr>
        <tr>
          <td class="moeda-name">CLP</td>
          <td><input type="text" id="CLP-comercial" value=""></td>
          <td><input type="text" id="CLP-custo" value="7,5"></td>
          <td><input type="text" id="CLP-custoFocco" value=""></td>
          <td><input type="text" value="0.053"></td>
          <td><input type="text" value="3.4920"></td>
          <td><input type="text" value="3.5304"></td>
          <td>acima de 5.000 -1</td>
          <td><input type="text" value="0.0000"></td>
          <td><input type="text" value="0.0384"></td>
          <td><input type="text" value="1.5178"></td>
          <td><input type="text" value="1.5178"></td>
        </tr>
        <tr>
          <td class="moeda-name">MXN</td>
          <td><input type="text" id="MXN-comercial" value=""></td>
          <td><input type="text" id="MXN-custo" value="7,5"></td>
          <td><input type="text" id="MXN-custoFocco" value=""></td>
          <td><input type="text" value="0.053"></td>
          <td><input type="text" value="3.4920"></td>
          <td><input type="text" value="3.5304"></td>
          <td>acima de 5.000 -1</td>
          <td><input type="text" value="0.0000"></td>
          <td><input type="text" value="0.0384"></td>
          <td><input type="text" value="1.5178"></td>
          <td><input type="text" value="1.5178"></td>
        </tr>
        <tr>
          <td class="moeda-name">UYU</td>
          <td><input type="text" id="UYU-comercial" value=""></td>
          <td><input type="text" id="UYU-custo" value="7,5"></td>
          <td><input type="text" id="UYU-custoFocco" value=""></td>
          <td><input type="text" value="0.053"></td>
          <td><input type="text" value="3.4920"></td>
          <td><input type="text" value="3.5304"></td>
          <td>acima de 5.000 -1</td>
          <td><input type="text" value="0.0000"></td>
          <td><input type="text" value="0.0384"></td>
          <td><input type="text" value="1.5178"></td>
          <td><input type="text" value="1.5178"></td>
        </tr>
        <tr>
          <td class="moeda-name">ZAR</td>
          <td><input type="text" id="ZAR-comercial" value=""></td>
          <td><input type="text" id="ZAR-custo" value="8,5"></td>
          <td><input type="text" id="ZAR-custoFocco" value=""></td>
          <td><input type="text" value="0.053"></td>
          <td><input type="text" value="3.4920"></td>
          <td><input type="text" value="3.5304"></td>
          <td>acima de 5.000 -1</td>
          <td><input type="text" value="0.0000"></td>
          <td><input type="text" value="0.0384"></td>
          <td><input type="text" value="1.5178"></td>
          <td><input type="text" value="1.5178"></td>
        </tr>
        <tr>
          <td class="moeda-name">ARS</td>
          <td><input type="text" id="ARS-comercial" value=""></td>
          <td><input type="text" id="ARS-custo" value="8,0"></td>
          <td><input type="text" id="ARS-custoFocco" value=""></td>
          <td><input type="text" value="0.053"></td>
          <td><input type="text" value="3.4920"></td>
          <td><input type="text" value="3.5304"></td>
          <td>acima de 5.000 -1</td>
          <td><input type="text" value="0.0000"></td>
          <td><input type="text" value="0.0384"></td>
          <td><input type="text" value="1.5178"></td>
          <td><input type="text" value="1.5178"></td>
        </tr>
        <tr>
          <td class="moeda-name">CNY</td>
          <td><input type="text" id="CNY-comercial" value=""></td>
          <td><input type="text" id="CNY-custo" value="7,5"></td>
          <td><input type="text" id="CNY-custoFocco" value=""></td>
          <td><input type="text" value="0.053"></td>
          <td><input type="text" value="3.4920"></td>
          <td><input type="text" value="3.5304"></td>
          <td>acima de 5.000 -1</td>
          <td><input type="text" value="0.0000"></td>
          <td><input type="text" value="0.0384"></td>
          <td><input type="text" value="1.5178"></td>
          <td><input type="text" value="1.5178"></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

</main>

<?php
include '../includes/footer.php';
?>

<script type="text/javascript">
  focco.calculadora();
</script>