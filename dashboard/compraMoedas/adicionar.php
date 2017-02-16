<?php

include "../includes/header.php";
include "../core/database.php";

?>
<main>
  <div class="row">
  <div class="spacing"></div>
    <div class="col s12">
      <a class="btn bg-blue" href="/dashboard/compraMoedas/"><i class="material-icons left">&#xE5C4;</i> Voltar para tela Interbancários</a>
    </div>
  <div class="spacing"></div>

    <div class="col s12">
      <h4>Interbancários</h4>
    </div>
  </div>

  <form id="form-adicionar-compraMoedas" novalidate>
    <input type="hidden" id="usuarioId" value=<?php echo $_SESSION['currentUser']['id'] ?> />

    <div class="row">
      <div class="col s12">
        <a class="btn bg-blue right" id="link-adicionar-interbancario">Adicionar valor </a>

      </div>
    </div>

    <div id="div-linhas-interbancario">


      <div class="hide">
      <div class="row div-linha-interbancario" id="div-linha-interbancario-model">
        <div class="col s2">
          <label for="select-caixa">Caixa</label>
          <select id="select-caixa" class="select-caixa browser-default">
            <option value="1">Focco</option>
            <option value="2">Focco X</option>
            <option value="3">FX 53</option>
          </select>
        </div>

        <div class="col s1">
          <label for="select-moedas">Moeda</label>
          <select id="select-moedas" class="select-moedas browser-default">
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
            <option value="VTG">VTG</option>
            <option value="VTM">VTM</option>
            <option value="CVTM">CVTM</option>
            <option value="fx53 ">fx53</option>
          </select>
        </div>
        <div class="col s2">
          <label for="data">Data/Hora</label>
          <select id="data" class="data browser-default">
            <option value="<?php echo date('Y-m-d h:m:s'); ?>"><?php echo date('d/m/Y'); ?> (D0)</option>
            <option selected value="<?php echo date('Y-m-d h:m:s',strtotime('+1 day')); ?>"><?php echo date('d/m/Y',strtotime('+1 days')); ?> (D1)</option>
            <option value="<?php echo date('Y-m-d h:m:s',strtotime('+2 days')); ?>"><?php echo date('d/m/Y',strtotime('+2 days')); ?> (D2)</option>
          </select>
        </div>

        <div class="input-field col s1">
          <input id="quantidade" class="currency quantidade" type="text" placeholder=" " required>
          <label for="quantidade">Quantidade</label>
        </div>

        <div class="input-field col s1">
          <input id="taxa" class="taxa" type="text"  placeholder=" " required>
          <label for="taxa">Taxa</label>
        </div>

        <div class="input-field col s1">
          <input id="total"  class="total currency"  placeholder=" " type="text" readonly>
          <label for="total">Total</label>
        </div>

        <div class="input-field col s1">
          <input id="fechamento" class="fechamento"  placeholder=" " type="text">
          <label for="fechamento">Fechamento</label>
        </div>

        <div class="col s2">
          <label for="entrega">Entrega</label>
          <select id="entrega" class="entrega browser-default" required>
            <option value="Carro Forte" selected>Carro Forte</option>
            <option value="Banco Paulista">Banco Paulista</option>
            <option value="Rendimento">Rendimento</option>
            <option value="Vision">Vision</option>
          </select>          
        </div>

        
      </div>
      </div>

    </div>

    


    <div class="row">
      <div class="col s12">
        <input type="submit" class="btn bg-blue right" value="Gravar compras" />
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