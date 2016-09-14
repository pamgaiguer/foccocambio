<?php include '_header_cadastro.php';?>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="spacing"></div>
      <div class="spacing"></div>
      <h3>Dados Pessoais</h3>
      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>

      <div  id="formulario">
        <div id="retornoHTML">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <div class="form-group">
                <label for="nome">Nome completo</label>
                <input type="text" class="form-control" id="nome">
              </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <div class="form-group">
                <label for="dataNascimento">Data Nascimento</label>
                <input type="text" class="form-control" id="dataNascimento">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="form-group">
                <label for="cpf">C.P.F.</label>
                <input type="text" class="form-control" id="cpf">
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="form-group">
                <label for="rg">R.G.</label>
                <input type="text" class="form-control" id="rg">
              </div>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
              <div class="form-group">
                <label for="rgOrgaoExpedidor">Orgão expedidor</label>
                <input type="text" class="form-control" id="rgOrgaoExpedidor">
              </div>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
              <div class="form-group">
                <label for="rgDataExpedicao">Data da Expedição</label>
                <input type="text" class="form-control" id="rgDataExpedicao">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="form-group">
                <label for="genero">Sexo</label>
                <select name="genero" id="genero" class="form-control">
                  <option value="M" selected>Masculino</option>
                  <option value="F">Feminino</option>
                </select>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="form-group">
                <label for="estadoCivil">Estado Civil</label>
                <select name="estadoCivil" id="estadoCivil" class="form-control">
                  <option value="0" selected>Não informado</option>
                  <option value="1">Solteiro(a)</option>
                  <option value="2">Casado(a)</option>
                  <option value="3">Divorciado(a)</option>
                  <option value="4">Viúvo(a)</option>
                  <option value="6">Companheiro(a)</option>
                </select>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="form-group">
                <label for="nacionalidade">Nacionalidade</label>
                <input type="text" class="form-control" id="nacionalidade">
              </div>
            </div>
          </div>

          <div class="row dados-conjunge">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <div class="form-group">
                <label for="nomeConjuge">Nome do Cônjunge</label>
                <input type="text" class="form-control" id="nomeConjuge">
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <div class="form-group">
                <label for="dataNascimentoConjuge">Nome do Cônjunge</label>
                <input type="text" class="form-control" id="dataNascimentoConjuge">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <div class="form-group">
                <label for="nomeMae">Nome da Mãe</label>
                <input type="text" class="form-control" id="nomeMae">
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <div class="form-group">
                <label for="nomePai">Nome do Pai</label>
                <input type="text" class="form-control" id="nomePai">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email">
              </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <div class="form-group">
                <label for="telefoneFixo">Telefone Fixo</label>
                <input type="text" class="form-control" id="telefoneFixo">
              </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <div class="form-group">
                <label for="telefoneCelular">Telefone Celular</label>
                <input type="text" class="form-control" id="telefoneCelular">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="form-group">
                <label for="ondeConheceuFocco">Onde conheceu a Focco?</label>
                <select name="ondeConheceuFocco" id="ondeConheceuFocco" class="form-control">
                  <option value="1" selected>Indicação de Amigos</option>
                  <option value="2">Google</option>
                  <option value="3">Site comparador de taxas de câmbio</option>
                  <option value="4">Outros</option>
                </select>
              </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <div class="checkbox">
                <label>
                  <br>
                  <input type="checkbox" id="ofertasEmail">
                  Receber ofertas por e-mail
                </label>
              </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <div class="checkbox">
                <label>
                  <br>
                  <input type="checkbox" id="ofertasWhatsapp">
                  Receber ofertas por WhatsApp
                </label>
              </div>
            </div>
          </div>
          <hr>

          <h3>Endereço Residencial</h3>
          <div class="spacing"></div>
          <div class="spacing"></div>
          <div class="spacing"></div>

          <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <div class="form-group">
                <label for="CEP">CEP</label>
                <input type="text" class="form-control" id="CEP">
              </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
              <div class="form-group">
                <label for="logradouro">Logradouro</label>
                <input type="text" class="form-control" id="logradouro">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="form-group">
              <label for="numero">Número</label>
                <input type="text" class="form-control" id="numero">
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="form-group">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control" id="complemento">
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="form-group">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="form-group">
              <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade">
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" id="estado">
              </div>
            </div>
          </div>

          <hr>

          <h3>Endereço para Entrega</h3>
          <div class="spacing"></div>
          <div class="spacing"></div>
          <div class="spacing"></div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="checkbox">
                <label for="checkEndereco">
                  <input type="checkbox">
                  Marque se o endereço de entrega é o mesmo que o residencial
                </label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <div class="form-group">
                <label for="CEP">CEP</label>
                <input type="text" class="form-control" id="CEP">
              </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
              <div class="form-group">
                <label for="logradouro">Logradouro</label>
                <input type="text" class="form-control" id="logradouro">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="form-group">
              <label for="numero">Número</label>
                <input type="text" class="form-control" id="numero">
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="form-group">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control" id="complemento">
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="form-group">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="form-group">
              <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade">
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" id="estado">
              </div>
            </div>
          </div>

          <div class="form-group">
          <label for="observacoes">Observações</label>
            <textarea cols="20" rows="10" id="observacoes" class="form-control"></textarea>
          </div>

          <div class="form-group">
            <button class="btn btn-default btn-primary btn-block" id="btn">ENVIAR</button>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>