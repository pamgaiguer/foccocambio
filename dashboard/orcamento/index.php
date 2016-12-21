<?php

include "../includes/header.php";
include "../core/database.php";

?>
<main>
  <div class="row">
    <div class="col s12">
      <h4>Orçamento</h4>
      <blockquote>
        Área para envio de orçamento de cotações
      </blockquote>
    </div>
  </div>

  <div class="row">
    <div class="col s3">
      <div class="input-field">
      <input  id="nomeCliente" type="text">
        <label for="nomeCliente">Nome Cliente</label>
      </div>
    </div>
    <div class="col s3">
      <div class="input-field">
      <input  id="emailCliente" type="text">
        <label for="emailCliente">E-mail do cliente</label>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col s12"></div>
  </div>

  <div class="row">
    <div class="col s2">
      <label for="orcMoedas">Moedas</label>
      <select id="orcMoedas" class="browser-default">
        <option value="USD">USD</option>
        <option value="EUR">EUR</option>
        <option value="GBP">GBP</option>
        <option value="AUD">AUD</option>
        <option value="CAD">CAD</option>
        <option value="CHF">CHF</option>
        <option value="JPY">JPY</option>
        <option value="NZD">NZD</option>
        <option value="CLP">CLP</option>
        <option value="MXN">MXN</option>
        <option value="UYU">UYU</option>
        <option value="ZAR">ZAR</option>
        <option value="ARS">ARS</option>
        <option value="CNY">CNY</option>
      </select>
    </div>

    <div class="col s2">
      <label for="orcMoedas">Operação</label>
      <select id="orcMoedas" class="browser-default">
        <option value="Venda">Venda</option>
        <option value="Compra">Compra</option>
      </select>
    </div>

    <div class="col s2">
      <label for="orcOperacao">Tipo de operação</label>
      <select id="orcOperacao" class="browser-default">
        <option value="1">Espécie</option>
        <option value="2">Cartão Pré-Pago</option>
        <option value="3">Transferência internacional</option>
        <option value="4">Transferência internacional - Importação (IOF: 0,00)</option>
      </select>
    </div>

    <div class="input-field col s1">
      <input id="orcTaxa" name="orcTaxa" type="text">
      <label for="orcTaxa">Taxa</label>
    </div>

    <div class="input-field col s1">
      <input id="orcIOF" name="orcIOF" type="text">
      <label for="orcIOF">IOF (%)</label>
    </div>

    <div class="input-field col s2">
      <input id="orcQuantia" name="orcQuantia" type="text">
      <label for="orcQuantia">Quantia</label>
    </div>

    <div class="input-field col s2">
      <input id="orcTotalSIOF" name="orcTotalSIOF" type="text">
      <label for="orcTotalSIOF">Total s/ IOF</label>
    </div>
  </div>

  <div class="row">
    <div class="col s12">
      <button class="btn bg-blue right">
      Enviar orçamento por e-mail
<i class="material-icons right">send</i>
      </button>

    </div>
  </div>
</main>

<?php
include '../includes/footer.php';
?>