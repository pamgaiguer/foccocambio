
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
  <form id="form-boletagem">
    <div class="row">
      <div class="input-field col s3">
        <input type="hidden" id="clienteId" value=<?php echo $id ?>>
        <input type="hidden" id="usuarioId" value=<?php echo $_SESSION['currentUser']['id'] ?>>

        


        <input id="data" value="<?php echo date_format(new DateTime(),'d/m/Y'); ?>" type="text" readonly placeholder=" ">
        <label>Data</label>
      </div>

      <div class="input-field col s3">
      </div>

      <div class="input-field col s3">
      </div>

      <div class="input-field col s3">
        <select id="select-caixa" class="browser-default">        
          <option value="1">Focco</option>
          <option value="2">Focco X</option>
          <option value="3">FX 53</option>
        </select>
      </div>
    </div>      

    <div class="row">
      <div class="input-field col s4">
        <select id="select-modalidade">
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
        <input placeholder="M.N" id="mn" type="text">
        <label for="mn">M.N</label>
      </div>

      <div class="input-field col s4 div-swift" style="display: none;">
        <input placeholder="swift" id="swift" type="text" >
        <label for="swift">Swift</label>
      </div>

      <div class="input-field col s4 div-darf" style="display: none;">
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
        <input placeholder="Tx de nível - ?" id="txNivel" type="text">
        <label for="Tx de nível">Tx de nível</label>
      </div>

      <div class="input-field col s4">
        <input type="submit" class="btn waves-effect waves-light bg-blue" value="Boletar">
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