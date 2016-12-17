<?php

include "../includes/header.php";
include "../core/database.php";

?>
<main>
  <div class="row">
    <div class="col s12">
      <h4>Compra de Moedas</h4>
    </div>
  </div>

  <form id="form-adicionar-compraMoedas">

    <div class="row">
      <div class="col s4">
        <label for="select-moedas">Moedas</label>
        <select id="select-moedas" class="browser-default">
          <option value="USD" data-operacoes="1,2,3">USD</option>
          <option value="EUR" data-operacoes="1,2,3">EUR</option>
          <option value="GBP" data-operacoes="1,2,3">GBP</option>
          <option value="AUD" data-operacoes="1,2,3">AUD</option>
          <option value="CAD" data-operacoes="1,2,3">CAD</option>
          <option value="CHF" data-operacoes="1">CHF</option>
          <option value="JPY" data-operacoes="3">JPY</option>
          <option value="NZD" data-operacoes="3">NZD</option>
          <option value="CLP" data-operacoes="1">CLP</option>
          <option value="MXN" data-operacoes="1">MXN</option>
          <option value="UYU" data-operacoes="1">UYU</option>
          <option value="ZAR" data-operacoes="1">ZAR</option>
          <option value="ARS" data-operacoes="2">ARS</option>
          <option value="CNY" data-operacoes="1">CNY</option>
        </select>
      </div>

      <div class="input-field col s4">
      </div>

      <div class="col s4">
        <label for="select-caixa">Caixa</label>
        <select id="select-caixa" class="browser-default">
          <option value="1">Focco</option>
          <option value="2">Focco X</option>
          <option value="3">FX 53</option>
        </select>
      </div>
    </div>


   <div class="row">
    <div class="col s12">

      <div class="input-field col s2">
        <input id="dataCompra" name="dataCompra" type="text" pattern="\d{1,2}/\d{1,2}/\d{4}" class="datepicker" required>
        <label for="dataCompra">Data / hora</label>
      </div>

      <div class="input-field col s2">
        <input id="quantidade" name="quantidade" class="currency" type="text" required>
        <label for="quantidade">Qtdade Moeda</label>
      </div>

      <div class="input-field col s2">
        <input id="taxa" name="taxa" type="text" required>
        <label for="taxa">Taxa Moeda</label>
      </div>

      <div class="input-field col s2">
        <input id="total" name="total" class="currency" type="text" readonly>
        <label for="total">Total Moeda</label>
      </div>

      <div class="input-field col s2">
        <input id="fechamento" name="fechamento" type="text">
        <label for="fechamento">Fechamento</label>
      </div>

      <div class="input-field col s2">
        <select id="entrega" name="entrega" required>
          <option value="" selected>Banco Paulista</option>
          <option value="">Rendimento</option>
          <option value="">Vision</option>
          <option value="">Carro Forte</option>
        </select>
        <label for="entrega">Entrega da Moeda</label>
      </div>

    </div>
  </div>

  <div class="row">
    <div class="col s12">
      <input type="submit" class="btn bg-blue right" value="Comprar moeda" />
    </div>
  </div>

</form>

</main>

<?php
include '../includes/footer.php';
?>


<script type="text/javascript">
  focco.adicionarCompraMoedas();
</script>