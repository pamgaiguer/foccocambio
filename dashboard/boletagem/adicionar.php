<?php

include "../includes/header.php";
include "../core/database.php";

?>
<main>
  <div class="row">
    <div class="col s12">
      <div class="section"></div>
      <a class="btn waves-effect waves-light bg-blue" href="/dashboard/boletagem/"><i class="material-icons left">&#xE5C4;</i> Voltar para Boletagem</a>
      <br>
      <p>Iniciando boletagem para cliente [NOMECLIENTE]</p>

    </div>
  </div>


  <div class="row">
    <div class="col s12">
      <div class="input-field col s3">
        <input placeholder="02/11/2016" id="first_name" type="text" readonly>
        <label for="first_name">Data (puxar data atual)</label>
      </div>

      <div class="input-field col s3">
      </div>

      <div class="input-field col s3">
      </div>

      <div class="input-field col s3">
        <select class="browser-default">
          <option value="" disabled selected>Caixa</option>
          <option value="1">Focco</option>
          <option value="2">Focco X</option>
          <option value="3">FX 53</option>
        </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col s12">

      <div class="input-field col s4">
        <select>
          <option value="" disabled selected>Escolha a modalidade</option>
          <option value="1">Compra</option>
          <option value="2">Venda</option>
        </select>
        <label>Compra/Venda</label>
      </div>

      <div class="input-field col s4">
        <select>
          <option value="" disabled selected>Escolha a operação</option>
          <option value="1">Espécie</option>
          <option value="2">Cartão Pré-Pago</option>
          <option value="3">TransferÇencia internacional</option>
        </select>
        <label>Tipo de operação</label>
      </div>

      <div class="input-field col s4">
        <select>
          <option value="" disabled selected>Escolha a moeda</option>
          <option value="1">USD</option>
          <option value="2">EUR</option>
          <option value="3">GBP</option>
          <option value="4">AUD</option>
          <option value="5">CAD</option>
          <option value="6">CHF</option>
          <option value="7">JPY</option>
          <option value="8">NZD</option>
          <option value="9">CLP</option>
          <option value="10">MXN</option>
          <option value="11">UYU</option>
          <option value="12">ZAR</option>
          <option value="13">ARS</option>
          <option value="14">CNY</option>
        </select>
        <label>Moedas</label>
      </div>

    </div>
  </div>

  <div class="row">
    <div class="col s12">

      <div class="input-field col s3">
        <input placeholder="Quantidade" id="qtdade" type="text">
        <label for="qtdade">Quantidade</label>
      </div>

      <div class="input-field col s3">
        <input placeholder="Taxa - read only" id="taxa" type="text" readonly>
        <label for="taxa">Taxa (relacionado com o tipo de operação)</label>
      </div>

      <div class="input-field col s3">
        <input placeholder="Sub Total - read only" id="subtotal" type="text" readonly>
        <label for="subtotal">Sub Total</label>
      </div>

      <div class="input-field col s3">
        <input placeholder="iof - read only" id="iof" type="text" readonly>
        <label for="iof">IOF</label>
      </div>

    </div>
  </div>

  <div class="row">
    <div class="col s12">

      <div class="input-field col s4">
        <input placeholder="swift - campo aberto" id="swift" type="text">
        <label for="swift">Swift</label>
      </div>

      <div class="input-field col s4">
        <input placeholder="darf - campo aberto" id="darf" type="text">
        <label for="darf">darf</label>
      </div>

      <div class="input-field col s4">
        <input placeholder="vet - read only" id="vet" type="text">
        <label for="vet">vet</label>
      </div>

    </div>
  </div>


  <div class="row">
    <div class="col s12">

      <div class="input-field col s4">
        <input placeholder="vet Tx - ?" id="vet Tx" type="text">
        <label for="vet Tx">Swift</label>
      </div>

      <div class="input-field col s4">
        <input placeholder="Tx de nível - ?" id="Tx de nível" type="text">
        <label for="Tx de nível">Tx de nível</label>
      </div>

      <div class="input-field col s4">
      <input type="submit" class="btn waves-effect waves-light bg-blue" value="Boletar">
      </div>

    </div>
  </div>


</main>

<?php
include '../includes/footer.php';
?>