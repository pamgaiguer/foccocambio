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
    <div class="col s12">
      <a id="link-adicionar-orcamento" class="btn bg-blue right" href="#">Adicionar orçamento <i class="material-icons right">shopping_cart</i></a>
    </div>
  </div>  


  <div class="hide">
    <div class="row div-linha-orcamento" id="div-linha-orcamento-model">
      <div class="col s2">
        <label for="orcModalidade">Modalidade</label>
        <select id="orcModalidade" class="orcModalidade browser-default">
          <option value="2">Venda</option>
          <option value="1">Compra</option>
        </select>
      </div>

      <div class="col s2">
        <label for="orcMoedas">Moedas</label>
        <select id="orcMoedas" class=" orcMoedas browser-default">
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
        <label for="orcOperacao">Tipo de operação</label>
        <select id="orcOperacao" class=" orcOperacao browser-default">
          <option value="1">Espécie</option>
          <option value="2">Cartão Pré-Pago</option>
          <option value="3">Transferência internacional</option>
          <option value="4">Transferência internacional - Importação (IOF: 0,00)</option>
        </select>
      </div>

      <div class="input-field col s1">
        <input id="orcQtd" class="orcQtd" type="text">
        <label for="orcQtd">Quantidade</label>
      </div>

      <div class="input-field col s1">
        <input id="orcTaxa" class="orcTaxa" type="text">
        <label for="orcTaxa">Taxa</label>
      </div>

      <div class="input-field col s1">
        <input id="orcIOF" class="orcIOF" type="text">
        <label for="orcIOF">IOF (%)</label>
      </div>

      <div class="input-field col s1">
        <input id="orcTotalSIOF" class="orcTotalSIOF" type="text">
        <label for="orcTotalSIOF">Total s/ IOF</label>
      </div>

      <div class="input-field col s1">
        <input id="orcDARF" class="orcDARF" type="text">
        <label for="orcDARF">DARF</label>
      </div>
      <div class="input-field col s1">
        <input id="orcVET" class="orcVET" type="text">
        <label for="orcVET">VET</label>
      </div>
    </div>
  </div>

  <div id="div-linhas-orcamento">
    
  </div>


  <div class="row">
    <div class="col s12">
      <button class="btn bg-blue right" id="btn-enviar-orcamento">
        Enviar orçamento por e-mail
        <i class="material-icons right">send</i>
      </button>

    </div>
  </div>
</main>

<?php
include '../includes/footer.php';
?>

<script type="text/javascript">
  focco.orcamento();
</script>