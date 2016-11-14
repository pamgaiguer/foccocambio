<?php

include "../includes/header.php";
include "../core/database.php";

$sql_query = "SELECT * FROM cotacoes;";
$result = mysqli_query($conn, $sql_query);


$rows = array();
while($row = mysqli_fetch_array($result)) $rows[] = $row;

$dolar = $rows[0]['dolar'];
$euro = $rows[0]['euro'];
$libra = $rows[0]['libra'];


?>
<main>
  <div class="row">
    <div class="col s12">
      <h4>Cotações</h4>
      <blockquote>
        Área para manutenção da tabela diária de cotações de moedas.
      </blockquote>
    </div>
  </div>

  <div class="row">
    <div class="col s12">
    <div class="alert warning" style="display: none;">
        <p>pra q isso pam?</p>
      </div>
      <div class="alert success" style="display: none;">
        <p>Tabela atualizada com sucesso</p>
      </div>
      <div class="alert error" style="display: none;">
        <p>Erro ao tentar atualizar a tabela</p>
      </div>
    </div>
  </div>

  <form id="form-cotacoes">
    <div class="row">
      <div class="col s4">

        <table class="cotation-table">
          <thead>
            <tr>
              <th>Dólar</th>
              <th></th>
              <th>Euro</th>
              <th></th>
              <th>Libra</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="number" step="0.01" id="input-dolar" value="<?php echo $dolar ?>"></td>
              <td></td>
              <td><input type="number" step="0.01" id="input-euro" value="<?php echo $euro ?>"></td>
              <td></td>
              <td><input type="number" step="0.01" id="input-libra" value="<?php echo $libra ?>"></td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>

    <div class="row">
      <div class="col s12">
        <input type="submit" id="input-submit" value="Atualizar valores" class="btn bg-blue" />
      </div>
    </div>
  </form>
</main>

<?php
include '../includes/footer.php';
?>

<script type="text/javascript">
  focco.cotacoesFormPost();
</script>