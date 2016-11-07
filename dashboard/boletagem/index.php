<?php

include "../includes/header.php";
include "../core/database.php";

?>
<main>
  <div class="row">
    <div class="col s12">
      <h4>Boletagem</h4>
      <blockquote>
        Área para boletagem - operações de compra e venda de moedas dos clientes cadastrados e válidos.
      </blockquote>

      <div class="section">
        <div class="row">
          <div class="col s4">

            <form id="form-busca-boletagem">
              <div class="file-path-wrapper">
                <div id="validacaoCpf"></div>
                <input id="input-cpfcnpj" name="cpfCnpj" type="search" required/>
                <button class="btn waves-effect waves-light bg-blue" type="submit" name="action">
                  Buscar CPF / CNPJ
                  <i class="material-icons right">&#xE8B6;</i>
                </button>
              </div>
            </form>

          </div>
        </div>

        <a id="link-adicionar-cliente" class="waves-effect waves-light btn bg-blue right" data-cpf="a" data-href="/dashboard/clientes/adicionar">Adicionar cliente <i class="material-icons right">&#xE7FE;</i></a>
        <br><br>
<p class="right">Esse botão somente aparece caso o cliente não é encontrado na busca</p>

      </div>


      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>

      <table class="striped responsive-table">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Tipo de Cliente</th>
            <th>Limite Disponível</th>
            <th>Válido?</th>
            <th>Boletar</th>
          </tr>
        </thead>
        <tbody id="table-body-boletagem">          
        </tbody>
        </table>
      </div>
    </div>
  </div>
</main>

<?php
include '../includes/footer.php';
?>

<script type="text/javascript">
  focco.boletagemIndex();
</script>