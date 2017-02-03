<?php

include "../includes/header.php";
include "../core/database.php";

?>
<main class="calculadora">
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
          <th <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> >% Custo</th>
          <th <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> >Custo Focco</th>
          <th <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> >Margs Ponto</th>
          <th>Tx s/ IOF</th>
          <th>Tx c/ IOF</th>
          <th>Observação</th>
          <th <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> >Tx. Final</th>
          <th <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> >Tx s/ IOF boletagem</th>
          <th <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> >Marg. Liquida %</th>
          <th <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> >Marg. Liquida</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="moeda-name">USD</td>
          <td><input type="text" id="USD-comercial" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="USD-custo" value="1,7"></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="USD-custoFocco" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="USD-margPonto" value="0,053"></td>
          <td><input type="text" id="USD-txSIof" value=""></td>
          <td><input type="text" id="USD-txCIof" value=""></td>
          <td>acima de 5.000 -1</td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="USD-txFinal" class="txFinal" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="USD-txSIofBoletagem" class="txSIofBoletagem" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="USD-margLiquidaPercent" class="margLiquidaPercent" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="USD-margLiquida" class="margLiquida" value=""></td>
        </tr>
        <tr>
          <td class="moeda-name">EUR</td>
          <td><input type="text" id="EUR-comercial" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="EUR-custo" value="2,0"></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="EUR-custoFocco" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="EUR-margPonto" value="0,056"></td>
          <td><input type="text" id="EUR-txSIof" value=""></td>
          <td><input type="text" id="EUR-txCIof" value=""></td>
          <td>acima de 5.000 -1</td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="EUR-txFinal" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="EUR-txSIofBoletagem" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="EUR-margLiquidaPercent" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="EUR-margLiquida" value=""></td>
        </tr>
        <tr>
          <td class="moeda-name">GBP</td>
          <td><input type="text" id="GBP-comercial" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="GBP-custo" value="3,9"></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="GBP-custoFocco" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="GBP-margPonto" value="0,10"></td>
          <td><input type="text" id="GBP-txSIof" value=""></td>
          <td><input type="text" id="GBP-txCIof" value=""></td>
          <td>acima de 2.000 -1</td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="GBP-txFinal" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="GBP-txSIofBoletagem" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="GBP-margLiquidaPercent" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="GBP-margLiquida" value=""></td>
        </tr>
        <tr>
          <td class="moeda-name">AUD</td>
          <td><input type="text" id="AUD-comercial" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="AUD-custo" value="4,5"></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="AUD-custoFocco" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="AUD-margPonto" value="0,06"></td>
          <td><input type="text" id="AUD-txSIof" value=""></td>
          <td><input type="text" id="AUD-txCIof" value=""></td>
          <td>acima de 5.000 -1</td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="AUD-txFinal" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="AUD-txSIofBoletagem" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="AUD-margLiquidaPercent" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="AUD-margLiquida" value=""></td>
        </tr>
        <tr>
          <td class="moeda-name">CAD</td>
          <td><input type="text" id="CAD-comercial" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CAD-custo" value="4,5"></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CAD-custoFocco" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CAD-margPonto" value="0,05"></td>
          <td><input type="text" id="CAD-txSIof" value=""></td>
          <td><input type="text" id="CAD-txCIof" value=""></td>
          <td>acima de 5.000 -1</td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CAD-txFinal" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CAD-txSIofBoletagem" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CAD-margLiquidaPercent" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CAD-margLiquida" value=""></td>
        </tr>
        <tr>
          <td class="moeda-name">CHF</td>
          <td><input type="text" id="CHF-comercial" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CHF-custo" value="4,5"></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CHF-custoFocco" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CHF-margPonto" value="0,053"></td>
          <td><input type="text" id="CHF-txSIof" value=""></td>
          <td><input type="text" id="CHF-txCIof" value=""></td>
          <td>acima de 5.000 -1</td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CHF-txFinal" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CHF-txSIofBoletagem" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CHF-margLiquidaPercent" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CHF-margLiquida" value=""></td>
        </tr>
        <tr>
          <td class="moeda-name">JPY</td>
          <td><input type="text" id="JPY-comercial" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="JPY-custo" value="5,5"></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="JPY-custoFocco" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="JPY-margPonto" value="0,0016"></td>
          <td><input type="text" id="JPY-txSIof" value=""></td>
          <td><input type="text" id="JPY-txCIof" value=""></td>
          <td>a combinar gerência</td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="JPY-txFinal" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="JPY-txSIofBoletagem" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="JPY-margLiquidaPercent" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="JPY-margLiquida" value=""></td>
        </tr>
        <tr>
          <td class="moeda-name">NZD</td>
          <td><input type="text" id="NZD-comercial" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="NZD-custo" value="5,0"></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="NZD-custoFocco" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="NZD-margPonto" value="0,09"></td>
          <td><input type="text" id="NZD-txSIof" value=""></td>
          <td><input type="text" id="NZD-txCIof" value=""></td>
          <td>acima de 5.000 -2</td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="NZD-txFinal" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="NZD-txSIofBoletagem" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="NZD-margLiquidaPercent" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="NZD-margLiquida" value=""></td>
        </tr>
        <tr>
          <td class="moeda-name">CLP</td>
          <td><input type="text" id="CLP-comercial" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CLP-custo" value="7,5"></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CLP-custoFocco" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CLP-margPonto" value="0,00025"></td>
          <td><input type="text" id="CLP-txSIof" value=""></td>
          <td><input type="text" id="CLP-txCIof" value=""></td>
          <td>a combinar gerência</td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CLP-txFinal" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CLP-txSIofBoletagem" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CLP-margLiquidaPercent" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CLP-margLiquida" value=""></td>
        </tr>
        <tr>
          <td class="moeda-name">MXN</td>
          <td><input type="text" id="MXN-comercial" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="MXN-custo" value="7,5"></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="MXN-custoFocco" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="MXN-margPonto" value="0,017"></td>
          <td ><input type="text" id="MXN-txSIof" value=""></td>
          <td><input type="text" id="MXN-txCIof" value=""></td>
          <td>acima de 5.000 -1,5</td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="MXN-txFinal" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="MXN-txSIofBoletagem" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="MXN-margLiquidaPercent" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="MXN-margLiquida" value=""></td>
        </tr>
        <tr>
          <td class="moeda-name">UYU</td>
          <td><input type="text" id="UYU-comercial" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="UYU-custo" value="7,5"></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="UYU-custoFocco" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="UYU-margPonto" value="0,009"></td>
          <td><input type="text" id="UYU-txSIof" value=""></td>
          <td><input type="text" id="UYU-txCIof" value=""></td>
          <td><strong>ENGESSADO</strong></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="UYU-txFinal" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="UYU-txSIofBoletagem" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="UYU-margLiquidaPercent" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="UYU-margLiquida" value=""></td>
        </tr>
        <tr>
          <td class="moeda-name">ZAR</td>
          <td><input type="text" id="ZAR-comercial" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="ZAR-custo" value="8,5"></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="ZAR-custoFocco" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="ZAR-margPonto" value="0,016"></td>
          <td><input type="text" id="ZAR-txSIof" value=""></td>
          <td><input type="text" id="ZAR-txCIof" value=""></td>
          <td>a combinar gerência</td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="ZAR-txFinal" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="ZAR-txSIofBoletagem" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="ZAR-margLiquidaPercent" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="ZAR-margLiquida" value=""></td>
        </tr>
        <tr>
          <td class="moeda-name">ARS</td>
          <td><input type="text" id="ARS-comercial" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="ARS-custo" value="8,0"></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="ARS-custoFocco" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="ARS-margPonto" value="0,025"></td>
          <td><input type="text" id="ARS-txSIof" value=""></td>
          <td><input type="text" id="ARS-txCIof" value=""></td>
          <td>acima de 5.000 -1</td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="ARS-txFinal" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="ARS-txSIofBoletagem" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="ARS-margLiquidaPercent" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="ARS-margLiquida" value=""></td>
        </tr>
        <tr>
          <td class="moeda-name">CNY</td>
          <td><input type="text" id="CNY-comercial" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?> ><input type="text" id="CNY-custo" value="7,5"></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CNY-custoFocco" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CNY-margPonto" value="0,033"></td>
          <td ><input type="text" id="CNY-txSIof" value=""></td>
          <td><input type="text" id="CNY-txCIof" value=""></td>
          <td>acima de 5.000 -1</td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CNY-txFinal" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CNY-txSIofBoletagem" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CNY-margLiquidaPercent" value=""></td>
          <td <?php if ($_SESSION['currentUser']['tipo'] > 2) echo 'hidden'; ?>><input type="text" id="CNY-margLiquida" value=""></td>
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