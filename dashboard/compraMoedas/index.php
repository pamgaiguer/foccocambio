<?php
include "../includes/header.php";
include "../core/database.php";
?>
<main>
  <div class="row">
    <div class="col s12">
      <h4>Compra de Moedas</h4>
      <blockquote>
        Área para compra de moedas para os caixas da Focco Câmbio
      </blockquote>
    </div>
  </div>

  <div class="row">
    <div class="col s2">
      <input type="search">
      <button class="btn bg-blue">
        Filtrar dia
        <i class="material-icons right">&#xE8B6;</i>
      </button>
    </div>

  </div>

  <div class="row">

    <div class="input-field col s3">
      <input id="totalReal" name="totalReal" type="text">
      <label for="totalReal">Total Real</label>
    </div>

    <div class="input-field col s3">
      <input id="totalDolar" name="totalDolar" type="text">
      <label for="totalDolar">Total Dólar</label>
    </div>

    <div class="input-field col s3">
      <input id="mediaPonderada" name="mediaPonderada" type="text">
      <label for="mediaPonderada">Real / Dólar</label>
    </div>

  </div>

  <div class="spacing"></div>

  <div class="row">
    <div class="col s12">
      <table>
        <thead>
          <tr>
            <th>Data/hora</th>
            <th>Usuario</th>
            <th>Moeda</th>
            <th>Caixa</th>
            <th>Qtdade</th>
            <th>Taxa</th>
            <th>Total</th>
            <th>Fechamento</th>
            <th>Entrega</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Data/hora</td>
            <td>Usuario</td>
            <td>Moeda</td>
            <td>Caixa</td>
            <td>Qtdade</td>
            <td>Taxa</td>
            <td>Total</td>
            <td>Fechamento</td>
            <td>Entrega</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="row">
    <div class="col s12">
    <button class="btn bg-blue right">Comprar moeda</button>
    </div>
  </div>


</main>

<?php
include '../includes/footer.php';
?>