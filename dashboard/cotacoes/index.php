<?php

include "../includes/header.php";
include "../core/database.php";

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
    <div class="alert warning">
        <p>Tabela atualizada com sucesso</p>
      </div>
      <div class="alert success">
        <p>Tabela atualizada com sucesso</p>
      </div>
      <div class="alert error">
        <p>Tabela atualizada com sucesso</p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col s4">
      <table class="cotation-table">
        <thead>
          <tr>
            <th>Moedas exibidas</th>
            <th>Valor</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Dólar</td>
            <td><input type="text" value=3.45></td>
          </tr>
          <tr>
            <td>Euro</td>
            <td><input type="text" value=3.45></td>
          </tr>
          <tr>
            <td>Libra</td>
            <td><input type="text" value=3.45></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="row">
    <div class="col s12">
      <input type="submit" id="input-submit" value="Atualizar valores" class="waves-effect waves-light btn bg-blue" />
    </div>
  </div>
</main>

<?php
include '../includes/footer.php';
?>