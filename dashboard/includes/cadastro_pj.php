    <div id="div-pj" class="col s12">
      <form action="#">
        <div class="row">
          <div class="col s12">
            <div class="spacing"></div>
            <h5>Dados da empresa</h5>
            <div class="spacing"></div>
            <ul class="black-text">
              <li>No campo Principal Atividade remunerada, colocar essa lista de atividades: <a target="_blank" href="http://www.portaldoempreendedor.gov.br/legislacao/resolucoes/arquivos/ANEXO_XIII.pdf">Tabela</a> </li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
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
              <input id="dataConstituicao" name="dataConstituicao" type="date" class="datepicker" required>
              <label for="dataConstituicao">Data de Constituição</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <select id="sexo" name="sexo">
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
              </select>
              <label for="sexo">Principal atividade desenvolvida</label>
            </div>

            <div class="input-field col s3">
              <input id="fatMedioMes" name="fatMedioMes" type="text" required>
              <label for="fatMedioMes">Faturamento médio / mês </label>
            </div>

            <div class="input-field col s3">
              <input id="capSocial" name="capSocial" type="date" class="datepicker" required>
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

        </div>


      </form>
    </div>