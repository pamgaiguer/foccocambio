<?php

include "../core/database.php";
include "../core/functions.php";
include "../includes/header.php";
?>
<main>
  <div class="section"></div>

  <div class="row">
    <div class="col s12">
      <a class="btn waves-effect waves-light bg-blue" href="/dashboard/clientes/"><i class="material-icons left">&#xE5C4;</i> Voltar para tela de Clientes</a>
    </div>
  </div>

  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#div-pf">Pessoa física</a></li>
        <li class="tab col s3"><a href="#div-pj">Pessoa jurídica</a></li>
      </ul>
    </div>

    <div id="div-pf" class="col s12">
      <form action="adicionarPost.php" method="POST" class="form-group form-adicionar-cliente" id="form-adicionar-cliente-pf" enctype="multipart/form-data">
        <div class="row">
          <div class="col s12">
            <div class="spacing"></div>
            <h5>Dados pessoais</h5>
          </div>

          <input id="tipoPessoa" name="tipoPessoa" type="hidden" value="F"/>

          <div class="row">
            <div class="input-field col s6">
              <input id="razaoSocial" name="razaoSocial" type="text" required />
              <label for="razaoSocial">Nome completo</label>
            </div>

            <div class="input-field col s6">
              <input id="dataNascimento" name="dataNascimento" type="text" pattern="\d{1,2}/\d{1,2}/\d{4}" class="datepicker" required>
              <label for="dataNascimento">Data de Nascimento</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s4">
              <input id="cpfCnpj" name="cpfCnpj" class="validate" type="text" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required  value="<?php if (isset($_GET['cpf'])) echo $_GET['cpf']; ?>"/>
              <label for="cpfCnpj" data-error="O CPF informado não é válido para cadastro.">C.P.F.</label>
              <div id="validacaoCpf"></div>
            </div>

            <div class="input-field col s4">
              <input id="rg" name="rg" type="text" required>
              <label for="rg">R.G.</label>
            </div>

            <div class="input-field col s2">
              <input id="rgOrgaoExpedidor" name="rgOrgaoExpedidor" type="text" required>
              <label for="rgOrgaoExpedidor">Orgão Expedidor</label>
            </div>

            <div class="input-field col s2">
              <input id="rgDataExpedicao" name="rgDataExpedicao" type="text" class="datepicker" pattern="\d{1,2}/\d{1,2}/\d{4}" required>
              <label for="rgDataExpedicao">Data de Expedição</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s3">
              <input id="cnh" name="cnh" type="text">
              <label for="cnh">C.N.H.</label>
            </div>
            <div class="input-field col s3">
              <input id="cnhDataValidade" name="cnhDataValidade" type="text" class="datepicker" pattern="\d{1,2}/\d{1,2}/\d{4}">
              <label for="cnhDataValidade">C.N.H. - Data de vencimento</label>
            </div>
            <div class="input-field col s3">
              <input id="numPassaporte" name="numPassaporte" type="text" >
              <label for="numPassaporte">Passaporte</label>
            </div>
            <div class="input-field col s3">
              <input id="rgDni" name="rgDni" type="text" >
              <label for="rgDni">R.G. / DNI</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s4">
              <select id="sexo" name="sexo" required>
                <option value="M" selected>Masculino</option>
                <option value="F">Feminino</option>
              </select>
              <label for="sexo">Sexo</label>
            </div>

            <div class="input-field col s4">
              <select id="estadoCivil" name="estadoCivil" required>
                <option value="0" selected>Não informado</option>
                <option value="1">Solteiro(a)</option>
                <option value="2">Casado(a)</option>
                <option value="3">Divorciado(a)</option>
                <option value="4">Viúvo(a)</option>
                <option value="6">Companheiro(a)</option>
              </select>
              <label for="estadoCivil">Estado Civil</label>
            </div>

            <div class="input-field col s4">
              <input id="nacionalidade" name="nacionalidade" type="text" required>
              <label for="nacionalidade">Nacionalidade</label>
            </div>

          </div>

          <div class="row">
            <div class="dados-conjuge" style="display: none">
              <div class="input-field col s6">
                <input id="nomeConjuge" name="nomeConjuge" type="text">
                <label for="nomeConjuge">Nome do Cônjuge</label>
              </div>

              <div class="input-field col s6">
                <input id="dataNascimentoConjuge" name="dataNascimentoConjuge" type="text" class="datepicker">
                <label for="dataNascimentoConjuge">Data de Nascimento Cônjuge</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <input id="nomeMae" name="nomeMae" type="text" required>
              <label for="nomeMae">Nome da mãe</label>
            </div>

            <div class="input-field col s6">
              <input id="nomePai" name="nomePai" type="text" required>
              <label for="nomePai">Nome do Pai</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <input id="email" name="email" type="email" class="validate" required>
              <label for="email" data-error="E-mail com formato inválido">E-mail</label>
            </div>
            <div class="input-field col s3">
              <input id="telFixo" name="telFixo" class="telefone" required type="tel">
              <label for="telFixo">Telefone fixo</label>

            </div>
            <div class="input-field col s3">
              <input id="telCelular" name="telCelular" class="telefone" required type="tel">
              <label for="telCelular">Telefone Celular</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s2">
              <input id="contraSenha" name="contraSenha" type="text">
              <label for="contraSenha">Contra-senha</label>
            </div>

            <div class="input-field col s2">
              <select name="categoria" required id="categoria">
                <option value="1" selected>Focco</option>
                <option value="2">FX53 Simplificado</option>
                <option value="3">FX53 Premier</option>
                <option value="4">FX53 Plus</option>
              </select>
              <label for="categoria">Categoria Pessoa Física</label>
            </div>

            <div class="input-field col s2">
              <select name="origem" required id="origem">
                <option value="1" selected>Matriz</option>
                <option value="2">Loja 1</option>
              </select>
              <label for="origem">Origem do Cliente</label>
            </div>

            <div class="input-field col s2">
              <input id="ofertasPorEmail" name="ofertasPorEmail" type="checkbox" class="filled-in">
              <label for="ofertasPorEmail">Ofertas por email</label>
            </div>

            <div class="input-field col s2">
              <input id="infoWhatsapp" name="infoWhatsapp" type="checkbox" class="filled-in">
              <label for="infoWhatsapp">Infos Whatsapp</label>
            </div>

            <div class="input-field col s2">
              <input id="vip" name="vip" type="checkbox" class="filled-in">
              <label for="vip">Vip Focco</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s2">
              <select id="ondeConheceuFocco" name="ondeConheceuFocco">
                <option value="1" selected>Indicação de Amigos</option>
                <option value="2">Google</option>
                <option value="3">Site comparador de taxas de câmbio</option>
                <option value="4">Outros</option>
              </select>
              <label for="ondeConheceuFocco">Onde Conheceu a Focco?</label>
            </div>

            <div class="ondeSoubeFocco" style="display: none">
              <div class="input-field col s2">
                <input id="ondeConheceuFoccoDesc" name="ondeConheceuFoccoDesc" type="text">
                <label for="ondeConheceuFoccoDesc">Onde ? </label>
              </div>
            </div>

            <div class="input-field col s4">
              <select id="bloqueado" name="bloqueado" required>
                <option value="0" selected>Ativo</option>
                <option value="1">Bloqueado</option>
              </select>
              <label for="bloqueado">Status</label>
            </div>

            <div class="motivoBlock" style="display: none">
              <div class="input-field col s4" >
                <select id="motivoStatusBlocked" name="motivoStatusBlocked">
                  <option value="0" selected></option>
                  <option value="1">Falta de documento</option>
                  <option value="2">Documento vencido</option>
                  <option value="3">Fraude</option>
                  <option value="4">Outros</option>
                </select>
                <label for="motivoStatusBlocked">Motivo Status Bloqueado</label>
              </div>
            </div>
          </div>

          <div class="motivoBlockDescricao" style="display: none">
            <div class="row">
              <div class="input-field col s12" >
                <textarea id="observacoes" name="observacoes" class="materialize-textarea" row="" length="120"></textarea>
                <label for="observacoes">Observações</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col s12">
              <h5>Documentos Obrigatórios</h5>
            </div>

            <div class="col s6 div-input-file-cpf">
              <div class="file-field input-field">
                <div class="btn bg-blue">
                  <span>CPF/RG/CNH</span>
                  <input type="file" id="input-file-cpf" name="input-file-cpf" accept=".png, .jpg, .jpeg">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>

            <!--<div class="col s6 div-input-file-rg">
              <div class="file-field input-field">
                <div class="btn bg-blue">
                  <span>RG</span>
                  <input type="file" id="input-file-rg" name="input-file-rg" accept=".png, .jpg, .jpeg">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>-->

            <div class="col s6 div-input-file-cr">
              <div class="file-field input-field">
                <div class="btn bg-blue">
                  <span>Comprovante Residência</span>
                  <input type="file" id="input-file-cr"
                  name="input-file-cr" title="Comprovante de residência" accept=".png, .jpg, .jpeg">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>

            <div class="col s6 div-input-file-ff" style="display: none;">
              <div class="file-field input-field">
                <div class="btn bg-blue">
                  <span>F. F.</span>
                  <input type="file" id="input-file-ff"
                  name="input-file-ff" title="Ficha cadastral focco" accept=".png, .jpg, .jpeg">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>

            <div class="col s6 div-input-file-ir" style="display: none;">
              <div class="file-field input-field">
                <div class="btn bg-blue">
                  <span>I. R.</span>
                  <input type="file" id="input-file-ir"
                  name="input-file-ir" title="Declaração do imposto de renda" accept=".png, .jpg, .jpeg">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>

            <div class="col s6 div-input-file-ca" style="display: none;">
              <div class="file-field input-field">
                <div class="btn bg-blue">
                  <span>C. A.</span>
                  <input type="file" id="input-file-ca"
                  name="input-file-ca" title="Cartão de assinatura" accept=".png, .jpg, .jpeg">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>

            <div class="col s6 div-input-file-cps" style="display: none;">
              <div class="file-field input-field">
                <div class="btn bg-blue">
                  <span>C. P. S.</span>
                  <input type="file" id="input-file-cps"
                  name="input-file-cps" title="Contrato de prestação de serviços" accept=".png, .jpg, .jpeg">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>

            <div class="col s6 div-input-file-pv" style="display: none;">
              <div class="file-field input-field">
                <div class="btn bg-blue">
                  <span>P. V.</span>
                  <input type="file" id="input-file-pv"
                  name="input-file-pv" title="Procuração para a Vision" accept=".png, .jpg, .jpeg">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>


          </div>

          <div class="row">
            <div class="col s12">
              <h5>Endereço Residencial</h5>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s3">
              <input id="cep-residencial" name="cep-residencial" type="text" placeholder=" " required>
              <label for="cep-residencial">CEP</label>
            </div>
            <div class="input-field col s9">
              <input id="logradouro-residencial" name="logradouro-residencial" type="text" placeholder=" " required>
              <label for="logradouro-residencial">Logradouro</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s4">
              <input id="numero-residencial" name="numero-residencial" type="text" placeholder=" " required>
              <label for="numero-residencial">Número</label>
            </div>
            <div class="input-field col s4">
              <input id="complemento-residencial" name="complemento-residencial" placeholder=" " type="text" >
              <label for="complemento-residencial">Complemento</label>
            </div>
            <div class="input-field col s4">
              <input id="bairro-residencial" name="bairro-residencial" type="text" placeholder=" " required>
              <label for="bairro-residencial">Bairro</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s4">
              <input id="cidade-residencial" name="cidade-residencial" type="text" placeholder=" " required>
              <label for="cidade-residencial">Cidade</label>
            </div>
            <div class="input-field col s4" >
              <input id="UF-residencial" name="UF-residencial" type="text" placeholder=" " required>
              <label for="UF-residencial">UF</label>
            </div>
            <div class="input-field col s4">
              <input id="pais-residencial" name="pais-residencial" type="text" placeholder=" " required>
              <label for="pais-residencial">País</label>
            </div>
          </div>

          <div class="row">
            <div class="col s12">
              <h5>Endereço para entrega</h5>
              <div class="spacing"></div>
              <div>
                <input type="checkbox" class="filled-in" id="filled-in-box">
                <label for="filled-in-box">Marque se o endereço de entrega é o mesmo que o residencial</label>
              </div>
            </div>
          </div>

          <div class="spacing"></div>
          <div id="div-endereco-entrega">

            <div class="row">
              <div class="input-field col s3">
                <input id="cep-entrega" name="cep-entrega" placeholder=" " type="text">
                <label for="cep-entrega">CEP</label>
              </div>
              <div class="input-field col s9">
                <input id="logradouro-entrega" name="logradouro-entrega" placeholder=" " type="text">
                <label for="logradouro-entrega">Logradouro</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s4">
                <input id="numero-entrega" name="numero-entrega" placeholder=" " type="text">
                <label for="numero-entrega">Número</label>
              </div>
              <div class="input-field col s4">
                <input id="complemento-entrega" name="complemento-entrega" placeholder=" " type="text">
                <label for="complemento-entrega">Complemento</label>
              </div>
              <div class="input-field col s4">
                <input id="bairro-entrega" name="bairro-entrega" placeholder=" " type="text">
                <label for="bairro-entrega">Bairro</label>
              </div>
            </div>


            <div class="row">
              <div class="input-field col s4">
                <input id="cidade-entrega" name="cidade-entrega" placeholder=" " type="text">
                <label for="cidade-entrega">Cidade</label>
              </div>
              <div class="input-field col s4">
                <input id="UF-entrega" name="UF-entrega" placeholder=" " type="text">
                <label for="UF-entrega">UF</label>
              </div>
              <div class="input-field col s4">
                <input id="pais-entrega" name="pais-entrega" placeholder=" " type="text">
                <label for="pais-entrega">País</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col s12">
              <h5>Limites Operacionais </h5>
            </div>
          </div>

          <div class="row">
            <div class="col s12">
              <table class="responsive-table">
                <thead>
                  <tr>
                    <!--<th>Limite aprovado diário (USD)</th>-->
                    <th>Limite aprovado anual (USD)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <!--<td>
                      <input id="limiteOperacionalDia" name="limiteOperacionalDia" readonly="true"  value="3000,00" type="text">
                    </td>-->
                    <td>
                      <input id="limiteOperacionalAno" name="limiteOperacionalAno" readonly="true"  value="13000,00" type="text">
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="col s12">
            <input type="submit" id="input-submit" value="Cadastrar" class="waves-effect waves-light btn bg-blue right" />
            <a href="#" class="waves-effect waves-light btn bg-blue right">Boletar</a>
          </div>
        </div>
      </form>
    </div>

    <div id="div-pj" class="col s12">
      <form action="#">
        <div class="row">
          <div class="col s12">
            <div class="spacing"></div>
            <h5>Dados da empresa</h5>
          </div>
        </div>

        <div class="dadosEmpresariais">
          <div class="row">
            <div class="input-field col s6">
              <input id="razaoSocial" name="razaoSocial" type="text" required />
              <label for="razaoSocial">Razão Social</label>
            </div>

            <div class="input-field col s6">
              <input id="nomeFantasia" name="nomeFantasia" type="text" required />
              <label for="nomeFantasia">Nome Fantasia</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s4">
              <input id="numCNPJ" name="numCNPJ" pattern="([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})" type="text" required>
              <label for="numCNPJ">CNPJ</label>
            </div>

            <div class="input-field col s4">
              <input id="numTelComercial" name="numTelComercial" type="text" required>
              <label for="numTelComercial">Telefone Comercial</label>
            </div>

            <div class="input-field col s2">
              <input id="nire" name="nire" type="text" required>
              <label for="nire">NIRE</label>
            </div>

            <div class="input-field col s2">
              <input id="dataConstituicao" name="dataConstituicao" type="text" class="datepicker" required>
              <label for="dataConstituicao">Data de Constituição</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="princAtvRemun" name="princAtvRemun" type="text" required>
              <label for="princAtvRemun">Principal Atividade Remunerada </label>
            </div>

            <div class="input-field col s3">
              <input id="fatMedioMes" name="fatMedioMes" type="text" required>
              <label for="fatMedioMes">Faturamento médio / mês </label>
            </div>

            <div class="input-field col s3">
              <input id="capSocial" name="capSocial" type="text" class="datepicker" required>
              <label for="capSocial">Capital Social</label>
            </div>
          </div>
        </div>

        <div class="pessoasExpostasPoliticamente">
          <div class="row">
            <div class="col s12">
              <h5>Pessoas expostas Politicamente</h5>
              <em>
                Pessoa Exposta Politicamente: Possui sócios, administradores, representantes ou relacionamento com Pessoas Expostas Politicamente, na forma do Art. 4 da
                Circular n 3461, de 24/07/2009 do Banco Central do Brasil?
              </em>
            </div>
          </div>

          <div class="row">
            <div class="col s12">
              <input name="sociosPoliticosInfo" type="radio" id="socioPoliticoSim" />
              <label for="socioPoliticoSim">Sim</label>
              <input name="sociosPoliticosInfo" type="radio" id="socioPoliticoNao" />
              <label for="socioPoliticoNao">Não</label>
            </div>
          </div>
          <?php include 'pj_socios_politicos.php' ?>
        </div>

        <div class="dadosSociosAdmin">
          <div class="row">
            <div class="col s12">
              <h5>Sócios / Controladores / Administradores</h5>
            </div>
          </div>
          <?php include 'pj_socios_administradores.php' ?>
        </div>

        <div class="enderecoComercial">
          <div class="row">
            <div class="col s12">
              <h5>Endereço Comercial</h5>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s3">
              <input id="cep-comercial" name="cep-comercial" type="text" placeholder=" " required>
              <label for="cep-comercial">CEP</label>
            </div>
            <div class="input-field col s9">
              <input id="logradouro-comercial" name="logradouro-comercial" type="text" placeholder=" " required>
              <label for="logradouro-comercial">Logradouro</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s4">
              <input id="numero-comercial" name="numero-comercial" type="text" placeholder=" " required>
              <label for="numero-comercial">Número</label>
            </div>
            <div class="input-field col s4">
              <input id="complemento-comercial" name="complemento-comercial" placeholder=" " type="text" >
              <label for="complemento-comercial">Complemento</label>
            </div>
            <div class="input-field col s4">
              <input id="bairro-comercial" name="bairro-comercial" type="text" placeholder=" " required>
              <label for="bairro-comercial">Bairro</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s4">
              <input id="cidade-comercial" name="cidade-comercial" type="text" placeholder=" " required>
              <label for="cidade-comercial">Cidade</label>
            </div>
            <div class="input-field col s4" >
              <input id="UF-comercial" name="UF-comercial" type="text" placeholder=" " required>
              <label for="UF-comercial">UF</label>
            </div>
            <div class="input-field col s4">
              <input id="pais-comercial" name="pais-comercial" type="text" placeholder=" " required>
              <label for="pais-comercial">País</label>
            </div>
          </div>
        </div>

        <div class="infosTransacionais">
          <div class="row">
            <div class="col s12">
              <h5>Informações transacionais</h5>
            </div>
          </div>

          <div class="row">
            <div class="col s12">
              <p>Autoriza transmissão de ordens por Procuradores a Vision?</p>
              <input name="autorizacaoProcuradores" type="radio" id="autorizaSim" />
              <label for="autorizaSim">Sim</label>

              <input name="autorizacaoProcuradores" type="radio" id="autorizaNao" />
              <label for="autorizaNao">Não</label>
            </div>
          </div>

          <div class="row">
            <div class="col s12">
              <p>Poderes Outorgados a Vision Câmbio</p>
              <div>
                <input class="filled-in" type="checkbox" id="liqOpCambio" />
                <label for="liqOpCambio">Liquidar operações de câmbio</label>
              </div>
              <div>
                <input class="filled-in" type="checkbox" id="assinarContratoCambio" />
                <label for="assinarContratoCambio">Assinar contratos de câmbio</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col s12">
              <p>Indique as principais finalidades para início e manutenção de relacionamento com a Vision Câmbio</p>
              <div>
                <input class="filled-in" type="checkbox" id="finalCambioTurismo" />
                <label for="finalCambioTurismo"><strong>Câmbio Turismo</strong>: compra e venda de moeda estrangeira em espécie e/ou cartões pré-pagos para uso proóprio e/ou terceiros (ex.: funcionários).</label>
              </div>
              <div>
                <input class="filled-in" type="checkbox" id="remessaRecebimento" />
                <label for="remessaRecebimento"><strong>Remessas Financeiras ou Recebimento de Recursos do Exterior</strong>: realização de compra e venda de moeda estrangeira para remessas para/do exterior.</label>
              </div>
            </div>
          </div>
        </div>

        <div class="contasBancariasPJ">
          <div class="row">
            <div class="col s12">
              <h5>Contas Bancárias</h5>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s3">
              <input id="banco1" name="banco1" type="text" required>
              <label for="banco1">Banco</label>
            </div>

            <div class="input-field col s2">
              <input id="agencia1" name="agencia1" type="text" required>
              <label for="agencia1">Agência</label>
            </div>

            <div class="input-field col s2">
              <input id="cc1" name="cc1" type="text" required>
              <label for="cc1">Conta Corrente</label>
            </div>

            <div class="input-field col s3">
              <input id="gerente1" name="gerente1" type="text" required>
              <label for="gerente1">Gerente</label>
            </div>

            <div class="input-field col s2">
              <input id="telefone1" name="telefone1" type="text" required>
              <label for="telefone1">Telefone</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s3">
              <input id="banco1" name="banco1" type="text" required>
              <label for="banco1">Banco</label>
            </div>

            <div class="input-field col s2">
              <input id="agencia1" name="agencia1" type="text" required>
              <label for="agencia1">Agência</label>
            </div>

            <div class="input-field col s2">
              <input id="cc1" name="cc1" type="text" required>
              <label for="cc1">Conta Corrente</label>
            </div>

            <div class="input-field col s3">
              <input id="gerente1" name="gerente1" type="text" required>
              <label for="gerente1">Gerente</label>
            </div>

            <div class="input-field col s2">
              <input id="telefone1" name="telefone1" type="text" required>
              <label for="telefone1">Telefone</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s3">
              <input id="banco1" name="banco1" type="text" required>
              <label for="banco1">Banco</label>
            </div>

            <div class="input-field col s2">
              <input id="agencia1" name="agencia1" type="text" required>
              <label for="agencia1">Agência</label>
            </div>

            <div class="input-field col s2">
              <input id="cc1" name="cc1" type="text" required>
              <label for="cc1">Conta Corrente</label>
            </div>

            <div class="input-field col s3">
              <input id="gerente1" name="gerente1" type="text" required>
              <label for="gerente1">Gerente</label>
            </div>

            <div class="input-field col s2">
              <input id="telefone1" name="telefone1" type="text" required>
              <label for="telefone1">Telefone</label>
            </div>
          </div>

        </div>

        <div class="col s12">
          <input type="submit" id="input-submit" value="Cadastrar" class="waves-effect waves-light btn bg-blue right" />
        </div>

      </form>
    </div>



  </div>
</main>

<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4>Adicionar cliente</h4>
    <p>Deseja adicionar o cliente?</p>
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

<?php
include "../includes/footer.php";
?>

<script>
  focco.adicionarClienteFormPost();
</script>