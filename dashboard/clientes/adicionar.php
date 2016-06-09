<?php

include "../core/database.php";
include "../includes/header.php";
?>
<main>
  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#div-pf">Pessoa física</a></li>
        <li class="tab col s3"><a href="#div-pj">Pessoa jurídica</a></li>
      </ul>
    </div>

    <div id="div-pf" class="col s12">
      <form action="adicionarPost.php" method="POST" class="form-group" id="form-adicionar-cliente">


        <div class="row">
          <div class="col s12">
            <h5><strong>Dados pessoais</strong></h5>
          </div>

          <input id="tipoPessoa" type="hidden" value="F"/>

          <div class="input-field col s6">
            <input id="razaoSocial" type="text" />
            <label for="razaoSocial">Nome completo</label>
          </div>

          <div class="input-field col s6">
            <input id="cpfCnpj" type="text" />
            <label for="cpfCnpj">C.P.F.</label>
          </div>

          <div class="input-field col s3">
            <input id="dataNascimento" type="date" class="datepicker">
            <label for="dataNascimento">Data de Nascimento</label>
          </div>

          <div class="input-field col s3">
            <input id="rg" type="text">
            <label for="rg">R.G.</label>
          </div>

          <div class="input-field col s3">
            <input id="rgOrgaoExpedidor" type="text">
            <label for="rgOrgaoExpedidor">Orgão Expedidor</label>
          </div>

          <div class="input-field col s3">
            <input id="rgDataExpedicao" type="date" class="datepicker">
            <label for="rgDataExpedicao">Data de Expedição</label>
          </div>

          <div class="input-field col s2">
            <select id="sexo">
              <option value="M" selected>Masculino</option>
              <option value="F">Feminino</option>
            </select>
            <label for="sexo">Sexo</label>
          </div>

          <div class="input-field col s5">
            <input id="nacionalidade" type="text">
            <label for="nacionalidade">Nacionalidade</label>
          </div>

          <div class="input-field col s5">
            <select id="estadoCivil">
              <option value="1" selected>Solteiro(a)</option>
              <option value="2">Casado(a)</option>
              <option value="3">Divorciado(a)</option>
              <option value="4">Viúvo(a)</option>
              <option value="5">Separado(a)</option>
              <option value="6">Companheiro(a)</option>
            </select>
            <label for="estadoCivil">Estado Civil</label>
          </div>

          <div class="dados-conjuge" style="display: none">
            <div class="input-field col s6">
              <input id="nomeConjuge" type="text" />
              <label for="nomeConjuge">Nome do Cônjuge</label>
            </div>

            <div class="input-field col s3">
              <input id="dataNascimentoConjuge" type="date" class="datepicker">
              <label for="nomeConjuge">Data de Nascimento Cônjuge</label>
            </div>
          </div>

          <div class="input-field col s6">
            <input id="nomeMae" type="text">
            <label for="nomeMae">Nome da mãe</label>
          </div>

          <div class="input-field col s6">
            <input id="nomePai" type="text">
            <label for="nomePai">Nome do Pai</label>
          </div>

          <div class="input-field col s6">
            <input id="email" type="email">
            <label for="email">E-mail</label>
          </div>
          <div class="input-field col s3">
            <input id="telFixo" class="telefone" pattern="^\([1-9]{2}\) [2-9][0-9]{3,4}\-[0-9]{4}$" type="tel">
            <label for="telFixo">Telefone fixo</label>

          </div>
          <div class="input-field col s3">
            <input id="telCelular" class="telefone" pattern="^\([1-9]{2}\) [2-9][0-9]{3,4}\-[0-9]{4}$" type="tel">
            <label for="telCelular">Telefone Celular</label>
          </div>

          <div class="input-field col s3">
            <input id="contraSenha" type="text">
            <label for="contraSenha">Contra-senha</label>
          </div>

          <div class="input-field col s3">
            <select name="categoria" id="categoria">
              <option value="1" selected>Focco</option>
              <option value="2">Vision</option>
              <option value="3">PF Premium</option>
            </select>
            <label for="categoria">Categoria Pessoa Física</label>
          </div>

          <div class="input-field col s3">
            <input id="ofertasPorEmail" type="checkbox" class="filled-in">
            <label for="ofertasPorEmail">Ofertas por email</label>
          </div>

          <div class="input-field col s3">
            <input id="infoWhatsapp" type="checkbox" class="filled-in">
            <label for="infoWhatsapp">Informações Whatsapp</label>
          </div>

          <div class="input-field col s12">
            <textarea id="observacoes" class="materialize-textarea" length="10"></textarea>
            <label for="observacoes">Observações</label>
          </div>

          <div class="section">

            <div class="input-field col s4">
              <input id="cep" type="text">
              <label for="cep">C.E.P.</label>
            </div>

            <div class="input-field col s12">
              <input id="endereco" type="text">
              <label for="endereco">C.E.P.</label>
            </div>

          </div>


          <div class="col s12">
            <input type="submit" value="Cadastrar" class="waves-effect waves-light btn bg-blue right" />
          </div>

        </div>
      </form>
    </div>

    <div id="div-pj" class="col s12">

    </div>
  </div>
</main>


<?php
include "../includes/footer.php";
?>

<script>

  $(document).ready(function() {
    $('ul.tabs').tabs();
    $('select').material_select();

    $('.datepicker').pickadate({
      labelMonthNext: 'Próximo',
      labelMonthPrev: 'Anterior',
      labelMonthSelect: 'Selecione um mês',
      labelYearSelect: 'Selecione um ano',
      monthsFull: [ 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro' ],
      monthsShort: [ 'Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez' ],
      weekdaysFull: [ 'Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado' ],
      weekdaysShort: [ 'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab' ],
      weekdaysLetter: [ 'D', 'S', 'T', 'Q', 'Q', 'S', 'S' ],
      today: 'Hoje',
      clear: 'Limpar',
      close: 'Fechar',
      selectMonths: true,
      selectYears: 200,
      format: 'dd-mm-yyyy'
    });

  });

  focco.adicionarClienteFormPost();

</script>