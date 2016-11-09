<?php

include "../includes/header.php";
include "../core/database.php";

$sql_query = sprintf("SELECT * FROM clientes WHERE id = %s", $_GET['clienteId']);
$result = mysqli_query($conn, $sql_query);

$rows = array();
while($row = mysqli_fetch_array($result)) $rows[] = $row;

foreach($rows as $r){
  $id = $r['id'];
  $categoria = $r['categoria'];
  $nome = $r['razaoSocial'];
  $limiteOperacionalAno = $r["limiteOperacionalAno"];
}

?>
<main>


  <div class="row">
    <div class="col s12">
      <div class="section"></div>
      <a class="btn waves-effect waves-light bg-blue" href="/dashboard/boletagem/"><i class="material-icons left">&#xE5C4;</i> Voltar para Boletagem</a>
      <br>
      <p>Iniciando boletagem para cliente <strong><?php echo $nome ?></strong></p>

    </div>
  </div>

  <div class="row">
    <div class="input-field col s3">
      <input value="<?php echo date_format(new DateTime(),'d/m/Y'); ?>" type="text" readonly placeholder=" ">
      <label>Data</label>
    </div>

    <div class="input-field col s3">
    </div>

    <div class="input-field col s3">
    </div>

    <div class="input-field col s3">
      <select id="select-caixa" class="browser-default">
        <option value="" disabled selected>Caixa</option>
        <option value="1">Focco</option>
        <option value="2">Focco X</option>
        <option value="3">FX 53</option>
      </select>
    </div>
  </div>


  <div id="boletagemFoccoFoccoX" >
    <div class="row">
      <div class="col s12">
        <h5>Boletagem Focco / Focco X</h5>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s4">
        <select>
          <option value="1">Compra</option>
          <option value="2">Venda</option>
        </select>
        <label>Compra/Venda</label>
      </div>

      <div class="input-field col s4">
        <select id="select-operacao">
          <option value="1">Espécie</option>
          <option value="2">Cartão Pré-Pago</option>
          <option value="3">Transferência internacional</option>
        </select>
        <label>Tipo de operação</label>
      </div>

      <div class="input-field col s4">
        <select id="select-moedas" class="browser-default">
          <option value="1" data-operacoes="1,2,3">USD</option>
          <option value="2" data-operacoes="1,2,3">EUR</option>
          <option value="3" data-operacoes="1,2,3">GBP</option>
          <option value="4" data-operacoes="1,2,3">AUD</option>
          <option value="5" data-operacoes="1,2,3">CAD</option>
          <option value="6" data-operacoes="1">CHF</option>
          <option value="7" data-operacoes="3">JPY</option>
          <option value="8" data-operacoes="3">NZD</option>
          <option value="9" data-operacoes="1">CLP</option>
          <option value="10" data-operacoes="1">MXN</option>
          <option value="11" data-operacoes="1">UYU</option>
          <option value="12" data-operacoes="1">ZAR</option>
          <option value="13" data-operacoes="2">ARS</option>
          <option value="14" data-operacoes="1">CNY</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s2">
        <input placeholder="Quantidade" id="quantidade" type="text">
        <label for="qtdade">Quantidade</label>
      </div>

      <div class="input-field col s2">
        <input placeholder="Taxa" id="taxa" type="text">
        <label for="taxa">Taxa</label>
      </div>

      <div class="input-field col s2">
        <input id="ioftaxa" type="hidden" value="1.1">
        <input placeholder="IOF" id="iof" type="text">
        <label for="iof">IOF</label>
      </div>

      <div class="input-field col s2">
        <input placeholder="M.N" id="mn" type="text">
        <label for="mn">M.N.</label>
      </div>

      <div class="input-field col s4">
        <input placeholder="Sub Total" id="subtotal" type="text" readonly>
        <label for="subtotal">Sub Total</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s4">
        <input placeholder="VET T.X." id="vetTx" type="text">
        <label for="vetTx">VET TX</label>
      </div>

    <div class="input-field col s4">
      <select id="select-form-pagamento" class="browser-default">
        <option value="" disabled selected>Forma de Pagamento</option>
        <option value="1">Espécie</option>
        <option value="2">T.E.D.</option>
        <option value="3">D.O.C.</option>
        <option value="4">Transferência Bancária</option>
      </select>
    </div>

    <div class="input-field col s4">
      <input type="submit" value="Boletar" class="btn waves-effect waves-light bg-blue" />
    </div>

    </div>

  </div>

  <div id="boletagemFX53" style="display: none;">
    <div class="row">
      <div class="input-field col s4">
        <select>
          <option value="1">Compra</option>
          <option value="2">Venda</option>
        </select>
        <label>Compra/Venda</label>
      </div>

      <div class="input-field col s4">
        <select id="select-operacao">
          <option value="1">Espécie</option>
          <option value="2">Cartão Pré-Pago</option>
          <option value="3">Transferência internacional</option>
        </select>
        <label>Tipo de operação</label>
      </div>

      <div class="input-field col s4">
        <select id="select-moedas" class="browser-default">
          <option value="1" data-operacoes="1,2,3">USD</option>
          <option value="2" data-operacoes="1,2,3">EUR</option>
          <option value="3" data-operacoes="1,2,3">GBP</option>
          <option value="4" data-operacoes="1,2,3">AUD</option>
          <option value="5" data-operacoes="1,2,3">CAD</option>
          <option value="6" data-operacoes="1">CHF</option>
          <option value="7" data-operacoes="3">JPY</option>
          <option value="8" data-operacoes="3">NZD</option>
          <option value="9" data-operacoes="1">CLP</option>
          <option value="10" data-operacoes="1">MXN</option>
          <option value="11" data-operacoes="1">UYU</option>
          <option value="12" data-operacoes="1">ZAR</option>
          <option value="13" data-operacoes="2">ARS</option>
          <option value="14" data-operacoes="1">CNY</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s3">
        <input placeholder="Quantidade" id="quantidade" type="text">
        <label for="qtdade">Quantidade</label>
      </div>

      <div class="input-field col s3">
        <input placeholder="Taxa" id="taxa" type="text">
        <label for="taxa">Taxa</label>
      </div>

      <div class="input-field col s3">
        <input placeholder="Sub Total - read only" id="subtotal" type="text" readonly>
        <label for="subtotal">Sub Total</label>
      </div>

      <div class="input-field col s3">
        <input id="ioftaxa" type="hidden" value="1.1">
        <input placeholder="IOF" id="iof" type="text">
        <label for="iof">IOF</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s4">
        <input placeholder="swift" id="swift" type="text">
        <label for="swift">Swift</label>
      </div>

      <div class="input-field col s4">
        <input placeholder="darf" id="darf" type="text">
        <label for="darf">darf</label>
      </div>

      <div class="input-field col s4">
        <input placeholder="vet" id="vet" type="text" readonly>
        <label for="vet">vet</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s4">
        <input placeholder="vet Tx - ?" id="vettaxa" type="text">
        <label for="vettaxa">Vet Taxa</label>
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


<script type="text/javascript">
  focco.adicionarBoletagem();
</script>