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
          <td><input type="text" value="3.3815"></td>
          <td><input type="text" value="1.7%"></td>
          <td><input type="text" value="3.4390"></td>
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
          <td><input type="text" value="3.3815"></td>
          <td><input type="text" value="1.7%"></td>
          <td><input type="text" value="3.4390"></td>
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
          <td><input type="text" value="3.3815"></td>
          <td><input type="text" value="1.7%"></td>
          <td><input type="text" value="3.4390"></td>
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
          <td><input type="text" value="3.3815"></td>
          <td><input type="text" value="1.7%"></td>
          <td><input type="text" value="3.4390"></td>
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
          <td><input type="text" value="3.3815"></td>
          <td><input type="text" value="1.7%"></td>
          <td><input type="text" value="3.4390"></td>
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
          <td><input type="text" value="3.3815"></td>
          <td><input type="text" value="1.7%"></td>
          <td><input type="text" value="3.4390"></td>
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
          <td><input type="text" value="3.3815"></td>
          <td><input type="text" value="1.7%"></td>
          <td><input type="text" value="3.4390"></td>
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
          <td><input type="text" value="3.3815"></td>
          <td><input type="text" value="1.7%"></td>
          <td><input type="text" value="3.4390"></td>
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
          <td><input type="text" value="3.3815"></td>
          <td><input type="text" value="1.7%"></td>
          <td><input type="text" value="3.4390"></td>
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
          <td><input type="text" value="3.3815"></td>
          <td><input type="text" value="1.7%"></td>
          <td><input type="text" value="3.4390"></td>
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
          <td><input type="text" value="3.3815"></td>
          <td><input type="text" value="1.7%"></td>
          <td><input type="text" value="3.4390"></td>
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
          <td><input type="text" value="3.3815"></td>
          <td><input type="text" value="1.7%"></td>
          <td><input type="text" value="3.4390"></td>
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
          <td><input type="text" value="3.3815"></td>
          <td><input type="text" value="1.7%"></td>
          <td><input type="text" value="3.4390"></td>
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
          <td><input type="text" value="3.3815"></td>
          <td><input type="text" value="1.7%"></td>
          <td><input type="text" value="3.4390"></td>
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