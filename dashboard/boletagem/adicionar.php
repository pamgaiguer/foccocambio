
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
      <a class="btn bg-blue" href="/dashboard/boletagem/"><i class="material-icons left">&#xE5C4;</i> Voltar para Boletagem</a>
      <br>
      <p>Iniciando boletagem para cliente <strong><?php echo $nome ?></strong></p>

    </div>
  </div>
  <form id="form-boletagem">
    <div class="row">
      <div class="input-field col s4">
        <input type="hidden" id="clienteId" value=<?php echo $id ?>>
        <input type="hidden" id="usuarioId" value=<?php echo $_SESSION['currentUser']['id'] ?>>

        <input id="data" value="<?php echo date_format(new DateTime(),'d/m/Y'); ?>" type="text" readonly placeholder=" ">
        <label>Data</label>
      </div>

      <div class="input-field col s4">
      </div>

      <div class="col s4">
        <label for="select-caixa">Selecione o Caixa</label>
        <select id="select-caixa" class="browser-default">
          <option value="1">Focco</option>
          <option value="2">Focco X</option>
          <option value="3">FX 53</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col s4">
        <label for="select-modalidade">Operação</label>
        <select id="select-modalidade" class="browser-default">
          <option value="2">Venda</option>
          <option value="1">Compra</option>
        </select>
      </div>

      <div class="col s4">
        <label>Tipo de operação</label>
        <select id="select-operacao" class="browser-default">
          <option value="1">Espécie</option>
          <option value="2">Cartão Pré-Pago</option>
          <option value="3">Transferência internacional</option>
          <option value="4">Transferência internacional - Importação (IOF: 0,00)</option>
        </select>
      </div>

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
    </div>

    <div class="row">
      <div class="input-field col s3">
        <input placeholder="Quantidade" id="quantidade" type="text" class="currency">
        <label for="qtdade">Quantidade</label>
      </div>

      <div class="input-field col s3">
        <input placeholder="Taxa" id="taxa" type="text" class="currency5">
        <label for="taxa">Taxa</label>
      </div>

      <div class="input-field col s3">
        <input placeholder="Sub Total" id="subtotal" type="text" readonly class="currency5">
        <label for="subtotal">Sub Total</label>
      </div>

      <div class="input-field col s3">
        <input id="ioftaxa" type="hidden" value="1.1">
        <input placeholder="IOF" id="iof" type="text" class="currency5">
        <label for="iof">IOF</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s4 div-mn">
        <input placeholder="Moeda Nacional" id="mn" type="text" class="currency5">
        <label for="mn">Moeda Nacional</label>
      </div>

      <div class="input-field col s4 div-swift" style="display: none;">
        <input placeholder="swift" id="swift" type="text" class="currency5">
        <label for="swift">Swift</label>
      </div>

      <div class="input-field col s4 div-darf" style="display: none;">
        <input placeholder="DARF" id="darf" type="text" class="currency5">
        <label for="darf">DARF</label>
      </div>

      <div class="input-field col s4">
        <input placeholder="vet" id="vet" type="text" readonly class="currency5">
        <label for="vet">VET</label>
      </div>

      <div class="input-field col s4">
        <input placeholder="Vet Tx" id="vettaxa" type="text" class="currency5">
        <label for="vettaxa">Vet Tx</label>
      </div>

      <div class="input-field col s4 div-txnivel" style="display: none;">
        <input placeholder="Tx de nível" id="txNivel" type="text" class="currency5">
        <label for="Tx de nível">Tx de nível</label>
      </div>
    </div>

    <div class="row">

      <div class="input-field col s3 div-formaPgto">
        <select id="select-formaPgto">
          <option value="1">Espécie</option>
          <option value="2">TED</option>
          <option value="3">DOC</option>
          <option value="4">Transferência Bancária</option>
        </select>
        <label>Forma de Pagamento</label>
      </div>

      <div class="input-field col s3 div-formaEntrega">
        <select id="select-formaEntrega">
          <option value="1" class="text-uppercase">Loja</option>
          <option value="2" class="text-uppercase">Delivery</option>
        </select>
        <label>Forma de entrega</label>
      </div>

      <div class="field-entregas" style="display: none;">
        <div class="input-field col s3 dtEntrega">
          <input id="dtEntrega" type="text" pattern="\d{1,2}/\d{1,2}/\d{4}" class="datepicker">
          <label for="dtEntrega">Data da Entrega</label>
        </div>

        <div class="input-field col s3">
          <input id="entregaACombinar" name="entregaACombinar" type="checkbox" class="filled-in">
          <label for="entregaACombinar">À Combinar</label>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="input-field col s12">
        <input type="submit" class="btn bg-blue " value="Boletar">
      </div>
    </div>

  </form>

</main>

<?php
include '../includes/footer.php';
?>


<script type="text/javascript">
  focco.adicionarBoletagem();
</script>