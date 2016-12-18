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
    <input type="hidden" id="usuarioId" value=<?php echo $_SESSION['currentUser']['id'] ?> />

    <div class="row">
      <div class="col s4">
        <label for="select-moedas">Moedas</label>
        <select id="select-moedas" class="browser-default">
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

      <div class="col s2">
        <label for="data">Data/Hora</label>
        <select id="data" class="browser-default">
          <option value="<?php echo date('Y-m-d h:m:s'); ?>"><?php echo date('d/m/Y'); ?> (D0)</option>
          <option selected value="<?php echo date('Y-m-d h:m:s',strtotime('+1 day')); ?>"><?php echo date('d/m/Y',strtotime('+1 days')); ?> (D1)</option>
          <option value="<?php echo date('Y-m-d h:m:s',strtotime('+2 days')); ?>"><?php echo date('d/m/Y',strtotime('+2 days')); ?> (D2)</option>
        </select>
      </div>

      <div class="input-field col s2">
        <input id="quantidade" name="quantidade" class="currency" type="text" required>
        <label for="quantidade">Quantidade</label>
      </div>

      <div class="input-field col s2">
        <input id="taxa" name="taxa" type="text" required>
        <label for="taxa">Taxa</label>
      </div>

      <div class="input-field col s2">
        <input id="total" name="total" class="currency" type="text" readonly>
        <label for="total">Total</label>
      </div>

      <div class="input-field col s2">
        <input id="fechamento" name="fechamento" type="text">
        <label for="fechamento">Fechamento</label>
      </div>

      <div class="input-field col s2">
        <select id="entrega" name="entrega" required>
          <option value="Banco Paulista" selected>Banco Paulista</option>
          <option value="Rendimento">Rendimento</option>
          <option value="Vision">Vision</option>
          <option value="Carro Forte">Carro Forte</option>
        </select>
        <label for="entrega">Entrega da Moeda</label>
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