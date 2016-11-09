<?php

include "../includes/header.php";
include "../core/database.php";



?>
<main>
  <div class="row">
    <div class="col s12">
      <h4>Clientes</h4>
      <blockquote>
        Área para cadastro de clientes Focco (PF e PJ).
      </blockquote>

      <div class="section">
        <div class="row">
          <div class="col s4">

            <form id="form-busca-clientes">
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

        <a id="link-adicionar-cliente" class="waves-effect waves-light btn bg-blue right" data-cpf="a" data-href="/dashboard/clientes/adicionar">Adicionar cliente <i class="material-icons right">&#xE7FE;</i>
        </a>
      </div>

      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>
      <div>

        <table class="striped responsive-table">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Email</th>
              <th>Telefone</th>
              <th>Tipo de Cliente</th>
              <th>Limite Disponível</th>
              <th>Válido?</th>
              <th>Doc prov</th>
              <th class="center">Visualizar</th>
              <th class="center">Editar</th>
              <th class="center">Excluir</th>
            </tr>
          </thead>
          <tbody id="table-body-clientes">
            
        </tbody>
      </table>
    </div>
  </div>
</div>
</main>

<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4>Excluir cliente</h4>
    <p>Deseja excluir o cliente selecionado?</p>
  </div>
  <div class="modal-footer">
    <a id="modal-confirm" class="modal-action modal-close waves-effect waves-light btn">
      <i class="material-icons right">&#xE86C;</i>
      Confirmar
    </a>

    <a id="modal-cancel" class="modal-action modal-close waves-effect waves-light btn red darken-1 white">
      <i class="material-icons right">&#xE5C9;</i>
      Cancelar
    </a>
  </div>
</div>

<div id="modal2" class="modal">
  <div class="modal-content">
    <h4>Autenticação</h4>
    <p>Informe as credenciais de administrador para desbloquear o cliente provisóriamente.</p>
    <div class="">
      <label for="login" data-error="Preencha corretamente">Login</label>
      <input id="login" type="text" class="validate">
    </div>
    <div class="">
      <label for="senha">Senha</label>
      <input id="senha" type="password" class="validate">
    </div>
    <div class="section">
      <div id="form-erro" class="center red-text"></div>
    </div>
  </div>
  <div class="modal-footer">
    <a id="modal-confirm2" class="modal-action waves-effect waves-light btn">
      <i class="material-icons right">&#xE86C;</i>
      Confirmar
    </a>

    <a id="modal-cancel2" class="modal-action modal-close waves-effect waves-light btn red darken-1 white">
      <i class="material-icons right">&#xE5C9;</i>
      Cancelar
    </a>
  </div>
</div>


<?php
include '../includes/footer.php';
?>

<script>
  focco.indexCliente();
</script>